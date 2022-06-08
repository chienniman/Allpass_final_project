<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\Meal;
use App\Http\Controllers\FilesController;
use App\Models\Meal_tag;
use App\Models\History;
use Carbon\Carbon;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::get();
        $tags = Meal_tag::get();
        return view('meal.index', compact('meals', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meal_tags = Meal_tag::get();

        return view('meal.create', compact('meal_tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 圖片路徑
        $path = FilesController::imgUpload($request->img, 'meal');

        // 上傳餐點資料
        Meal::insert([
            "meal_name"=> $request->name,
            "tag"=> $request->tag,
            "price"=> $request->price,
            "img_path"=> $path,
            'note'=> $request->note,
            'second_note'=> $request->secondNote,
        ]);
        // 新增餐點歷史
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已新增餐點-'.$request->name,
        ]);

        return redirect('/meal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Meal::where('id', $id)->update([
            'meal_name'=> $request->mealName,
            'tag'=> $request->mealTag,
            'price'=> $request->mealPrice,
            'note'=> $request->mealNote,
            'second_note'=> $request->mealSecondNote,
        ]);
        // 編輯餐點歷史
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已編輯餐點-'.$request->mealName,
        ]);

        return response()->json([
            'status'=>200,
            'message'=> '圖片檔新增成功',
        ]);

        // fetch 寫法
        // // 防呆: 防止表單資料未填-------------------------
        // if($request->meal_name == "" || $request->meal_tag == "" || $request->meal_price == ""){
        //     $result = [
        //         'result' => 'error',
        //         'message' => '請確認餐點資訊都已填入',
        //     ];

        // // 如果維持原圖片，不上傳新圖-----------------------------
        // }elseif ($request->meal_New_img == "") {
        //     // 修改餐點詳情
        //     Meal::where('id', $id)->update([
        //         'meal_name'=> $request->meal_name,
        //         'tag'=> $request->meal_tag,
        //         'price'=> $request->meal_price,
        //     ]);
        //     // 修改成功結果
        //     $result = [
        //         'result' => 'success',
        //     ];

        // // 表單資料都已填入----------------------------------------
        // }else {
        //     // 修改餐點詳情
        //     Meal::where('id', $id)->update([
        //         'meal_name'=> $request->meal_name,
        //         'tag'=> $request->meal_tag,
        //         'price'=> $request->meal_price,
        //         'img_path'=> $request->meal_img,
        //     ]);
        //     // 修改成功結果
        //     $result = [
        //         'result' => 'success',
        //     ];
        // }

        // // 回傳結果
        // return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // 刪除後端圖檔
        $meal = Meal::find($id);
        FilesController::deleteUpload($meal->img_path);
        // 刪除餐點歷史
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已刪除餐點-'.$meal->meal_name,
        ]);

        // 刪除資料庫資料
        Meal::where('id', $id)->delete();

        return redirect('/meal');
    }

    // -------------------------------------- 餐點類別 --------------------------------------------
    // 新增類別
    public function store_tag(Request $request){

        // 將餐點類別存入資料庫，並防止空值誤傳
        if ( $request->tag0 != ''  ) {
            Meal_tag::insert([
                'tag'=> $request->tag0
            ]);
        }
        if ( $request->tag1 != ''  ) {
            Meal_tag::insert([
                'tag'=> $request->tag1
            ]);
        }
        if ( $request->tag2 != ''  ) {
            Meal_tag::insert([
                'tag'=> $request->tag2
            ]);
        }
        if ( $request->tag3 != ''  ) {
            Meal_tag::insert([
                'tag'=> $request->tag3
            ]);
        }
        if ( $request->tag4 != ''  ) {
            Meal_tag::insert([
                'tag'=> $request->tag4
            ]);
        }

        

        $storeTagResult = [
            'result'=> 'success'
        ];
        return $storeTagResult;
    }

    // 刪除類別
    public function delete_tag($id){

        //  使用關聯選擇到要刪除的類別底下的餐點
        $meals = Meal_tag::find($id)->meal;

        // 刪除餐點的圖檔與資料
        foreach ($meals as $key => $meal) {
            FilesController::deleteUpload($meal->img_path);
            Meal::where('id', $meal->id)->delete();
        }

        // 刪除類別歷史
        $mealTag = Meal_tag::find($id);
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已刪除類別-'.$mealTag->tag,
        ]);

        // 最後再刪除類別
        Meal_tag::find($id)->delete();

        return redirect('/meal/create');

    }


}



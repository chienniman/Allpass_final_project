<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\New;
use App\Http\Controllers\FilesController;
use App\Models\History;
use DB;
use Carbon\Carbon;


class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')->get();

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = FilesController::imgUpload($request->img, 'new');

        DB::table('news')->insert([
            'title'=> $request-> title,
            'img_path'=> $path,
            'start_date'=> $request-> startDate,
            'end_date'=> $request-> endDate,
            'weight'=> $request-> weight,
        ]);

        return redirect('/new');
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
        //
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
        DB::table('news')->where('id', $id)->update([
            'title'=> $request->title,
            'start_date'=> $request->startDate,
            'end_date'=> $request->endDate,
            'weight'=> $request->weight,
        ]);

        // 編輯消息歷史
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已編輯一筆消息',
        ]);
        
        $result = [
            'result' => 'success',
        ];
        return $result; 
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
        $new = DB::table('news')->find($id);
        FilesController::deleteUpload($new->img_path);
        // 刪除餐點歷史
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已刪除一則消息'
        ]);

        // 刪除資料庫資料
        DB::table('news')->where('id', $id)->delete();

        return redirect('/new');
    }
}

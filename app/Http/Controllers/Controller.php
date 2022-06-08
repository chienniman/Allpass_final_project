<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Feedback;
use App\Models\Meal_tag;
use App\Models\History;
use App\Models\Meal;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 飲品介紹
    public function drink_list(){

        return view('drink_list');
    }

    // 餐點介紹
    public function mealsindex(){

        return view('mealsindex');
    }

    // 門市據點
    public function position_map(){

        return view('position_map');
    }

    // 顧客權益
    public function right_of_customer(){

        return view('right_of_customer');
    }

    // 品牌故事
    public function story(){

        return view('story');
    }


    // 顧客留言頁面
    public function feedback(){
        $feedbacks = Feedback::get();

        return view('feedback' , compact('feedbacks'));
    }

    // 新增留言
    public function add_feedback(Request $request){
        // 儲存留言
        Feedback::insert([
            'name'=> $request->name,
            'salutation' => $request->salutation,
            'date' => $request->date,
            'period' => $request->period,
            'suggestion' => $request->suggestion,
            'phone'=> $request->phone,
            'email'=> $request->email,
        ]);

        $result = [
            'result' => 'success',
        ];
        // 返回結果
        return $result;
    }

    // 餐點頁面
    public function meal(){
        $meal = Meal::get();
        $mealTag = Meal_tag::get();

        $breakfast = $mealTag[1]->meal->take(3); 
        $salad = $mealTag[2]->meal->take(3);
        $snake = $mealTag[3]->meal->take(3);
        
        return view('meal', compact('mealTag', 'breakfast', 'salad', 'snake'));

    }

    // swiper
    public function swiper(){
        $allFeedbacks = Feedback::get();

        // 對留言依權重由小到大排序，包含空值
        $sorted = $allFeedbacks->sortBy('weight');
        // 將權重給key值，再過濾掉空值與0的key
        $keyed = $sorted->keyBy('weight');
        $carouselFeedbacks = $keyed->forget('');
        $carouselFeedbacks = $keyed->forget('0');

        return view('swiper', compact("carouselFeedbacks"));
    }



    // :::::::::::::::::::::::::::::::::::::::::: 後台 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    // 後臺主頁
    public function dashboard(){

        $histories = History::orderBy('id', 'desc')->get();
        return view('backend.main', compact('histories'));
    }

    // 刪除歷史紀錄
    public function delete_history($id){

        History::where('id', $id)->delete();

        return redirect('/dashboard');
    }
}

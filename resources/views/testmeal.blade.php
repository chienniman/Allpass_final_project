<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center">
        <button id="allBtn" type="button" class="btn btn-success">全部餐點</button>
        <button id="breakfastBtn" type="button" class="btn btn-success">精選早餐/附飲品</button>
        <button id="saladBtn" type="button" class="btn btn-danger">沙拉/附飲品</button>
        <button id="afternoonTeaBtn" type="button" class="btn btn-warning">精選下午茶/附飲品</button>
    </div>
    
    <div class="cardBox d-flex justify-content-center">
        {{-- 點擊上面按鈕，js 丟不同餐點類別卡片近來 --}}

        {{-- 這個是點進餐點頁面預先看到的畫面 --}}
        @foreach ($mealTag[1]->meal as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                <div class="card-body ">
                <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                <h5 class="card-title text-center">{{ $item->note }}</h5>
                <p class="text-center">{{ '$'.$item->price }}</p>
                </div>
            </div>
        @endforeach
        @foreach ($salad as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                <div class="card-body ">
                <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                <h5 class="card-title text-center">{{ $item->note }}</h5> 
                <p class="text-center">{{ '$'.$item->price }}</p>
                </div>
            </div>
         @endforeach
        @foreach ($snake as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                <div class="card-body ">
                <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                <h5 class="card-title text-center">{{ $item->note }}</h5>
                <p class="text-center">{{ '$'.$item->price }}</p>
                </div>
            </div>
        @endforeach
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        const cardBox = document.querySelector('.cardBox');
        const allBtn = document.querySelector('#allBtn');
        const breakfastBtn = document.querySelector('#breakfastBtn');
        const saladBtn = document.querySelector('#saladBtn');
        const afternoonTeaBtn = document.querySelector('#afternoonTeaBtn');

         // 全部
         allBtn.onclick = ()=>{
            cardBox.innerHTML = '';
            cardBox.innerHTML = `@foreach ($breakfast as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                 
                                @foreach ($salad as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            
                                @foreach ($snake as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                `                                  
        }

        // 早餐
        breakfastBtn.onclick = ()=>{
            cardBox.innerHTML = '';
            cardBox.innerHTML = 
            //                    `@foreach ($mealTag[1]->meal as $item)
            //                         <div class="card" style="width: 18rem;">
            //                             <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
            //                             <div class="card-body ">
            //                             <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
            //                             <h5 class="card-title text-center">{{ $item->note }}</h5>
            //                             <p class="text-center">{{ '$'.$item->price }}</p>
            //                             </div>
            //                         </div>
            //                     @endforeach
            //                     ` 
                                `@foreach ($breakfast as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                `                                          
        }

        // 沙拉
        saladBtn.onclick = ()=>{
            cardBox.innerHTML = '';
            cardBox.innerHTML = 
                                // `@foreach ($mealTag[2]->meal as $item)
                                //     <div class="card" style="width: 18rem;">
                                //         <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                //         <div class="card-body ">
                                //         <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                //         <h5 class="card-title text-center">{{ $item->note }}</h5>
                                //         <p class="text-center">{{ '$'.$item->price }}</p>
                                //         </div>
                                //     </div>
                                // @endforeach
                                // ` 
                                `@foreach ($salad as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                `                                    
        }

        // 下午茶
        afternoonTeaBtn.onclick = ()=>{
            cardBox.innerHTML = '';
            cardBox.innerHTML = 
                                // `@foreach ($mealTag[4]->meal as $item)
                                //     <div class="card" style="width: 18rem;">
                                //         <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                //         <div class="card-body ">
                                //         <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                //         <h5 class="card-title text-center">{{ $item->note }}</h5>
                                //         <p class="text-center">{{ '$'.$item->price }}</p>
                                //         </div>
                                //     </div>
                                // @endforeach
                                // `  
                                `@foreach ($snake as $item)
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                                        <div class="card-body ">
                                        <h3 class="card-title text-center">{{ $item->meal_name }}</h3>
                                        <h5 class="card-title text-center">{{ $item->note }}</h5>
                                        <p class="text-center">{{ '$'.$item->price }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                `                                  
        }
    </script>


</body>
</html>


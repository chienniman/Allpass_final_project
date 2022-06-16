<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- 網頁小圖標icon --}}
    <link href="{{asset('/pics/logo.png')}}" rel="shortcut icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: border-box;
            border: 0;
            padding: 0;
        }

        body {
            display: flex;
        }

        p,
        h1,
        h2,
        h3,
        ul,
        li {
            border: 0;
            padding: 0;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        a {
            text-decoration: none;
        }

        header {
            width: 18%;
            min-width: 133px;
            max-width: 280px;
            height: auto;
            background-color: #4D44B5;
            padding: 40px 0 0 0;
            border: 2px solid #4D44B5;
        }

        nav {
            width: 100%;
        }

        .iconBox {
            margin: 0 0 0 45px;
        }

        .icon {
            height: 75px;
            width: 75px;
            border-radius: 50%;
        }

        .allpassTitle {
            color: #ffffff;
            font-size: 30px;
            font-weight: bold;
        }

        .navList {
            /* background-color: #F3F4FF; */
            border-top-left-radius: 31px;
            border-bottom-left-radius: 31px;
            margin: 0 0 0 45px;
        }

        .navList_span {
            font-size: 18px;
            color: #F3F4FF;
            font-weight: 500;
            margin: 0 0 0 5px;
        }

        .fa-house,
        .fa-user {
            font-size: 24px;
            color: #F3F4FF;
        }

        .navList:hover {
            background-color: #F3F4FF;
        }

        .navList:hover span {
            color: #4D44B5;
        }

        .navList:hover i {
            color: #4D44B5;
        }

        main {
            /* width: 1575px; */
            width: 100%;
            height: auto;
            min-height: 100vh;
            background-color: #F3F4FF;
            padding: 0 0 45px 0;
        }

        .main_hander {
            padding: 45px 40px 0 45px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #303972;
        }

        .loginOutBtn {
            color: #ffffff;
            background-color: #FB7D5B;
            border-radius: 25px;
            font-size: 18px;
        }

        .avatar {
            background-color: #C1BBEB;
            width: 60px;
            height: 60px;
        }

        @media (max-width: 1660px) {
            .allpassTitle {
                display: none !important;
            }

            .iconBox {
                margin: 0;
                width: 100%;
                display: flex;
                justify-content: center;
            }
        }

        @media (max-width: 1520px) {
            .navList {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 0 0 0 0;
                padding-left: 0 !important;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                border-radius: 8px;
            }

        }

        @media (max-width: 1370px) {

            .fa-house,
            .fa-user {
                font-size: 25px;
            }

            .navList_span {
                display: none;
            }
        }

        @media (max-width: 1200px) {

            .fa-house,
            .fa-user {
                font-size: 25px;
            }

            .icon {
                height: 60px;
                width: 60px;
            }
        }

        @media (max-width: 900px) {
            body {
                display: block !important;
            }

            header {
                width: 100%;
                max-width: none;
                height: auto;
                padding: 10px 30px 10px 30px;
                border: 0;
            }

            nav {
                display: flex;
            }

            .navBox {
                display: flex;
                padding-top: 0 !important;
                margin-left: auto;
            }

            .iconBox {
                width: auto;
                display: flex;
                align-items: center;
            }

            .icon {
                height: 50px;
                width: 50px;
            }

            .navList {
                margin: 0 10px;
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
                border-radius: 10px;
            }

            main {
                width: auto;
            }

            .main_hander {
                padding: 30px 30px 0 30px;
            }
        }

        /* 隱藏 checkbox */
        .checkbox {
            display: none;
        }

        .burgerLinkBox {
            display: none;
        }

        .burgerLinkLabel {
            padding: 8px 0 0 8px;
            cursor: pointer;
        }

        .burgerLinkLabel i {
            font-size: 30px;
            color: #F3F4FF;
            /* vertical-align: middle; */
        }

        .menu {
            /* clear: both; */
            position: absolute;
            z-index: 999;
            z-index: 999;
            width: 100%;
            top: 70px;
            left: 0;
            right: 0;
            background: #ffffff;
        }

        .menu li {
            text-align: center;
            border-bottom: 1px solid #efefef;
        }

        .menu li a {
            display: block;
            line-height: 50px;
            font-size: 18px;
            color: #303972;
            font-weight: bold;
        }

        .menu li a i {
            color: #303972;
        }

        .menu li a:hover {
            background: #9e99b9b4;
            color: #fff;
        }

        /* 下拉選單效果 */
        .menu {
            max-height: 0;
            overflow: hidden;
            transition: .2s;
            /* 動畫秒數 */
        }

        .checkbox:checked~.menu {
            max-height: 300px;
        }

        @media (max-width: 768px) {
            .navList {
                display: none;
            }

            .loginOutBtn {
                display: none;
            }

            .goFrontEndBtn {
                display: none;
            }

            .burgerLinkBox {
                display: block;
                padding: 0 20px 0 0;
            }
        }

        /* main 從這開始 */

        /* 主要功能 */
        .main_content{
            display: flex;
            padding: 0 45px 0 45px;
        }
        /* history */
        .topping{
            background-color: #4D44B5;
            font-size: 24px;
            color: white;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;

        }
        .historyBox{
            position: relative;
        }
        .historyContent{
           min-height: 560px;
           background-color: #d0c8ff34;
           border: 1px solid #4d44b528;
        }
        .historyList{
            width: 100%;
            padding: 0.8rem 0 0 0;
        }

        .middlesize{
           font-size: 18px;
           color: #3f3f3f;
        }
        .historyBox{

            padding: 0 15px 0 15px;
        }
        @media (max-width: 1200px) {
            .inputWidth{
                width: 100%!important;
            }
            .historyBox{
                width: 100%!important;
            }
            .historyBox{
                padding: 0;
            }
            .main_content{
                display: block;
            }
        }

        @media (max-width: 900px) {
            .mealTagBox{
                width: 100%!important;
            }
        }
        @media (max-width: 768px) {
            .main_content{
                padding: 0 20px 0 20px;
            }
        }

        /* 頭像設定帳密 */
        .avatarBox{
            position: relative;
            cursor: pointer;
        }
        .avatarBox ul{
            position: absolute;
            z-index: 999;
            transform: translate(-11.5%, 11%);
            display: none;
        }
        .avatarBox:hover ul{
            display: block;
        }
        /* 視窗的角 */
        .avatarBox > ul:before{
            content: '';
            display: block;
            position: absolute;
            z-index: 99;
            height: 20px;
            width: 20px;
            top: 4px;
            left: 20px;
            background-color: #ffffff;
            transform: rotate(45deg);
            box-shadow: 1px 1px 5px #0000003a;
        }
        /* 用來 hover 時移動到設定視窗時不會消失 */
        .avatarBox > ul:after{
            content: '';
            display: block;
            position: absolute;
            z-index: 99;
            height: 25px;
            transform: translate(-11.5%, 0);
            width: 80px;
        }
        .avatarBox ul li ul{
            width: 80px;
            height: 50px;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 1px 1px 5px #807f7fa6;
        }
        .avatarBox ul li ul a{
            color: #636262;
            font-size: 16px;
            display: block;
            width: 100%;
            height: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            padding: 5px;
        }

        .avatarBox ul li ul a:hover{
            box-shadow: 0px 0px 3px #a3a3a36c;
            background-color: #4d44b5fa;
            color: #ffffff;
        }

        .goFrontEndBtn{
            color: #ffffff;
            background-color: #5e52ff;
            border-radius: 25px;
            font-size: 18px;
        }

        /* ------------------------------------　新增餐點 ---------------------------------------------------------------- */
        .addMealBox{
            border-right: 1px solid #bdbdbd;
        }
        @media (max-width: 768px){
            .historyContent{
                flex-direction: column;
            }
            .addMealBox{
                border-right: none;
                width: 100%!important;
                padding-bottom: 1rem;
            }
            .addMealBox:after{
                content: '';
                display: block;
                position: relative;
                bottom: -1rem;
                height: 1px;
                width: 100%;
                background-color: #bdbdbd;
            }
            .mealTagBox{
                padding-top: 1rem;
                padding-left: 1rem;
                padding-right: 1rem;
                width: 100%!important;
            }
        }

        /* input arrow */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }

    </style>
</head>

<body>
    <header class="flew-grow-1">
        <nav>
            <!-- 先上左 padding ，之後變板將 左邊的padding取消掉，變色則使用js 或hover -->
            <a href="/dashboard">
                <div class="logoBox d-flex">
                    <div class="iconBox"><img class="icon" src="{{ asset('/img/allpass.jpg') }}" alt="" width="100%"></div>
                    <div class="allpassTitle d-flex align-items-center ps-2">歐巴斯</div>
                </div>
            </a>
            <div class="pt-5 navBox">
                <a href="/dashboard">
                    <div class="navList my-1 py-3 ps-4">
                        <i class="fa-solid fa-house"></i>
                        <span class="navList_span">管理介面</span>
                    </div>
                </a>
                <a href="/account" class="adminLink">
                    <div class="navList my-1 py-3 ps-4 adminBox">
                        <i class="fa-solid fa-user" title="管理者"></i>
                        <span class="navList_span">管理者</span>
                    </div>
                </a>
                <div class="burgerLinkBox">
                    <label class="burgerLinkLabel" for="switch"><i class="fa-solid fa-bars"></i></label>
                    <!--漢堡按鈕圖示-->
                    <input class="checkbox " type="checkbox" id="switch">
                    <!--選單開關-->
                    <ul class="menu">
                        <!--選單內容-->
                        <li><a href="/dashboard"><i class="fa-solid fa-house"></i></a></li>
                        <li><a href="/account" class="adminLink"> <i class="fa-solid fa-user"></i></a></li>
                        <li><a href="/" target="_blank">前往前台</a></li>
                        <li>
                            <a href="" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit()">登出</a>
                            <form method="POST" action="{{ route('logout') }}" hidden id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <div class='main_hander d-flex justify-content-between'>
            <span class="title d-flex align-items-center">新增餐點</span>
            <div class='d-flex align-items-center'>
                <button type="button" class="loginOutBtn py-2 mx-3 my-2 px-4" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</button>
                <form method="POST" action="{{ route('logout') }}" hidden id="logout_form">
                        @csrf
                    </form>
                <button type="button" class="goFrontEndBtn mx-3 my-2 px-4 py-2" onclick="window.open('/','_blank')">前往前台</button>
                <div class="ms-3 avatarBox">
                    <div class="avatar rounded-circle"><img class="rounded-circle" alt="Avatar" id="avatar" title="{{ Auth::user()->name}} &#10 {{ Auth::user()->email}}" data-user_name="{{ Auth::user()->name}}" data-user_power="{{ Auth::user()->power}}"></div>
                    <ul>
                        <li>
                            <ul>
                                <a href="/personal_edit/{{ Auth::user()->id }}">設定</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 從這開始寫 -->
        <div class="w-100 main_content">
            <div class="pt-5 w-100 historyBox">
                <div class="topping py-3 d-flex justify-content-center">
                    餐點詳情
                </div>
                <div class="py-3 historyContent d-flex">
                    <div class="px-3 w-50 addMealBox">
                        <form action="/meal/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">餐點名稱:</label>
                                <input class="w-75 inputWidth form-control" type="text" name="name" required>
                            </div>

                            <div class="pt-3 d-flex flex-column w-75 inputWidth">
                                <label for="">餐點類別:</label>
                                <div class="d-flex input-group">
                                    {{-- modal 新增餐點類別按鈕 --}}
                                    <button id="editBtn" type="button" class="btn btn-success editBtn" data-bs-toggle="modal" data-bs-target="#CreateTagModal">點擊新增類別</button>
                                    {{-- modal 餐點類別按鈕彈出視窗 --}}
                                    <div class="modal fade" id="CreateTagModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">餐點類別</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div id='modalBox' class="modal-body">

                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="cdiv-label">填入類別名稱:</label>
                                                            <input name="meal_tag_1" type="text" name='mealName' class="form-control meal_tag" placeholder="類別名稱(必填)">
                                                            <input name="meal_tag_2" type="text" name='mealName' class="form-control meal_tag" placeholder="(可選填)">
                                                            <input name="meal_tag_3" type="text" name='mealName' class="form-control meal_tag" placeholder="(可選填)">
                                                            <input name="meal_tag_4" type="text" name='mealName' class="form-control meal_tag" placeholder="(可選填)">
                                                            <input name="meal_tag_5" type="text" name='mealName' class="form-control meal_tag" placeholder="(可選填)">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                                            <button type="button" class="btn btn-primary store_meal_tag">新增完成</button>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select" name="tag" id="" required>
                                        <option value="" disabled>請選擇</option>
                                        @foreach ($meal_tags as $item)
                                            <option value="{{ $item->tag }}">{{ $item->tag }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="pt-3">
                                <label for="">餐點價格:</label>
                                <input  class="w-75 form-control inputWidth" type="number" name="price" required>
                            </div>

                            <div class="pt-3">
                                <label for="">餐點圖片:</label>
                                <input class="form-control w-75 inputWidth" type="file" name="img" required accept="image/*">
                            </div>

                            <div class="pt-3">
                                <label for="">餐點備註 1:</label>
                                <input class="w-75 form-control inputWidth"  type="text" name="note">
                            </div>

                            <div class="pt-3">
                                <label for="">餐點備註 2:</label>
                                <input class="w-75 form-control inputWidth"  type="text" name="secondNote">
                            </div>
                            <div class="pt-3 w-75 d-flex justify-content-center">
                                <button class="btn btn-primary mx-2" type="submit">新增餐點</button>
                                <button type="button" class="btn btn-danger ms-2" onclick="location.href='/meal'">取消</button>
                            </div>
                        </form>
                    </div>
                    <div class="mealTagBox w-50 px-5">
                        <table class="table" type="background-color: white;">
                            <thead>
                              <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">餐點類別</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($meal_tags as $index =>$item)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $item->tag }}</td>
                                        <td>
                                            <button class="btn delete_tag_btn" data-tag_name="{{ $item->tag }}"  data-tag_id="{{ $item->id }}"><i class="fa-solid fa-xmark"></i></button>
                                            <form action="/delete_meal_tag/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // 使用者頭像
        function generateAvatar(
            text,
            foregroundColor = "white",
            backgroundColor = "black"
            ) {
            const canvas = document.createElement("canvas");
            const context = canvas.getContext("2d");

            canvas.width = 60;
            canvas.height = 60;

            // Draw background
            context.fillStyle = backgroundColor;
            context.fillRect(0, 0, canvas.width, canvas.height);

            // Draw text
            context.font = "bold 30px Assistant";
            context.fillStyle = foregroundColor;
            context.textAlign = "center";
            context.textBaseline = "middle";
            context.fillText(text, canvas.width / 2, canvas.height / 2);

            return canvas.toDataURL("image/png");
            }

            // 使用者名稱 取字首
            let userName = document.getElementById("avatar").dataset.user_name;
            let prefixName = userName.substr(0, 1);

            document.getElementById("avatar").src = generateAvatar(
            `${prefixName}`,
            "white",
            "#009578"
            );
    </script>

    <script>
        const MealTags = document.querySelectorAll('.meal_tag')
        const MealTagBtn = document.querySelector('.store_meal_tag')

        // 儲存餐點類別至後端
        MealTagBtn.onclick = ()=>{
            var formData = new FormData()

            // 將五個類別的值存入表單
            MealTags.forEach((element, index) => {
                formData.append(`tag${index}`, element.value)
            });
            formData.append('_token',  '{!! csrf_token() !!}');

            fetch('/store/meal/tag', {
                method: 'POST',
                body: formData
            })
            .then(response =>response.json())
            .catch(error =>{
                alert('新增錯誤，請重新嘗試')
            })
            .then(response=>{
                Swal.fire({
                    title: '新增成功',
                    icon: 'success',
                    confirmButtonText: 'OK',
                }).then(function(){
                    window.location.reload();
                })
            })
        }

        const deleteTagBtns = document.querySelectorAll('.delete_tag_btn')

        // 刪除類別會顯示警告是否刪除
        deleteTagBtns.forEach(element=>{
            element.onclick = ()=>{

                let tagName = element.dataset.tag_name;
                let tagId = element.dataset.tag_id;

                // 提示是否刪除
                Swal.fire({
                    title: `刪除${tagName}，將會刪除此類別的所有餐點，是否要刪除?`,
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: '否',
                    confirmButtonText: '是',
                }).then ((result) => {
                    if (result.isConfirmed){
                        Swal.fire({
                            title: '刪除完成',
                            icon: 'success',
                            confirmButtonText: '確認',
                        }).then(function(){
                            // 確認刪除將傳送刪除表單至後端
                            const deleteTagForm = document.querySelector(`#deleteForm${ tagId }`);
                            deleteTagForm.submit();
                        })
                    }
                })
            }
        });

        // 沒有最高權限沒辦法進入管理者頁面
        const adminLink = document.querySelectorAll('.adminLink');
            let userPower = document.getElementById("avatar").dataset.user_power;
            if(userPower == 2){

                adminLink.forEach(element=>{
                    element.addEventListener('click', e=>{
                        e.preventDefault();
                        // sweetAlert
                        Swal.fire({
                            title: '最高權限才能訪問此連結',
                            icon: 'warning',
                            confirmButtonText: '是',
                        })
                    })
                })
            }
    </script>
</body>

</html>

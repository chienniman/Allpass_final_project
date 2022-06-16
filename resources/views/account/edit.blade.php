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
            .historyBox{
                width: 100%!important;
            }
            .historyBox{
                padding: 0;
            }
        }
        @media (max-width: 900px) {
            .main_content{
                width: 100%!important;
                padding: 0 20px 0 20px;
            }
            .historyContent{
                padding-top: 3rem!important;
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
        @media (max-width: 768px){
            .addMealBox{
                border-right: none;
                width: 100%!important;
                padding-bottom: 1rem;
            }
            .mealTagBox{
                padding-top: 1rem;
                padding-left: 1rem;
                padding-right: 1rem;
                width: 100%!important;
            }
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
            <span class="title d-flex align-items-center">設定帳號</span>
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
        <div class="w-75 main_content mx-auto">
            <div class="pt-5 w-100 historyBox">
                <div class="topping py-3 d-flex justify-content-center">
                    帳號詳情
                </div>
                <div class="py-5 historyContent d-flex justify-content-center">
                    <div class="px-3 w-75 addMealBox">
                        <form action="/personal_update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name">使用者名稱:</label>
                                <input class="w-100 form-control" type="text" name="name" id="name" value="{{ $user->name }}" required>
                            </div>

                            <div class="pt-3">
                                <label for="email">使用者信箱:</label>
                                <input  class="w-100 form-control" type="email" id="email" value="{{ $user->email }}" disabled>
                            </div>

                            <div class="pt-3">
                                <label for="password">使用者密碼:</label>
                                <input class="form-control w-100" type="password" name="password" id="password" value="{{ $user->password }}" required>
                            </div>

                            <div class="pt-3 w-100 d-flex justify-content-center">
                                <button class="btn btn-primary mx-2" type="submit">設定完成</button>
                                <button type="button" class="btn btn-danger ms-2" onclick="location.href='/dashboard'">取消</button>
                            </div>
                        </form>
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

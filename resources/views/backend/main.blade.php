<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7GD3LS1M8Q"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7GD3LS1M8Q');
    </script>
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
            .bigButton{
                padding: 15px 15px 15px 15px;
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

            .burgerLinkBox {
                display: block;
                padding: 0 20px 0 0;
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


        /* main 從這開始 */

        /* 主要功能 */
        .main_content{
            display: flex;
            padding: 0 45px 0 45px;
        }
        .featureList{
            /* padding: 0 45px 0 45px; */
            background-color: #d0c8ff34;
            padding: 30px 20px 30px 20px;
            border: 1px solid #4d44b528;
            border-radius: 5px;
        }

        .bigButton {
            background-color: #ffffff;
            border-radius: 10px;
            width: 50%;
            /* width: 250px; */
            height: 250px;
            /* margin: 30px!important; */
            padding: 15px 30px 15px 30px;
            background-clip: content-box;
        
        }

        .ball {
            background-color: #e3e1f1a9;
            height: 75px;
            width: 75px;
            border-radius: 50%;
            position: relative;
        }

        .buttonIcon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
            color: #4d44b5e1 !important;
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
           max-height: 560px;
           background-color: #d0c8ff34;
           border: 1px solid #4d44b528; 
        }
        /* .historyContent:after{
            content: '';
            display: block;
            position: absolute;
            bottom: 5px;
            width: 92.6966%;
            height: 16px;
            background-color: #d0c8ff;
        } */
        .historyList{
            width: 100%;
            padding: 0.8rem 0 0 0;
        }

        .middlesize{
           font-size: 18px;
           color: #3f3f3f; 
        }
        hr{
            margin: 0;
        }
        .historyBox, .featureList{
            
            padding: 0 15px 0 15px;
        }
        /* scrollbar */
       
        /* Demonstrate a "mostly customized" scrollbar
        * (won't be visible otherwise if width/height is specified) */
        .scrollbar::-webkit-scrollbar {
            width: 5px;
            height: 5px;
            background-color: rgba(212, 209, 209, 0.534); /* or add it to the track */
            border-radius: 2.5px;
        }

        /* Add a thumb */
        .scrollbar::-webkit-scrollbar-thumb {
            background: rgb(109, 108, 108);
            border-radius: 2.5px;

        }
        @media (max-width: 1520px) {
            .bigButton{
                padding: 15px 15px 15px 15px;
            }
        }
        @media (max-width: 1370px) {
            .bigButton{
                padding: 15px 10px 15px 10px;
            }
        }
        @media (max-width: 1200px) {
            .featureList, .historyBox{
                width: 100%!important;
            }
            .bigButton{
                padding: 15px 15px 15px 15px;
            }
            .featureList{
                padding: 20px 15px 20px 15px;
            }
            .historyBox{
                padding: 0;
            }
            .main_content{
                display: block;
            }
            
        }
        @media (max-width: 768px) {
            .featureList{
                display: block!important;
                padding: 20px 15px 20px 15px;
            }
            .bigButton{
                width: 100%;
            }
            .main_content{
                padding: 0 20px 0 20px;
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
                    <div class="iconBox"><img class="icon" src="./img/allpass.jpg" alt="" width="100%"></div>
                    <div class="allpassTitle d-flex align-items-center ps-2">歐巴斯</div>
                </div>
            </a>
            <div class="pt-5 navBox">
                <a href="/dashboard">
                    <div class="navList my-1 py-3 ps-4">
                        <i class="fa-solid fa-house" title="管理介面"></i>
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
            <span class="title d-flex align-items-center">管理介面</span>
            <div class='d-flex align-items-center'>
                <button type="button" class="loginOutBtn mx-3 my-2 px-4 py-2" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</button>
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
            <div class="featureList w-50 d-flex flex-wrap align-content-center mt-5">
                <div class="bigButton">
                    <a href="/new">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center">
                                <i class="fa-solid fa-images fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <span class="text-center fs-6" style="color:#3f3f3f; line-height: 19px;">最新消息與<br> 主頁橫幅管理</span>
                            </div>
                        </div>
                    </a>       
                </div>
                <div class="bigButton">
                    <a href="/meal">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center">
                                <i class="fa-solid fa-utensils fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <span class="fs-6" style="color:#3f3f3f">菜單管理</span>
                            </div>
                        </div>
                    </a>  
                </div>
                <div class="bigButton">
                    <a href="/backend/feedback">
                        <div class="row d-flex justify-content-center h-75 align-content-center">
                            <div class="ball d-flex justify-content-center ">
                                <i class="fa-solid fa-comments fa-2xl buttonIcon"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <span class="fs-6" style="color:#3f3f3f">顧客留言管理</span>
                            </div>
                        </div>
                    </a>   
                </div>
            </div>
            <div class="pt-5 w-50 historyBox">
                <div class="topping py-3 d-flex justify-content-center">
                    編輯歷史
                </div>
                <div class="scrollbar px-3 pb-3 historyContent" style="overflow: scroll;">
                    <div >
                        @foreach ($histories as $index =>$item)
                            <div class="historyList d-flex justify-content-between" style="min-width: 660px;">
                                <span class="middlesize mt-3 d-flex" style="white-space:nowrap;">
                                    <div> {{ $index + 1 }} </div>
                                    {{ $item->change_history }}
                                </span>
                                <div class="d-flex align-items-end">
                                    <span class="middlesize mt-3" style="white-space:nowrap;">{{ substr($item->created_at, 0, 10) }}</span>
                                    <button class="ms-3" type="button" class="btn" onclick="document.querySelector('#deleteForm{{ $item->id }}').submit()"><i class="fa-solid fa-xmark"></i></button>
                                    <form action="/delete_history/{{ $item->id }}" method="POST" id="deleteForm{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            <hr style="min-width: 660px;">
                        @endforeach
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
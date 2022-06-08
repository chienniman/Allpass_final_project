<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7GD3LS1M8Q"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7GD3LS1M8Q');
    </script>
    <style>
        /*---------------------------------------- template ------------------------------------------------*/
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
            min-width: 100px;
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

        /*---------------------------------------------- meal -------------------------------------------------*/
        .border-bottom{
            border-width: 3px !important;
            border-color: gray !important;
        }
        .banner_img{
            width: 250px;
        }
        main #section1{
            height: unset;
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
                <a href="/account">
                    <div class="navList my-1 py-3 ps-4">
                        <i class="fa-solid fa-user"></i>
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
                        <li><a href="/account"> <i class="fa-solid fa-user"></i></a></li>
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
            <span class="title d-flex align-items-center">帳號管理</span>
            <div class='d-flex align-items-center'>
                <button type="button" class="loginOutBtn py-2 mx-3 my-2 px-4" onclick="event.preventDefault(); document.querySelector('#logout_form').submit()">登出</button>
                <form method="POST" action="{{ route('logout') }}" hidden id="logout_form">
                        @csrf
                    </form>
                    <div class="avatar rounded-circle ms-3"><img class="rounded-circle" alt="Avatar" id="avatar" title="{{ Auth::user()->name}} &#10 {{ Auth::user()->email}}" data-user_name="{{ Auth::user()->name}}"></div>
            </div>
        </div>
        {{---------------------------------------------------------- 餐點列表 --------------------------------------------------}}
        <div class="container-fluid">
            <div class="list-detail">
                <div id="section1" class="container-xxl mb-5">
                    <!-- 標題 -->
                    <div class="shop-car d-flex justify-content-between mb-2">
                        {{-- 新增餐點 --}}
                        <a href="/account/create" class="btn btn-success">新增管理者</a>
                    </div>
                    
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="information">
                        <thead>
                            <tr>
                                <th class="text-center">使用者名稱</th>
                                <th class="text-center">信箱</th>
                                <th class="text-center">權限</th>
                                <th class="text-center">功能</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach($users as $index =>$item)
                            <tr>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td class="data" data-weight="{{$item->weight}}" data-account_id="{{$item->id}}">
                                    @if (  $item->power  == 1)
                                        最高權限
                                    @else
                                        一般權限
                                    @endif
                                </td>
                                <td>
                                   
                                    <button id="editBtn{{ $item->id }}" data-new_id="{{ $item->id }}" type="button" class="btn btn-success editBtn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $index }}">編輯</button>
                                    
                                    <div class="modal fade" id="exampleModal{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">編輯帳號</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div id='modalBox' class="modal-body">

                                            <form id='updateMealForm{{ $index }}' method='POST' enctype='multipart/form-data'>
                                                @csrf
                                                <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">使用者名稱:</label>
                                                <input type="text" name='name' class="form-control name" value="{{$item->name}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">信箱:</label>
                                                    <input type="email" name='email' class="form-control" value="{{$item->email}}" disabled>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">密碼:</label>
                                                    <input type="password" name='passwoerd' class="form-control password" value="{{$item->password}}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="power" class="col-form-label">權限:</label>
                                                    <select name="power" id="power" class="form-select power">
                                                        <option value="1" @if ( $item->power == 1 ) selected @endif>最高權限</option>
                                                        <option value="2" @if ( $item->power == 2 ) selected @endif>一般權限</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                                                    <button type="button" class="btn btn-primary update_btn">編輯完成</button>
                                                </div>

                                            </form>

                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                        

                                    <button class="btn btn-danger" onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除</button>
                                    <form action="/account/delete/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
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
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>        


    <script>
        // ---------------------------------------- 資料表 ------------------------------------------------------- //
        $(document).ready( function () {
            $('#product_list').DataTable();

            $('#information').DataTable({
                responsive: true,
                columns:[
                {responsivePriority: 1},
                {responsivePriority: 3},
                {responsivePriority: 4},
                {responsivePriority: 2},
                ],
                language: {
                    "lengthMenu": "顯示 _MENU_ 筆資料",
                    "sProcessing": "處理中...",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "目前有 _MAX_ 筆資料",
                    "sInfoEmpty": "目前共有 0 筆紀錄",
                    "sInfoFiltered": " ",
                    "sInfoPostFix": "",
                    "sSearch": "搜尋:",
                    "sUrl": "",
                    "sEmptyTable": "尚未有資料紀錄存在",
                    "sLoadingRecords": "載入資料中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首頁",
                        "sPrevious": "上一頁",
                        "sNext": "下一頁",
                        "sLast": "末頁"
                    },
                    "order": [[0, "desc"]],
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    },
                },
            })
                
        })

        // ---------------------------------- 使用者頭像 --------------------------------------------------------
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
    // ----------------------------------- 編輯帳號 --------------------------------------------------- //

        const data= document.querySelectorAll('.data');
        const name = document.querySelectorAll('.name');
        const password = document.querySelectorAll('.password');
        const power = document.querySelectorAll('.power');
        const updateBtn = document.querySelectorAll('.update_btn');

        updateBtn.forEach((e, i) => {
            
            e.onclick = ()=>{
                var formData = new FormData();

                formData.append('name',  name[i].value);
                formData.append('password',  password[i].value);
                formData.append('power',  power[i].value);
                formData.append('_token',  '{!! csrf_token() !!}');

                let accountId = data[i].dataset.account_id;

                fetch(`/account/${accountId}`, {
                    method: 'POST',
                    body: formData,
                })
                .then(response =>response.json())
                .catch(error=>{
                    alert('失敗')
                })
                .then(response=>{
                    // sweetAlert
                    Swal.fire({
                        title: '編輯完成',
                        icon: 'success',
                        confirmButtonText: 'OK',
                    }).then(function(){
                        window.location.reload();
                    })
                })
            }   
        });
    </script>
    
</body>

</html>
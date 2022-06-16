<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>歐巴斯登入頁面</title>
    {{-- 網頁小圖標icon --}}
    <link href="{{asset('/pics/logo.png')}}" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: #4d44b5;
            font-size: 28px;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .navbutton{
            font-size:28px;
        }
        a{
            color: lightgrey;
            text-decoration: none;
        }
        a:hover{
            color: lightgray;
        }
        #img{
            width: 50%;
        }
        .img1{
            width: 300px;
            border-radius: 50%;
            background-size: cover;
        }
        .words{
            color: lightgrey;
        }
        .bigwords{
            font-size: 36px;
            color: lightgrey;
            font-weight:bold;
        }
        .smallwords{
            font-size: 18px;
            color: lightgrey;
        }
        .button{
            border-radius: 40px;
            font-size: 28px;
            border: none;
            width: 140px;
            height: 50px;
            background-color: #4598FF;
            color: lightgrey;
        }
        .bar{
            height: 50px;
            width: 230px;
        }
        #bigbox{
            position: absolute!important;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .bigboxInner{
            width: 310px;
        }
        @media (max-width:768px) {
        .navbutton{
            margin: 0;
            padding: 0;
        }
        .navbar{
            padding-left: 5%!important;
            padding-right: 5%!important;
            padding-top: 8%!important;

            margin: 0!important;
        }
    }
    </style>
</head>
<body>
    <div class="w-100 ">
        <div class="navbar justify-content-between mx-5 px-1 pt-5 ">
            <div class="col-6 words navbutton">
                登入
            </div>
            <div class="col-6 d-flex justify-content-end words navbutton align-items-center">
                <a href="/" target="_blank">
                    <i class="fa-solid fa-arrow-right"></i>
                    前台首頁
                </a>
            </div>
        </div>
    </div>

    <div class="" id="bigbox">
        <form method="POST" action="{{ route('login') }}" class="d-flex  flex-column align-content-center  " >
            @csrf
            <div class="bigboxInner d-flex flex-column justify-content-center">
                <div class="align-self-center" id="img">
                    <img class="img1 img-fluid" src="./img/allpass.jpg" alt="">
                </div>
                <div class="bigwords align-self-center pt-5">
                    請登入管理者帳號
                </div>
                <div class="align-self-center words pt-5 d-flex">
                    <label for="email" class="pe-2">帳號:</label>
                    <input id="email" class="bar form-control" name="email" type="email" placeholder="信箱" required autofocus>
                </div>
                <div class="align-self-center words pt-5 d-flex">
                    <label for="password" class="pe-2">密碼:</label>
                    <input id="password" class="bar form-control" name="password" type="password" placeholder="********" required>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="smallwords">
                        <input id="remember_me" name="remember" type="checkbox"  name="" >
                        <label id="remember_me" for="remember_me">記住我?</label>
                    </div>
                </div>
                <div class="align-self-center pt-3">
                    <button class="button" type="submit">
                        登入
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

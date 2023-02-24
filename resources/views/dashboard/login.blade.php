<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">


    {{-- <link rel="stylesheet" href="../css/style.css"> --}}
    <title>Document</title>
</head>
<body>

    <div class="login">
        <div class="login-left">
            <div class="login-left-logo">
                <img src="{{url('/images/Logo alta.png')}}" alt="Logo ALT media commpy"/>

            </div>
            <div class="login-left-from">
                    <form action="" class="login-left-from-login">

                                <label for="">Tên đăng nhập *</label>

                                <input type="text" class="form-input-name" >

                                <label for="">Mật khẩu</label>

                                <input type="password" class="form-input-pw">

                                    <a href=""  class="form-a-forgot-passwd" >Quên mật khẩu?</a>

                            <button type="submit" class="submit_login">Đăng nhập</button>

                    </form>
            </div>
        </div>
        <div class="login-right">
            <img src="{{url('/images/Group 341.png')}}" alt="">
            <div class="login-right_meu-connter">

                <div class="login-right_connter">Hệ thống</div>
                <div class="login-right_connter_system" >Quản Lý xếp hàng</div>
            </div>
        </div>
    </div>

</body>
</html>


@extends('components.navbars.layout')
@section('links')
<link rel="stylesheet" href="{{ asset('../assets/css/style-login.css') }}">
@endsection
@section('form')
<form method="POST" action="{{ route('login') }}"   class="login-left-from-login">
@csrf
    <label for="">Tên đăng nhập *</label>

    <input type="text" name="name" class="form-input-name" value="{{'lequinhaivan01'}}" >

    <label for="">Mật khẩu</label>
<div class="password_position">
<input type="password" name="password" value="{{'secret'}}" class="form-input-pw">
<button type="button" class="show-password-button">
    <img src="{{url('../assets/images/Vector.png')}}" alt="">

</button>

</div>

{{-- href="{{route('verify')}}"" --}}
<a  href="{{route('verify')}}" class="form-a-forgot-passwd" >Sai mật khẩu hoặc tên đăng nhập</a>

<button type="submit" class="submit_login">Đăng nhập</button>

<a  href="{{route('verify')}}">Quên mật khẩu?</a>
</form>
@endsection


@section('background_group')
<div class="login-right">
    <img src="{{url('../assets/images/backgroud/Group 341.png')}}" alt="Logo ALT media commpy"/>
    <div class="login-right_meu-connter">

        <div class="login-right_connter">Hệ thống</div>
        <div class="login-right_connter_system" >Quản Lý xếp hàng</div>
    </div>
</div>
@endsection
@section('scripts')
<script>
  var showPasswordButton = document.querySelector('.show-password-button');
    var passwordInput = document.querySelector('.form-input-pw');

    showPasswordButton.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';

      } else {
        passwordInput.type = 'password';

      }
    });
</script>
@endsection



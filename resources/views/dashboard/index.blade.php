@extends('components.navbars.menuDashboard')
@section('content')

<div class="nvarContent">
    <div class="nvarContent-information">Thông tin cá nhân</div>
    <div class="nvarContent_right">
        <div>
            <img src="{{ url('/assets/images/icons/notification.png') }}" alt="">

            <img class="imgas_user" src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2Q.png') }}"
                alt="">

            <div class="nvarContent_right-xc">
                <div>xin chào</div>
                <div>Lê Quỳnh Ái Vân</div>
            </div>

        </div>



    </div>

</div>

<div class="informtion_user">

        <div><img src="{{ url('/assets/images/users/unsplash_Fyl8sMC2j2L.png') }}" alt="">

            <div>Lê Quỳnh Ái Vân</div>
        </div>

     <div class="informtion_user__form">
            <div class="informtion_user__form-left">
                    <p>Tên người dùng</p>
                <div> <input type="text"> </div>
                    <p>Số điện thoại</p>
                <div> <input type="text"> </div>
                    <p>Emil</p>
                <div> <input type="text"></div>

            </div>
            <div class="informtion_user__form-left">
                    <p>Tên đăng nhập</p>
                <div> <input type="text"></div>
                    <p>Mật khẩu</p>
                <div> <input type="text">   </div>
                    <p>Vai trò</p>
                <div> <input type="text"></div>

            </div>


     </div>


</div>

<div>



</div>
@endsection

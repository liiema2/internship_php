@extends('components.navbars.menuDashboard')

@section('links')
<link rel="stylesheet" href="{{ asset('/assets/css/device/menu_device.css') }}">
@section('content')
<div class="nvarContent">
    <div class="nvarContent-information">Thiết bị  > <p> Danhsach thiết bị</p> </div>
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




@endsection


@section('informations')
<table class="blueTable">
    <thead>
    <tr>
    <th>Mã thiết bị </th>
    <th>Tên thiết bị</th>
    <th>Địa chỉ ip</th>
    <th>trạng thái hoạt động</th>
    <th>trạn thái kết nối</th>
    <th>Dịch vụ sử dụng</th>
    <th></th>
    <th></th>

    </tr>
    </thead>
    <tfoot>
    <tr>
    <td colspan="9">
    <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
    </td>
    </tr>
    </tfoot>
    <tbody>
    <tr>
    <td>cell1_1</td>
    <td>cell2_1</td>
    <td>cell3_1</td>
    <td>cell4_1</td>
    <td>cell5_1</td>
    <td>cell6_1</td>

    <td>cell8_1</td>
    <td>cell9_1</td>
    </tr>
    </tbody>
    </table>
    @endsection

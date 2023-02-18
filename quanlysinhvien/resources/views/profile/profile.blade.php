@extends('layout')
@section('content')

    <div class="container">
        <div class="card">
            <div class="car-header">
                <div class="row">
                    <div class="col-nd-6">
                        <h3>quản lý sinh viên</h3>
                    </div>
                    <div class="col-nd-6">
                        <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
                <div class="card-body">
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">
                            {{session::gets('thongbao')}}
                        </div>
                @endif
            <table class="card-body-bordered">
                    <thead>
                        <tr>
                            <th>
                             STT
                            </th>
                            <th>
                                Mã sinh viên
                            </th>
                            <th>
                                Họ tên
                            </th>
                            <th>
                                Ngày sinh
                            </th>
                            <th>
                                Giới tính
                            </th>
                            <th>
                                Số điện thoại
                            </th>
                            <th>
                              thao tác
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$sv->MaSV}}</td>
                                <td>{{$sv->HoTen}}</td>
                                <td>{{$sv->NgaySinh}}</td>
                                <td>{{$sv->GioiTinh}}</td>
                                <td>{{$sv->SoDT}}</td>
                                <td>
                                    <form action="{{'route.destory',}}"></form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection

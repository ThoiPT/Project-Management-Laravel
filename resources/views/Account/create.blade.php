@extends('home')
@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <div class="card-header-right">
                    <i class="icofont icofont-spinner-alt-5"></i>
                </div>
            </div>

            <div class="card-block">
                <h4 class="sub-title">TẠO MỚI TÀI KHOẢN</h4>
                <form action="{{route('accounts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input hidden name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mã tài khoản</label>
                        <div class="col-sm-10">
                            <input required name="accountCode" type="text" class="form-control" value="{{$accountCode}}" style="color: red; font-weight: bold">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Họ và tên</label>
                        <div class="col-sm-10">
                            <input required name="fullName" type="text" class="form-control" placeholder="Họ và tên">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Giới tính </label>
                        <div class="col-sm-10">
                            <select name="gender" class="form-control">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                                <option value="3">Khác</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input required name="address" type="text" class="form-control" placeholder="Địa chỉ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email tài khoản</label>
                        <div class="col-sm-10">
                            <input required name="email" type="text" class="form-control" placeholder="Email được cấp">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input required name="password" type="password" class="form-control" min="5" placeholder="Nhập mật khẩu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input required name="phone" type="number" class="form-control" placeholder="Số điện thoại">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ngày tham gia</label>
                        <div class="col-sm-10">
                            <input required name="dateJoin" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Thuộc phòng ban <span style="color: red; font-weight: bold">(*)</span></label>
                        <div class="col-sm-10">
                            <select name="department_id" class="form-control">
                                @foreach($department as $item)
                                    <option value="{{$item->id}}">{{$item->departmentName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chức vụ người dùng <span style="color: red; font-weight: bold">(*)</span></label>
                        <div class="col-sm-10">
                            <select name="position_id" class="form-control">
                                @foreach($positions as $item)
                                    <option value="{{$item->id}}">{{$item->positionName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">Ảnh đại diện</label>
                        <input class="form-group" type="file" name="avatar_upload">
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Trạng thái tài khoản</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Tạm ẩm</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-info float-right btn-round">Thêm tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('Notification')
@endsection

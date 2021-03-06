@extends('admin.layouts.app', ['activePage' => 'users', 'title' => 'Cập nhật người dùng'])
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - admin@gmail.com</div>

                @if ($errors->any())
                @component('admin.layouts.components.alert')
                @slot('type', 'danger')
                @slot('stroke', 'cancel')
                {{ $errors->first() }}
                @endcomponent
                @endif

                <div class="panel-body">
                    <form action="/admin/users/{{$account->id}}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="row justify-content-center" style="margin-bottom:40px">

                        <div class="col-md-8 col-lg-8 col-lg-offset-2">

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$account->email}}">
                                {{-- <div class="alert alert-danger" role="alert">
                                    <strong>email đã tồn tại!</strong>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" value="{{$account->name}}">
                                <div class="alert" role="alert">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" value="">
                            </div> --}}
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control" value="{{$account->level}}">
                                    <option value="1">admin</option>
                                    <option selected value="2">user</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">

                                <button class="btn btn-success" name="add-user" type="submit">Sửa thành viên</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>


                    </div>
                </form>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>

    <!--/.row-->
</div>
@endsection

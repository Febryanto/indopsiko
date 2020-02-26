@extends('admin.index')
@section('title')
    Data User
@endsection

@section('aktif_user')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data User
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet">
            @foreach ($data as $i)
            <form action="{{ route('user.update',$i->id) }}" name="user" class="kt-form" method="POST" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                  <style>
                       .error {
                           color:red;
                       }
                   </style>
                                  {{ csrf_field() }}
                                  {{ method_field('PUT') }}
            

                                  <div class="form-group">
                                          <label for="nama_lengkap">nama lengkap</label>
                                          <input type="text" name="name" class="form-control" value="{{ $i->name }}" placeholder="nama lengkap" >
                                  </div>
                                  <div class="form-group">
                                          <label for="username">username</label>
                                          <input type="text" name="username" class="form-control" value="{{ $i->username }}" placeholder="username / nickname" >
                                  </div>
                                  <div class="form-group">
                                      <label for="email">email</label>
                                      <input type="email" name="email" class="form-control" value="{{ $i->email }}" placeholder="Email" >
                                  </div>
                                  <div class="form-group">
                                      <label for="password">ganti password</label>
                                      <input type="password" name="password" class="form-control" value="{{ $i->password }}" placeholder="password" >
                                  </div>
                                  <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="jabatan">
                                    <option value="ADMIN">Admin</option>
                                </select>
                            </div>
                          <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-brand">Submit</button>
                                <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection

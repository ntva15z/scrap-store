@extends('auth.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg h5 font-weight-bold">Đăng nhập</p>

            <form action="{{ route(DO_LOGIN) }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="Tài khoản hoặc email"
                           value="{{ old('username') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('username')
                <span style="color: red;">{{$message}}</span>
                @enderror
                <div class="input-group mt-3">
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                <span style="color: red;">{{$message}}</span>
                @enderror

                <div class="row mt-3">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">
                                Ghi nhớ đăng nhập
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-sm btn-primary btn-block">Đăng nhập</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        {{--<div class="social-auth-links text-center mb-3">
            <p>- HOẶC -</p>
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Đăng nhập bằng Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Đăng nhập bằng Google+
            </a>
        </div>--}}
        <!-- /.social-auth-links -->

            {{--<p class="mb-1">
                <a href="forgot-password.html">Quên mật khẩu</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('auth.register') }}" class="text-center">Đăng ký tài khoản</a>
            </p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
    <!-- /.login-box -->
@endsection

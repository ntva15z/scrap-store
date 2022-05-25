@extends('auth.layouts.main')

@section('content')
<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Đăng ký là thành viên Food Deli</p>

    <form action="{{ route('auth.postRegister') }}" method="post">
      @csrf
      <div class="form-group">
        <div class="input-group">
          <input type="text" class="form-control" name="username" placeholder="Tên tài khoản" value="{{ old('username') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        @error('username')
        <span style="color: red;font-size: 12.5px">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <div class="input-group">
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('email')
        <span style="color: red;font-size: 12.5px">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <div class="input-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        @error('password')
        <span style="color: red;font-size: 12.5px">{{$message}}</span>
        @enderror
      </div>

      <div class="form-group">
        <div class="input-group">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        @error('password_confirmation')
        <span style="color: red;font-size: 12.5px">{{$message}}</span>
        @enderror
      </div>

      <div class="row mt-3">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            <label for="agreeTerms">
             I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-primary">
        <i class="fab fa-facebook mr-2"></i>
        Sign up using Facebook
      </a>
      <a href="#" class="btn btn-block btn-danger">
        <i class="fab fa-google-plus mr-2"></i>
        Sign up using Google+
      </a>
    </div>

    <a href="{{ route('auth.login') }}" class="text-center">Đăng nhập</a>
  </div>
  <!-- /.form-box -->
</div>
@endsection

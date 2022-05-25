<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food deli</title>

 @include('auth.layouts.styles')
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="" alt="">
    </div>
    <!-- /.login-logo -->
    @yield('content')
  </div>

  @include('auth.layouts.script')
</body>

</html>

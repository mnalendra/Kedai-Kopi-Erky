@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="img/logo.png" rel="icon">
</head>

<body>

  
<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/pic1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Login to <strong>Kedai Kopi Erky</strong></h3>
              @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              </div>
              <form action="/loginuser" method="POST">
                @csrf
                @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">   
                </div>
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input ms-2" type="checkbox" id="showPassword" onchange="togglePassword()">
                    <label class="form-check-label" for="showPassword">Show Password</label>
                </div>
                <button type="submit" class="btn btn-dark mt-3">Login</button>
            </form>
             <p class="mt-3" style="color: #8e5431; text-align: center">Don't have an account? <a href="/register">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

    </section>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('exampleInputPassword1');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>
</body>

</html>
@endsection
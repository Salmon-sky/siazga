<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/login/style.css')}}">
    <style>
      html, body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }

      .card {
        background-color: #086623;
        color: white;
      }

      .logo {
        max-width: 350px;
        height: auto;
        margin-right: 50px;
      }

      .btn-center {
        display: block;
        width: 100%;
      }
    </style>
  </head>
  <body>

  <div class="container">
    <img src="{{ asset('assets/img/YAL.png') }}" alt="" class="logo img-fluid" />
    <div class="card p-5 rounded">
        <h4 class="fw-bolder text-center">LOGIN SIAZGA</h4>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Enter your username or email address</label>
                <input type="text" class="form-control" name="email" id="username" placeholder="Username" />
            </div>
            <div class="form-group">
                <label for="password">Enter your password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            </div>
            {{-- <div class="form-group forgot-password">
                <a href="#">Forgot Password?</a>
            </div> --}}
            <button type="submit" class="btn btn-success btn-center">Sign In</button>
        </form>
    </div>
</div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

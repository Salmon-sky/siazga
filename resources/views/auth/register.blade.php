<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/register/style.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="logo-container">
        <img src="{{asset('assets/img/icontutwuri.png')}}" alt="Tut Wuri Handayani" class="logo" />
        <div class="school-name">
          <p class="bold-text m-0">SMA AL-AZHAR 3</p>
          <p class="bold-text m-0">BANDAR LAMPUNG</p>
        </div>
      </div>

      <div class="login-container">
        <div class="login-card justify-content-center">
          <h4 class="bold-text text-center">SIGN UP</h4>
          <form action="{{route('registrasi.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="email">Enter your username or email addres</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Username" />
              @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <!-- start -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">username</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Username" />
                    @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="no_hp">contact number</label>
                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Contact Number" />
                    @error('no_hp')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                  </div>
                </div>
                <div class="form-group">
                    <label for="nomor_induk">Nomor Induk</label>
                    <input type="number" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="nomor_induk" />
                    @error('nomor_induk')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                  </div>
              </div>

              <!-- end -->
            </div>
            <div class="form-group">
              <label for="password">Enter your password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
              @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Confirm your password</label>
              <input type="password" class="form-control" name="confirm-password" id="password" placeholder="Password" />
              @error('passwords')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-5">Sign Up</button>
          </form>
          <p class="mt-3 text-center">Sudah punya akun? <a href="{{route('login')}}">Login sekarang</a></p>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

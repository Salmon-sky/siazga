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
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .container {
            width: 100%;
            max-width: 900px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 15px;
        }

        .logo {
            max-width: 300px;
            height: auto;
            padding: 50px;
        }

        .card {
            background-color: #086623;
            color: white;
            width: 100%;
            max-width: 450px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-center {
            display: block;
            width: 100%;
        }

        @media (min-width: 768px) {
            .container {
                flex-wrap: nowrap;
            }

            .logo {
                margin-bottom: 0;
                margin-right: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="{{ asset('assets/img/YAL.png') }}" alt="Logo" class="logo img-fluid" />
        <div class="card">
            <h4 class="fw-bold text-center mb-4">LOGIN SIAZGA</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username or Email Address</label>
                    <input type="text" class="form-control" name="email" id="username"
                        placeholder="Enter your username or email" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter your password" required />
                </div>
                <div class="form-group text-right">
                    <a href="{{ route('password.request') }}" class="text-light">Forgot Password?</a>
                </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="navbar p-3">
        <div class="logo"> <img src="assets/img/heru_wolfcut.png" style="max-width: 10%" alt="Logo">
            Logo</div>
        <div class="nav-buttons">
            <a href="/"> 
                <button class="button">Home</button>
            </a>
            <a href="/about"> 
                <button class="button">About</button>
            </a>
            <a href="/features"> 
                <button class="button">Features</button>
            </a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>
                        <form method="POST" action="{{ route('login.submit') }}">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email atau Nomor HP">
                            </div>
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <div class="form-group">
                                <a href="#" class="float-right">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Masuk Akun</button>
                        </form>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button class="socialmedia-btn">
                                <img src="{{ asset('assets/img/google.jpg') }}" alt="Google Logo">
                                Google
                            </button>
                            <button class="socialmedia-btn">
                                <img src="{{ asset('assets/img/facebook.png') }}" alt="Facebook Logo">
                                Facebook
                            </button>
                        </div>
                        <div class="text-center mt-3">
                            <span>Belum punya akun? <a href="/register">Register!</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

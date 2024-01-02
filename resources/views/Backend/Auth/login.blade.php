<!doctype html>
<html lang="en">
<head>
    <title>inflexionpointBD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body style="background-size: cover;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h1 class="text-center mb-4" style="font-size: xx-large; font-weight: bold;">Please, Login !</h1>
                        <form action="{{ route('user.login.post') }}" method="POST" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="form-control rounded-left" placeholder="Email" required>
                            </div>
                            <div class="form-group d-flex mt-3">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-group mt-3 d-flex align-items-center">
                                    <button type="submit" class="btn btn-success rounded submit px-3">Login</button>
                                </div>
                                <div class="form-group mt-4">
                                    <span class="text-muted">
                                        Don't have an account?
                                        <a href="{{ route('user.registration') }}" class="text-primary">Register</a>
                                    </span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>


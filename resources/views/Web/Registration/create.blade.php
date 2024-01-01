<!doctype html>
<html lang="en">
<head>
    <title>inflexionpointBD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-size: cover;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h1 class="text-center mb-4" style="font-size: xx-large; font-weight: bold;">Register Yourself .</h1>
                        <form action="{{ route('user.registration.post') }}" method="POST" class="login-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <input type="text" name="name" class="form-control rounded-left" placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="email" class="form-control rounded-left" placeholder="Email" required>
                            </div>
                            <div class="form-group mt-2">
                                <input type="hidden" name="role_id" value="2">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="phone" class="form-control rounded-left" placeholder="Contact number" required>
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="address" class="form-control rounded-left" placeholder="Your address">
                            </div>
                            <div class="form-group mt-2">
                                <input type="file" name="image" class="form-control rounded-left">
                            </div>
                            <div class="form-group d-flex mt-2">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="d-flex">
                                <div class="form-group mt-2 d-flex">
                                    <a href="#">
                                        <button type="button" class="btn btn-warning rounded submit px-3" style="margin-right: 10px;">Back</button>
                                    </a>
                                    <button type="submit" class="btn btn-success rounded submit px-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


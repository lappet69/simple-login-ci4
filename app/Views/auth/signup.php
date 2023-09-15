<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container " style="min-height: 100vh; min-width: 100vw; ">
        <div class="row">
            <?= validation_list_errors() ?>
            <div class="col-md px-5">
                <img src="<?= base_url('/images/logo.png') ?>" alt="" class="my-5 px-5">
                <div class="col-md-6 px-5">
                    <h3>Sign Up</h3>
                    <p class="text-danger"> <?= session()->getFlashdata('msg') ?></p>
                    <form method="post" action="<?= base_url('/signup') ?>">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="d-flex d-inline">
                            <p>Already have an account? </p> <a class="text-primary d-inline" href="/">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6" style="background-color: #4966F6;"><img src="<?= base_url('/images/illustration.png') ?>" alt="" class="img-fluid"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
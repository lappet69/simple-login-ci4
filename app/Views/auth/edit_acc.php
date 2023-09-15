<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Poppins&display=swap" rel="stylesheet">

</head>


<body>
    <div class="container " style="min-height: 100vh; min-width: 100vw; ">
        <div class="row">

            <div class="col-md px-5">
                <img src="<?= base_url('/images/logo.png') ?>" alt="" class="my-5 px-5">
                <div class="col-md-6 px-5">
                    <h3>Edit Account</h3>
                    <p class="text-danger"> <?= session()->getFlashdata('msg') ?></p>
                    <form method="post" action="<?= base_url('user/edit') ?>">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="username" disable aria-disabled="true" class="form-label">Username</label>
                            <input type="text" class="form-control" value="<?= session()->get('username') ?>" id="username" name="username" placeholder="Enter your username" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name" aria-disabled="true" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" aria-disabled="true" class="form-label">Address</label>
                            <textarea class="form-control" rows="3" cols="3" name="address" placeholder="Enter your address"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
                </div>
            </div>
            <div class="col-md-6" style="background-color: #4966F6;"><img src="<?= base_url('/images/illustration.png') ?>" alt="" class="img-fluid"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
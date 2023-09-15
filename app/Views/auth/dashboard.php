<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5" style="margin: auto; min-height: 100vh;">
        <div class="row">
            <div class="col-md">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('/images/logo.png') ?>" alt="" class="img-fluid mb-5">
                    </a>

                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $username  ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/user/edit') ?>">Edit Account</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="row rounded px-5" style="background-color: #E5E0FF;height: 420px; width: 100%;">
                    <div class="position-relative rounded-lg container-fluid py-5">
                        <h3>Hi, <?= $username;  ?>, Have a nice day! </h3>
                        <button class="d-flex btn btn-light px-2 py-1 mt-4" style="background-color: white;">Account Information</button>
                        <img src="<?= base_url('/images/illustration-2.png') ?>" alt="" class="position-absolute img-fluid" style="width: 25%; right: 0; top: 0%;">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 border mt-4 p-3 rounded">
                        <p><strong>Your current information</strong></p>
                        <div>
                            <table>
                                <tr>
                                    <td>Username </td>
                                    <td>:</td>
                                    <td><?= $username ?></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?= $name ? $name : "No Data" ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td><?= $address ? $address  : "No Data" ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
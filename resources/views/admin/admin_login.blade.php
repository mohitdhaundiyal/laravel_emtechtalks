<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        .image {
            text-align: center;
            display: block;
        }

        .form-control {
            border-radius: 0;
            border-color: black;
        }

        .card {
            margin-top: 30px;
            border-radius: 0;
            border-color: black;
        }

        .btn {
            border-radius: 0;
        }
    </style>
</head>

<body>
    <div class="image">
        <img src="HD1.png" height="200px" width="200px">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @if(Session::get('invalid_pass'))
                <div class="alert alert-danger" role="alert">
                    {{session('invalid_pass')}}
                </div>
                @endif
                <div class="card bg-light" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Admin Login</h5>
                        <form action="admin_login" method="post">
                            @csrf
                            <input type="text" name="admin_username" placeholder="Enter username" class="form-control" required><br>
                            <input type="password" name="admin_password" class="form-control" placeholder="Enter password" required><br>
                            <button type="submit" class="btn btn-success" name="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>

</html>
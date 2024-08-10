<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
    body,
    html {
        height: 100%;
        background-image: url('login.jpg') ;
        background-size: 1100px; /* Memastikan gambar menutupi seluruh layar */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            background-position: center;
        /* margin: 0;
        display: flex;
        justify-content: center;
        align-items: center; */
    }
</style>
<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3" style="margin-left: -45px;">
                <form action="proses_login.php" method="post">
                    <br><br><br>
                            <div class="form-group mb-4">
                                <input class="form-control form-control-lg" placeholder="Username" type="text" name="username">
                            </div>
                            <div class="form-group mb-4">
                                <input class="form-control form-control-lg" placeholder="Password" type="password" name="password">
                            </div>
                            <div class="form-group">
                            <button class="btn btn-info btn-lg btn-block" >Login</button>
                            </div>
                            
                </form>
            </div>
        </div>
    </div>
</body>
</html>
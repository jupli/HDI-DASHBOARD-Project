
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto">
                <h1 class="h2">Login Admin</h1>
                <p class="lead">Silahkan masuk ke Panel Admin</p>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center mt-5 mx-auto ">
        <img src="<?php echo base_url('/gudang/gambar/logohdi.png'); ?>" class="mx-auto d-block"/>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nokim">Costumer ID</label>
                        <input type="text" class="form-control" name="nokim" placeholder="Masukan Nomor Customer ID Anda" required />
                    </div>
                    <div class="form-group">
                        <label for="penerima">Nama Distrubutor</label>
                        <input type="penerima" class="form-control" name="penerima" placeholder="Masukan Nama Distributor Anda" required />
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">        
                         
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success w-100" value="Login" />
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
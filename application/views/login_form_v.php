<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">

    <title>Giriş Yap</title>
</head>
<body>


<div class="container">
    <h3 class="text-center">Giriş Yap</h3>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form action="<?php echo base_url("giris"); ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı adı">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
                </div>

                <button type="submit" class="btn btn-default">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>


<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>

</body>
</html>
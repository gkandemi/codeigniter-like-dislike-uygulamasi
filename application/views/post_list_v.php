<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("inc/head"); ?>
    <title>Yazı Listesi</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $user->username; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url("cikis"); ?>">Çıkış Yap <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">

    <div class="row">

        <?php foreach ($posts as $post) { ?>

            <div class="col-md-12 well">
                <p>
                    <?php echo $post->title; ?>
                </p>
                <div class="thumbs_container">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        <span class="like_count">(123)</span>
                    </button>
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                        <span class="dislike_count">(0)</span>
                    </button>
                </div>
            </div>

        <?php } ?>


    </div>

</div>




</body>
</html>
<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("inc/head"); ?>
    <title>Yazı Listesi</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $user->username; ?></a>
        </div>
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

    <div class="row post_list">

        <?php echo $this->load->view("renders/post_list_render", $posts, true); ?>

    </div>

</div>



<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>


</body>
</html>
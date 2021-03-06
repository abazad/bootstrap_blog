<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мой персональный блог</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/normalize.css" rel="stylesheet">
	<link href="../bootstrap/css/blog-home.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../bootstrap/css/bootswatch.min.css">
	<!--<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../bootstrap/css/main.css" rel="stylesheet">
	<link href="../bootstrap/css/form.css" rel="stylesheet">-->

    <script src="../bootstrap/js/jquery-2.1.1.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../bootstrap/js/html5shiv.js"></script>
    <script src="../bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?">Мой персональный блог</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="?">Главная</a></li>
                    <?php if (IS_ADMIN): ?>
                        <li><a href="?act=logout">Админ (Выйти)</a></li>
                    <?php else: ?>
                        <li><a href="?act=login">Войти</a></li>
                    <?php endif ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">






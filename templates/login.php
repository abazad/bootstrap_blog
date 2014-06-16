<?php require('header.php'); ?>

    <div class="container">

        <form action="?act=do-login" method="post" class="form-signin" role="form">
            <h2 class="form-signin-heading">Авторизуйтесь</h2>
            <input type="text" class="form-control" placeholder="Логин" required autofocus name="login">
            <input type="password" class="form-control" placeholder="Пароль" required name="password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> запомнить меня
            </label>
            <button type="submit" class="btn btn-default btn-primary btn-block">Войти</button>
        </form>

    </div>

<?php require('footer.php'); ?>
<?php require('header.php'); ?>
<div class="starter-template">
    <form action="?act=do-login" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" >Логин</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="login" placeholder="Логин" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password"  placeholder="Пароль" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </div>
    </form>
</div>

<?php require('footer.php'); ?>
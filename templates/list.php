<?php require('header.php'); ?>

<h1>Записи в блоге</h1>

<?php foreach ($records as $row): ?>
    <h3><a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['header']?></a></h3>
    <p><?=$row['content']?></p>
    <div class="comments">
        <small>
            <span class="date"><?=$row['date']?></span>
            <span class="author"><?=$row['author']?></span>
        </small>
        <a href="?act=view-entry&id=<?=$row['id']?>">коментарии</a>
    </div>
<?php endforeach ?>
<?php if (IS_ADMIN): ?>
<h1>Добавить новую запись</h1>
    <div class="starter-template">
        <form action="?act=do-new-entry" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label" >Автор</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" placeholder="Автор" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Заголовок</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="header"  placeholder="Заголовок" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Содержание</label>
                <div class="col-sm-10">
                    <textarea class="form-control col-lg-10" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Пост</button>
                </div>
            </div>
        </form>
    </div>
<?php endif ?>

<?php require('footer.php'); ?>
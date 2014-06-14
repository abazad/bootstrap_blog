<?php require('header.php'); ?>

    <h3><a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['header']?></a></h3>
    <p><?=$row['content']?></p>
    <div class="comments">
        <small>
            <span class="date"><?=$row['date']?></span>
            <span class="author"><?=$row['author']?></span>
        </small>
        <a href="?act=view-entry&id=<?=$row['id']?>">коментарии</a>
    </div>

<?php require('footer.php'); ?>
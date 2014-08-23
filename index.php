<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
$mysqli = new mysqli('localhost', '', '') or die('Cannot connect to database');
$mysqli->select_db('blog') or die('Cannot select database');
$mysqli->set_charset("utf8");
mb_internal_encoding('UTF-8');
$act = isset($_GET['act']) ? $_GET['act'] : 'list';

define('IS_ADMIN', isset($_SESSION['IS_ADMIN']));

switch ($act) {
    case 'list' :
        $records = array();
        $sel = $mysqli->query('SELECT entry.*, COUNT(comment.id) as comments FROM entry LEFT JOIN comment ON entry.id = comment.entry_id GROUP by entry.id');
        while ($row = $sel->fetch_assoc()) {
            $row['date'] = date('Y-m-d H:i:s', $row['date']);
            if (mb_strlen($row['content']) > 60) {
                $row['content'] = mb_substr(strip_tags($row['content']), 0,57) . '...';
            }
            $row['content'] = nl2br($row['content']);
            $row['header'] = htmlspecialchars($row['header']);
            $records[] =$row;
        }
        require('templates/list.php');
        break;
    case 'view-entry' :

        if (!isset($_GET['id'])) die("Missing id parameter");
        $id = intval($_GET['id']);

        $row = $mysqli->query("SELECT * FROM entry WHERE id = $id")->fetch_assoc();
        if (!$row) die("No such entry");

        $row['date'] = date('Y-m-d H:i:s', $row['date']);
        $row['content'] = nl2br($row['content']);
        $row['header'] = htmlspecialchars($row['header']);

        require('templates/entry.php');
        break;

    case 'login':

        require('templates/login.php');

        break;

    case 'logout':

        unset($_SESSION['IS_ADMIN']);
        header('Location: .');

        break;

    case 'do-login':

        if ($_POST['login'] == 'login' && $_POST['password'] == 'password') {
            $_SESSION['IS_ADMIN'] = true;
            header('Location: .');
        } else {
            header('Location: ?act=login');
        }

        break;

    default:
        die("No such action");
}

/** $records = array(
    array(
        'id' => 1,
        'header' => 'Запись в блоге',
        'content' => 'Test'
    ),
    array(
        'id' => 2,
        'header' => 'Запись в блоге',
        'content' => 'Test'
    )
);

require('templates/list.php');
**/

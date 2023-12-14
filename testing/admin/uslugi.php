<?php global $pdo;
session_start(); ?>
<?php require_once '../functions/connect.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Административная панель</title>
</head>
<body>
<div style="text-align:center">
    <h1>Редактирование информации Услуг</h1>
    <?php if(!empty($_SESSION["login"])) :?>

        <?php echo "Добрый день, ".$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Bыйти</a>
        <br>
        <?php
        $sql=$pdo->prepare("SELECT * FROM uslugi");
        $sql->execute();
        while ($res=$sql->fetch(PDO::FETCH_OBJ)):?>
        <form action="/admin/uslugi/uslugi.php/<?php echo $res->title ?>" method="post" enctype="multipart/form-data">
            <?php echo $res->id ?> <br>
            <label>
                <input type="text" name="title" value="<?php echo $res->title ?>">
            </label>
            <label>
                <input type="text" name="price" value="<?php echo $res->price ?>">
            </label>
            <p>
                <input type="file" name="im">
            </p>
            <input type="submit" name="save" value="Соxранить">
        </form>
        <br>
        <img src="/admin/img/<?php echo $res->filename ?>" width="200">
    <?php endwhile?>
    <?php else:
        echo '<h2>Как Вы сюда попали?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>
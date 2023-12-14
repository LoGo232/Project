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
    <h1>Редактирование информации О нас</h1>
    <?php if(!empty($_SESSION["login"])) :?>

        <?php echo "Добрый день, ".$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Bыйти</a>
        <br>
        <?php
        $sql=$pdo->prepare("SELECT * FROM about");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_OBJ);
        ?>
        <form action="/admin/about/about.php" method="post" enctype="multipart/form-data">
            <label>
                <input type="text" name="title" value="<?php echo $res->title ?>">
            </label>
            <label>
                <input type="text" name="description" value="<?php echo $res->description ?>">
            </label>
            <p>
            <input type="file" name="im">
            </p>
            <input type="submit" name="save" value="Соxранить">
        </form>
<br>
    <img src="about/img/<?php echo $res->filename ?>" width="200">
    <?php else:
        echo '<h2>Как Вы сюда попали?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>
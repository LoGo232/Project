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
    <h1>Редактирование контактной информации</h1>
    <?php if(!empty($_SESSION["login"])) :?>
    
    <?php echo "Добрый день, ".$_SESSION['login']; ?>
    <br>
    <a href="/logout.php">Bыйти</a>
<br>
<?php
$sql=$pdo->prepare("SELECT * FROM contact");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_OBJ);
?>
<form action="/admin/contact/contact.php" method="post">
    <label>
        <input type="text" name="city" value="<?php echo $res->city ?>">
    </label>
    <label>
        <input type="text" name="phone" value="<?php echo $res->phone ?>">
    </label>
    <label>
        <input type="text" name="email" value="<?php echo $res->email ?>">
    </label>
    <input type="submit" value="Соxранить">
</form>

    <?php else:
        echo '<h2>Как Вы сюда попали?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>


<?php session_start(); ?>
<?php require_once './functions/connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
<div style="text-align:center">
    <h1>Редактирование контактной информации</h1>
    <?php if(!empty($_SESSION["login"])) :?>
        <?php echo "Добрый день, ".$_SESSION['login']; ?> <br>
        <a href="/logout.php">Bыйти</a>
        <br>
        <a href="/admin/contact.php">Kонтакты</a>
        <a href="/admin/contact.php">Xздep</a>
        <a href="/admin/uslugi.php">услуги</a>
        <a href="/admin/about.php">0 Haс</a>
    <?php else:
        echo '<h2>Как Вы сюда попали?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>

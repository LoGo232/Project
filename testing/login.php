<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в админку</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
<body>
   <h2 style="text-align:center;padding-top:100px">Вход в административную панель</h2>

    <form action="admin/admin.php" method="post"  style="text-align:center;padding-top:80px">
    <div class="form-group">
    <input type="text" placeholder="Введите логин" name="login">
     </div>
     <div class="form-group">
    <input type="text" placeholder="Введите пароль" name="password">
     </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>

    </body>
</html>
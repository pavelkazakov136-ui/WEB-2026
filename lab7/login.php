<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="settings/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="page page--login">
    <div class="login">
        <h1 class="login__title">Войти</h1>
        <div class="login__image">
            <img src="settings/img/SmileFace.png" alt="Sample image">
        </div>
        <div class="login__form">
            <form>
                <div class="login__field">
                    <label for="email" class="login__label login__label--email">Электропочта</label>
                    <input type="email" id="email" name="email"
                           placeholder="name@example.com" required>
                    <div class="login__hint">Введите электропочту в формате *****@***.**</div>
                </div>
                <div class="login__field">
                    <label for="password" class="login__label login__label--password">Пароль</label>
                    <input type="password" id="password" name="password"
                           placeholder="********" required>
                    <img src="settings/svg/Eye.svg" alt="Sample image" class="login__eye">
                </div>
                <a href="home.php" class="login__submit">Продолжить</a>
            </form>
        </div>
    </div>
</body>
</html>

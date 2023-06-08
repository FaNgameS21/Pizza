<?php
const ADMIN_LOGIN = 'admin';
const ADMIN_PASSWORD = 'admin';

function login($login, $password)
{
    if ($login === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

function isAuthorized()
{
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}

function logout()
{
    unset($_SESSION['authorized']);
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

if (isAuthorized()) {
    header("Location: admin.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Auth</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Pizza Food</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../script.js"></script>
</head>
<body>
    <header>
        <nav>
<a href="../index.html" class="logo-text"><span class="initial">Pizza</span>Food</a>
<ul class="menu">
   <li><a href="../index.html">Головна</a></li>
            <li><a href="../about.php">Про нас</a></li>
            <li><a href="../views/login.php?">Вхід</a></li>
</ul>

<ul class="mail">
    <li><a href="">info@devstudio.com</a></li>
    <li><a href="tel:+380961111111">+38 096 111 11 11</a></li>
</ul>
</nav>
<div class="mobile">
    <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="../index.html">Головна</a></li>
            <li><a href="../about.php">Про нас</a></li>
            <li><a href="../views/login.php?">Вхід</a></li>
        </ul>
    </nav>
</div>
    </header>
    <main>



</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./main.js"></script>





    <section class="sub_block new_dex">
       <form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Логін</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
        <small id="emailHelp" class="form-text text-muted">Ми ніколи не передаємо ваш логін кому-небудь.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Запам'ятати мене</label>
    </div>
    <button type="submit" class="btn btn-primary">Відправити</button>
</form>

    </section>
    </main>
    <?php 
    if (isAuthorized()) {
        header("Location: admin.php");
        exit;
    }
    ?><footer>
    <address>   
        <li><a href="../index.html" class="footer-logo"><span class="initial">Web</span>Studio</a></li>
        <ul> 
    <li><a href='https://goo.gl/maps/CPtrU1FHBa2aNyZL9' target='_blank' rel='noopener noreferrer nofollow'>C.Стецьки</a></li>
    <li><a href="mailto:info@devstudio.com" class="footer-mail">info@devstudio.com</a></li>
    <li><a href="tel:+380961111111" class="footer-num">+38 096 111 11 11</a></li>
    </ul>
    </address>
</footer>

</body>
</html>
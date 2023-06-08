<?php
require '../src/subscription.php';

$subscriptions = allSubscriptions();
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
<a href="../index.html" class="logo-text"><span class="initial">Web</span>Studio</a>
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
<script src="../main.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <span class="navbar-brand">Admin</span>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="../index.html">Вийти</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container pt-3" class="pt-3">
    <h1>Мої підписники</h1>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Ім'я</th>
                <th>Адреса</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $index => $subscription): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $subscription['name'] ?></td>
                <td><?= $subscription['email'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<footer class="fo">
    <address>   
        <li><a href="./index.html" class="footer-logo"><span class="initial">Web</span>Studio</a></li>
        <ul> 
    <li><a href='https://goo.gl/maps/CPtrU1FHBa2aNyZL9' target='_blank' rel='noopener noreferrer nofollow'>м. Київ, пр-т Лесі
        Украінки, 26</a></li>
    <li><a href="mailto:info@devstudio.com" class="footer-mail">info@devstudio.com</a></li>
    <li><a href="tel:+380961111111" class="footer-num">+38 096 111 11 11</a></li>
    </ul>
    </address>
</footer>

</body>
</html>
    
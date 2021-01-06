<?php
session_start();
if(!isset($_SESSION['is_login'])){
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MainPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link rel="shortcut icon" href="../imgs/Festival Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Sunflower:wght@300&display=swap" rel="stylesheet">


    <title>GSM Fixer</title>
</head>
<body>
    <header class="header">
        <a href="MainPage.php"><img src="../imgs/Festival Logo.png" style="width: 75px;" class="logo"></a>
    </header>
    <br>

    <nav class="nav">
        <ul>
            <li><a href="ReportPage.php">제보함</a></li>
            <li><a href="ReportMenu.php">게시판</a></li>
            <li><a href="LoginPage.php">로그인</a></li>
        </ul>
        <br>

        <div class="fontdiv">
        <?php echo $_SESSION['nickname'];?>님 환영합니다<br />
        <font class="font">강력하게 고쳐드립니다!</font>
        </div>
    <br>

    <banner class="banner">
        <nav>
            <img src="../imgs/Banner_img_1.PNG">
            <p class='glssi'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, numquam excepturi assumenda inventore vero fuga possimus commodi aliquid voluptate ducimus nemo maxime vel ipsum modi asperiores doloremque enim! Maiores, consectetur!</p>
            <img src="../imgs/bg.png" class="img1">
            <img src="../imgs/bg.png" class="img2">
            <img src="../imgs/bg.png" class="img3">
            <img src="../imgs/Festival Logo.png" class="icon1">
            <img src="../imgs/Festival Logo.png" class="icon2">
            <img src="../imgs/Festival Logo.png" class="icon3">
        </nav>
    </banner>
    <br>
</body>
</html>
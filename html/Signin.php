<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
    <link rel="stylesheet" href="../css/Signin.css">
    <link rel="shortcut icon" href="../imgs/Festival Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Sunflower:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <a href="../html/MainPage.html"><img src="../imgs/Festival Logo.png" class="logo" style="width: 75px;"></a><br><br><br><br><br><br>

    <div class="Signin"  style="display: table; margin-left: auto; margin-right: auto;">
        <h2>회원가입</h2>
            <form method="POST" action="../back/signup.php">
                ID : <input type="text" class="id"><br>
                PASSWORD : <input type="password" class="password"><br>
                CONFIRM : <input type="password" class="pwcheck"><br>
                NAME : <input type="text" class="name"><br>
                NUMBER : <input type="text" class="number"><br><br><br><br><br><br>
                <a href="../html/MainPage.php"><input type="submit" class="button" value="Signin"></a>
            </form>
    </div>
</body>
</html>
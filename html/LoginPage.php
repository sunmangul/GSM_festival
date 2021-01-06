<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/LoginPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="../imgs/Festival Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Sunflower:wght@300&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <header class="header">
    <a href="../html/MainPage.html"><img src="../imgs/Festival Logo.png" class="logo" style="width: 100px;"></a>
    </header>
    <br><br><br><br>

        <div class="login"  style="display: table; margin-left: auto; margin-right: auto;">
            <h2 class="login-text">Login</h2>
            <br><br>
                <div class="id-pw">
                    <form method="POST" action="../back/login.php">
                        아이디: <input type="text" class="id" name="uid"><br>
                        비밀번호: <input type="password" class="pw" name="upw"><br>
                        <input type="submit" value="로그인"></a><br>
                    </form>
                </div>
                <br><br><br>
                    <a href="Signin.php">회원가입하러가기</a>
        </div>
</body>
</html>
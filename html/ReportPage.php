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
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Sunflower:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/Festival Logo.png">
    <link rel="stylesheet" href="../css/ReportPage.css">
    <title>ReportPage</title>
</head>
<body>
    <a href="../html/MainPage.php"><img src="../imgs/Festival Logo.png" style="width: 75px;" class="logo"></a>
        <h2>제보하기</h2>
        <div class="div">
            <form class="form" method="POST" action="../back/Report.php" enctype="multipart/form-data">
                제목 : <input type="text" class="name" name="title"><br>
                <input type="hidden" value="40000" name="MAX_FILE_SIZE" />
                파일 : <input type="file" class="file" name="ufile"><br><br>
                <textarea rows="33" cols="180" style="display: table; margin-left: auto; margin-right: auto;" name="content"></textarea><br>
                <?php echo $_SESSION['id']; ?>
                <a href="../html/ReportMenu.php"><input type="submit" value="제보하기" class="button" style="width: 143px; height: 51px;"></a>
            </form>
        </div>
</body>
</html>
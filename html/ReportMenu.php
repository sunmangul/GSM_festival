<?php
session_start();
if(!isset($_SESSION['is_login'])){
}
    $mysql_hostname = '127.0.0.1';
    $mysql_username = 'root';
    $mysql_password = 'password';
    $mysql_database = 'member';
    $mysql_port = '3306';

    $dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port;
    $pdo = new PDO($dsn, $mysql_username, $mysql_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>ReportMenu</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ReportMenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
    <link rel="shortcut icon" href="../imgs/Festival Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Sunflower:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div id="board_area"> 
  <a href="../html/MainPage.php"><img src="../imgs/Festival Logo.png" style="width: 75px; height: 75px;" class="logo"></a>
    <table class="list-table">
      <thead class="menu">
          <tr>
              <th width="70">제목</th>
                <th width="500">작성자</th>
                <tbody>
                <?php
                 $nRows = $pdo->query('select count(*) from list')->fetchColumn(); 
                  for($i = 1;$i<=$nRows;$i++){
                    $stmt = $pdo->prepare("SELECT * FROM list where lid = $i");
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
              ?>
                  <tr>
                  <td width="1200"><a href='ReportCheck.php?lid=<?=$row['lid']?>'><?=$row['title']?></a></td>
                  <td width="100"><a href='ReportCheck.php?lid=<?=$row['lid']?>'><?=$row['uid']?></a></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </tr>
        </thead>
    </table>
  </div>
</body>
</html>
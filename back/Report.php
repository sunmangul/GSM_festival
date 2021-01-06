<?php

    $mysql_hostname = '127.0.0.1';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_database = 'member';
    $mysql_port = '3306';

    $dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port;

    $lid = $_POST['lid'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $uid = '1';
    
    $uploaddir = 'C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs\study\file_upload\file\\'. $_FILES['ufile'];
 
        try{

            $pdo = new PDO($dsn, $mysql_username, $mysql_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $stmt = $pdo->prepare("INSERT INTO list(lid, title, content, uid, file) VALUES(:lid, :title, :content, :uid, :file)");
            $stmt->bindParam(':lid', $lid, PDO::PARAM_STR);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':content', $content, PDO::PARAM_STR);
            $stmt->bindParam(':uid', $uid, PDO::PARAM_STR);
            $stmt->bindParam(':file', $uploaddir, PDO::PARAM_STR);
            $stmt->execute();

            echo "<script>alert('글이 제대로 작성되었습니다');</script>";
            echo "<script>location.href='../html/LoginPage.php';</script>";

        } catch (PDOException $e) {

            echo 'Connect failed : ' . $e->getMessage() . '';
            
        }
?>

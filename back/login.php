<?php 
    session_start();
    $mysql_hostname = '';
    $mysql_username = 'root';
    $mysql_password = 'shaki0920';
    $mysql_database = 'member';
    $mysql_port = '3306';

    $dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port;

    $login_id = $_POST['uid'];
    $login_pw = $_POST['upw'];

    try{

        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $pdo->prepare("SELECT * FROM user WHERE uid=:uid");
        $stmt->bindParam(':uid', $login_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // PDO::FETCH_ASSOC : 칼럼명이 키인 연관 배열을 반환합니다.

        if($login_id==$row['uid'] && $login_pw==$row['upw']){
            $_SESSION['is_login']=true;
            $_SESSION['nickname']=$row['name'];
            $_SESSION['id']=$row['id'];
            echo "<script>alert('로그인 되었습니다!');</script>";
            header('Location: ../html/MainPage.php');
            exit;

        }else{

            echo "<script>alert('아이디와 비밀번호를 확인해주세요.');</script>";
            echo "<script>location.href='../html/LoginPage.php';</script>";
        }

    } catch (PDOException $e) {

        echo 'Connect failed : ' . $e->getMessage() . '';
        
    }

?>

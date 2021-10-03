<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Data</title>
    <?php
    session_start();
    
    define('URL', dirname(dirname(__FILE__)));
    include_once(URL. "/Controllers/Middleware.php");
    
    if(isset($_GET['pesan']))
    {
        if($_GET['pesan'] == 'berhasil'){
            echo "Berhasil";
            echo $_SESSION['role'];
            echo $_SESSION['username'];
        }else{
            echo "gagal";
        }
    }
    ?>
</head>
<body>
    
</body>
</html>
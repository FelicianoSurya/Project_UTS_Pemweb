<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assets/css/admin/adminTable.css" rel="stylesheet">
    <!-- <script src="Assets/js/detailNews.js"></script> -->
    <?php
    define('URL', dirname(dirname(dirname(__FILE__))));
    include_once(URL . "/include_db/connection.php");   
    include(URL . '/Views/base/includecss.php');
    if(!isset($_SESSION['username'])){
        error_reporting(0);
    }
    ?>
    
    <?php
    include_once(URL . "/Controllers/Middleware.php");
    if(isset($_SESSION['role'])){
        include_once(URL . "/Controllers/UserController.php");
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");
    include_once(URL . "/Controllers/KomentarController.php");
    include_once(URL . "/Controllers/LikeController.php");
    include_once(URL . "/Controllers/RedirectController.php");
    ?>
    
</head>
<body>

<?php include_once(URL . '/Views/base/header.php'); ?>

<div class="py-5 mt-5 container">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h1>Employee</h1>
                    <p>Total</p>
                </div>
                <div class="d-flex col-2 my-auto justify-content-end flex-column">
                    <button class="button-add" type="submit" class="btn btn-primary">+ Add Employee</button>
                </div>
            </div>
        
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>Javascript Developer</td>
                        <td>Javascript Developer</td>

                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<?php include(URL . '/Views/base/footer.php') ?>

</body>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
</script>
</html>
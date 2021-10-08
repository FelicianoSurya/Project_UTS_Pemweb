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
    include_once(URL . "/Controllers/RedirectController.php");
    include_once(URL . "/Controllers/EmployeeController.php");

    $employees = fetchEmployee();
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
                    <a href="FormEmployee.php"><button class="button-add" type="submit" class="btn btn-primary">+ Add Employee</button></a>
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
                    <?php foreach($employees as $employee){ ?>
                    <tr>
                        <td><?php echo $employee->username ?></td>
                        <td><?php echo $employee->nama_depan ?></td>
                        <td><?php echo $employee->nama_belakang ?></td>
                        <td>
                            <form action="FormEmployee.php" method="POST">
                                <input type="hidden" name="username" value="<?php echo $employee->username ?>">
                                <input type="hidden" name="button" value="edit">
                                <button type="submit">Edit</button>
                            </form>
                            <form action="" method="POST">
                                <input type="hidden" name="username" value="<?php echo $employee->username ?>">
                                <input type="hidden" name="button" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
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
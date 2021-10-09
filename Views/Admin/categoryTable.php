<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assets/css/admin/adminTable.css" rel="stylesheet">
    <link href="Assets/css/admin/category.css" rel="stylesheet">\
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
    include_once(URL . "/Controllers/RedirectController.php");

    $kategories = fetchKategori();
    if(isset($_POST['button'])){
        $editData = fetchKategoriEdit();
    }

    if(isset($_POST['modalEdit'])){
        echo "
        <script>
        $(document).ready(function() {
            if($('#table').hasClass('col-5')){
                $('#table').removeClass('col-lg-5 col-12');
                $('#addForm').removeClass('col-lg-5 col-12 d-block')
            }
            else{
                $('#table').addClass('col-lg-5 col-12');
                $('#addForm').addClass('col-lg-5 col-12 d-block')
            }
        });
        </script>";
    }
    ?>
    
</head>
<body>

<?php include_once(URL . '/Views/base/adminHeader.php'); ?>


    <div class="py-5 mt-5 container">
        <div class="row justify-content-between">
            <div id="table">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h1>Category</h1>
                        <?php 
                        $conn = Database();
                        $sql = "SELECT * FROM kategori";
                        $query = mysqli_query($conn,$sql);
                        $row = mysqli_num_rows($query);
                        ?>
                        <p>Total <?php echo $row ?> Data</p>
                    </div>
                    <div class="col-4 my-auto text-end flex-column">
                        <button class="button-add" type="submit" class="btn btn-primary" id="addCategory">+ Add Category</button>
                    </div>
                </div>
            
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($kategories as $kategori){ ?>
                        <tr>
                            <td><?php echo $kategori->name ?></td>
                            <td class="d-flex">
                                <form   form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $kategori->id ?>">
                                    <input type="hidden" name="button">
                                    <button type="submit" name="modalEdit"><i class="fas fa-wrench"></i></button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $kategori->id ?>">
                                    <input type="hidden" name="button" value="DeleteKategori">
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="form-box py-4 container" id="addForm">
                <h1>News</h1>
                <hr>
                <form class="d-flex flex-column px-2"action="" method="POST" enctype="multipart/form-data">
                    <div class="d-flex">
                        
                        <input type="hidden" name="id" value="<?php echo $editData->id ?>">
                    </div>
                    <div class="row justify-content-between py-2">
                        <label class="col-md-2 col-12" for="nama">Nama </label>
                        <input class="col-md-9 col-12 rounded-pill" type="text" value="<?php if(isset($_POST['button'])) echo $editData->name ?>" name="nama" required />
                    </div>
                    <div class="row py-2 justify-content-end">
                        <div class="p-2 col-3">
                            <button class="button-add" type="submit" name="cancel" class="btn btn-primary">Cancel</button>
                        </div>
                        <div class="p-2 col-3">
                            <input class="button-add" type="submit" <?php if(!isset($_POST['button'])){ ?> name="addKategori" value="Submit" <?php
                         }else{ ?> name="editKategori" value="Update" <?php } ?> class="btn btn-primary">
                        </div>
                    </div>
                </form>
           
            </div>
        </div>
    </div>
<?php include(URL . '/Views/base/footer.php') ?>

</body>

<script>
    $(document).ready(function() {
        
    $('#example').DataTable();
    } );

    $( "#addCategory" ).click(function() {
        if($('#table').hasClass("col-5")){
            $('#table').removeClass("col-lg-5 col-12");
            $("#addForm").removeClass("col-lg-5 col-12 d-block")
        }
        else{
            $('#table').addClass("col-lg-5 col-12");
            $("#addForm").addClass("col-lg-5 col-12 d-block")
        }
    });
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Assets/css/admin/addNews.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- animate.js -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <?php
    
    define('URL', dirname(dirname(dirname(__FILE__))));

    include_once(URL . "/Controllers/Middleware.php");
    include_once(URL . "/include_db/connection.php");
    include_once(URL . "/Controllers/EmployeeController.php");

    include(URL . '/Views/base/includecss.php');

    if(isset($_POST['button'])){
        $editData = fetchEditEmployee();
    }

    ?>
</head>
<body>
    <?php include_once(URL . '/Views/base/adminHeader.php'); ?>

 
    <div class="container py-5">
        <div class="form-box py-4 container">
            <h1>Employee</h1>
            <hr>
            <form class="d-flex flex-column px-2" action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex">

                </div>
                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12" for="firstname">First Name </label>
                    <input class="col-md-9 col-12 rounded-pill" type="text" name="firstname" value="<?php if(isset($_POST['button'])) echo $editData->nama_depan ?>" required />
                </div>
                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12 rounded-pill" for="lastname">Last Name </label>

                    <input class="col-md-9 col-12 rounded-pill" type="text" name="lastname" value="<?php if(isset($_POST['button'])) echo $editData->nama_belakang ?>" required />
                </div>
                <div class="row justify-content-between py-2">
                <label class="col-md-2 col-12 rounded-pill" for="username">Username</label>
                    <input class="col-md-9 col-12 rounded-pill" type="text" name="username" value="<?php if(isset($_POST['button'])) echo $editData->username ?>" <?php if(isset($_POST['button'])) echo 'disabled' ?> required />
                    <?php if(isset($_POST['button'])){ ?>  <input class="col-md-9 col-12 rounded-pill" type="hidden" name="username" value="<?php if(isset($_POST['button'])) echo $editData->username ?>" required /> <?php } ?>
                </div>
                <div class="row justify-content-between py-2">
                <label class="col-md-2 col-12 rounded-pill" for="password">Password</label>
                <input class="col-md-9 col-12 rounded-pill" type="password" name="password" value="<?php if(isset($_POST['button'])) echo $editData->username ?>" <?php if(isset($_POST['button'])) echo 'disabled' ?> required /> 
                </div>
                </div>

                <div class="row py-2 justify-content-end">
                    <div class="p-2 col-xxl-1 col-md-2 col-sm-3 col-5">
                        <button class="button-add" type="submit" name="cancel" class="btn btn-primary">Cancel</button>
                    </div>
                    <div class="p-2 col-xxl-1 col-md-2 col-sm-3 col-5">
                        <input class="button-add" type="submit" <?php if(!isset($_POST['button'])){ ?> name="addEmployee" value="Submit" <?php }
                        else{ ?> name="editEmployee" value="Update" <?php } ?>class="btn btn-primary">
                    </div>
                </div>
            </form>
           
        </div>
    </div>
    

</body>
</html>
<?php 

$errorLogin = errorLogin();

if(!isset($_SESSION['role'])){
    if($login == 1 || $errorLogin == 1) {
        echo
        "<script>
            $(window).on('load', function(){
                $('#exampleModal').modal('show');
            });
        </script>";
    }
}

?>
<nav class="">
    <div class="navbar navbar-light">
    <div class="container-fluid container">
        <a class="navbar-brand w-25"><img src="./Assets/images/home/logo.png" alt="" class="w-100"></a>
        <form class="d-flex w-50 justify-content-end" method="POST" action="">
            <?php if(!isset($_SESSION['role'])) { ?>
            <button class="btn btnModal btn-login"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            <?php }else{ ?>
                <?php  if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'karyawan'){?>
            <a href="index.php" class="my-auto mx-1 btn btnModal btn-login" type="submit">Home</a>
            <?php } ?>
            <button class="mx-1 my-auto btn btnModal btn-login"type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="logout">Logout</button>
            <div class="d-flex justify-content-end ">
                <p class="p-2 m-auto d-none d-lg-block"><?php  if($_SESSION['role'] == 'pengguna'){ echo $pengguna->name ?></p>
                <div class="p-2 m-auto profile">
                    <img class="rounded-circle"src="./<?php echo $pengguna->image ?>" alt="profile">
                </div>
                <?php }else if($_SESSION['role'] == 'admin'){ ?>
                
                <p class="p-2 m-auto d-none d-lg-block">Admin</p>
                <div class="p-2 m-auto profile">
                    <img src="./Assets/images/home/blank.png" alt="profileAdmin">
                </div>
                <p class="p-2 m-auto d-none d-lg-block"><?php }else if($_SESSION['role'] == 'karyawan'){?> 
                
                <?php echo $employee->nama_depan . ' ' . $employee->nama_belakang ?></p>
                
                <div class="p-2 m-auto profile">
                    <img src="./Assets/images/home/blank.png" alt="profileAdmin">
                </div>
                <?php }?>
            </div>
            <?php } ?>
        </form>
    </div>
    </div>
    <div class="navbar navbar-2">
        <div class="container-fluid container collapse navbar-collapse ">
            <ul class="navigation-tab navbar-nav justify-content-start">
                <li class="nav-item">
                    <a class="nav-link navbar-head active" aria-current="page" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-bars"></i></a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>
<div class="collapse" id="collapseExample">
    <div class="container d-flex pt-1">
        <ul class="collapse-admin ">
            <li class="nav-item"></li>
            <li class="nav-item">
                <a href="Admin.php" class="nav-link">Dashboard</a>
            </li>
            <?php if($_SESSION['role'] == 'karyawan'){ ?>
            <li class="nav-item">
                <a href="NewsAdmin.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a href="CategoryTable.php" class="nav-link">Category</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item"><a href="Employee.php" class="nav-link">Employee</a></li>
            <?php } ?>
            <li class="nav-item"></li>
            
        </ul>
    </div>
    
 </div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <!-- <div class="modal-header"> -->
        <div class="titleModal">
        <h1 class="modal-title" id="exampleModalLabel">Log In</h1>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
            <label for="Username" class="labelModal">Username</label>
            <input class="form-control" type="text" name="Username" required />
            <label for="Password" class="labelModal">Password</label>
            <input class="form-control" type="password" name="Password" />
            <?php
                if($errorLogin == 1 && $captchaError == 'success')
                {
                    echo "<p style='color:red'>Username atau Password Salah!</p>";
                }
            ?>
            <div class="row flex-column">
            <div class="form-group pb-2">
                <img src="./include_db/captcha.php" alt="PHP Captcha">
            </div>
            <div class="form-group">
                <label>Enter Captcha</label>
                <input type="text" class="form-control" name="captcha" id="captcha">
            </div>
            <?php if($captchaError != 'success'){ ?>
            <p style="color:red;"><?php echo $captchaError ?></p>
            <?php } ?>
            </div>
        </div>
        
        <div class="modal-footer">
            <button class="btn btnModal" type="submit" name="login">Sign In</button>
        </div>
        </form>
        <p class="TanyaRegis">Belum memiliki akun? <a href="./Views/Register.php">Register</a></p>
    </div>
</div>
</div>
<?php 

$errorLogin = errorLogin();

if($login == 1 || $errorLogin == 1) {
    echo
    "<script>
        $(window).on('load', function(){
            $('#exampleModal').modal('show');
        });
    </script>";
}
?>

<nav class="">
    <div class="navbar navbar-light">
    <div class="container-fluid container">
        <a class="navbar-brand w-25"><img src="./Assets/images/home/logo.png" alt="" class="w-100"></a>
        <form class="d-flex w-25 justify-content-end" method="POST" action="">
            <?php if(!isset($_SESSION['role'])) { ?>
            <button class="btn btnModal btn-login"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            <?php }else{ ?>
            <button class="m-auto btn btnModal btn-login"type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="logout">Logout</button>
            <div class="d-flex justify-content-end">
                <p class="p-2 m-auto"><?php  if($_SESSION['role'] == 'pengguna'){ echo $pengguna->name ?></p>
                <div class="p-2 m-auto profile">
                    <img class="rounded-circle"src="./<?php echo $pengguna->image ?>" alt="profile">
                </div>
                <?php }else{ ?>
                <p>Admin</p>
                <img src="./Assets/images/home/blank.png" alt="profileAdmin">
                <?php } ?>
            </div>
            <?php } ?>
        </form>
    </div>
    </div>    
    <div class="navbar navbar-2">
        <div class="container-fluid container collapse navbar-collapse">
            <ul class="navigation-tab navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item category ">
                    <a class="nav-link " href="News.php">CATEGORY</a>
                    <ul class="dropdown-category ">
                        <?php foreach($kategories as $kategorie){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $kategorie->name ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">ABOUT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
            <input class="form-control" type="password" name="Password" required />
            <?php
                if($errorLogin == 1)
                {
                    echo "<p style='color:red'>Username atau Password Salah!</p>";
                }
            ?>
        </div>
        <div class="modal-footer">
            <button class="btn btnModal" type="submit" name="login">Sign In</button>
        </div>
        </form>
        <p class="TanyaRegis">Belum memiliki akun? <a href="./Views/Register.php">Register</a></p>
    </div>
</div>
</div>
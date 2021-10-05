<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Assets/css/regis.css">
    <script src="../Assets/js/register.js"></script>
    <?php

    define('URL', dirname(dirname(__FILE__)));
    include_once(URL . "/Controllers/Middleware.php");
    ?>
</head>
<body>
        <div class="container d-flex justify-content-center">
            <div class="formRegister">
                <h1>Register</h1>
                <div class="line"></div>
                <form method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="register" value="register">
                    <div class="topForm">
                        <div class="formNama">
                            <input class="form-control" type="text" placeholder="Nama Depan" name="NamaDepan" required />
                            <input class="form-control" type="text" placeholder="Nama Belakang" name="NamaBelakang" required />
                        </div>
                        <div class="profilePicture">
                            <label for="Profile">Profile Picture</label>
                            <input class="form-control" type="file" placeholder="Profile Picture" id="ProfilePic" name="ProfilePic" required />
                        </div>
                    </div>
                    <input class="form-control" type="date" placeholder="Tanggal Lahir" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" name="TanggalLahir" required />
                    <select name="JenisKelamin" class="form-select jenisKelamin" required>
                        <option value="">Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <input class="form-control" type="text" placeholder="Username" name="Username" required />
                    <input class="form-control" type="password" id="password" placeholder="Password" name="Password" onfocusout="cekKonfirmasi()" required />
                    <input class="form-control" type="password" id="konfirmasi" placeholder="Re-Type Password" name="Konfirmasi" onfocusout="cekKonfirmasi()" required />
                    <p id="error"></p>
                    <div class="butt">
                        <a href="../"><button class="btn" type="button">Back</button></a>
                        <button class="btn" type="submit" name="regis" >Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        
<?php include('Views/base/footer.php') ?>
	
</body>
</html>
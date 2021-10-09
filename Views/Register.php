<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
    <link rel="stylesheet" href="Assets/css/regis.css">
    <script src="Assets/js/register.js"></script>
    <?php

    define('URL', dirname(dirname(__FILE__)));
    include_once(URL . "/Controllers/Middleware.php");
    
    ?>
    <?php include(URL . '/Views/base/includecss.php');?>

</head>
<body>
    
        <div class="container d-flex justify-content-center align-items-center" style="height:90vh">
            <div class="formRegister col-lg-6 col-md-10 col-11">
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
                        <a href="index.php"><button class="btn" type="button">Back</button></a>
                        <button class="btn" type="submit" name="regis" >Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
	
</body>
</html>
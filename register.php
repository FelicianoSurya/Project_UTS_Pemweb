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
    <link rel="stylesheet" href="regis.css">
	<style>
	</style>
</head>
<body>
        <div class="container d-flex justify-content-center">
            <div class="formregis">
                <h1 class="regis">
                    Register
                </h1>
                <div class="line"></div>
                <form method="POST" id="dataregis">
                    <div class="namapic">
                        <div class="namal">
                            <!-- <label for="NamaDepan">Nama Depan</label> -->
                            <input class="form-control" type="text" placeholder="Nama Depan" name="NamaDepan"/>
                            <!-- <label for="NamaBelakang">Nama Belakang</label> -->
                            <input class="form-control" type="text" placeholder="Nama Belakang" name="NamaBelakang" />
                        </div>
                        <div class="profpic">
                            <label for="ProfilePic">Profile Picture</label>
                            <input class="form-control" type="file" placeholder="Profile Picture" name="ProfilePic" />
                        </div>
                        
                    </div>
                    <input class="form-control" type="text" placeholder="Tanggal Lahir" name="TanggalLahir" />
                    <input class="form-control" type="text" placeholder="Jenis Kelamin (P/L)" name="JenisKelamin" />
                    <input class="form-control" type="text" placeholder="Username" name="Username" />
                    <input class="form-control" type="password" placeholder="Password" name="pass"></input>
                    <input class="form-control" type="password" placeholder="Re-Type Password" name="pass2"></input>
                    <div class="butt">
                        <button class="btn" type="submit" name="regis" >Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        
	
</body>
</html>
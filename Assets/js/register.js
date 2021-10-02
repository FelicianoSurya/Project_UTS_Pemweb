function cekKonfirmasi(){
    var password = document.getElementById("password").value;
    var konfirmasi = document.getElementById("konfirmasi").value;
    if(password != konfirmasi){
        document.getElementById("error").innerHTML = "Re-Type Password doesn't match";
    }else{
        document.getElementById("error").innerHTML = "";
    }
}
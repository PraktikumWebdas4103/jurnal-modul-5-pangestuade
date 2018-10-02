<?php 
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>

<body>
    <header>
        <h3>Form Registrasi</h3>
    </header>

    <form action="prosesregis.php " method="POST">
        <table>
            
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" placeholder="nim"><span style="color: blue"><?php echo $errorNim; ?></span></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" /><span style="color: blue"><?php echo $errorNama; ?></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" placeholder="@gmail.com"><span style="color: blue"><?php echo $errorEmail; ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Save"></td>
                <td></td>
            </tr>
        </table>
    </form>
    </body>
</html>
<?php
    $errorNim = "";
    $errorNama = "";
    $errorEmail = "";
if(isset($_POST['submit'])){
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $email = $_POST['email'];
    if($nim == ""){
        $errorNim= "NIM tidak boleh kosong";
    }else{
        if(strlen($nim)<>10){
        $errorNim= "Harus 10 karakter";
        };
        if(!is_numeric($nim)){
            $errorNim= "Harus berupa angka";
        };
    };
    if($nama == ""){
        $errorNama= "Nama tidak boleh kosong";
    }else{
        if(strlen($nama)>=25){
        $errorNama= "Maksimal 25 karakter";
        };
    };
    if($email == ""){
        $errorEmail= "Email tidak boleh kosong";
    }else{

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorNama= "Format email salah";
        };
    };
}
?>

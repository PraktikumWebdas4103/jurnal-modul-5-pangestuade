
<?php

include("koneksi.php");
if(isset($_POST['submit'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    

    $sql = "INSERT INTO registrasi (nim, nama, email) VALUE ('$nim','$nama', '$email')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
   
        header('Location: prosesregis.php');
        echo "Data disimpan ke database";
    } else {
       
        echo "gagal";
    }


} 

?>

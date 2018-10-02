<form action=" " method="GET">
	<center>
	Komentar : <input type="text" name="kalimat" style="width: 15%; height: 10%; color: black; background-color: lightgrey; border-radius: 5px">
	<input type="submit" name="submit" value="Cari">
	</center>
</form>
	<?php
		if(isset($_GET["submit"])) {
			$kal=$_GET['kalimat'];
			$jumlahKata= str_word_count($kal);
			$jumlahParagraf= substr_count($kal, ".");
			$jumlahKarakterDanSpasi= strlen($kal);
				echo "Output :<br><br>";
				echo "Jumlah kata : $jumlahKata <br>";
				echo "Jumlah paragraf : $jumlahParagraf <br>";
				echo "Jumlah karakter dan spasi : $jumlahKarakterDanSpasi <br>";
 }
?>

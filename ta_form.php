<form action="" method="post">
	<table align="center">
		<tr>
			<td colspan="3" align="center"><h2>Data Diri</h2></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="NIM"></td><br>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td> 
			<td><input type="text" name="Nama"></td><br>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td><br>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="Tanggal_Lahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="JK" value="Perempuan">Perempuan
				<input type="radio" name="JK" value="Laki Laki"> Laki-laki</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="Prodi">
					<option value="">==Pilih Program Studi==</option>
					<option value="Manajemen Informatika">Manajemen Informatika</option>
					<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
					<option value="Sistem Multimedia">Sistem Multimedia</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Manajemen Bisnis">Manajemen Bisnis</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
				</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="Fakultas">
					<option value="">==Pilih Fakultas==</option>
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FRI">FRI</option>
					<option value="FTE">FTE</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
				</select></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td>:</td>
			<td>	<textarea placeholder="Masukkan Komentar Disini" name="komentar"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td><br>
		</tr>
	</table>
</form>

<?php

	if (isset($_POST['submit'])) {
		$nim = $_POST['NIM'];
		$nama = $_POST['Nama'];
		$email = $_POST['email'];
		

		$cek = true;


		if (empty($nim)) {
			echo "NIM tidak boleh kosong<br>";
			$cek = false;
		}else{
			if (strlen($nim)!=10 && !is_numeric($nim)) {
				echo "NIM Harus 10 digit dan angka<br>";
				$cek = false;
			}
		}
		
		if (empty($nama)) {
			echo "Nama tidak boleh kosong<br>";
			$cek = false;
		}else{
			if (strlen($nama)>20) {
				echo "Maksimal panjang nama 20 huruf<br>";
				$cek = false;
			}	
		}
		
		if (empty($email)) {
			echo "Email tidak boleh kosong";	
			$cek = false;
		}else{
			if (!strpos($email, '@') || !strpos($email, '.com')) {
				echo "Format email harus @ .com<br>";
				$cek = false;
			}
		}

		$tgllahir = $_POST['Tanggal_Lahir'];
		$prodi = $_POST['Prodi'];
		$fakultas = $_POST ['Fakultas'];
		if (isset($_POST['JK'])) {
			$jk = $_POST['JK'];	
		}

		if ($_POST['komentar']>50 || $_POST['komentar']=="") {
			echo "Tulis Komentar";
		} else{
			$komen = $_POST['komentar'];
		}

		

		if ($cek) {
			$koneksi = mysqli_connect('localhost','root','','ta5');
			$sql = "INSERT INTO t_jurnal1 values ('$nim','$nama','$email','$tgllahir','$jk','$prodi','$fakultas','$komen') ";
			mysqli_query($koneksi, $sql);
			header("Location:view.php");
		}
		
	}

?>

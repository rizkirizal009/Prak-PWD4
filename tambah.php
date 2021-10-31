<html>
<head>
<title>Tambah data mahasiswa</title>
<style>
.error {
color: #FF0000;
}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$namaErr = $nimErr = $genderErr = $alamatErr = "";
$nama = $nim = $gender = $tgl_lahir = $alamat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nama"])) {
$namaErr = "Nama harus diisi";
} else {
$nama = test_input($_POST["nama"]);
}
if (empty($_POST["nim"])) {
$nimErr = "NIM harus diisi";
} else {
$nim = test_input($_POST["nim"]);
}
if (empty($_POST["website"])) {
$alamat = "";
} else {
$alamat = test_input($_POST["website"]);
}
if (empty($_POST["tgl_lahir"])) {
$tgl_lahir = "";
} else {
$tgl_lahir = test_input($_POST["tgl_lahir"]);
}
if (empty($_POST["gender"])) {
$genderErr = "Gender harus diisi";
} else {
$gender = test_input($_POST["gender"]);
}
}
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h2>Posting Komentar </h2>
<p><span class="error">* Harus Diisi.</span></p>
<a href="validasi.php">Go to Home</a>
<br /><br />
<form action="tambah.php" method="post" name="form1">
<table width="25%" border="0">
<tr><td>Nim</td>
<td>
<input type="text" name="nim">
<span class="error"> <?php echo $nimErr; ?></span>
</td>
</tr>
<tr>
<td>Nama</td>
<td>
<input type="text" name="nama">
<span class="error"> <?php echo $namaErr; ?></span>
</td>
</tr>
<tr>
<td>Gender (L/P)</td>
<td><input type="text" name="jkel"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="tgllhr"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Tambah"></td>
</tr>
</table>
</form>
<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$alamat = $_POST['alamat'];
$tgllhr = $_POST['tgllhr'];
// include database connection file
include_once("koneksi.php");
// Insert user data into table
$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr)
VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
// Show message when user added
echo "Data berhasil disimpan. <a href='hasil.php'>View Users</a>";
}
?>
</body>


</html>
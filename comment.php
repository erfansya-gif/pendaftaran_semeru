<?php
$username = $_POST['username'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
echo "hasil komentar <br>";
echo "Usename anda = $username <br>";
echo "Email anda = $email <br>";
echo "Pesan anda = $pesan <br>";

?>
<br><input type="button" value="Kembali" onclick="self.history.back()">
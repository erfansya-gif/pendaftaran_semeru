<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'pendaftaran_semeru'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT nik, nama, tanggal_lahir, jenis_kelamin, alamat, agama, status, telepon
		FROM sales';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
				<th>nik</th>
				<th>nama</th>
				<th>tanggal_lahir</th>
                <th>jenis_kelamin</th>
                <th>alamat</th>
                <th>agama</th>
                <th>status</th>
                <th>telepon</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_assoc($query))
{
	echo '<tr>
			<td>'.$row['nik'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.number_format($row['tanggal_lahir'], 0, ',', '.').'</td>
			<td class="right">'.$row['jenis_kelamin'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
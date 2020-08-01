<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px solid black">

<tr>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Jurusan</th>
<th>Angkatan</th>
</tr>
<?php foreach ($mahasiswa as $mhs) :?>

<tr>
<td><?php echo $mhs['nim']; ?></td>
<td><?php echo $mhs['nama_mahasiswa']; ?></td>
<td><?php echo $mhs['jurusan']; ?></td>
<td><?php echo $mhs['angkatan']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil data</title>
</head>
<body>
	<center>
	<a href="User/add" style="color: #23CF5F">Tambah</a>
	<table border="1" class="table">
	<tr>
		<th>Username</th>
		<th>Fullname</th>
		<th>Level</th>
		<th colspan="2">Action</th>
	</tr>
	<?php foreach ($isi->result() as  $value):?>
	<tr>
		<td><?php echo $value->username; ?></td>
		<td><?php echo $value->fullname; ?></td>
		<td><?php echo $value->level; ?></td>
		<td><a style="color: #F97A66" href="delete/<?php echo $value->id ?>">hapus</a></td>
		<td><a style="color: #FCC04E" href="User/update/<?php echo $value->id ?>">edit</a></td>
	</tr> 
	<?php endforeach ?>
	</table>
	</center>
</body>
</html>
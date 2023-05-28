<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compotible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>nama</td>
			<td>kelas</td>
			<td>nis</td>
			<td>aksi</td>
		</tr>

		@foreach ($data as $data)
		<tr>
			<td>{{$data->nama}}</td>
			<td>{{$data->kelas}}</td>
			<td>{{$data->nis}}</td>
			<td><a href="/hapus_data/{{$data->id}}">hapus</a>
				<a href="/edit_data/{{$data->id}}">edit</a>


			</td>
		</tr>



		@endforeach



	</table>

</body>
</html>
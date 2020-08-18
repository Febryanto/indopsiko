<!DOCTYPE html>
<html>
<head>
	<title>PT. Indopsiko Indonesia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Seluruh Pelamar</h4>
		<h6><a target="_blank" href="{{route('home')}}">PT. Indopsiko - Human Resource Development</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Posisi</th>
				<th>nama_lengkap</th>
                <th>nik</th>
                <th>Pendidikan</th>
                <th>npwp</th>
                <th>tempat,tanggal lahir</th>
                <th>jenis kelamin</th>
                <th>No Handphone</th>
                <th>No Sim</th>
                <th>Nama Ibu Kandung</th>
                <th>CV</th>
                <th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->created_at}}</td>
				<td>{{$p->posisi}}</td>
				<td>{{$p->nama_lengkap}}</td>
				<td>{{$p->nik}}</td>
                <td>{{$p->pendidikan}}</td>
                <td>{{$p->npwp}}</td>
                <td>{{$p->tempat_lahir}}, {{$p->tanggal_lahir}}</td>
                <td>@if ($p->jenis_kelamin == 'L')
                    Laki-Laki
                @else
                    Perempuan
                @endif</td>
				<td>{{$p->no_hp}}</td>
				<td>{{$p->sim}}</td>
				<td>{{$p->nama_ibu_kandung}}</td>
                <td><a href="{{route('getDownload.pelamar', $p->id_pelamar)}}" title="Download CV"><i class="fa fa-download"></i>{{$p->cv}}</a></td>
                <td>{{$p->alamat}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #309ee7;
  color: white;
}
</style>
</head>
<body>
<center><h1>Data mahasiswa yang lolos tahap pertama seleksi Berkas</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nim</th>
    <th>Universitas</th>
    <th>Prodi</th>
    <th>Status</th>

  </tr>
<?php $no =1; ?>
  @foreach ($mahasiswa_penerima as $item)

  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $item->nama }}</td>
    <td>{{ $item->nim }}</td>
    <td>{{ $item->universitas }}</td>
    <td>{{ $item->prodi }}</td>
    <td>{{ $item->status }}</td>

  </tr>


  @endforeach
</table>
</center>

</body>
</html>



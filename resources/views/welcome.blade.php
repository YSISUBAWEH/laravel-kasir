<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniel Store</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

   <div class="container">
    <h2 class="text-center">Daftar Nama Pelangan</h2>

  <form action="/tambah" method="POST">
    @csrf
  <div class="form-group">
    <label>Nama Pelanggan</label>
    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pelanggan">
  </div>
  <div class="form-group">
    <label>No Tlp</label>
    <input type="number" class="form-control" placeholder="No Tlp" name="no_tlp">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
  </div> 
  <div class="form-group">
    <label>No Ktp</label>
    <input type="number" class="form-control" placeholder="No Ktp" name="no_ktp">
  </div> 
  <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
</form>
<h2 class="text-center">Table Pelanggan</h2>
<table class="table">
  <thead class="thead-dark">
  
   <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">No Tlp</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Ktp</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pelanggan as $pelanggan)
    <tr>
    <td>{{ $pelanggan->id}}</td>
    <td>{{ $pelanggan->nama_pelanggan}}</td>
    <td>{{$pelanggan->no_tlp}}</td>
    <td>{{$pelanggan->alamat}}</td>
    <td>{{$pelanggan->no_ktp}}</td>
    <td>
    <a href="" class="btn btn-warning">Edit</a>
    <a href="/hapus/{{ $pelanggan->id }}" class="btn btn-danger">Hapus</a>
    </td>
    </tr>

    @endforeach
 
  </tbody>
</table>


   </div>

</body>
</html>


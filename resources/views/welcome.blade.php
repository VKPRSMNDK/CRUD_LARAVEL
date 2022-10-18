<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Welcom Laravel</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">form penambahan penjualan</h2>
        <form method="POST" action="/tambah">
            @csrf
  <div class="form-group">
    <label>id_barang</label>
    <input type="text" class="form-control" name="id_barang">
  </div>
   <div class="form-group">
    <label>nama_barang</label>
    <input type="text" class="form-control" name="nama_barang">
     <div class="form-group">
    <label>harga</label>
    <input type="text" class="form-control" name="harga">
    
  </div>
   <div class="form-group">
    <label>stok</label>
    <input type="text" class="form-control" name="stok">
    
  </div>
    
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">id barang</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga</th>
      <th scope="col">Stok</th>
      <th scope="col">aksi</th>
    </tr>
    @foreach($toko as $toko)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$toko->id_barang}}</td>
        <td>{{$toko->nama_barang}}</td>
        <td>{{$toko->harga}}</td>
        <td>{{$toko->stok}}</td>
        <td>
            
              <button class="btn btn-primary mt-4"><a href="/hapus/{{$toko->id}}" style="color : white; text-decoration: none;">hapus</a></button>
               <button class="btn btn-primary mt-4"><a href="/edit/{{$toko->id}}" style="color : white; text-decoration: none;">edit</a></button>
                

        </td>
    </tr>
    @endforeach
  </thead>
  <tbody>
  </tbody>
</table>

    </div>

</body>
</html>
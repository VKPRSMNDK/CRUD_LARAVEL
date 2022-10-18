<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	

<body>
	<div class="container">
		<form method="POST" action="/edit/{{ $toko->id }}">
            @csrf
  <div class="form-group">
    <label>id_barang</label>
    <input type="text" class="form-control" name="id_barang" value="{{ $toko->id_barang }}" required>
  </div>
   <div class="form-group">
    <label>nama_barang</label>
    <input type="text" class="form-control" name="nama_barang" value="{{ $toko->nama_barang }}" required>
     <div class="form-group">
    <label>harga</label>
    <input type="text" class="form-control" name="harga" value="{{$toko->harga }}" required>
    
  </div>
   <div class="form-group">
    <label>stok</label>
    <input type="text" class="form-control" name="stok" value="{{ $toko->stok }}" required>
    
  </div>
    
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
		
	</div>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Penjualan Barang Elektronik</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Pembeli</th>
      <th scope="col">Nama Alat Elektronik</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>iman</td>
      <td>kulkas</td>
      <td>3000000</td>
      <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Hapus</button</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jason</td>
      <td>tv</td>
      <td>2500000</td>
      <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Hapus</button</td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
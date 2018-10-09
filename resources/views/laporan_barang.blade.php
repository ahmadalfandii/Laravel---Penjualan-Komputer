<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
    <title>
        Laporan Barang
    </title>
</head>
<body  style="background: white;">
    <div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <center>
                <h3>
                    LAPORAN BARANG <br>
                </h3>
            </center>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ number_format($row->harga_jual,0,'','.') }}</td>
                        <td>{{ $row->stok }}</td>
                        <td>
                          <img src="{{ Storage::url($row->gambar) }}"
                          width="70" height="70" class="img img-thumbnail img-rounded" align="bottom">
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
</body>
</html>

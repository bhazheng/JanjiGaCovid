<div class="row" id="tabel_layanan_kesehatan">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Layanan Kesehatan</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Layanan Kesehatan</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($lkesehatans as $lokasi)

                            <tr>
                                <td>{{ $lokasi->layanan_kesehatan }}</td>
                                <td>{{ $lokasi->kecamatan }}</td>
                                <td>{{ $lokasi->kelurahan }}</td>
                                <td>{{ $lokasi->alamat }}</td>
                                <td><a class="nav-link btn btn-success" aria-expanded="false" href="#">+ Edit</a></td>
                                <td><a class="nav-link btn btn-danger"aria-expanded="false" href="#">delete</a></td>
                            </tr>

                            @endforeach
                        
                        </tbody>
                    </table>
                    <a class="nav-link btn btn-success" aria-expanded="false" href="{{ url('add_lkes_view') }}">+ Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
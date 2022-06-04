<div class="row" id="tabel_layanan_kesehatan">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Layanan Kesehatan</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color:white">Nama Layanan Kesehatan</th>
                                <th style="color:white">Kecamatan</th>
                                <th style="color:white">Kelurahan</th>
                                <th style="color:white">Alamat</th>
                                <th style="color:white"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($lkesehatans as $lokasi)

                            <tr>
                                <td>{{ $lokasi->layanan_kesehatan }}</td>
                                <td>{{ $lokasi->kecamatan }}</td>
                                <td>{{ $lokasi->kelurahan }}</td>
                                <td>{{ $lokasi->alamat }}</td>
                                <td><a class="nav-link btn btn-success" aria-expanded="false" href="{{ url('updateLokasi', $lokasi->id) }}">+ Edit</a></td>
                                <td><a class="nav-link btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" aria-expanded="false" href="{{ url('deleteLokasi', $lokasi->id) }}">delete</a></td>
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
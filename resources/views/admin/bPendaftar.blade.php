<div class="row" id="tabel_pendaftar" >
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pendaftar Vaksin</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color:white">Nama</th>
                                <th style="color:white">NIK</th>
                                <th style="color:white">Tanggal Lahir</th>
                                <th style="color:white">Jenis Kelamin</th>
                                <th style="color:white">Email</th>
                                <th style="color:white">Alamat</th>
                                <th style="color:white">Provinsi</th>
                                <th style="color:white">Kota</th>
                                <th style="color:white">FasKes</th>
                                <th style="color:white">Jenis Vaksin</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($daftars as $data)

                            <tr> 
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->lahir }}</td>
                                <td>{{ $data->jeniskelamin }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->provinsi }}</td>
                                <td>{{ $data->kota }}</td>
                                <td>{{ $data->lokasi }}</td>
                                <td>{{ $data->jenisvaksin }}</td>
                                <td><a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="{{ url('updatePendaftar', $data->id) }}">+ Edit</a></td>
                                <td><a class="nav-link btn btn-danger create-new-button" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" aria-expanded="false" href="{{ url('deletePendaftar', $data->id) }}">delete</a></td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="{{ url('add_pendaftar_view') }}">+ Tambah Data</a>
            </div>
        </div>
    </div>
</div>
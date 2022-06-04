<div class="row " id="tabel_vaksin">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Jenis Vaksin</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color:white">Jenis Vaksin</th>
                                <th style="color:white">Deskripsi </th>
                                <th style="color:white"></th>
                                <th style="color:white"></th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($vaksins as $vaksin)

                            <tr>
                                <td>{{ $vaksin->nama_vaksin }}</td>
                                <td>{{ $vaksin->deskripsi_vaksin }}</td>
                                <td><a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="#">+ Edit</a></td>
                                <td><a class="nav-link btn btn-danger create-new-button"onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" aria-expanded="false" href="{{ url('deleteVaksin', $vaksin->id) }}">delete</a></td>
                            </tr>
                            
                            @endforeach

                        </tbody>
                    </table>

                    <a class="nav-link btn btn-success small-button" aria-expanded="false" href="{{ url('add_vaccine_view') }}">+ Tambah Data</a>

                </div>
            </div>
        </div>
    </div>
</div>
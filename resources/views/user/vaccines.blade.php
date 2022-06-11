<div class="page-section" id="jenisVaksin">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" style="color:#fff; font-weight:bolder;">JENIS VAKSIN</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($vaksins as $vaksin)

            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="vaccineimage/{{ $vaksin->image }}" alt="vaksin">
                    </div>
                    <div class="body">
                        <p class="text-xl mb-1">{{ $vaksin->nama_vaksin }}</p>
                        <span class="text-s text-grey-500">{{ $vaksin->deskripsi_vaksin }}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</div>
@extends('layout.templateDesc')

@section('content')
    <div class="overlay"></div>
    <div class="title">
        <p class="text-center fs-3 mb-0 fw-bold">LH01 - GSLC 02 - Controller</p>
        <p class="text-center fs-4 mb-0">Integrate your web with Controller</p>
        <p class="text-center fs-5 fw-light">2440031521 - Vinsen Nawir</p>
        <br>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card text-center border-dark">
                <div class="card-header">
                    Mahasiswa
                </div>
                <div class="card-body">
                    <p class="card-text">Berisi Data Mengenai Mahasiswa</p>
                    <a href="/mahasiswa" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center border-dark">
                <div class="card-header">
                    Dosen
                </div>
                <div class="card-body">
                    <p class="card-text">Berisi Data Mengenai Dosen</p>
                    <a href="/dosen" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="px-2 py-2 mt-3" style="backdrop-filter: blur(33px);">
        <br>
        <p class="fw-bold"> Penjelasan: </p>
        <p style="text-align: justify;">
            <p>Berikut tampilan website yang telah saya buat dengan menggunakan framework <strong> Laravel versi 8 </strong> dan memanfaatkan Laravel feature blade. Mengenai CSS Framework, saya menggunakan <strong> Bootstrap 5. </strong></p>
            <p>Terdapat <strong> update  </strong> yang telah dilakukan pada website ini yaitu melakukan integrasi dengan Controller dan peningkatan dalam tampilan website.</p>
            <p class="mb-1">File controller yang telah dibuat antara lain:</p>
            <ul>
                <li>DosenController.php</li>
                <li>MahasiswaController.php</li>
            </ul>
        </p>
    </div>
@endsection

@extends('layout.templateDesc')

@section('content')
    <div class="title">
        <p class="text-center fs-3 fw-bold">LH01 - GSLC 01 - Blade</p>
        <p class="text-center fs-3 fw-light">2440031521 - Vinsen Nawir</p>
        <br>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    Mahasiswa
                </div>
                <div class="card-body">
                    <p class="card-text">Berisi Data Mengenai Dosen</p>
                    <a href="/mahasiswa" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
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

    <div>
        <br>
        <p class="fw-bold"> Penjelasan: </p>
        <p style="text-align: justify;">
            <p>Berikut tampilan website yang telah saya buat dengan menggunakan framework <strong> Laravel versi 8 </strong> dan memanfaatkan Laravel feature blade. Mengenai CSS Framework, saya menggunakan <strong> Bootstrap 5. </strong></p>
            <p>Penggunaan Conditional Rendering terdapat pada bagian file:</p>
            <ul>
                <li>mahasiswa.blade.php (if, elseif, endif)</li>
            </ul>

            <p>Penggunaan Loop Rendering terdapat pada bagian file:</p>
            <ul>
                <li>mahasiswa.blade.php (foreach)</li>
                <li>templateContent.blade.php (forelse) </li>
            </ul>

            <p>Penggunaan Reusable Component Tag terdapat pada bagian file:</p>
            <ul>
                <li>include</li>
                <ul>
                    <li>templateContent.blade.php</li>
                    <li>dosen.blade.php</li>
                    <li>mahasiswa.blade.php</li>
                </ul>
                <li>extends</li>
                <ul>
                    <li>dosen.blade.php</li>
                    <li>mahasiswa.blade.php</li>
                    <li>home.blade.php</li>
                </ul>
                <li>yields</li>
                <ul>
                    <li>templateDesc.blade.php</li>
                    <li>templateContent.blade.php</li>
                </ul>
                <li>section</li>
                <ul>
                    <li>dosen.blade.php</li>
                    <li>mahasiswa.blade.php</li>
                    <li>home.blade.php</li>
                </ul>
            </ul>

        </p>
    </div>
@endsection

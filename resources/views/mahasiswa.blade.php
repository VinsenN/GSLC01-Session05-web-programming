@extends('layout.templateContent')

<?php
    $sum = 0;
    $avg = 0;
    $n = count($mahasiswa);
    foreach ($mahasiswa as $nama => $nilai) {
        $sum += $nilai;
    }

    $avg = $sum / $n;
?>

@section('content')
    <p class="text-center fs-3 fw-bold">
        Data Nilai Mahasiswa {{$class}}
    </p>

    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Statistik
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body font-monospace">
            <p>Jumlah Mahasiswa: {{$n}}</p>
            <p>Total Nilai: {{$sum}}</p>
            <p style="margin: 0">Rata-rata Nilai: {{$avg}}</p>
        </div>
    </div>

    <div>
        @include('template.templateTable', ['data' => $mahasiswa, 'col1' => 'Nama', 'col2' => 'Nilai'])
    </div>
    <div>
        @if ($avg >= 80)
            <div class="alert alert-success" role="alert">
                Nilai rata-rata kelas {{$class}} <b>baik</b>
            </div>
        @elseif ($avg <= 60)
            <div class="alert alert-danger" role="alert">
                Nilai rata-rata kelas {{$class}} <b>buruk</b>
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                Nilai rata-rata kelas {{$class}} <b>normal </b>
            </div>
        @endif
    </div>
@endsection

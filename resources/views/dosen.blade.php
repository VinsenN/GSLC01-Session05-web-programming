@extends('layout.templateContent')

@section('content')
    <p class="text-center fs-3 fw-bold">
        Data Dosen Kelas {{$class}}
    </p>

    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Statistik
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body font-monospace">
            <p style="margin: 0">Jumlah Dosen: {{count($dosen)}}</p>
        </div>
    </div>

    <div>
        @include('template.templateTable', ['data' => $dosen, 'col1' => 'Dosen', 'col2' => 'ID'])
    </div>
@endsection

@extends('voyager::master')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <div class="panel panel-default"> <!-- Menambahkan panel -->
                            <div class="panel-body">
                                <table class="table table-bordered text-center"> <!-- Tambahkan kelas table-bordered dan text-center -->
                                    <thead class="thead-primary">
                                        <tr>
                                            @foreach($artefacts as $artefact)
                                                <th style="font-weight: bold; background-color: #f0f0f0;">{{ $artefact->name }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $maxColumns = max(count($artefacts), count($phases));
                                        @endphp
                                        @foreach($phases as $phase)
                                            <tr>
                                                <th scope="row" class="scope">{{ $phase->name }}</th>
                                                @for($i = 0; $i < $maxColumns - 1; $i++)
                                                    <td></td>
                                                @endfor
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* CSS Anda di sini */
        /* Hapus tanda <link> di dalam blok CSS */
        /* Penyesuaian margin-top pada .panel panel-default */
        .panel.panel-default {
            margin-top: 100px; /* Atur margin sesuai kebutuhan Anda */
            width: auto;
            height: auto;
            margin-bottom: 30px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0 10px rgba(1, 41, 112, 0.1);
            height: auto;
            padding: 50px;
        }

        .scope {
            font-weight: bold;
            background-color: #f0f0f0;
            /* Properti lain yang mungkin Anda ingin tambahkan */
        }
    </style>
@endsection

@section('javascript')
    <script>
        // Skrip JavaScript Anda di sini
    </script>
@endsection

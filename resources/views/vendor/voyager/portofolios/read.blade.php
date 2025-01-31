@extends('voyager::master')

@section('content')
    <section>
        <main id="main">
            <div class="container"> <!-- Container untuk mengatur lebar konten -->
                <div class="row"> <!-- Mengatur container untuk komponen fase -->
                    @foreach ($phasesWithArtefacts as $phase)
                        <div class="col-md-6 phase"> <!-- Menggunakan col-md-4 untuk grid -->
                            <div class="d-flex align-items-center">
                                <h5 class="card-title">{{ $phase->name }}</h5>
                            </div>
                            <div class="btn-container">
                                @foreach ($phase->artefact as $artefact)
                                    @php
                                        $category = $artefact->category ?? null;
                                        $iconClass = 'fa fa-cube'; // Ikon default

                                        switch ($category) {
                                            case 1:
                                                $categoryRoute = route('diagram', ['portofolio_id' => $portofolio->id, 'artefact_id' => $artefact->id]);
                                                $iconClass = 'fa fa-chart-pie'; // Ikon diagram
                                                break;
                                            case 2:
                                                $categoryRoute = route('matrix', ['portofolio_id' => $portofolio->id, 'artefact_id' => $artefact->id]);
                                                $iconClass = 'fa fa-table'; // Ikon table
                                                break;
                                            case 3:
                                                $categoryRoute = route('catalog', ['portofolio_id' => $portofolio->id, 'artefact_id' => $artefact->id]);
                                                $iconClass = 'fa fa-list'; // Ikon list
                                                break;
                                            case 4:
                                                $categoryRoute = route('text', ['portofolio_id' => $portofolio->id, 'artefact_id' => $artefact->id]);
                                                $iconClass = 'fa fa-pencil'; // Ikon pensil dan kertas kosong
                                                break;
                                            default:
                                                $categoryRoute = route('admin');
                                                // Ikon default akan tetap digunakan jika Category tidak sesuai dengan kondisi di atas
                                                break;
                                        }
                                    @endphp

                                    <button onclick="navigateToPage('{{ $categoryRoute }}')" class="btn btn-{{ in_array($artefact->id, $checkedArtefacts) ? 'success' : 'default' }}" {{ in_array($artefact->id, $checkedArtefacts) ? '' : 'disabled' }}>
                                        <div class="btn-content">
                                            <i class="{{ $iconClass }}"></i> <!-- Menambahkan ikon -->
                                            <span class="btn-text">{{ $artefact->name }}</span>
                                        </div>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </section>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        function navigateToPage(route) {
            window.location.href = route;
        }
    </script>
@endsection

@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .row{
            margin-top: 1px;
            margin-bottom: 10px;
            justify-content:center;     
        }

        .container{
            justify-content:center;
            margin-bottom: 250px;
            margin-left: 150px;
        }

        .phase {
            margin-bottom: 100px;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
            padding: 20px;
            margin-right:65px;
            text-align: center; /* Mengatur teks ke tengah secara horizontal */
            width: 52rem;
            justify-content:center;
        }

        .btn-container {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            white-space: normal; /* Mengatur teks agar tidak terpotong */   
        }

        .btn-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }


        .btn-container button {
            white-space: normal; /* Mencegah teks terpotong */
            overflow: hidden; /* Mengatasi teks yang panjang */
            text-overflow: ellipsis; /* Tambahkan titik-titik jika teks terlalu panjang */
            width: 110px;
            height: 100px;
            margin: 5px; /* Adjust the margin between buttons */
            font-size: 14px;
            padding: 10px;
            text-align: center; /* Mengatur teks di tengah tombol secara horizontal */
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: none; /* Menghilangkan border dari tombol */
            background-color: transparent; /* Menghilangkan latar belakang tombol */
            cursor: pointer; /* Mengubah kursor menjadi tangan saat mengarah ke tombol */
            outline: none; /* Menghilangkan border focus pada tombol */
        }

        .btn-text {
            text-align: center; /* Mengatur teks di tengah tombol secara horizontal */
        }

        #main {
            margin-top: 40px;
            padding: 20px 30px;
            transition: all 0.3s;
            display: flex;
            flex-direction: row; /* Mengatur tata letak samping */
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Set to 100vh to make it cover the entire viewport height */
        }
    </style>
@endsection

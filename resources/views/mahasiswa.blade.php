<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/form') }}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- text --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="display-judul">
                    <div class="container">
                        <h1>Data <span>Mahasiswa</span></h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Npm</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nilai_awal = 0;
                                    @endphp
                                    @for ($i = 0; $i < $jumlah; $i++)
                                        <tr>
                                            <td>{{ $nama[$i] }}</td>
                                            <td>{{ $npm[$i] }}</td>
                                            <td>{{ $jurusan[$i] }}</td>
                                            <td>{{ $kelas[$i] }}</td>
                                            <td>Laki - Laki</td>
                                            <td>21-10-2003</td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h1>Form <span>Mahasiswa</span></h1>
                {{-- form --}}
                <form action="POST">
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Masukkan Nama Anda</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Npm</label>
                            <input type="number" class="form-control" placeholder="Npm">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Jurusan</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Teknologi Informasi</option>
                                <option>Sistem Informasi</option>
                                <option>Sains Data</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Kelas</label>
                            <select id="disabledSelect" class="form-select">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki - Laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Masukkan Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

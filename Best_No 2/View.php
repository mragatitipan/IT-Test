<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="{{ route('data-diri.proses') }}" method="post">
        

        <h1 class="text-center">Form Data Diri</h1>

        <div class="mb-3">
            <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama-lengkap" value="Muhammad Raga Titipan" class="form-control border-primary">
        </div>

        <div class="mb-3">
            <label for="tempat-tanggal-lahir" class="form-label">Tempat, Tanggal Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat-lahir" value="Sukabumi" class="form-control border-primary">
            <input type="date" name="tanggal_lahir" id="tanggal-lahir" value="2000-09-08" class="form-control border-primary">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="Sukabirus, Bojongsoang" class="form-control border-primary">
        </div>

        <div class="mb-3">
            <label for="no-telp-hp" class="form-label">No. Telp/HP</label>
            <input type="text" name="no_telp_hp" id="no-telp-hp" value="085284068684" class="form-control border-primary">
        </div>

        <div class="mb-3">
            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" id="jenis-kelamin-laki-laki" value="Laki-Laki" checked class="form-check-input border-primary">
            <label for="jenis-kelamin-laki-laki" class="form-check-label">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" id="jenis-kelamin-perempuan" value="Perempuan" class="form-check-input border-primary">
            <label for="jenis-kelamin-perempuan" class="form-check-label">Perempuan</label>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" id="agama" class="form-select border-primary">
                <option value="Islam" selected>Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" id="hobi-baca-buku" value="Main Musik" class="form-check-input border-primary">
                <label for="hobi-baca-buku" class="form-check-label">Baca Buku</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" id="hobi-olah-raga" value="Olah Raga" class="form-check-input border-primary">
                <label for="hobi-olah-raga" class="form-check-label">Olah Raga</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" id="hobi-main-game" value="Olah Raga" class="form-check-input border-primary">
                <label for="hobi-main-game" class="form-check-label">Main Game</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" id="hobi-hiking" value="Olah Raga" class="form-check-input border-primary">
                <label for="hobi-hiking" class="form-check-label">Hiking</label>
            </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        ul { margin-left: 20px; }
        .info { margin-top: 20px; padding: 10px; border: 1px solid #ccc; background: #f9f9f9; }
    </style>
</head>
<body>
    <h1>Data Pegawai</h1>

    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Umur:</strong> {{ $my_age }} tahun</p>

    <p><strong>Hobi:</strong></p>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
    <p><strong>Jarak Hari ke Wisuda:</strong> {{ $time_to_study_left }} hari lagi</p>
    <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
    <p><strong>Informasi:</strong> {{ $info }}</p>
    <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>

    <div class="info">
        <p>Pesan Sistem: {{ $info }}</p>
    </div>
</body>
</html>

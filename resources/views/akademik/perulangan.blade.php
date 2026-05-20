<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perintah Continue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Komentar PHP</h2>
        {{-- Contoh Komentar --}}
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
            Nilai :
            @foreach ($total_nilai as $nilai)
                @if ($nilai < 50)
                    @break
                @endif
                <div class="alert alert-danger d-inline-block ">
                    {{ $nilai }}
                </div>
            @endforeach
            @php
                echo "php mode"
            @endphp
        </div>
    </div>
</body>
</html>
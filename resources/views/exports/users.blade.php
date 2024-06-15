<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%; /* Lebar tabel 100% dari lebar kontainer */
            border-collapse: collapse;
            margin-top: 20px; /* Jarak atas tabel dari elemen sebelumnya */
        }
        th, td {
            border: 1px solid black;
            padding: 8px; /* Padding sel di dalam tabel */
            text-align: center; /* Pusatkan teks dalam sel */
        }
        th {
            background-color: #f2f2f2; /* Warna latar belakang untuk header kolom */
        }
        caption {
            font-size: 1.5em; /* Ukuran font judul tabel */
            margin-bottom: 10px; /* Jarak bawah judul tabel */
        }
    </style>
</head>
<body>
    <h2>Data Produksi Ikan</h2>
    <table>
        <caption>Tabel Produksi Ikan</caption>
        <thead>
            <tr>
                <th>Nama Ikan</th>
                <th>Jumlah Produksi</th>
                <th>Tanggal Produksi</th>
                <th>Lokasi Produksi</th>
                <th>Harga Ikan</th>
                <th>Pengola Name</th>
                <th>Pengola Username</th>
                <th>Status Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->Nama_Ikan }}</td>
                <td>{{ $user->Jumlah_Produksi }}</td>
                <td>{{ $user->Tanggal_Produksi }}</td>
                <td>{{ $user->Lokasi_Produksi }}</td>
                <td>{{ $user->Harga_Ikan }}</td>
                <td>{{ $user->Pengola_Name }}</td>
                <td>{{ $user->Pengola_Username }}</td>
                <td>{{ $user->Status_Produksi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

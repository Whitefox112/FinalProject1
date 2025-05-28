<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplikasi Buku Tamu')</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
            background-color: #fef8f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .btn-tambah {
            display: inline-block;
            margin: 10px 0;
            padding: 8px 16px;
            background-color: #a94442;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn-tambah:hover {
            background-color: #922d2d;
        }

        .tabel-tamu {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .tabel-tamu th,
        .tabel-tamu td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .tabel-tamu th {
            background-color: #f5e6e0;
        }

        .tabel-tamu tr:nth-child(even) {
            background-color: #fdf3f0;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

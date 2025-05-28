<!-- resources/views/tamu/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5ebdc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff7ed;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 24px;
            font-size: 24px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #aa3e47;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #8e343b;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form Tambah Tamu</h1>
        <form method="POST" action="{{ route('tamu.store') }}">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="pesan" placeholder="Pesan" rows="4" required></textarea>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

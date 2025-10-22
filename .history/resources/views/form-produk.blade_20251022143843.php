<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            width: 400px;
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            color: #444;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #5563DE;
            box-shadow: 0 0 4px rgba(85, 99, 222, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #5563DE;
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #3c48c0;
        }

        footer {
            text-align: center;
            margin-top: 12px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Input Produk</h2>
        <form action="/kirim-produk" method="POST">
            @csrf
            <label for="nama">Nama Produk:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk..." required>

            <label for="harga">Harga Produk:</label>
            <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk..." required>

            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Elektronik">Elektronik</option>
            </select>

            <button type="submit">Kirim</button>
        </form>
        <footer>© 2025 Kanjeng Ratu Maria</footer>
    </div>
</body>
</html>

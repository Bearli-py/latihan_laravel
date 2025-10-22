<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk Cantik</title>
    <!-- Import font aesthetic -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #FFD6E0, #FFC1D6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            width: 400px;
            padding: 35px 45px;
            border-radius: 25px;
            box-shadow: 0 12px 30px rgba(255, 105, 180, 0.25);
            transition: 0.3s;
        }

        .form-container:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 105, 180, 0.35);
        }

        h2 {
            text-align: center;
            color: #FF69B4;
            margin-bottom: 25px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        label {
            font-weight: 600;
            color: #444;
        }

        input, select {
            width: 100%;
            padding: 10px 14px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ffc0cb;
            border-radius: 14px;
            outline: none;
            transition: all 0.3s ease;
            background-color: #fffafc;
            font-family: 'Quicksand', sans-serif;
        }

        input:focus, select:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 6px rgba(255, 105, 180, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #FF69B4;
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 14px;
            cursor: pointer;
            transition: 0.3s;
            font-family: 'Quicksand', sans-serif;
            letter-spacing: 0.3px;
        }

        button:hover {
            background-color: #ff4da6;
            transform: scale(1.03);
        }

        footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }

        .emoji {
            font-size: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2><span class="emoji">💋</span>Form Produk Cantik</h2>
        <form action="/kirim-produk" method="POST">
            @csrf
            <label for="nama">Nama Produk:</label>
            <input type="text" id="nama" name="nama" placeholder="Contoh: Lip Tint Rosy Pink" required>

            <label for="harga">Harga Produk:</label>
            <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk..." required>

            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Skincare">Skincare</option>
                <option value="Makeup">Makeup</option>
                <option value="Parfum">Parfum</option>
                <option value="Aksesoris">Aksesoris</option>
                <option value="Fashion">Fashion</option>
            </select>

            <button type="submit">✨ Kirim Produk ✨</button>
        </form>
        <footer>© 2025 BeautyHub by Maria</footer>
    </div>
</body>
</html>
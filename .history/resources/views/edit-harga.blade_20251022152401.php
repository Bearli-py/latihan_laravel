<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk | BeautyHub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #ffd6e8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 25px;
            padding: 40px;
            width: 420px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #ff5c8d;
            margin-bottom: 20px;
            font-weight: 700;
        }

        p {
            font-size: 15px;
            color: #444;
            margin: 8px 0;
        }

        b {
            color: #ff5c8d;
        }

        label {
            display: block;
            text-align: left;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
            margin-top: 20px;
        }

        .harga-wrapper {
            display: flex;
            align-items: center;
            background: #ffe6f1;
            border-radius: 12px;
            border: 1.5px solid #f4a9c4;
        }

        .harga-wrapper span {
            padding: 0 10px;
            color: #ff5c8d;
            font-weight: 600;
        }

        .harga-wrapper input {
            border: none;
            background: transparent;
            flex: 1;
            padding: 12px;
            font-size: 14px;
            outline: none;
        }

        button {
            background-color: #ff5c8d;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            margin-top: 20px;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background-color: #ff4081;
        }

        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Ubah Harga Produk 💄</h2>

        <p>Nama Produk: <b>Lip Tint Rosy Pink</b></p>
        <p>Kategori: <b>Kosmetik</b></p>
        <p>Harga Saat Ini: <b>Rp35.000</b></p>

        <form action="/produk/update-harga" method="POST">
            @csrf
            @method('PATCH')

            <label>Harga Baru:</label>
            <div class="harga-wrapper">
                <span>Rp</span>
                <input type="number" name="harga" value="35000" min="1000" step="500" required>
            </div>

            <button type="submit">✨ Perbarui Harga ✨</button>
        </form>

        <footer>© 2025 BeautyHub by Maria</footer>
    </div>
</body>
</html>
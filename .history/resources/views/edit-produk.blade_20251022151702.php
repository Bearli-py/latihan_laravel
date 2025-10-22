<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk BeautyHub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Quicksand:wght@500;600&display=swap');

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
            margin-bottom: 25px;
            font-weight: 700;
        }

        label {
            display: block;
            text-align: left;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: 1.5px solid #f4a9c4;
            outline: none;
            font-size: 14px;
            margin-bottom: 18px;
            transition: all 0.2s ease-in-out;
        }

        input:focus, select:focus {
            border-color: #ff5c8d;
            box-shadow: 0 0 4px rgba(255, 92, 141, 0.4);
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
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background-color: #ff4081;
        }

        footer {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Produk BeautyHub 💄</h2>

        <form action="/produk/update" method="POST">
            @csrf
            @method('PUT')

            <label>Nama Produk:</label>
            <input type="text" name="nama" value="Lip Tint Rosy Pink">

            <label>Harga Produk:</label>
            <div class="harga-wrapper">
                <span>Rp</span>
                <input type="number" name="harga" value="35000" min="1000" step="500">
            </div>

            <label>Kategori:</label>
            <select name="kategori">
                <option value="Makeup">Makeup</option>
                <option value="Skincare">Skincare</option>
                <option value="Bodycare">Bodycare</option>
                <option value="Haircare">Haircare</option>
            </select>

            <button type="submit">✨ Perbarui Produk ✨</button>
        </form>

        <footer>© 2025 BeautyHub by Maria</footer>
    </div>
</body>
</html>
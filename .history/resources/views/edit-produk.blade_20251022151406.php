<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Data Produk</title> 
</head> 
<body> 
    <h2>Form Edit Produk</h2> 
 
    <form action="/produk/update" method="POST"> 
        @csrf 
        @method('PUT') 
 
        <label>Nama Produk:</label><br> 
        <input type="text" name="nama" value="Laptop Lama"><br><br>
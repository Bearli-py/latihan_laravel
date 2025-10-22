<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Form Input Produk</title> 
</head> 
<body> 
    <h2>Form Input Produk</h2> 
 
    <form action="/kirim-produk" method="POST"> 
        @csrf <!-- Token keamanan wajib di setiap form POST -->
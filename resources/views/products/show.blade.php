<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Single post view</h1>
    <p>Nosaukums: {{ $product->name }}</p>
    <p>Daudzums: {{ $product->qty }}</p>
    <p>Cena: {{ $product->price }}</p>
    <p>Apraksts: {{ $product->description }}</p>

    <a href="/products">Back To All Posts</a>
</body>
</html>
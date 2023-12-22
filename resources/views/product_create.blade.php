<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <button>Submit</button>
    </form>
</body>
</html>


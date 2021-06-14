<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>Update Product</h1>
            <form action="{{route('product.update', $product->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name='name' class="form-control" value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Color</label>
                    <input name="color" class="form-control" value="{{$product->color}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Material</label>
                    <input name="material" class="form-control" value="{{$product->material}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input name="price" class="form-control" type="number" value="{{$product->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
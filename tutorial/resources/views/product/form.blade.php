<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Category</label>
        <select name="category" id="">
            <option value="" disabled selected>select</option>
            @foreach($category as $i)
            <option value="{{$i->name}}">{{$i->name}}</option>
            @endforeach
        </select>
        <label for="">Product Name</label>
        <input type="text" name="name">
        <label for="">Product Price</label>
        <input type="number" name="price" id="">
        <label for="">Product Image</label>
        <input type="file" name="image" id="">
        <label for="">Product description</label>
        <textarea name="description" id=""></textarea>
        <button>save</button>
    </form>
</body>
</html>
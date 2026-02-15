<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Category</label>
        <select name="category" id="">
            <option value="" selected disabled>Select</option>
            @foreach($category as $i)
            <option value="{{$i->name}}">{{$i->name}}</option>
            @endforeach
        </select>
        <label for="">Product Name</label>
        <input type="text" name="name">
        <label for="">Product Price</label>
        <input type="number" name="price">
        <label for="">Product Image</label>
        <input type="file" name="image" id="">
        <label for="">Product Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button>Save</button>
    </form>
</body>
</html>
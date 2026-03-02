<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('Product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Category</label>
        <input type="text" name="category">
        <select name="category" id="">
            <option value="" selected disable>Select</option>
            @foreach($category as $i)
            <option value="{{$i->name}}">{{$i->name}}</option>
            @endforeach
        </select>
        <label for="">Product name</label>
        <input type="text" name="name">
        <label for="">Product price</label>
        <input type="text" name="price">
        <label for="">Product image</label>
        <input type="file" name="image">
        <label for="">Description</label> 
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button>save</button>


    </form>
</body>
</html>
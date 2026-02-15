<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Category</label>
        <select name="category" id="">
            @foreach($category as $i)
            <option value="{{$i->name}}" {{$i->name == $product->category ? 'selected' : '' }}>
                {{$i->name }}
            </option>
            @endforeach
        </select>
        <label for="">Product Name</label>
        <input type="text" name="name" value="{{$product->name}}">
        <label for="">Product Price</label>
        <input type="number" name="price" value="{{$product->price}}">
        <label for="">Already Upload Image</label>
        <img src="{{asset('images/' .$product->image) }}" width="100px" alt="">
        <label for="">Product Image</label>
        <input type="file" name="image" id="">
        <label for="">Product Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
        <button>Save</button>
    </form>
</body>
</html>
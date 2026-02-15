<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Product Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $i)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$i->category}}</td>
                <td>{{$i->name}}</td>
                <td>{{$i->price}}</td>
                <td><img src="{{asset('images/'.$i->image)}}" width="100px" alt=""></td>
                <td>{{$i->description}}</td>
                <td>
                    <a href="{{route('product.edit',$i->id)}}">Edit</a>
                    <a href="{{route('product.delete',$i->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
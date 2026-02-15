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
                <th>Sr.No</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $i)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$i->name}}</td>
                <td>
                    <a href="{{route('category.edit',$i->id)}}">Edit</a>
                    <a href="{{route('category.delete',$i->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
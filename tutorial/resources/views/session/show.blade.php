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
                <th>Sr No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['name']}}</td>
                <td>{{$i['class']}}</td>
                <td>{{$i['phone']}}</td>
                <td>
                    <a href="{{route('session.edit',$i['id'])}}">Edit</a>
                    <a href="{{route('session.delete',$i['id'])}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
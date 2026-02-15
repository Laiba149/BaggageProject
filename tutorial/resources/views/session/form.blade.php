<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('session.store')}}" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" >
        <label for="">Class</label>
        <input type="text" name="class">
        <label for="">phone</label>
        <input type="phone" name="phone">
        <button>save</button>
    </form>
</body>
</html>
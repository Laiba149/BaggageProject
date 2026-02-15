<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('register')}}" method="POST">
        @csrf
        
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        
        <button>login</button>

    </form>
</body>
</html>
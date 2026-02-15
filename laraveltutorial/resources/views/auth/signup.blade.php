<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('register')}}" method="POST">
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <label for="">Passeord</label>
        <input type="password" name="password" id="">
        <label for="">Confirm Password</label>
        <input type="password" name="password_confirmation" id="">
        <button>Signup</button>

    </form>
</body>
</html>
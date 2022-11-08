<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< Updated upstream
    <a href="{{route('test.store')}}">test</a>
    <form action="" method="post">
=======
    <form action="{{route ('test.store')}}" method="post">
>>>>>>> Stashed changes
        @csrf
        <input type="text" name="test">
        <input type="text" name="test2">
        <input type="submit">
    </form>
</body>
</html>
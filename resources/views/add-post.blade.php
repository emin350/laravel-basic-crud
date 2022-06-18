<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>

    <form method="post" action="{{route('save.post')}}">
        @csrf
     Post : <br> <input type="text" name="name" value=""/> <br>
    Description : <br>  <textarea name="description" > </textarea> <br>

    <input type="submit" value="Submit">

    </form>
</body>
</html>
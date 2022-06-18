<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
</head>
<body>
  <a href="{{route('post.add')}}"> Add Post</a>
  <table>
    <tr>
       <th>ID</th>
       <th>NAME</th>
       <th>DESCRİPTİON</th>
       <th>ACTİON</th>
     </tr>
 
     @foreach ($posts as $post)
     <tr>
        <th>{{$post->id}}</th>
        <th>{{$post->name}}</th>
        <th>{{$post->description}}</th>
        <th>
          <a href="/edit-post/{{$post->id}}">Edit</a> |
          <a href="/delete-post/{{$post->id}}">Delete</a>
        </th>
      </tr>
         
     @endforeach
</table>
    

</body>
</html>
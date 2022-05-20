<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Index</title>
    <style>
        .container{
            margin: 0 auto;
            display:table;
        }

    </style>
</head>
<body>

    <div class="container mt-4">
        <h2 class="mb-5 text-center">Topics</h2>

        <ul>
        @foreach ($data as $posts)
      <li>
      <a href="/social-media-share/{{$posts->id}}"> {{$posts->title}}</a>
      <br>
    </li>
        @endforeach
    </ul>
    </div>

</body>
</html>
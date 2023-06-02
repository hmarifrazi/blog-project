<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Single Data</title>
  <style>
    body{
      text-align: center;
    }
  </style>
</head>
<body>
    <h1>Show Single Data</h1>
    <h2>ID</h2>
    <p>{{ $post->id; }}</p>
    <h2>Title</h2>
    <p>{{ $post->title; }}</p>
    <h2>Details</h2>
    <p>{{ $post->details; }}</p>
</body>
</html>
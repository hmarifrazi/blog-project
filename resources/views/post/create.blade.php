<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data</title>
  <style>
    input,textarea{
      width: 300px;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
      outline: none;

    }
  </style>
</head>
<body>
    <h2><a href="{{ route('post.index') }}">Show All Data</a></h2>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
      <p><input type="text" name="title" placeholder="Enter Title"></p>
      <p>
        <textarea name="details" placeholder="Enter Details"></textarea>
      </p>
      <input type="submit" value="Add" name="submit">
    </form>
</body>
</html>
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
    <h2>Insert Data Form</h2>
    <form action="{{ route('post.update',$post->id) }}" method="post">
      @csrf
      @method('PUT');
      <p><input type="text" name="title" value="{{ $post->title }}" placeholder="Enter Title"></p>
      <p>
        <textarea name="details"  placeholder="Enter Details">
            {{ $post->details }}
        </textarea>
      </p>
      <input type="submit" value="Update">
    </form>
</body>
</html>
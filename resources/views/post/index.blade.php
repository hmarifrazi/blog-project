<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Data</title>
  <style>
    table{
      width:60%;
      margin: 0 auto;
      border-collapse: collapse;
    }
    tr,th,td{ 
      padding: 5px;
    }
  </style>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($post as $posts)    
      <tr>
        <td>{{ $posts->id; }}</td>
        <td>{{ $posts->title; }}</td>
        <td>{{ $posts->details; }}</td>
        <td>
          <a href="{{ route('post.show',$posts->id);}}">Show Details</a> 
          <a href="{{ route('post.edit',$posts->id); }}">|| Edit</a> 
          <form action="{{ route('post.delete',$posts->id); }}" method="post">
          @csrf
          @method('DELETE')
            <button>Delete</button>
          </form>
          <!-- || Delete -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
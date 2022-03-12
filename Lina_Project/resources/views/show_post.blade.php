<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Posts123</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('post.create')}}">Create Posts</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Add Post</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
     <div class="w-50">
         <h2>{{$post->title}}</h2>
         <a href="{{route('post.edit', ['id'=>$post->id])}}" class="btn btn-warning px-4 mb-2">Edit</a>
         
         <form action ="{{route('post.delete',['id'=>$post->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
      </form>
         
         <p>{{$post->body}}</p>
     </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">

              
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script
  </body>
</html>
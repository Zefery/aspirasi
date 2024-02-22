<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      body{
        background-color: rgb(217, 220, 223)
      }
      .container{
        display: flex;
        justify-content: space-between
      }
    </style>
    <title>Document</title>
</head>
<body>
  <nav class="navbar bg-body-tertiary shadow mb-5 ">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">Welcome</a>
        <a href="/foto-sekolah"><button type="button" class="btn btn-outline-secondary">Gallery</button></a>
        <a href="/admin">
            <img src="image/smktelkomjkt2.png" alt="Telkom" width="100">
        </a>
    </div>
  </nav>

  <div class="container">
    @forelse ($aspirasis as $aspirasi)
    <div class="card m-2  " style="width: 18rem;">
        <img src="{{asset('storage/posts/'.$aspirasi->foto)}}" class="card-img-top" alt="..." >
        <div class="card-body " >
          <p class="card-text" style="height:100px;">{{$aspirasi->keterangan}}</p>
        </div>
      </div>
    @empty
        
    @endforelse
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
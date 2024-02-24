<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        nav img{
            padding-left: 70%;
        }
    </style>
    <title>You can see it</title>
</head>
<body>
    <nav>
        <a href="/admin-tampilan"><img src="{{ asset('image/smktelkomjkt2.png') }}" alt="telkom"></a>    
    </nav>

    <div class="container">

        <div class="card" style="width: 30rem;">
            <img src="{{ asset('storage/posts/' . $aspirasis->foto) }}" alt="hehe" style="max-width: 500px">
            
            <div class="card-body">
              <h6 class="card-title">{{ $aspirasis->nama }}</h6>
              <p class="card-text">{{ $aspirasis->keterangan }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <h6>NIS : {{ $aspirasis->nissekolah }}</h6></li>
                <li class="list-group-item"> <h6>Lokasi : {{ $aspirasis->lokasi }}</h6></li>
                <li class="list-group-item"><h6>Jenis : {{ $aspirasis->jenis }}</h6></li>
                <li class="list-group-item"><h6>Tanggal : {{ $aspirasis->created_at }}</h6></li>
                <li class="list-group-item"><h6>Status : {{ $aspirasis->status ? 'Success':'Pending'}}</h6></li>
                <li class="list-group-item">

                    <form method="POST" action="{{ route('feedback', $aspirasis->id) }}">
                        @csrf
                        @method('patch')
                        <label for="feedback">Feedback : </label>
                        <input type="text" id="feedback" name="feedback">

                        <button type="submit">Kirim</button>
                    </form>    
                </li>
                
            </ul>
        </div>
    </div>
</body>
</html>
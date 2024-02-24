<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/table-admin.css">
    <link rel="stylesheet" href="css/admin.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/"><img src="image/smktelkomjkt2.png" alt="telkom"></a>    
        </nav>
        
        <marquee behavior="" direction="">Ini adalah halaman admin</marquee>

    </div>
      <div class="table-responsive mt-5 m-3">

        <form action="/admin-tampilan/search" method="GET">
            <input type="date" name="search">
            <button type="submit" class="btn btn-light ">
              <i class="bi bi-search"></i>
            </button>
            <a href="/admin-tampilan" class="btn btn-light">
                <i class="bi bi-x"></i>
            </a>

        <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th class="id table-info text-center " scope="col">Id</th>
              <th class="foto table-info text-center" scope="col">Foto</th>
              <th class="nama table-info text-center" scope="col">Nama</th>
              <th class="keterangan table-info text-center" scope="col">Keterangan</th>
              <th class="nis table-info text-center" scope="col">NIS Sekolah</th>
              <th class="lokasi table-info text-center" scope="col">Lokasi</th>
              <th class="jenis table-info text-center" scope="col">Jenis</th>
              <th class="tanggal table-info text-center" scope="col">Tanggal</th>
              <th class="status table-info text-center" scope="col">Status</th>
              <th class="status table-info text-center" scope="col">Feedback</th>
              <th class="status table-info text-center" scope="col">Edit</th>
            </tr>
          </thead>
          @forelse ($aspirasis as $aspirasi)
          <tbody>
            <tr class="table-{{ $aspirasi->status ? 'success' : 'warning' }} ">
              <th scope="row">{{ $aspirasi->id }}</th>
              <td><img src="{{ asset('storage/posts/' . $aspirasi->foto) }}" alt=""
                      style="max-width: 150px"></td>
              <td class="overflow-auto text-break text-center ">{{ $aspirasi->nama }}</td>
              <td class="overflow-auto text-break">{{ $aspirasi->keterangan }}</td>
              <td class="overflow-auto text-break">{{ $aspirasi->nissekolah }}</td>
              <td class="overflow-auto text-break">{{ $aspirasi->lokasi }}</td>
              <td>{{ $aspirasi->jenis }}</td>
              <td>{{ $aspirasi->created_at }}</td>
              <td class="overflow-auto text-break text-center ">{{ $aspirasi->status ? 'Success':'Pending'}}</td>
              <td class="overflow-auto text-break">{{ $aspirasi->feedback }}</td>
              <td class="edit">
                <a class="btn btn-light" href="/aspirasi/status/{{ $aspirasi->id}}">
                  <i class="bi bi-{{ ( $aspirasi->status )? 'arrow-counterclockwise' : 'check-lg' }}"></i>
                </a>
                </a>
                <a class="btn btn-light" href="/aspirasi/show/{{$aspirasi->id}}">
                  <i class="bi bi-eye"></i>
                </a>
                <a class="btn btn-light" href="/aspirasi/delete/{{$aspirasi->id}}">
                  <i class="bi bi-x-square"></i>
                </a>
            </td>
          </tr>
          </tbody>
          @empty
          <div class="alert alert-danger">
            Data Post belum Tersedia.
          </div>
          @endforelse
        </table>

        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
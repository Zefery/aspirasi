<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/table.css">

    <style>
    .navbar {
        display: flex;
        justify-content: space-around;
    }

    marquee {
        font-size: 30px;
    }

    .container {
        display: flex;
        justify-content: center;
    }
    </style>

    <title>Document</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand">Welcome</a>
            <a href="/foto-sekolah"><button type="button" class="btn btn-outline-secondary">Gallery</button></a>
            <a href="/admin">
                <img src="image/smktelkomjkt2.png" alt="Telkom" width="100">
            </a>
        </div>
    </nav>

    <div class="container mt-5 mb-5 shadow-lg rounded-3 p-5 ">
        <div class="left mt-5 m-3 ">
            <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, possimus odit totam laboriosam iste
                eos!</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque necessitatibus tempora, quisquam
                cumque voluptates nulla est fuga sed nemo alias pariatur quis nesciunt tenetur id et, quaerat architecto
                animi porro.</p>

            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
                Buka Formulir
            </button>

        </div>
        <div class="right m-3 ">
            <img class="rounded-2"
                src="https://img.freepik.com/free-photo/modern-domestic-room-with-elegant-wooden-chair-generated-by-ai_188544-22071.jpg?size=626&ext=jpg&ga=GA1.1.2029861361.1707906228&semt=sph"
                alt="" width="500">
        </div>
    </div>

    <marquee class="mb-5" behavior="" direction="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure fugit
        ipsam vel aliquid commodi, sed odio praesentium ad necessitatibus culpa maxime. Suscipit iusto non soluta
        facilis obcaecati ducimus quos natus?
    </marquee>

    <div class="table-responsive mt-5 p-3 ">

        <form action="/aspirasi/search" method="GET">
            <input type="date" name="search">
            <button type="submit" class="btn btn-light ">
                <i class="bi bi-search"></i>
            </button>
            <a href="/" class="btn btn-light">
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
                    </tr>
                </thead>
                @forelse ($aspirasis as $aspirasi)
                <tbody>
                    <tr class="table-{{ $aspirasi->status ? 'success' : 'warning' }} ">
                        <th scope="row">{{ $aspirasi->id }}</th>
                        <td><img src="{{ asset('storage/posts/' . $aspirasi->foto) }}" alt="" style="max-width: 150px">
                        </td>
                        <td class="overflow-auto text-break">{{ $aspirasi->nama }}</td>
                        <td class="overflow-auto text-break">{{ $aspirasi->keterangan }}</td>
                        <td class="overflow-auto text-break">{{ $aspirasi->nissekolah }}</td>
                        <td class="overflow-auto text-break">{{ $aspirasi->lokasi }}</td>
                        <td>{{ $aspirasi->jenis }}</td>
                        <td>{{ $aspirasi->created_at }}</td>
                        <td class="overflow-auto text-break">{{ $aspirasi->status ? 'Success':'Pending'}}</td>
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

    @include('form')






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Halaman Login</title>

    <style>
        body{
            background-image: url('image/smktelkomjkt2.png');
            background-attachment: fixed;
            background-repeat: repeat;
        }
        .container{
            widows: 600px;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            width: 400px;
        }
        .space{
            backdrop-filter: blur(3px);
            width: 500px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index:1;
        }
    </style>
</head>
<body>
    <div class="container">

        
        <div class="space rounded-3 shadow-lg ">
            <form class="border-1" method="POST" action="/admin/login">
                @csrf
                <div class="mb-3 mt-5">
                <label class="form-label">Username</label>
                <input type="name" class="form-control" id="Username" name="username">
                </div>

                <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-1 form-check">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
                <a href="/" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Formulir Aspirasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulir -->
                <form clas="formulir" method="post" action="/aspirasi/add" enctype="multipart/form-data"
                    onsubmit="return showPopup()">
                    @csrf
                    <!-- Input Teks -->
                    <div class="form-group">
                        <label for="inputText">Masukan Nama :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="inputText">NIS</label>
                        <input type="text" class="form-control" id="nissekolah" placeholder="NIS"
                            name="nissekolah">
                    </div>
                    <div class="form-group">
                        <label for="inputText">Lokasi Kejadian</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label for="textarea">Masukan Keterangan :</label>
                        <textarea class="form-control" id="keterangan" rows="3" placeholder="Keterangan"
                            name="keterangan"></textarea>
                    </div>

                    <!-- Input File -->
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Upload foto :</label>
                        <input class="form-control" type="file" id="foto" name="image">
                    </div>

                    <!-- Dropdown 1 -->
                    <div class="form-group">
                        <label for="dropdown1">Pilih kategori</label>
                        <select class="form-control" id="kategori" name="content">
                            <option value="keamanan">Keamanan</option>
                            <option value="ketertiban">Ketertiban</option>
                            <option value="kebersihan">kebersihan</option>
                        </select>
                    </div> <br>

                    <!-- Tombol Kirim -->
                    <button type="submit" class="btn btn-none rounded-3">Kirim</button>
                    <style>
                    .btn-none {
                        background-color: transparent;
                        color: green;
                        border-color: green;
                        border-radius: 3px;
                        transition: background-color 0.3s, color 0.3s;
                    }

                    .btn-none:hover {
                        background-color: green;
                        color: white;
                    }
                    </style>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (requires Popper.js) and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
function showPopup() {
    alert("Formulir telah dikirim!");
    $('#myModal').modal('hide'); // Menutup modal setelah mengirim formulir
    return true; // Jika ingin melanjutkan pengiriman formulir, kembalikan true. Jika tidak, kembalikan false.
}
</script>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
<!-- Memuat Bootstrap JS dari CDN (jika diperlukan) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
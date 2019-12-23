<div class="card">
    <div class="card-header  bg-light ">
        <h5>Posting</h5>
    </div>
    <div class="card-body">

        <form action="<?= base_url()  ?>Administrator/upload" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Post</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tulisan</label>
                <textarea class="form-control" id="isi" name="isi" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Posting Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary"> Simpan</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header  bg-light ">
        <h5>Posting</h5>
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('Administrator/upload'); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul Post</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tulisan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Posting Gambar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submint" class="btn btn-primary"> Simpan</button>
        </form>
    </div>
</div>
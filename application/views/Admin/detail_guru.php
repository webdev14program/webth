<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-success">
        <li class="breadcrumb-item"><a href="#" class="text-white"><?= $menu ?></a></li>
        <li class="breadcrumb-item active text-white" aria-current="page"><?= $submenu ?></li>
    </ol>
</nav>

<a href="<?= base_url() ?>Administrator/Guru" class="btn btn-primary">Kembali</a>

<div class="row">
    <div class="col-md mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Detail Guru</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Kode Guru</label>
                        <input type="text" class="form-control" value="<?= $data['kode'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Guru</label>
                        <input type="text" class="form-control" value="<?= $data['jenis_guru'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan</label>
                        <input type="text" class="form-control" value="<?= $data['pendidikan'] ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Mapel yang Diajarkan</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Guru</label>
                        <input type="email" class="form-control" value="<?= $data['guru'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mapel 1</label>
                        <input type="email" class="form-control" value="<?= $data['mapel1'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mapel 2</label>
                        <input type="email" class="form-control" value="<?= $data['mapel2'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mapel 3</label>
                        <input type="email" class="form-control" value="<?= $data['mapel3'] ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
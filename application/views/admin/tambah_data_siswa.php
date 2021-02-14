<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/dataSiswa/tambahDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label>Id Guru</label>
                    <input type="text" name="id_siswa" class="form-control">
                    <?php echo form_error('id_siswa', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" class="form-control">
                    <?php echo form_error('nisn', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control">
                    <?php echo form_error('nama_sisw', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control">
                    <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Id orangtua</label>
                    <input type="text" name="id_orangtua" class="form-control">
                    <?php echo form_error('id_orangtua', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Kode Kelas</label>
                    <input type="text" name="kode_kelas" class="form-control">
                    <?php echo form_error('kode_kelas', '<div class="text-small text-danger"></div>') ?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>
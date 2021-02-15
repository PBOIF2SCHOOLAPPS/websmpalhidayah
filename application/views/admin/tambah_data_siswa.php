<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/dataSiswa/tambahDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label>Id Siswa</label>
                    <input type="text" name="id_siswa" class="form-control">
                    <?php echo form_error('id_siswa', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username_siswa" class="form-control">
                    <?php echo form_error('username_siswa', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_siswa" class="form-control">
                    <?php echo form_error('password_siswa', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control">
                    <?php echo form_error('nama_siswa', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>kelas</label>
                    <input type="text" name="nama_kelas" class="form-control">
                    <?php echo form_error('nama_kelas', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Orangtua</label>
                    <input type="text" name="nama_orangtua" class="form-control">
                    <?php echo form_error('nama_orangtua', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    <?php echo form_error('alamat', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Hak Akses</label>
                    <select name="hak_akses" class="form-control">
                        <option value="">--Pilih Hak Akses--</option>
                        <option value="3">Orang Tua</option>
                    </select>
                    <?php echo form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
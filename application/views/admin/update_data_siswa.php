<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <?php foreach ($siswa as $s) : ?>
                <form action="<?php echo base_url('admin/dataSiswa/updateDataAksi') ?>" method="POST">
                    <div class="form-group">
                        <label>Id Guru</label>
                        <input type="text" disabled name="id_siswa" class="form-control" value="<?php echo $s->id_siswa ?>">
                        <?php echo form_error('id_siswa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username_siswa" class="form-control" value="<?php echo $s->username_siswa ?>">
                        <?php echo form_error('username_siswa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password_siswa" class="form-control" value="<?php echo $s->password_siswa ?>">
                        <?php echo form_error('password_siswa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $s->nama_siswa ?>">
                        <?php echo form_error('nama_siswa', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" value="<?php echo $s->nama_kelas ?>">
                        <?php echo form_error('nama_kelas', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nama Orangtua</label>
                        <input type="text" name="nama_orangtua" class="form-control" value="<?php echo $s->nama_orangtua ?>">
                        <?php echo form_error('nama_orangtua', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $s->alamat ?>">
                        <?php echo form_error('alamat', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $s->id_siswa ?>">
                        <select name="hak_akses" class="form-control" value="<?php echo $s->hak_akses ?>">
                            <option value="3">Orangtua</option>
                        </select>
                        <?php echo form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>
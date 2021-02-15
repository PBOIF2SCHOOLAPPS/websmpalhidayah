<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/dataGuru/tambahDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label>Id Guru</label>
                    <input type="text" name="id_guru" class="form-control">
                    <?php echo form_error('id_guru', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                    <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                    <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control">
                    <?php echo form_error('nama_guru', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Status Guru</label>
                    <select name="status_guru" class="form-control">
                        <option value="">--Pilih Hak Akses--</option>
                        <option value="KEPALA SEKOLAH">KEPALA SEKOLAH</option>
                        <option value="GURU TETAP">GURU TETAP</option>
                        <option value="GURU TIDAK TETAP">GURU TIDAK TETAP</option>
                        <option value="STAFF SEKOLAH">STAFF SEKOLAH</option>
                    </select>
                    <?php echo form_error('status_guru', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Hak Akses</label>
                    <select name="hak_akses" class="form-control">
                        <option value="">--Pilih Hak Akses--</option>
                        <option value="1">Admin</option>
                        <option value="2">Guru</option>
                    </select>
                    <?php echo form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>
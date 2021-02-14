<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <?php foreach($guru as $g): ?>
            <form action="<?php echo base_url('admin/dataGuru/updateDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label>Id Guru</label>
                    <input type="text" name="id_guru" class="form-control" value="<?php echo $g->id_guru?>">
                    <?php echo form_error('id_guru','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control" value="<?php echo $g->nama_guru?>">
                    <?php echo form_error('nama_guru','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $g->alamat?>">
                    <?php echo form_error('alamat','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $g->jenis_kelamin?>">
                    <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Status Guru</label>
                    <input type="text" name="status_guru" class="form-control" value="<?php echo $g->status_guru?>">
                    <?php echo form_error('status_guru','<div class="text-small text-danger"></div>')?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
    
</div>
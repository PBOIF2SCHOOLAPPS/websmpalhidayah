<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
     <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('admin/dataOrangtua/tambahDataAksi') ?>" method="POST">
                <div class="form-group">
                    <label>Id Orangtua</label>
                    <input type="text" name="id_orangtua" class="form-control">
                    <?php echo form_error('id_orangtua','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Nama Orangtua</label>
                    <input type="text" name="nama_orangtua" class="form-control">
                    <?php echo form_error('nama_orangtua','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_orangtua" class="form-control">
                    <?php echo form_error('alamat_orangtua','<div class="text-small text-danger"></div>')?>
                </div>

                
                

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    
</div>
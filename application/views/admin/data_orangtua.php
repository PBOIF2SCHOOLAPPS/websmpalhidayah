<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
 <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataOrangtua/tambah_data') ?>"><i class="fas fa-plus"> Tambah Data</i></a>

    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Id Orang tua</th>
            <th class="text-center">Nama Orang tua</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Action</th>
            
        </tr>

        <?php $no=1; foreach($orangtua as $o) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $o->id_orangtua?></td>
                <td><?php echo $o->nama_orangtua?></td>
                <td><?php echo $o->alamat_orangtua?></td>
                
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataOrangtua/update_data/'.$o->id_orangtua) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Apakah anda yakin ingin mengapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataOrangtua/delete_data/'.$o->id_orangtua) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
</div>
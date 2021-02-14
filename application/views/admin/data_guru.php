<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataGuru/tambah_data') ?>"><i class="fas fa-plus"> Tambah Data</i></a>

    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Id Guru</th>
            <th class="text-center">Nama Guru</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Status Guru</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no=1; foreach($guru as $g) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $g->id_guru?></td>
                <td><?php echo $g->nama_guru?></td>
                <td><?php echo $g->alamat?></td>
                <td><?php echo $g->jenis_kelamin?></td>
                <td><?php echo $g->status_guru?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataGuru/update_data/'.$g->id_guru) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Apakah anda yakin ingin mengapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataGuru/delete_data/'.$g->id_guru) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    
</div>
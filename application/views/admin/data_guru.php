<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataGuru/tambahData') ?>"><i class="fas fa-plus"> Tambah Data</i></a>
    <?php echo $this ->session->flashdata('pesan')?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Id Guru</th>
            <th class="text-center">Username</th>
            <th class="text-center">Password</th>
            <th class="text-center">Nama Guru</th>
            <th class="text-center">Status Guru</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no=1; foreach($guru as $g) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $g->id_guru?></td>
                <td><?php echo $g->username?></td>
                <td><?php echo $g->password?></td>
                <td><?php echo $g->nama_guru?></td>
                <td><?php echo $g->status_guru?></td>
                <td><?php echo $g->hak_akses?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataGuru/updateData/'.$g->id_guru) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Apakah anda yakin ingin mengapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataGuru/deleteData/'.$g->id_guru) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    
</div>
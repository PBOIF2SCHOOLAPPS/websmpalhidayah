<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataSiswa/tambahData') ?>"><i class="fas fa-plus"> Tambah Data</i></a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Id Siswa</th>
            <th class="text-center">Username</th>
            <th class="text-center">Password</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Nama Orangtua</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($siswa as $s) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $s->id_siswa ?></td>
                <td><?php echo $s->username_siswa ?></td>
                <td><?php echo $s->password_siswa ?></td>
                <td><?php echo $s->nama_siswa ?></td>
                <td><?php echo $s->nama_kelas ?></td>
                <td><?php echo $s->nama_orangtua ?></td>
                <td><?php echo $s->alamat ?></td>

                <?php if ($s->hak_akses == '3') { ?>
                    <td>Orang Tua</td>
                <?php } else { ?>
                    <td></td>
                <?php } ?>

                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataSiswa/updateData/' . $s->id_siswa) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Apakah anda yakin ingin mengapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataSiswa/deleteData/' . $s->id_siswa) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>
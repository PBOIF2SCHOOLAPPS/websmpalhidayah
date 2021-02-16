<body>

    <div class="row justify-content-end mr-3  align-items-center" style="margin-top:90px;">
        <p class="col-xl-2 text-right mt-3 mr-2" style="border-right : 2px #858796 solid"><?= $_SESSION['nama_guru'] ?> </p>
        <a href="<?php echo base_url('guru/Dashboard/logout') ?>" class="btn btn-secondary col-m-2 text-center">Keluar</a>
    </div>

    <div class="container" style="margin:120px auto 100px;">
        <h3 class="text-center text-dark mb-5 ">Konfirmasi Jadwal Tengok <br> SMP AL-HIDAYAH RAWAMERTA</h3>
        <div class="container konfirmasi-tengok">
        <div class="table-responsive">
            <table class="table table-hover text-center" >
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Tanggal Pengajuan</th>
                      <th scope="col">Nama Orang Tua</th>
                      <th scope="col">Nama Anak</th>
                      <th scope="col" colspan="2">Status Konfirmasi</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach($konfirmasi as $k): ?>
                    <tr>
                      <th scope="row"><?= $no ?></th>
                      <td><?= $k->tanggal_jadwal ?></td>
                       <td><?= $k->nama_orangtua?></td>
                       <td><?= $k->nama_siswa?></td>
                       <form action="<?php echo base_url('guru/Dashboard/updateDataAksi') ?>" method="POST">
                        <td>
                            <input type="hidden" name="id_jadwal" value="<?= $k->id_jadwal?>">
                            <?php if($k->hak_akses == 0) : ?>
                                <button type="submit" class="btn btn-outline-success"  name="submit_terima">Terima</button>
        
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-warning"  name="submit_tolak">Tolak</button>
                            </td>

                            <?php else :?> 
                                <button type="button" class="btn btn-outline-success" >Konfrimasi telah dilakukan</button>
                             <?php endif; ?>

                        </form>
                    </tr>
                    <?php $no++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        
    </div>
    </div>

</div>
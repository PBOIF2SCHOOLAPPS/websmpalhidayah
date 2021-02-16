<body?>

    <div class="row justify-content-end mr-3  align-items-center" style="margin-top:90px;">
        <!-- <p><?php echo $user_data->nama_orangtua ?></p> -->
        <p class="col-xl-2 text-right mt-3 mr-2" style="border-right : 2px #858796 solid"><?= $_SESSION['nama_orangtua'] ?> </p>
        <a href="<?php echo base_url('orangtua/Dashboard/logout') ?>" class="btn btn-secondary col-m-2 text-center">Keluar</a>
    </div>

    <div class="container" style="margin:50px auto 100px;text-align:center">
    <h3 class="text-center mb-5">Pengajuan Jadwal Tengok <br> SMP AL-HIDAYAH RAWAMERTA</h3>
    <?php echo $this->session->flashdata('pesan') ?>

    <form action="<?php echo base_url('orangtua/Dashboard/tambahDataAksi') ?>" class="text-center mb-3" method="POST" >
        <input type="date"  name="jadwal_tengok">
        <br>
        <button type="submit" class="btn btn-info px-2 mb-3 mt-3">Ajukan Jadwal Tengok</button>
    </form>
    
    
    <h5 class="text-left mb-3">Riwayat jadwal tengok anda : </h5>
    <table class="table">
        <thead>
            <th scope="col">Tanggal Pengajuan</th>
            <th scope="col">Status</th>
        </thead>
        <tbody>

            <?php foreach($jadwal as $j) : ?>        
            <tr>
                <td><?= $j->tanggal_jadwal ?></td>
                <td>
                    <?php 
                        if($j->hak_akses == 0){
                            echo"Pending";
                        } else if ($j->hak_akses == 1) {
                            echo"Pengajuan di Terima";
                        } else {
                            echo"Pengajuan di Tolak";   
                        }    
                    ?>
                    
                </td>
                <td>-</td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
    </div>

</body>
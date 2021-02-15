<body?>

    <div class="container" style="margin:120px auto 100px;text-align:center">
    <h3 class="text-center mb-5">Pengajuan Jadwal Tengok <br> SMP AL-HIDAYAH RAWAMERTA</h3>
    <?php echo $this->session->flashdata('pesan') ?>
    <form action="<?php echo base_url('orangtua/Dashboard/tambahDataAksi') ?>" class="text-center mb-3" method="POST" >
        <input type="date" name="jadwal_tengok">
        <button type="submit" class="btn btn-info px-2 mb-3">Ajukan Jadwal Tengok</button>
    </form>
    
    
    
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
<body>
    <?= $ ?>
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
                    <tr>
                      <th scope="row">1</th>
                      <td>23/04/2020</td>
                       <td>Tatang Sulaeman</td>
                       <td>Sulthon Naufal</td>
                      
                       <td>
                       <input type="hidden" name="id_jadwal" value="id_jadwal">
                        <a href="#"  class="btn btn-outline-success" >Terima</button>
                        <input type="hidden">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-warning" value="2" name="hak_akses">Tolak</button>
                        </td>
                  
                    </tr>

                    <tr>
                      <th scope="row">2</th>
                      <td>23/04/2020</td>
                       <td>Tatang Sulaeman</td>
                       <td>Sulthon Naufal</td>
                       <form>
                       <td>
                            <a href="#"><button type="button" class="btn btn-outline-success">Terima</button></a>
                        </td>
                        <td>
                            <a href="#"><button type="button" class="btn btn-outline-warning">Tolak</button></a>
                        </td>
                    </form>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    </div>

</div>
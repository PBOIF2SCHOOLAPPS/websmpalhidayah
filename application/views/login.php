<body class="bg-cust-log">

    <div class="container" style="margin:200px auto 270px">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form class="user" method="POST" action="<?php echo base_url('login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="InputUSername" aria-describedby="usernam" placeholder="Masukan username">
                                            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan password">
                                            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <button type="submit" class="btn-cust-log btn-user btn-block">MASUK</button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
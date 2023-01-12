<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block my-auto ">
                    <img src="<?= base_url('/back-end/img/gambar_01.jpg') ?>" width="500" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Nambah Akun!</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('Auth/registrasi') ?>">
                            <div class="form-group ">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Asmine Jenengan">
                                <?= form_error('Nama', '<span class="text-danger ml-3">', '</span>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="email njenengan">
                                <?= form_error('Email', '<span class="text-danger ml-3">', '</span>'); ?>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('Password1', '<span class="text-danger ml-3">', '</span>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="baleni Password">
                                    <?= form_error('Password2', '<span class="text-danger ml-3">', '</span>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                registrasi Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Pon nggadah Akun? Monggo Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
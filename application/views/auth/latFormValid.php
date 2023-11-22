<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                        project for free.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Register Your Account</h5>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form role="form" class="user" method="POST" action="<?= base_url('auth2') ?>">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= set_value('nama'); ?>"
                                        name="nama" id="nama" placeholder="Name" aria-label="Name">
                                    <?= form_error('nama', '<small class="text-danger pl-3"></small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" value="<?= set_value('email'); ?>"
                                        name="email" id="email" placeholder="Email" aria-label="Email">
                                    <?= form_error('email', '<small class="text-danger pl-3"></small>'); ?>
                                </div>
                                <div class="mb-4">
                                    <input type="number" class="form-control" value="<?= set_value('usia'); ?>"
                                        name="usia" id="usia" placeholder="Usia" aria-label="Usia">
                                    <?= form_error('usia', '<small class="text-danger pl-3"></small>'); ?>
                                </div>
                                <div class="mb-4">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>"
                                        class="form-control" id="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                            <input type=" text" class="form-control" value="<?= set_value('game_id'); ?>"
                                    name="game_id" id="game_id" placeholder="Game ID" aria-label="Game ID">
                                    <?= form_error('game_id', '<small class="text-danger"></small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" value="<?= set_value('password'); ?>"
                                        name="password" id="password" placeholder="Password" aria-label="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3"></small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" value="<?= set_value('password2'); ?>"
                                        name="password2" id="password2" placeholder="Password" aria-label="Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3"></small>'); ?>
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms
                                            and Conditions</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="tambah"
                                        class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a
                                        href="<?= base_url('Auth2'); ?>" class="text-dark font-weight-bolder">Sign
                                        in</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
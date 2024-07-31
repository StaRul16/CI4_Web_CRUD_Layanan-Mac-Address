<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="/deskapp-3.0.1/vendors/images/login-page-img.png" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Register To</h2>
                    </div>
                    <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
<?php endif;?>
                    <form action="/register/store" method="post">
                    <?= csrf_field(); ?>
                        <div class="input-group custom">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" required />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg" placeholder="nama" required />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-envelope1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="**********" required />
                            <div class="input-group-append custom">
                                <span class="input-group-text">
                                    <i class="dw dw-padlock1 toggle-password" toggle="#password"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
                                </div>
                                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                    OR
                                </div>
                                <div class="input-group mb-0">
                                    <a class="btn btn-outline-primary btn-lg btn-block" href="/auth/login">Login to your account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".toggle-password").click(function() {
            $(this).toggleClass("dw dw-padlock1 dw dw-eye");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>
<?= $this->endSection() ?>

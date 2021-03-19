<?php
$this->login->get_token($_GET['token']);
?>
<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Set Password</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Set Password
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->
<!-- =======Account Section Starts Here======== -->
<section class="account-section padding-bottom padding-top bg-overlay bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/account-bg.jpg">
    <div class="container">
        <div class="account-wrapper">
            <div class="account-area">
                <h2 class="title">Set Password Baru</h2>
                <?php echo form_open(base_url('login/set_passwordbaru?token='.$_GET['token']), 'class="account-form"') ?>
                    <div class="account-form-group">
                        <input type="password" placeholder="Password Baru" name="password_baru">
                    </div>
                    <div class="account-form-group">
                        <input type="password" placeholder="Konfirmasi Password Baru" name="re_passwordbaru">
                    </div>
                    <div class="account-form-group">
                        <button class="custom-button active" type="submit">Submit</button>
                    </div>
                <?php echo form_close() ?>
            </div>
            <div class="newslatter-area">
            </div>
        </div>
    </div>
</section>
<!-- =======Account Section Ends Here======== -->
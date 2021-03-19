<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">GANTI PASSWORD</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    GANTI PASSWORD
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->
<!-- =======Account Section Starts Here======== -->
<section class="account-section padding-bottom padding-top bg-overlay bg_img" data-background="assets/images/account-bg.jpg">
    <div class="container">
        <div class="account-wrapper">
            <div class="account-area">
                <h2 class="title">GANTI PASSWORD</h2>
                <?php echo form_open(base_url('player_panel/ganti_password'), 'class="account-form"') ?>
                    <?php echo validation_errors('<div class="account-form-group"><div class="alert alert-danger" role="alert">', '</div></div>') ?>
                    <?php
                    if ($this->session->flashdata('gagal'))
                    {
                        echo '<div class="account-form-group"><div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('gagal');
                        echo '</div></div>';
                    }
                    if ($this->session->flashdata('berhasil')) 
                    {
                        echo '<div class="account-form-group"><div class="alert alert-success" role="alert">';
                        echo $this->session->flashdata('berhasil');
                        echo '</div></div>';
                    }
                    ?>
                    <div class="account-form-group">
                        <input type="password" name="password_lama" placeholder="Password Lama" minlength="4" maxlength="16" autocomplete="off" autofocus required>
                    </div>
                    <div class="account-form-group">
                        <input type="password" name="password_baru" placeholder="Password Baru" minlength="4" maxlength="16" autocomplete="off" required>
                    </div>
                    <div class="account-form-group">
                        <input type="password" name="re_password_baru" placeholder="Konfirmasi Password Baru" minlength="4" maxlength="16" required>
                    </div>
                    <div class="account-form-group">
                        <button type="submit" class="custom-button active">Submit</button>
                    </div>
                <?php echo form_close() ?>
            </div>
            <div class="newslatter-area">
            </div>
        </div>
    </div>
</section>
<!-- =======Account Section Ends Here======== -->
<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Redeem Code</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Redeem Code
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
                <h2 class="title">Redeem Code</h2>
                <?php echo form_open(base_url('player_panel/redeemcode'), 'class="account-form"') ?>
                <?php echo validation_errors('<div class="account-form-group"><div class="alert alert-danger" role="alert">', '</div></div>') ?>
                <?php
                if ($this->session->flashdata('berhasil')) 
                {
                    echo '<div class="account-form-group"><div class="alert alert-success" role="alert">';
                    echo $this->session->flashdata('berhasil');
                    echo '</div></div>';
                }
                if ($this->session->flashdata('gagal')) 
                {
                    echo '<div class="account-form-group"><div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('gagal');
                    echo '</div></div>';
                }
                ?>
                    <div class="account-form-group">
                        <input type="text" value="<?php echo $detail->player_name ?>" disabled readonly>
                    </div>
                    <div class="account-form-group">
                        <input type="text" name="code" placeholder="Code (ex. AAAA-BBBB-CCCC-DDDD)" autofocus required>
                    </div>
                    <div class="account-form-group">
                        <button class="custom-button active" type="submit">Redeem</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <div class="newslatter-area">
            </div>
        </div>
    </div>
</section>
<!-- =======Account Section Ends Here======== -->
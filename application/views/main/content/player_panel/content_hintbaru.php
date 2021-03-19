<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Hint Baru</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Hint Baru
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
                <h2 class="title">HINT BARU</h2>
                <?php echo form_open(base_url('player_panel/hint_baru'), 'class="account-form"') ?>
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
                        <select name="hint_question" class="form-control" required>
                            <option value="" disabled selected>Pilih Pertanyaan Hint</option>
                            <option value="Apa nama nickname awal anda?">Apa nama nickname awal anda?</option>
                            <option value="Apa nama karakter favorit anda?">Apa nama karakter favorit anda?</option>
                            <option value="Apa nama senjata favorit anda?">Apa nama senjata favorit anda?</option>
                            <option value="Apa nama item favorit anda?">Apa nama item favorit anda?</option>
                            <option value="Apa warna favorit anda?">Apa warna favorit anda?</option>
                            <option value="Apa makanan favorit anda?">Apa makanan favorit anda?</option>
                            <option value="Apa nama hewan peliharaan anda?">Apa nama hewan peliharaan anda?</option>
                            <option value="Apa nama tim olahraga anda?">Apa nama tim olahraga anda?</option>
                            <option value="Siapa nama orang tua anda?">Siapa nama orang tua anda?</option>
                            <option value="Siapa nama guru favorit anda?">Siapa nama guru favorit anda?</option>
                        </select>
                    </div>
                    <div class="account-form-group">
                        <input type="text" name="hint_answer" placeholder="Jawaban Hint (Tetap Jaga Kerahasiaan Hint Anda)" required>
                    </div>
                    <div class="account-form-group">
                        <button class="custom-button active" type="submit">Submit</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <div class="newslatter-area">
            </div>
        </div>
    </div>
</section>
<!-- =======Account Section Ends Here======== -->
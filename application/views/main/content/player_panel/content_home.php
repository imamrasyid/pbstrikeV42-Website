<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Player Panel</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Player Panel
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->
<!-- ========Faq Section Starts Here======== -->
<section class="faq-section padding-top">
    <div class="container">
        <div class="theme-style">
            <div class="row">
                <?php
                if ($this->session->flashdata('berhasil')) :
                ?>
                    <div class="col-lg-12 col-12">
                        <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('berhasil') ?></div>
                    </div>
                <?php
                endif;
                ?>
                <?php
                if ($this->session->flashdata('gagal')) :
                ?>
                    <div class="col-lg-12 col-12">
                        <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('gagal') ?></div>
                    </div>
                <?php
                endif;
                ?>
                <div class="col-lg-6">
                    <div class="faq-wrapper">
                        <div class="faq-item open active">
                            <div class="faq-title">
                                <h6 class="title text-center">INFORMASI AKUN</h6>
                                <span class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <table class="table table-borderless text-white text-center">
                                    <tbody>
                                        <tr>
                                            <td width="50%">Username</td>
                                            <td><?php echo $detail->login ?></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <a href="<?php echo base_url('player_panel/ganti_password') ?>" style="text-decoration:none;">Ganti Password</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Player ID</td>
                                            <td><?php echo $detail->player_id ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nickname</td>
                                            <td><?php echo $detail->player_name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Rank</td>
                                            <td><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $detail->rank ?>.gif" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>Point</td>
                                            <td><?php echo number_format($detail->gp, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Exp</td>
                                            <td><?php echo number_format($detail->exp, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>VIP</td>
                                            <td><?php echo $detail->pc_cafe ?></td>
                                        </tr>
                                        <?php
                                        if ($detail->access_level != 0) :
                                        ?>
                                            <tr>
                                                <td>Akses Level</td>
                                                <td>
                                                    <?php
                                                    if ($detail->access_level == 2) 
                                                    {
                                                        echo "Streamer";
                                                    }
                                                    if ($detail->access_level == 3) 
                                                    {
                                                        echo "Moderator";
                                                    }
                                                    if ($detail->access_level == 4) 
                                                    {
                                                        echo "Game Master";
                                                    }
                                                    if ($detail->access_level == 5) 
                                                    {
                                                        echo "Administrator";
                                                    }
                                                    if ($detail->access_level == 6) 
                                                    {
                                                        echo "Developer";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        endif;
                                        ?>
                                        <tr>
                                            <td>IP Terakhir</td>
                                            <td><?php echo $detail->lastip ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $detail->email ?></td>
                                        </tr>
                                        <tr>
                                            <td>Cash</td>
                                            <td><?php echo number_format($detail->money, '0',',','.') ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper">
                        <div class="faq-item open active">
                            <div class="faq-title">
                                <h6 class="title text-center">Informasi Match</h6>
                                <span class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <table class="table table-borderless text-white text-center">
                                    <tbody>
                                        <tr>
                                            <td width="50%">Total Match</td>
                                            <td><?php echo number_format($detail->fights, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Win</td>
                                            <td><?php echo number_format($detail->fights_win, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Lose</td>
                                            <td><?php echo number_format($detail->fights_lost, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Kill</td>
                                            <td><?php echo number_format($detail->kills_count, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Death</td>
                                            <td><?php echo number_format($detail->deaths_count, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Headshot</td>
                                            <td><?php echo number_format($detail->headshots_count, '0',',','.') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Kabur</td>
                                            <td><?php echo number_format($detail->escapes, '0',',','.') ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="faq-wrapper">
                        <div class="faq-item open active">
                            <div class="faq-title">
                                <h6 class="title text-center">Informasi Keamanan</h6>
                                <span class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <table class="table table-borderless text-white text-center">
                                    <tbody>
                                        <tr>
                                            <td width="50%">Pertanyaan Hint</td>
                                            <td>
                                                <?php
                                                if ($detail->hint_question == null) 
                                                {
                                                    echo "Belum Ada Hint";
                                                }
                                                if ($detail->hint_question != null) 
                                                {
                                                    echo $detail->hint_question;
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jawaban Hint</td>
                                            <td>
                                                <?php
                                                if ($detail->hint_answer == null) 
                                                {
                                                    echo "Belum Ada Jawaban Hint";
                                                }
                                                if ($detail->hint_answer != null) 
                                                {
                                                    echo $detail->hint_answer;
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php if ($detail->hint_question == null || $detail->hint_answer == null) : ?>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="<?php echo base_url('player_panel/hint_baru') ?>" class="btn btn-block btn-outline-primary">Buat Hint Baru</a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit_reset'])) 
                {
                    $this->player_panel->setel_ulang_equipment();
                }
                ?>
                <div class="col-lg-12 col-12">
                    <div class="faq-wrapper">
                        <div class="faq-item open active">
                            <div class="faq-title">
                                <h6 class="title text-center">Menu Opsional (Bugtrap, Disconnect, Etc)</h6>
                                <span class="right-icon"></span>
                            </div>
                            <div class="faq-content text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-6">
                                        <?php echo form_open(base_url('player_panel'), 'class="form-horizontal"') ?>
                                            <button type="submit" name="submit_reset" class="btn btn-outline-primary" onclick="return confirm('Apakah Anda Benar Benar Ingin Mengatur Item Yang Anda Pakai Sekarang Dengan Pengaturan Awal?')">Reset Equip Ke Setelan Awal</button>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ========Faq Section Ends Here======== -->
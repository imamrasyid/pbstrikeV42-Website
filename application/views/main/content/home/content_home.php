<!-- ========Banner Section Starts Here======== -->
<section class="banner-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/banner-bg1.png">
        <div class="container">
            <div class="banner-content">
                <h3 class="title">PointBlank Strike Private Server</h3>
                <?php if (empty($_SESSION['uid'])) : ?>
                    <p>Daftar Sekarang dan Dapatkan Point & Cash 30JT!</p>
                    <a href="<?php echo base_url('register') ?>" class="custom-button theme">DAFTAR SEKARANG</a>
                <?php endif; ?>
                <?php if (!empty($_SESSION['uid'])) : ?>
                    <p>Selamat Datang Kembali <?php echo $_SESSION['player_name'] ?></p>
                    <a href="<?php echo base_url('player_panel') ?>" class="custom-button theme">Player Panel</a>
                    <a href="<?php echo base_url('home/logout') ?>" class="custom-button theme">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ========Banner Section Ends Here======== -->
    <!-- ========Achivement Section Starts Here======== -->
    <section class="achivement-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">
                    SERVER STATISTIC
                </h2>
            </div>
            <div class="row mb--40">
                <div class="col-md-4 mb-40">
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-md-12">
                            <div class="counter-item">
                                <div class="counter-header">
                                    <h2 class="title odometer" data-odometer-final="<?php echo $players_online ?>">00</h2>
                                </div>
                                <p>ONLINE PLAYERS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-40">
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-md-12">
                            <div class="counter-item">
                                <div class="counter-header">
                                    <h2 class="title">
                                        <?php
                                        if ($server_status == 0) 
                                        {
                                            echo "MAINTENANCE";
                                        }
                                        if ($server_status == 1) 
                                        {
                                            echo "ONLINE";
                                        }
                                        ?>
                                    </h2>
                                </div>
                                <p>SERVER STATUS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-40">
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-md-12">
                            <div class="counter-item">
                                <div class="counter-header">
                                    <h2 class="title odometer" data-odometer-final="<?php echo $total_players ?>">00</h2>
                                </div>
                                <p>TOTAL PLAYERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Achivement Section Ends Here======== -->
    <!-- ========Feature Section Starts Here======== -->
    <div class="feature-section padding-bottom">
        <div class="container">
            <div class="m--15">
                <div class="feature-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="feature-item">
                                <div class="feature-inner">
                                    <div class="feature-thumb">
                                        <img src="<?php echo base_url() ?>assets/main/assets/images/benefit/02.jpg" alt="feature">
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="title">UI</h4>
                                        <p>Menggunakan old UI, Sehingga player lama mudah untuk mengaksess info, iventory, shop dll </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feature-item">
                                <div class="feature-inner">
                                    <div class="feature-thumb">
                                        <img src="<?php echo base_url() ?>assets/main/assets/images/benefit/03.jpg" alt="feature">
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="title">EVENTS</h4>
                                        <p>Ikuti clan Event Tiap minggunya untuk mendapatkan hadiah menarik lainnya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feature-item">
                                <div class="feature-inner">
                                    <div class="feature-thumb">
                                        <img src="<?php echo base_url() ?>assets/main/assets/images/benefit/01.jpg" alt="feature">
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="title">SERVER INFO</h4>
                                        <p>dapatkan EXP dan Point hingga 3000% Dan bermain di mode VS A.I / Zombie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========Feature Section Ends Here======== -->

    <!-- ========Lends Section Starts Here======== -->
    <section class="lends-section">
        <div class="container">
            <!-- <div class="padding-top padding-bottom section-bg"> -->
                <div class="section-header">
                    <h2 class="title">Best Player</h2>
                </div>
                <div class="lends-table-wrapper">
                    <table class="lend-table">
                        <thead class="table-header">
                            <tr>
                                <th>Rank</th>
                                <th>Pangkat</th>
                                <th>Nickname</th>
                                <th>Exp</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php
                            $num = 1;
                            if ($best_players == null) 
                            {
                                ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="info bet">Data Player Belum Tersedia</div>
                                    </td>
                                </tr>
                                <?php
                            }
                            else
                            {
                                foreach ($best_players as $row) :
                                    ?>
                                    <tr>
                                        <td data-input="Ranking">
                                            <div class="info bet"><?php echo $num ?></div>
                                        </td>
                                        <td data-input="Pangkat">
                                            <div class="user">
                                                <div class="user-thumb">
                                                    <a href="javascript:void(0)">
                                                        <img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-input="Nickname">
                                            <div class="info bet-amount"><?php echo $row['player_name'] ?></div>
                                        </td>
                                        <td data-input="Total EXP">
                                            <div class="info win-chance"><?php echo number_format($row['exp'], '0',',','.'); ?></div>
                                        </td>
                                    </tr>
                                    <?php
                                    $num++;
                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- ========Lends Section Ends Here======== -->
    <!-- ========Lends Section Starts Here======== -->
    <section class="lends-section padding-top padding-bottom">
        <div class="container">
            <!-- <div class="padding-top padding-bottom section-bg"> -->
                <div class="section-header">
                    <h2 class="title">Best Clan</h2>
                </div>
                <div class="lends-table-wrapper">
                    <table class="lend-table">
                        <thead class="table-header">
                            <tr>
                                <th>Rank</th>
                                <th>Pangkat</th>
                                <th>Clan Name</th>
                                <th>Exp</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php
                            $num = 1;
                            if ($best_clans == null) 
                            {
                                ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="info bet">Data Clan Belum Tersedia</div>
                                    </td>
                                </tr>
                                <?php
                            }
                            else
                            {
                                foreach ($best_clans as $row) :
                                    ?>
                                    <tr>
                                        <td data-input="Ranking">
                                            <div class="info bet"><?php echo $num ?></div>
                                        </td>
                                        <td data-input="Pangkat">
                                            <div class="user">
                                                <div class="user-thumb">
                                                    <a href="javascript:void(0)">
                                                        <img src="<?php echo base_url() ?>assets/main/assets/images/img_clan/<?php echo $row['clan_rank'] ?>.jpg" alt="<?php echo $row['clan_rank'] ?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-input="Nama Clan">
                                            <div class="info bet-amount"><?php echo $row['clan_name'] ?></div>
                                        </td>
                                        <td data-input="Total Clan EXP">
                                            <div class="info win-chance"><?php echo number_format($row['clan_exp'], '0',',','.'); ?></div>
                                        </td>
                                    </tr>
                                    <?php
                                    $num++;
                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- ========Lends Section Ends Here======== -->
    <!-- Custom Section -->
    <div class="container mt-50">
        <div class="row">
            <div class="col-lg-12 col-12">
            <iframe src="https://ptb.discord.com/widget?id=819941401038422057&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        </div>
    </div>
    <!-- Custom Section -->
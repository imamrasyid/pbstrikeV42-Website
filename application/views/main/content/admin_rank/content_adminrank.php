<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Clan Rank</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Clan Rank
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->
<!-- ========Lends Section Starts Here======== -->
<section class="lends-section padding-top">
    <div class="container">
        <!-- <div class="padding-top padding-bottom section-bg"> -->
            <div class="section-header">
                <h2 class="title">Clan Rank</h2>
            </div>
            <div class="lends-table-wrapper">
                <table id="table_id" class="table wy-table-bordered text-center text-white">
                    <thead class="table-header">
                        <tr>
                            <th>Ranking</th>
                            <th>Clan Name</th>
                            <th>Total EXP</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php
                        $num = 1;
                        foreach ($admin_rank as $row) :
                            ?>
                            <tr>
                                <td data-input="bet id">
                                    <div class="info bet"><?php echo $num ?></div>
                                </td>
                                <td data-input="bet amount">
                                    <div class="info bet-amount"><?php echo $row['player_name'] ?></div>
                                </td>
                                <td data-input="win chance">
                                    <div class="info win-chance"><?php echo number_format($row['exp'], '0',',','.') ?></div>
                                </td>
                                <td data-input="game">
                                    <div class="info game-name"><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></div>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        <!-- </div> -->
    </div>
</section>
<!-- ========Lends Section Ends Here======== -->
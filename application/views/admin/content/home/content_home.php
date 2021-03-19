<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total_players ?></h3>
                        <p>Total Players</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $online_players ?></h3>
                        <p>Total Online</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $total_vip ?></h3>
                        <p>Total VIP</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $total_clan ?></h3>
                        <p>Total Clan</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-server"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Semua Admin</h3>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-borderless table-hover text-center">
                            <thead>
                                <th>Pangkat</th>
                                <th>Username</th>
                                <th>Akses</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($total_admin == null) 
                                {
                                    ?>
                                    <tr>
                                        <td colspan="3">Tidak Ada Admin</td>
                                    </tr>
                                    <?php
                                }
                                foreach ($total_admin as $row) : 
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                                        <td><?php echo $row['login'] ?></td>
                                        <td><?php echo $row['access_level'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registrasi Terakhir</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless table-hover text-center">
                            <thead>
                                <th>Pangkat</th>
                                <th>Username</th>
                                <th>IP</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($registrasi_terakhir == null) 
                                {
                                    ?>
                                    <tr>
                                        <td colspan="3">Tidak Ada Akun</td>
                                    </tr>
                                    <?php
                                }
                                foreach ($registrasi_terakhir as $row) :
                                ?>
                                    <tr>
                                        <td><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                                        <td><?php echo $row['login'] ?></td>
                                        <td><?php echo $row['lastip'] ?></td>
                                    </tr>
                                <?php
                                endforeach; 
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
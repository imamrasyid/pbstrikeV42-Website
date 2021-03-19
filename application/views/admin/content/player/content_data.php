<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-12 text-center">
            <a href="<?php echo base_url('404/player/tambah') ?>" class="btn btn-outline-success"><i class="fa fa-plus-circle mr-2"></i>Buat Akun Baru</a>
        </div>
        <div class="col-lg-12 col-12 mt-5">
            <?php
            if ($this->session->flashdata('berhasil')) 
            {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->flashdata('berhasil');
                echo '</div>';
            }
            if ($this->session->flashdata('gagal')) 
            {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('gagal');
                echo '</div>';
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <table id="table_id" class="table table-borderless table-hover text-center">
                        <thead>
                            <th width="5%">No.</th>
                            <th width="5%">Pangkat</th>
                            <th>Nickname</th>
                            <th width="10%">Status</th>
                            <th width="20%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($player as $row) : ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                                    <td><?php echo $row['player_name'] ?></td>
                                    <td>
                                        <?php
                                        if ($row['access_level'] == -1) 
                                        {
                                            echo "Banned";
                                        }
                                        if ($row['access_level'] != -1) 
                                        {
                                            echo "Aktif";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?php echo base_url('404/player/detail?idx='.$row['player_id']) ?>"><i class="fa fa-info-circle mr-2"></i>Detail</a>
                                                <a class="dropdown-item" href="<?php echo base_url('404/player/inventory?idx='.$row['player_id']) ?>"><i class="fa fa-briefcase mr-2"></i>Inventory</a>
                                                <?php if ($row['access_level'] != -1) : ?>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-times mr-2"></i>Banned</a>
                                                <?php endif; ?>
                                                <?php if ($row['access_level'] == -1) : ?>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-times mr-2"></i>Unbanned</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
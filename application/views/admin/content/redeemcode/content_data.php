<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-body">
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
                    <table class="table table-borderless table-hover text-center">
                        <thead>
                            <th>Item ID</th>
                            <th>Nama Item</th>
                            <th width="10%">Jumlah Item</th>
                            <th>Notifikasi</th>
                            <th width="15%">Item Code</th>
                            <th>Total Redeem</th>
                            <th>Menu</th>
                        </thead>
                        <tbody>
                            <?php
                            if ($redeemcode == null) 
                            {
                                ?>
                                <tr>
                                    <td colspan="7">BELUM ADA REDEEM CODE</td>
                                </tr>
                                <?php
                            }
                            else
                            {
                                foreach ($redeemcode as $row) 
                                { 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['item_id'] ?></td>
                                        <td><?php echo $row['item_name'] ?></td>
                                        <td><?php echo $row['item_count'] ?></td>
                                        <td><?php echo $row['item_alert'] ?></td>
                                        <td><?php echo $row['item_code'] ?></td>
                                        <?php
                                        $total_redeem = $this->redeemcode->total_diredeem($row['item_code']);
                                        ?>
                                        <td><?php echo $total_redeem ?></td>
                                        <td>
                                            <a href="<?php echo base_url('404/redeemcode/hapus?idx='.$row['item_id']) ?>" class="btn btn-outline-danger"><i class="fa fa-trash mr-2"></i>Hapus</a>
                                        </td>
                                    </tr>
                                    <?php 
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-12 text-center mt-3">
            <a href="<?php echo base_url('404/redeemcode/tambah') ?>" class="btn btn-outline-primary"><i class="fa fa-plus mr-2"></i>Tambah Redeem Kode</a>
        </div>
    </div>
</div>
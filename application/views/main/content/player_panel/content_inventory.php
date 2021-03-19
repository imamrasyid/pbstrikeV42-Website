<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Inventory</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    Inventory
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
                <h2 class="title">Inventory</h2>
            </div>
            <div class="lends-table-wrapper">
                <?php
                if ($this->session->flashdata('gagal')) 
                {
                    echo '<div class="alert alert-danger">';
                    echo $this->session->flashdata('gagal');
                    echo '</div>';
                }
                if ($this->session->flashdata('berhasil')) 
                {
                    echo '<div class="alert alert-success">';
                    echo $this->session->flashdata('berhasil');
                    echo '</div>';
                }
                ?>
                <table id="table_id" class="table wy-table-bordered text-center text-white">
                    <thead class="table-header">
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Kategori</th>
                            <th>Status Equip</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php
                        $num = 1;
                        foreach ($item as $row) :
                            ?>
                            <tr>
                                <td data-input="bet id">
                                    <div class="info bet"><?php echo $num ?></div>
                                </td>
                                <td data-input="bet amount">
                                    <div class="info bet-amount"><?php echo $row['item_name'] ?></div>
                                </td>
                                <td data-input="win chance">
                                    <div class="info win-chance"><?php echo $row['category'] ?></div>
                                </td>
                                <td data-input="game">
                                    <div class="info game-name"><?php echo $row['equip'] ?></div>
                                </td>
                                <td data-input="profit">
                                    <div class="info profit">
                                        <a href="<?php echo base_url('player_panel/inventory/delete_item?idx='.$row['object_id']) ?>" class="btn btn-outline-danger">DELETE</a>
                                    </div>
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
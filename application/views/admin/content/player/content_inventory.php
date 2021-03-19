<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-12">
            <?php
            if ($this->session->flashdata('gagal')) 
            {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('gagal');
                echo '</div>';
            }
            if ($this->session->flashdata('berhasil')) 
            {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->flashdata('berhasil');
                echo '</div>';
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit_delete'])) 
                    {
                        $obj_id = $this->input->post('object_id');
                        $this->player->delete_item($obj_id);
                    }
                    ?>
                    <table id="table_id" class="table table-borderless table-hover text-center">
                        <thead>
                            <th>No.</th>
                            <th>Nama Item</th>
                            <th>Durasi Item</th>
                            <th>Kategori</th>
                            <th>Status Pakai</th>
                            <th>Menu</th>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($inventory as $row)
                            {
                                ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $row['item_name'] ?></td>
                                    <td><?php echo $row['count'] ?></td>
                                    <td><?php echo $row['category'] ?></td>
                                    <td><?php echo $row['equip'] ?></td>
                                    <td>
                                        <?php echo form_open(base_url('404/player/inventory?idx='.$_GET['idx']), 'class="form-horizontal"') ?>
                                        <input type="hidden" name="object_id" value="<?php echo $row['object_id'] ?>">
                                        <button type="submit" name="submit_delete" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Benar Benar Ingin Menghapus Item Ini?');"><i class="fa fa-trash mr-2"></i>Delete</button>
                                        <?php echo form_close() ?>
                                    </td>
                                </tr>
                                <?php
                                $num++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
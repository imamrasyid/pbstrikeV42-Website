<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-12">
            <?php echo form_open(base_url('404/redeemcode/tambah'), 'class="form-horizontal"') ?>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?php
            if ($this->session->flashdata('gagal')) 
            {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('gagal');
                echo '</div>';
            }
            ?>
            <div class="form-group row">
                <label class="col-lg-3 col-3">Item</label>
                <select name="item_id" class="col-lg-9 col-9 form-control" value="<?php echo set_value('item_id') ?>" required>
                    <option value="" disabled selected>Pilih Item</option>
                    <?php foreach ($list_item as $row) : ?>
                        <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-3">Nama Item</label>
                <input type="text" name="item_name" class="col-lg-9 col-9 form-control" placeholder="Ex. (Aug A3 PBTN - Redeem Code)" value="<?php echo set_value('item_name') ?>" required>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-3">Jumlah Item</label>
                <select name="item_count" class="col-lg-9 col-9 form-control" value="<?php echo set_value('item_count') ?>" required>
                    <option value="" disabled selected>Pilih Durasi Item</option>
                    <option value="1">1 Unit</option>
                    <option value="3">3 Unit</option>
                    <option value="5">5 Unit</option>
                    <option value="10">10 Unit</option>
                    <option value="25">25 Unit</option>
                    <option value="50">50 Unit</option>
                    <option value="75">75 Unit</option>
                    <option value="100">100 Unit</option>
                    <option value="86400">1 Hari</option>
                    <option value="259200">3 Hari</option>
                    <option value="604800">7 Hari</option>
                    <option value="2592000">30 Hari</option>
                </select>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-3">Item Alert (Notifikasi)</label>
                <input type="text" name="item_alert" class="col-lg-9 col-9 form-control" placeholder="Ex. (AUG A3 PBTN 7 Hari)" value="<?php echo set_value('item_alert') ?>" required>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-3">Item Code</label>
                <input type="text" name="item_code" class="col-lg-9 col-9 form-control" placeholder="Ex. (AAAA-BBBB-CCCC-DDDD)" value="<?php echo set_value('item_code') ?>" required>
            </div>
            <div class="form-group text-center mt-3">
                <button type="reset" class="btn btn-outline-danger"><i class="fa fa-eraser mr-2"></i> Reset</button>
                <button type="submit" class="btn btn-outline-primary"><i class="fa fa-paper-plane mr-2"></i>Submit</button>
            </div>
        </div>
    </div>
</div>
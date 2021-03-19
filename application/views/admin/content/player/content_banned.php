<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-8">
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
            if (isset($_POST['submit_banned'])) 
            {
                $id = $this->input->post('player_id');
                $alasan = $this->input->post('banned_reason');
                $this->banned->banned($id, $alasan);
            }
            if (isset($_POST['submit_unbanned'])) 
            {
                $id = $this->input->post('player_id');
                $this->banned->unbanned($id);
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <?php echo form_open(base_url('404/player/banned'), 'class="form-horizontal"') ?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Nickname</label>
                            <select name="player_id" class="col-lg-9 col-9 form-control" required>
                                <option value="" disabled selected>Pilih Player</option>
                                <?php foreach ($player as $row) : ?>
                                    <option value="<?php echo $row['player_id'] ?>"><?php echo $row['player_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Alasan Banned</label>
                            <input type="text" name="banned_reason" class="col-lg-9 col-9 form-control" autocomplete="off">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit_unbanned" class="btn btn-outline-success"><i class="fas fa-hammer mr-2"></i>Unbanned!</button>
                            <button type="submit" name="submit_banned" class="btn btn-outline-danger"><i class="fas fa-hammer mr-2"></i>Ban!</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
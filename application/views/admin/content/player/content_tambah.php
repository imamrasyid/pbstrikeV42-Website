<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-12">
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
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
                    <?php echo form_open(base_url('404/player/tambah'), 'class="form-horizontal"') ?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Username</label>
                            <input type="text" name="login" class="col-lg-9 col-9 form-control" value="<?php echo set_value('login') ?>" placeholder="Username" minlength="4" maxlength="16" autocomplete="off" autofocus required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Password</label>
                            <input type="password" name="password" class="col-lg-9 col-9 form-control" value="<?php echo set_value('password') ?>" placeholder="Password" minlength="4" maxlength="16" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Nickname</label>
                            <input type="text" name="player_name" class="col-lg-9 col-9 form-control" value="<?php echo set_value('player_name') ?>" placeholder="Nickname" minlength="4" maxlength="16" autocomplete="off" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Pangkat</label>
                            <select name="rank" class="col-lg-9 col-9 form-control" value="<?php echo set_value('rank') ?>" required>
                                <option value="" disabled selected>Pilih Pangkat</option>
                                <?php foreach ($pangkat as $row) : ?>
                                    <option value="<?php echo $row['rank'] ?>"><?php echo $row['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Points</label>
                            <input type="number" name="gp" class="col-lg-9 col-9 form-control" value="<?php echo set_value('gp') ?>" placeholder="Points" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Exp</label>
                            <input type="number" name="exp" class="col-lg-9 col-9 form-control" value="<?php echo set_value('exp') ?>" placeholder="Exp" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-3">Akses Level</label>
                            <select name="access_level" class="col-lg-9 col-9 form-control" value="<?php echo set_value('access_level') ?>" required>
                                <option value="" disabled selected>Pilih Akses Level</option>
                                <option value="3">Akses 3 / Moderator</option>
                                <option value="4">Akses 4 / Game Master</option>
                                <option value="5">Akses 5 / Administrator</option>
                                <option value="6">Akses 6 / Developer</option>
                            </select>
                        </div>
                        <div class="from-group row">
                            <label class="col-lg-3 col-3">Email</label>
                            <input type="mail" name="email" class="col-lg-9 col-9 form-control" value="<?php echo set_value('email') ?>" placeholder="Email" autocomplete="off" required>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-3 col-3">Cash</label>
                            <input type="number" name="money" class="col-lg-9 col-9 form-control" value="<?php echo set_value('money') ?>" placeholder="Cash" autocomplete="off" required>
                        </div>
                        <div class="form-group text-center mt-5">
                            <button type="reset" class="btn btn-outline-danger"><i class="fa fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-paper-plane mr-2"></i>Submit</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
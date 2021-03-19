<div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="javascript:void(0)" class="h1">ADMINISTRATOR PANEL</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">This Page Is Restricted And Cannot Accessed From Public</p>
        <?php echo form_open(base_url('404/login'), 'class="form-horizontal"') ?>
        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
        <?php
        if ($this->session->flashdata('gagal')) 
        {
            echo '<div class="alert alert-danger" role="alert">';
            echo $this->session->flashdata('gagal');
            echo '</div>';
        }
        ?>
            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" placeholder="Username" minlength="4" maxlength="16" autocomplete="off" autofocus required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Password" minlength="4" maxlength="16" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane mr-2"></i>Login</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- ========Hero Section Starts Here======== -->
<section class="hero-section bg_img" data-background="<?php echo base_url() ?>assets/main/assets/images/banner/hero-bg.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">DOWNLOAD</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url('home') ?>">Home</a>
                </li>
                <li>
                    DOWNLOAD
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->
<!-- ========Contact Section Starts Here======== -->
<section class="contact-section padding-top padding-bottom">
    <div class="container">
        <h3 class="title text-center mb-30">GAME</h3>
        <div class="row justify-content-center mb-30-none">
            <?php
            foreach ($game as $row) :
                ?>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="afiliate-item-3">
                        <div class="afiliate-thumb">
                            <i class="flaticon-link"></i>
                        </div>
                        <div class="afiliate-content">
                            <h6 class="title"><?php echo $row['nama_file'] ?></h6>
                            <ul>
                                <li>
                                    <a href="<?php echo $row['link_download'] ?>" target="_blank">DOWNLOAD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<!-- ========Contact Section Ends Here======== -->
<!-- ========Contact Section Starts Here======== -->
<section class="contact-section padding-top padding-bottom">
    <div class="container">
        <h3 class="title text-center mb-30">SUPPORT TOOLS</h3>
        <div class="row justify-content-center mb-30-none">
            <?php
            foreach ($support_tools as $row) :
                ?>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="afiliate-item-3">
                        <div class="afiliate-thumb">
                            <i class="flaticon-link"></i>
                        </div>
                        <div class="afiliate-content">
                            <h6 class="title"><?php echo $row['nama_file'] ?></h6>
                            <ul>
                                <li>
                                    <a href="<?php echo $row['link_download'] ?>" target="_blank">DOWNLOAD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<!-- ========Contact Section Ends Here======== -->
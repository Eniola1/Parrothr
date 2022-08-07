<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>

    <!-- This div closes in the footer -->
    <div class="page-wrapper">
        <div class="message"></div>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Announcement Board</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Announcement Board</li>
                </ol>
            </div>
        </div>
        <!-- This div closes in the footer -->
        <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card card-outline-info">
                        <!-- <div class="card-header">
                                <h4 class="m-b-0 text-white"> Announcements</h4>
                        </div> -->
                        <?php foreach($employeeNotices as $value) : ?>
                            <div class="card-body" style="background:#EDECEC">
                            <div class="mailbox-read-info row">
                                <div class="col-md-12 notice-box">
                                    <h3 style="font-weight:bold;text-transform: uppercase;font-size:16px">
                                    <?= ucwords($value->title) ?>
                                    </h3>
                                    <div class="" style="text-align: justify;padding: 10px 20px;border-left: 2px solid #E0E0E0;margin-top: 10px;font-size:15px">
                                        <?= $value->message ?>
                                    </div><br>
                                <div style="font-style:italic;font-size: 12px">
                                    <p style="margin-bottom:0">Posted By: Admin</p>
                                    <p class="">Posted To:
                                        <?php if ($value->branch):echo ucwords($value->branch_name).' Branch, ';?>
                                        <?php endif;?>
                                        <?php if ($value->dep_name):echo ucwords($value->dep_name).' Department, ';?>
                                        <?php endif;?>
                                        <?php if ($value->des_name):echo ucwords($value->des_name).'s';?>
                                        <?php endif;?>
                                        <?php if (!$value->des_name & !$value->dep_name & !$value->branch):?>
                                            Everyone
                                        <?php endif;?>
                                    </p>
                                </div>
                               <h6 style="font-size:12px"><i><?= date("j M. Y g:iA", strtotime($value->date)) ?></i></h6>
                                    <div class="float-right" style="display: none">
                                        <p>
                                            <!-- <a role="button" onclick="showNoticeModal(<?=$value->id?>)" class="btn btn-info text-white mr-2">Edit</a> -->
                                            <a role="button"  class="btn btn-danger text-white">Delete</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        
<?php $this->load->view('backend/footer'); ?>

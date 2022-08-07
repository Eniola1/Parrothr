<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Leave Application</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave Application</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Leave Application Form
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="row" action="<?=base_url()?>leave/Add_Applications" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-4 m-t-10">
                                <label>Type Of Absence Requested <i class="text-danger">*</i></label>
                                <select required name="typeid" class="form-control custom-select">
                                    <?php foreach(array_reverse($leavetypes) as $value): ?>
                                        <option value="<?php echo $value->type_id ?>"><?php echo $value->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>                           
                            <div class="form-group col-md-4 m-t-10">
                                <label>Start <i class="text-danger">*</i></label>
                                <input required type="date" name="start_date" class="form-control"> 
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>End <i class="text-danger">*</i></label>
                                <input required type="date" name="end_date" class="form-control"> 
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Reason <i class="text-danger">*</i></label>
                                <textarea name="reason" required class="form-control"></textarea> 
                            </div>

                            <div class="form-group col-md-12 m-t-10">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>

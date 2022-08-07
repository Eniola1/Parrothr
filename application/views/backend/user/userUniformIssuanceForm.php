<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Uniform Issuance Form</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Uniform Issuance Form</li>
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
                        <h4 class="m-b-0 text-white"> Uniform Issuance Form
                        </h4>
                    </div>
                    <div class="card-body">
                    <form class="row" action="<?=base_url()?>UniformIssuance/AddUnifromIssuance" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12 m-t-10" >
                            <label style="font-style: italic;font-size: 18px;border-bottom: 1px solid #1E007F;font-family: ui-sans-serif;padding: 0;background:#fff">Housekeeping Manager</label><br>
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Please Issue A Uniform To</label>
                            <select name="emp_id" class="form-control custom-select">
                                <option selected="true" disabled="disabled"></option>
                                <option value="Kaz1353">Kazim</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group col-md-2 m-t-10">
                            <label>Uniform Issued</label>
                            <input type="text" id="" name="uniform_issued" class="form-control" placeholder="" value="" >
                        </div>
                        <div class="form-group col-md-2 m-t-10">
                            <label>Uniform No </label>
                            <input type="text" name="uniform_number" class="form-control" placeholder="" value="" > 
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Item</label>
                            <input type="text"  name="item" class="form-control" placeholder="" value="" >
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="" value="" >
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Colour</label>
                            <input type="text" id="" name="colour" class="form-control" placeholder="" value="" >
                        </div>
                        <div class="form-group col-md-8 m-t-10">
                            <label>Remarks</label>
                            <textarea name="remarks" class="form-control"></textarea> 
                        </div>
                        <div class="col-md-8" style="text-align: justify; margin: 30px 0">
                        <p style="text-align: justify">I promise to return the above listed items that were given to me upon termination of my employment or if requested by management. I acknowledge that these given items have been issued to me for use during work related functions and not for personal use. It is my responsibility to care for and maintain these items in a responsible manner. I agree that I will be held financially responsible for the payment of the item(s) given to me in the event I fail to return them. I further agree that my employer has the right to deduct the cost of the item from my paycheck for items I am purchasing or should I fail to return any of the above listed items that were given to me.
                        </p>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>

                        
                        <div class="form-group col-md-12 m-t-10 sub-heading" >
                            <label class="sub-heading">Human Resource Manager</label><br>
                        </div>
                        <div class="form-group col-md-12 m-t-10">
                        <label style="font-style: italic;font-size: 18px;border-bottom: 1px solid #1E007F;font-family: ui-sans-serif;padding: 0;background:#fff">All Items As Above Have Been Returned</label>
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Date </label>
                            <input type="date" id="" name="" class="form-control" placeholder="" value="" > 
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Housekeeping Manager</label>
                            <select name="title" class="form-control custom-select">
                                <option selected="true" disabled="disabled"></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 m-t-10">
                        <label style="font-style: italic;font-size: 18px;border-bottom: 1px solid #1E007F;font-family: ui-sans-serif;padding: 0;background:#fff">The Following Items Have Not Been Returned To Us</label>
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label >Comment
                                </label><textarea style="min-height:38px; height:38px" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Date </label>
                            <input type="date" id="" name="" class="form-control" placeholder="" value="" > 
                        </div>
                        <div class="form-group col-md-4 m-t-10">
                            <label>Housekeeping Manager</label>
                            <select name="title" class="form-control custom-select">
                                <option selected="true" disabled="disabled"></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>

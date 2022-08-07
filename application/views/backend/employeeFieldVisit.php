<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>

<div class="page-wrapper">
<div class="message"></div>
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Field Visit
      </h3>
   </div>
   <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home
            </a>
         </li>
         <li class="breadcrumb-item active">Field Visit
         </li>
      </ol>
   </div>
</div>
<div class="container-fluid">

<div class="row">
   <div class="col-12">
      <div class="card card-outline-info">
         <div class="card-header">
            <h4 class="m-b-0 text-white"> Field Visit List                        
            </h4>
         </div>
         <div class="card-body">
            <div class="table-responsive ">
               <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>Location</th>
                        <th>Project Name</th>
                        <th>Start Date</th>
                        <th>Approx. End Date</th>
                        <th>Action</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php foreach($fieldVisits as $value): ?>
                     <tr>
                        <td><?=$value->field_location ?></td>
                        <td><?=$value->pro_name?></td>
                        <td><?= date('jS F', strtotime($value->start_date)) ?></td>
                        <td><?= date('jS F', strtotime($value->approx_end_date)) ?></td>
                        <td>
                        <a class="btn btn-sm btn-info waves-effect waves-light text-white viewFieldVisit" role="button" data-id="<?=$value->id ?>"><i  class="fa fa-eye "></i></a>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('modals/viewFieldVisitModal'); ?>
<?php $this->load->view('backend/footer'); ?>

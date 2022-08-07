<form class="row filledAppraisalForm" action="<?= base_url() ?>appraisal/AddAppraisal" method="post" enctype="multipart/form-data" id="totalAppraisal">
    <input type="hidden" name="id">
    <input type="hidden" name="appraisal_status">
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Overall Rating </label>
    </div>
    <!-- <div class="col-md-6"></div>   -->
    <div class="form-group row m-l-5">
        <div class="form-group col-md-3 m-t-10">
            <label>Section 1 (50%) </label>
            <input type="text" id="" name="overall_rating_sec1" class="form-control" placeholder="" value="">
        </div>
        <div class="form-group col-md-3 m-t-10">
            <label>Section 2 (45%) </label>
            <input type="text" id="" name="overall_rating_sec2" class="form-control" placeholder="" value="">
        </div>
        <div class="form-group col-md-3 m-t-10">
            <label>Section 3 (5%) </label>
            <input type="text" id="" name="overall_rating_sec3" class="form-control" placeholder="">
        </div>
        <div class="form-group col-md-3 m-t-10">
            <label>Total Score (100%)</label>
            <input type="text" id="" name="total_score" class="form-control" placeholder="" value="">
        </div>
        
        <div class="form-group col-md-12 m-t-10 evalSubmit" >
            <button type="submit" id="totalSubmit" class="btn btn-info">Close Appraisal</button>
        </div>
        <div class="form-group col-md-6 evalSubmit">
            <p>NB: By closing, you certify that appraisal has been completed. </p>
        </div>
    </div>
</form>

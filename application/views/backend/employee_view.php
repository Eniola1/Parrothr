<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>

<?php 
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('family');
    $this->db->where('em_id', $id);
    $query = $this->db->get();
    $query = $query->num_rows();
    
    $this->db->select('*');
    $this->db->from('employeedetails');
    $this->db->where('em_id', $id);
    $query2 = $this->db->get();
    $query2 = $query2->num_rows();

    $this->db->select('*');
    $this->db->from('profmembership');
    $this->db->where('em_id', $id);
    $query3 = $this->db->get();
    $query3 = $query3->num_rows();

    $this->db->select('*');
    $this->db->from('training');
    $this->db->where('em_id', $id);
    $query4 = $this->db->get();
    $query4 = $query4->num_rows();

    $this->db->select('*');
    $this->db->from('skills');
    $this->db->where('em_id', $id);
    $query5 = $this->db->get();
    $query5 = $query5->num_rows();

    $this->db->select('*');
    $this->db->from('employment');
    $this->db->where('em_id', $id);
    $query6 = $this->db->get();
    $query6 = $query6->num_rows();

    $this->db->select('*');
    $this->db->from('referees');
    $this->db->where('em_id', $id);
    $query7 = $this->db->get();
    $query7 = $query7->num_rows();
?>
<div class="page-wrapper">
<div class="message"></div>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor"> <?=ucwords($basic->first_name .' '.$basic->last_name); ?></h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
</div>
<?php 
    $states = [
        'Abia','Adamawa','Akwa Ibom','Anambra','Bauchi','Bayelsa','Benue','Borno','Cross River','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa','Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara',
    ];
    $banks= [
        'Access Bank Plc','Fidelity Bank Plc','First City Monument Bank Limited','First Bank of Nigeria Limited','Guaranty Trust Holding Company Plc','Union Bank of Nigeria Plc','United Bank for Africa Plc','Zenith Bank Plc','Citibank Nigeria Limited','Ecobank Nigeria','Heritage Bank Plc','Keystone Bank Limited','Polaris Bank Limited','Stanbic IBTC Bank Plc','Standard Chartered','Sterling Bank Plc','Titan Trust Bank Limited','Unity Bank Plc','Wema Bank Plc','Globus Bank Limited','Parallex Bank Limited','Providus Bank Limited','SunTrust Bank Nigeria Limited','Jaiz Bank Plc','LOTUS BANK','TAJBank Limited','Mutual Trust Microfinance Bank','Rephidim Microfinance Bank','Shepherd Trust Microfinance Bank','Empire Trust Microfinance Bank','Finca Microfinance Bank Limited','Fina Trust Microfinance Bank','Accion Microfinance Bank','Peace Microfinance Bank','Infinity Microfinance Bank','Pearl Microfinance Bank Limited','Covenant Mirofinance Bank Ltd','Sparkle Bank','Kuda Bank','Rubies Bank','VFD MFB','Mint Finex MFB','Mkobo MFB','Coronation Merchant Bank','FBNQuest Merchant Bank','FSDH Merchant Bank','Rand Merchant Bank','Nova Merchant Bank'
    ];
    $countries = [
        "Nigeria", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
    ]
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" style="font-size: 14px;">  Personal Details </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#family" role="tab" style="font-size: 14px;"> Family Background </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employment" role="tab" style="font-size: 14px;"> Employment Details</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#professional" role="tab" style="font-size: 14px;"> Professional Membership</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#training" role="tab" style="font-size: 14px;">Training Programme(s)</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#skills" role="tab" style="font-size: 14px;"> Key Job Skills</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#history" role="tab" style="font-size: 14px;"> History of Employment</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#referee" role="tab" style="font-size: 14px;"> Referees</a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#undertaking" role="tab" style="font-size: 14px;">Undertaking</a> </li> -->
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab" style="font-size: 14px;"> Change Password</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- personal tab -->
                    <div class="tab-pane active" id="personal" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="m-t-30">
                                                    <?php if(!empty($basic->em_image)){ ?>
                                                        <img src="<?=base_url(); ?>assets/images/users/<?=$basic->em_image; ?>" class="img-circle" width="150" />
                                                    <?php } else { ?>
                                                        <img src="<?=base_url(); ?>assets/images/users/user.png" class="img-circle" width="150" alt="<?=$basic->first_name ?>" title="<?=$basic->first_name ?>"/>                                   
                                                    <?php } ?>
                                                    <h4 class="card-title m-t-10"><?= ucwords($basic->first_name .' '.$basic->last_name); ?></h4><br>
                                                    <h6 class="card-subtitle"><?= ucwords($basic->des_name); ?></h6>
                                                </center>
                                            </div>
                                            <div>
                                                <hr> 
                                            </div>
                                            <div class="card-body"> <small class="text-muted">Email address </small>
                                                <h6><?=$basic->em_email; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                                <h6><?=$basic->em_phone; ?></h6> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <form class="row" action="Update" method="post" enctype="multipart/form-data">                       
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Employee Number </label>
                                                <input type="text" class="form-control form-control-line" placeholder="ID" name="em_code" <?php if($basic->em_id): echo 'readonly'; endif;?> value="<?=ucwords($basic->em_id)?>"  > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Title </label>
                                                <select name="em_title" class="form-control custom-select">
                                                    <option selected value="<?=$basic->em_title?>"><?=$basic->em_title;?></option>
                                                    <option value="Mr.">Mr</option>
                                                    <option value="Mrs.">Mrs</option>
                                                    <option value="Miss.">Miss</option>
                                                </select>
                                            </div>         
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>First Name</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Your first name" name="first_name" value="<?= ucwords($basic->first_name); ?>" <?php if($basic->first_name): echo 'readonly'; endif;?> minlength="3" > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Last Name </label>
                                                <input type="text" id="" name="last_name" class="form-control form-control-line" value="<?= ucwords($basic->last_name); ?>" placeholder="Your last name" <?php if($basic->last_name): echo 'readonly'; endif;?> minlength="3" > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Date Of Birth</label>
                                                <input type="date" name="em_birthday" class="form-control" placeholder="" <?php if($basic->em_birthday): echo 'readonly'; endif;?> value="<?=$basic->em_birthday; ?>"> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Genotype</label>
                                                <select name="em_genotype" class="form-control custom-select">
                                                    <option selected value="<?=$basic->em_genotype ?>"></option>
                                                    <option value="AA">AA</option>
                                                    <option value="AS">AS</option>
                                                    <option value="SS">SS</option>
                                                    <option value="AC">AC</option>
                                                    <option value="CC">CC</option>
                                                    <option value="SC">SC</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Blood Group </label>
                                                <select name="em_blood_group" class="form-control custom-select">
                                                    <option selected value="<?=$basic->em_blood_group ?>"></option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Nationality </label>
                                                <select name="em_nationality"  class="select2 form-control custom-select">
                                                    <option selected value="<?=$basic->em_nationality?>"><?=$basic->em_nationality;?></option>
                                                    <?php foreach($countries as $country): ?>
                                                        <?php if ($country !== $basic->em_nationality):?>
                                                            <option value="<?=$country ?>"><?=$country ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>State of Origin </label>
                                                <select name="em_state_origin"  class="select2 form-control custom-select">
                                                    <option selected value="<?=$basic->em_state_origin?>"><?=$basic->em_state_origin;?></option>
                                                    <?php foreach($states as $state): ?>
                                                        <?php if ($state !== $basic->em_state_origin):?>
                                                            <option value="<?=$state ?>"><?=$state ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Home Town </label>
                                                <input type="text"  class="form-control" placeholder="Home Town" name="em_home_town" value="<?=$basic->em_home_town; ?>" > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Religion </label>
                                                <select name="em_religion"  class="form-control custom-select">
                                                    <option selected value="<?= $basic->em_religion; ?>"><?= $basic->em_religion; ?></option>
                                                    <option value="Christian">Christian</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Traditional">Traditional</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Contact Number </label>
                                                <input type="text" class="form-control" placeholder="" name="em_phone"  value="<?=$basic->em_phone; ?>" <?php if($basic->em_phone): echo 'readonly'; endif;?> maxlength="15" > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Email </label>
                                                <input type="email" id="example-email2" name="em_email" class="form-control" <?php if($basic->em_email): echo 'readonly'; endif;?>  value="<?=$basic->em_email; ?>" placeholder="email@mail.com" > 
                                            </div>
                                            <div class="form-group col-md-8 m-t-5">
                                                <label>Postal Address</label>
                                                <input type="email" id="example-email2" name="em_postal_address" class="form-control"  value="<?=$basic->em_postal_address; ?>" placeholder="Postal Address" > 
                                            </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Home Address</label>
                                                <input type="text"  class="form-control" placeholder="Home Address" name="em_address" <?php if($basic->em_address): echo 'readonly'; endif;?> value="<?= $basic->em_address; ?>" > 
                                            </div>   
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Available ID </label>
                                                <select name="em_id_type" value="<?= $basic->em_id_type; ?>" class="form-control custom-select">
                                                    <option selected value="<?=$basic->em_id_type; ?>"><?= $basic->em_id_type; ?></option>
                                                    <option value="Passport">Passport</option>
                                                    <option value="Driver's License">Driver's License</option>
                                                    <option value="Voter's Card">Voter's Card</option>
                                                    <option value="NIN">NIN</option>
                                                </select>
                                            </div> 
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>ID Number</label>
                                                <input type="text"  class="form-control" placeholder="ID Number" name="em_nid" value="<?= $basic->em_nid; ?>" > 
                                            </div>                                                 
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Upload ID</label>
                                                <input type="file" name="em_id_image" class="form-control" value="<?=$basic->em_id_image?>">
                                                <span><?=$basic->em_id_image?></span>
                                            </div>                                                 
                                            <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>  <?php } else { ?> 
                                                <div class="form-group col-md-4 m-t-10">
                                                    <label>User Type </label>
                                                    <select name="em_role" class="form-control custom-select">
                                                        <option <?php if($basic->em_role == 'EMPLOYEE'): echo 'selected';endif;?> value="EMPLOYEE">Employee</option>
                                                        <option <?php if($basic->em_role == 'MANAGER'): echo 'selected';endif;?>  value="MANAGER">Manager</option>
                                                        <option <?php if($basic->em_role == 'ADMIN'): echo 'selected';endif;?> value="ADMIN">Admin</option>
                                                    </select>
                                                </div>
                                            <?php } ?>
                                            <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>  <?php } else { ?> 
                                                <div class="form-group col-md-4 m-t-10">
                                                    <label>Status </label>
                                                    <select name="status"  class="form-control custom-select"  >
                                                        <option <?php if($basic->status == 'ACTIVE'): echo 'selected';endif;?> value="ACTIVE">ACTIVE</option>
                                                        <option <?php if($basic->status == 'INACTIVE'): echo 'selected';endif;?> value="INACTIVE">INACTIVE</option>
                                                    </select>
                                                </div>
                                            <?php } ?>				                                    
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Bank</label>
                                                <select name="em_bank_name" <?php if($basic->em_bank_name): echo 'disabled'; endif;?>  class="select2 form-control custom-select">
                                                    <option selected value="<?=$basic->em_bank_name?>"><?=$basic->em_bank_name;?></option>
                                                    <?php foreach($banks as $bank): ?>
                                                        <?php if ($bank !== $basic->em_bank_name):?>
                                                            <option value="<?=$bank ?>"><?=$bank ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Account Name</label>
                                                <input type="text" class="form-control"placeholder="Account Name" name="em_ac_name" <?php if($basic->em_ac_name): echo 'readonly'; endif;?> value="<?= $basic->em_ac_name; ?>" > 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Account Number</label>
                                                <input type="text" class="form-control"placeholder="Account Number" name="em_ac_num" <?php if($basic->em_ac_num): echo 'readonly'; endif;?> value="<?= $basic->em_ac_num; ?>" > 
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Branch</label>
                                                <select name="branch" class="form-control custom-select">
                                                    <option selected value="<?=$basic->branch?>"><?=$basic->branch_name;?></option>
                                                    <?php foreach($branches as $value): ?>
                                                        <?php if ($value->id !== $basic->branch):?>
                                                            <option value="<?=$value->id ?>"><?=$value->branch_name ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Department</label>
                                                <select name="dep_id" class="form-control custom-select">
                                                    <option selected value="<?=$basic->dep_id?>"><?=$basic->dep_name;?></option>
                                                    <?php foreach($departments as $value): ?>
                                                        <?php if ($value->id !== $basic->dep_id):?>
                                                            <option value="<?=$value->id ?>"><?=$value->dep_name ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>         
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Designation </label>
                                                <select name="des_id"  class="form-control custom-select">
                                                    <option selected value="<?=$basic->des_id?>"><?=$basic->des_name;?></option>
                                                    <?php foreach($designations as $value): ?>
                                                        <?php if ($value->id !== $basic->des_id):?>
                                                            <option value="<?=$value->id ?>"><?=$value->des_name ?></option>
                                                        <?php endif;?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <?php if(!empty($basic->em_image)){ ?>
                                                <img src="<?=base_url(); ?>assets/images/users/<?=$basic->em_image; ?>" class="img-circle" width="150" />
                                                <?php } else { ?>
                                                <img src="<?=base_url(); ?>assets/images/users/user.png" class="img-circle" width="150" alt="<?=$basic->first_name ?>" title="<?=$basic->first_name ?>"/>                                   
                                                <?php } ?>
                                                <label>Image</label>
                                                <input type="file"  name="em_image" class="form-control" value=""> 
                                                <span>(max: 2MB, 800px X 800px)</span>
                                            </div>
                                            
                                            <div class="form-actions col-md-12">
                                                <input type="hidden" name="em_id" value="<?=$basic->em_id; ?>">
                                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--family tab-->
                    <div class="tab-pane" id="family" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <form action="familyDetails" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Father's First Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->fathersFirstName : ''?>" type="text" name="fathersFirstName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Father's Middle Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->fathersMiddleName : ''?>" type="text" name="fathersMiddleName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Father's Last Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->fathersLastName : ''?>" type="text" name="fathersLastName">
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Mother's First Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->mothersFirstName : ''?>" type="text" name="mothersFirstName">
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Mother's Middle Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->mothersMiddleName : ''?>" type="text" name="mothersMiddleName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Mother's Last Name</label>
                                            <input class="form-control" value = "<?php echo ($query != 0) ? $famBackground->mothersLastName : ''?>" type="text" name="mothersLastName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Marital Status </label>
                                            <select name="maritalStatus" class="form-control custom-select" >
                                                <option selected value="<?php echo ($query != 0) ? $famBackground->maritalStatus : ''?>"></option>
                                                <option value="Married (Legal)">Married (Legal)</option>
                                                <option value="Married (Traditional)">Married (Traditional)</option>
                                                <option value="Single">Single</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Separated">Separated</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                        </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's First Name</label>
                                                <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->spousesFirstName : ''?>"  type="text" name="spousesFirstName" >
                                            </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's Middle Name</label>
                                                <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->spousesMiddleName : ''?>" type="text" name="spousesMiddleName" >
                                            </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's Last Name</label>
                                                <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->spousesLastName : ''?>" type="text" name="spousesLastName" >
                                            </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's Employment </label>
                                                <select name="spousesEmployment"  class="form-control custom-select">
                                                <option selected value="<?php echo ($query != 0) ? $famBackground->spousesEmployment : ''?>"></option>
                                                    <option value="Employed">Employed</option>
                                                    <option value="Self-employed">Self-employed</option>
                                                    <option value="Unemployed">Unemployed</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's Employer</label>
                                                <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->spousesEmployer : ''?>" type="text" name="spousesEmployer" >
                                            </div>
                                            <div class="form-group col-md-4 m-t-5">
                                                <label>Spouse's Place of Work Address</label>
                                                <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->spousesWorkAddress : ''?>" type="text" name="spousesWorkAddress" >
                                            </div>
                                        <!-- </div> -->
                                        <div class="form-group col-md-8 m-t-5">
                                            <p>Do you have any relative in this company?</p>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="relativeInCompany" id="inlineRadio1" value="yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="relativeInCompany" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Full Name of Relation</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->nameOfRelation : ''?>" type="text" name="nameOfRelation" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Nature of Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->natureOfRelation : ''?>" type="text" name="natureOfRelation" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Position in the Company</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->postionOfRelation : ''?>" type="text" name="postionOfRelation" >
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Next of Kin</h4>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>First Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->nextOfKinFirstName : ''?>" type="text" name="nextOfKinFirstName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Last Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->nextOfKinLastName : ''?>" type="text" name="nextOfKinLastName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->nextOfKinRelationship : ''?>" type="text" name="nextOfKinRelationship" >
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Emergency Details (Who to contact in case of an emergency)</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Full Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->emergencyFullName : ''?>" type="text" name="emergencyFullName" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->emergencyRelationship : ''?>" type="text" name="emergencyRelationship" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Phone Number</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->emergencyPhone : ''?>" type="text" name="emergencyPhone" >
                                        </div>
                                    </div>

                                    <div>
                                        <h5>Dependant 1</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>First Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantFirstName1 : ''?>" type="text" name="dependantFirstName1" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Last Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantLastName1 : ''?>" type="text" name="dependantLastName1" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantRelationship1 : ''?>" type="text" name="dependantRelationship1" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date Of Birth </label>
                                            <input type="date" id="example-email2" value="" name="dobForDependant1" class="form-control" placeholder="" > 
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Dependant 2</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>First Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dobForDependant1 : ''?>" type="text" name="dependantFirstName2" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Last Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantLastName2 : ''?>" type="text" name="dependantLastName2" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantRelationship2 : ''?>" type="text" name="dependantRelationship2" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date Of Birth </label>
                                            <input type="date" id="example-email2" value="" name="dobForDependant2" class="form-control" placeholder="" > 
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Dependant 3</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>First Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantFirstName3 : ''?>" type="text" name="dependantFirstName3" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Last Name</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantLastName3 : ''?>" type="text" name="dependantLastName3" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-5">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo ($query != 0) ? $famBackground->dependantRelationship3 : ''?>" type="text" name="dependantRelationship3" >
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date Of Birth </label>
                                            <input type="date" id="example-email2" value="" name="dobForDependant3" class="form-control" placeholder="" > 
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!--employment tab-->
                    <div class="tab-pane" id="employment" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <form class="" action="employmentDetails" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date Of Joining </label>
                                            <input type="date" id="example-email2" name="dOfJoining" class="form-control" value=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Duration Of Contract </label>
                                            <input type="text" id="" name="duration" class="form-control form-control-line" value="<?php echo ($query2 != 0) ? $empDetails->durationOfContract : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Division</label>
                                            <select name="division" value="<?php //echo $basic->em_genotype; ?>" class="form-control custom-select">
                                                <option value="<?php //echo $basic->em_genotype; ?>"><?php //echo $basic->em_genotype; ?></option>
                                                <option value="AA">AA</option>
                                                <option value="AS">AS</option>
                                                <option value="SS">SS</option>
                                                <option value="AC">AC</option>
                                                <option value="CC">CC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Job Title</label>
                                            <select name="jobTitle" value="<?php //echo $basic->em_genotype; ?>" class="form-control custom-select">
                                                <option value="<?php //echo $basic->em_genotype; ?>"><?php //echo $basic->em_genotype; ?></option>
                                                <option value="AA">AA</option>
                                                <option value="AS">AS</option>
                                                <option value="SS">SS</option>
                                                <option value="AC">AC</option>
                                                <option value="CC">CC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Reports To</label>
                                            <select name="reportsTo" value="<?php //echo $basic->em_genotype; ?>" class="form-control custom-select">
                                                <option value="<?php //echo $basic->em_genotype; ?>"><?php //echo $basic->em_genotype; ?></option>
                                                <option value="AA">AA</option>
                                                <option value="AS">AS</option>
                                                <option value="SS">SS</option>
                                                <option value="AC">AC</option>
                                                <option value="CC">CC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>

                                </form>
                            </div>                                    
                        </div>
                        
                    </div>

                    <!--professional tab-->
                    <div class="tab-pane" id="professional" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <form class="" action="profMembership" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Association</label>
                                            <input type="text" id="" name="association1" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->Association : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Membership Type</label>
                                            <select name="membershipType1" class="form-control custom-select">
                                                <option value="Associate">Associate</option>
                                                <option value="Member">Member</option>
                                                <option value="Fellow">Fellow</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Annual Fee</label>
                                            <input type="text" id="" name="fee1" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->annualFee : ''?>" placeholder=""> 
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Extras</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Association</label>
                                            <input type="text" id="" name="association2" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->association1 : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Membership Type</label>
                                            <select name="membershipType2" class="form-control custom-select">
                                                <option value="Associate">Associate</option>
                                                <option value="Member">Member</option>
                                                <option value="Fellow">Fellow</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Annual Fee</label>
                                            <input type="text" id="" name="fee2" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->extrafee1 : ''?>" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Association</label>
                                            <input type="text" id="" name="association3" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->association2 : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Membership Type</label>
                                            <select name="membershipType3" class="form-control custom-select">
                                                <option value="Associate">Associate</option>
                                                <option value="Member">Member</option>
                                                <option value="Fellow">Fellow</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Annual Fee</label>
                                            <input type="text" id="" name="fee3" class="form-control form-control-line" value="<?php echo ($query3 != 0) ? $profMembership->extrafee2 : ''?>" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>
                                </form>
                            </div>                                     
                        </div>
                    </div>

                    <!-- training tab -->
                    <div class="tab-pane" id="training" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <form action="training" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date </label>
                                            <input type="date" id="example-email2" name="date1" class="form-control" value="" > 
                                        </div>
                                        <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Course</label>
                                            <input type="text" id="" name="course1" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->course : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Duration</label>
                                            <input type="text" id="" name="duration1" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->duration : ''?>" placeholder="Eg: 10 days, 2 weeks, 3 months, 4 years"> 
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Extras</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date </label>
                                            <input type="date" id="example-email2" name="date2" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Course</label>
                                            <input type="text" id="" name="course2" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->course1 : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Duration</label>
                                            <input type="text" id="" name="duration2" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->duration1 : ''?>" placeholder="Eg: 10 days, 2 weeks, 3 months, 4 years"> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Date </label>
                                            <input type="date" id="example-email2" name="date3" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Course</label>
                                            <input type="text" id="" name="course3" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->course2 : ''?>" placeholder=""> 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Duration</label>
                                            <input type="text" id="" name="duration3" class="form-control form-control-line" value="<?php echo ($query4 != 0) ? $training->duration2 : ''?>" placeholder="Eg: 10 days, 2 weeks, 3 months, 4 years"> 
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- skills tab -->
                    <div class="tab-pane" id="skills" role="tabpanel">
                        <div class="card-body">
                            <form action="skills" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-4 m-t-10">
                                    <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <label>Skill </label>
                                        <input type="text" id="example-email2" name="skill1" class="form-control" value="<?php echo ($query5 != 0) ? $skills->skill1 : ''?>" > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Competency</label>
                                        <select name="competency1" class="form-control custom-select">
                                            <option value="Associate">Beginner</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Current Application</label>
                                        <select name="application1" class="form-control custom-select">
                                            <option value="Associate">Never</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Skill </label>
                                        <input type="text" id="example-email2" name="skill2" class="form-control" value="<?php echo ($query5 != 0) ? $skills->skill2 : ''?>" > 
                                    </div>
                                    <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Competency</label>
                                        <select name="competency2" class="form-control custom-select">
                                            <option value="Associate">Beginner</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Current Application</label>
                                        <select name="application2" class="form-control custom-select">
                                            <option value="Associate">Never</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Skill3</label>
                                        <input type="text" id="example-email2" name="skill3" class="form-control" value="<?php echo ($query5 != 0) ? $skills->skill3 : ''?>" > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Competency3</label>
                                        <select name="competency3" class="form-control custom-select">
                                            <option value="Associate">Beginner</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Current Application</label>
                                        <select name="application3" class="form-control custom-select">
                                            <option value="Associate">Never</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Skill4</label>
                                        <input type="text" id="example-email2" name="skill" class="form-control" value="<?php echo ($query5 != 0) ? $skills->skill4 : ''?>" > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Competency</label>
                                        <select name="competency4" class="form-control custom-select">
                                            <option value="Associate">Beginner</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-10">
                                        <label>Current Application</label>
                                        <select name="application4" class="form-control custom-select">
                                            <option value="Associate">Never</option>
                                            <option value="Member">Intermediate</option>
                                            <option value="Fellow">Advanced</option>
                                            <option value="Other">Expert</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                    <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                </div>

                            </form>
                        </div>                                    
                    </div>

                    <!-- history tab -->
                    <div class="tab-pane" id="history" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                            <form action="history" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- <label>Duration </label> -->
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>From:</label><input type="date" id="example-email2" name="from1" class="form-control" value="" > 
                                        </div>
                                        <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>To:</label><input type="date" id="example-email2" name="to1" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Company Name</label>
                                            <input type="text" id="example-email2" name="name1" class="form-control" value="<?php echo ($query6 != 0) ? $history->companyName : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Last Position Held</label>
                                            <input type="text" id="example-email2" name="position1" class="form-control" value="<?php echo ($query6 != 0) ? $history->lastPosition : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-8 m-t-10">
                                            <label>Reason For Leaving</label>
                                            <input type="text" id="example-email2" name="reason1" class="form-control" value="<?php echo ($query6 != 0) ? $history->leavingReason : ''?>" > 
                                        </div>
                                    </div>
                                    <div><hr></div>
                                    <div class="row">
                                        <!-- <label>Duration </label> -->
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>From:</label><input type="date" id="example-email2" name="from2" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>To:</label><input type="date" id="example-email2" name="to2" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Company Name</label>
                                            <input type="text" id="example-email2" name="name2" class="form-control" value="<?php echo ($query6 != 0) ? $history->companyName2 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Last Position Held</label>
                                            <input type="text" id="example-email2" name="position2" class="form-control" value="<?php echo ($query6 != 0) ? $history->lastPosition2 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-8 m-t-10">
                                            <label>Reason For Leaving</label>
                                            <input type="text" id="example-email2" name="reason2" class="form-control" value="<?php echo ($query6 != 0) ? $history->leavingReason2 : ''?>" > 
                                        </div>
                                    </div>
                                    <div><hr></div>
                                    <div class="row">
                                        <!-- <label>Duration </label> -->
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>From:</label><input type="date" id="example-email2" name="from3" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>To:</label><input type="date" id="example-email2" name="to3" class="form-control" value="" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Company Name</label>
                                            <input type="text" id="example-email2" name="name3" class="form-control" value="<?php echo ($query6 != 0) ? $history->companyName3 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-4 m-t-10">
                                            <label>Last Position Held</label>
                                            <input type="text" id="example-email2" name="position3" class="form-control" value="<?php echo ($query6 != 0) ? $history->lastPosition3 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-8 m-t-10">
                                            <label>Reason For Leaving</label>
                                            <input type="text" id="example-email2" name="reason3" class="form-control" value="<?php echo ($query6 != 0) ? $history->leavingReason3 : ''?>" > 
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   

                    <!-- referee tab -->
                    <div class="tab-pane" id="referee" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Referees<span><h6>(Fill all)</h6></span></h4>
                                <form action="referee" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Name of Referee</label><input type="text" id="example-email2" name="name1" class="form-control" value="<?php echo ($query7 != 0) ? $referees->name1 : ''?>" > 
                                        </div>
                                        <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Address</label>
                                            <input type="text" id="example-email2" name="address1" class="form-control" value="<?php echo ($query7 != 0) ? $referees->address1 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Phone Number</label>
                                            <input type="text" id="example-email2" name="number1" class="form-control" value="<?php echo ($query7 != 0) ? $referees->phone1 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Relationship With Referee</label>
                                            <input type="text" id="example-email2" name="relationship1" class="form-control" value="<?php echo ($query7 != 0) ? $referees->relationship1 : ''?>" > 
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Name of Referee</label><input type="text" id="example-email2" name="name2" class="form-control" value="<?php echo ($query7 != 0) ? $referees->name2 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Address</label>
                                            <input type="text" id="example-email2" name="address2" class="form-control" value="<?php echo ($query7 != 0) ? $referees->address2 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Phone Number</label>
                                            <input type="text" id="example-email2" name="number2" class="form-control" value="<?php echo ($query7 != 0) ? $referees->number2 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Relationship With Referee</label>
                                            <input type="text" id="example-email2" name="relationship2" class="form-control" value="<?php echo ($query7 != 0) ? $referees->relationship2 : ''?>" > 
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Name of Referee</label><input type="text" id="example-email2" name="name3" class="form-control" value="<?php echo ($query7 != 0) ? $referees->name3 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Address</label>
                                            <input type="text" id="example-email2" name="address3" class="form-control" value="<?php echo ($query7 != 0) ? $referees->address3 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Phone Number</label>
                                            <input type="text" id="example-email2" name="number3" class="form-control" value="<?php echo ($query7 != 0) ? $referees->number3 : ''?>" > 
                                        </div>
                                        <div class="form-group col-md-3 m-t-10">
                                            <label>Relationship With Referee</label>
                                            <input type="text" id="example-email2" name="relationship3" class="form-control" value="<?php echo ($query7 != 0) ? $referees->relationship3 : ''?>" > 
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Save</button>
                                        <a href = "<?=base_url(); ?>employee/view?id=<?php echo $_GET['id'];?>"><button type="button" class="btn btn-info">Cancel</button></a>
                                    </div>
                                    
                                </form> 
                            </div>
                        </div>
                    </div>

                    <!-- undertaking tab -->
                    <!-- <div class="tab-pane" id="undertaking" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Undertaking</h4>
                                <form action="undertaking" method="post" enctype="multipart/form-data">
                                    <p>I hereby state that the information provided to Golden Tulip Hotel in this document is truthful</p>
                                    <div class="row">
                                    <input type = "hidden" value = "<?php echo $_GET['id']; ?>" name = "uid">
                                        <div class="form-check col-sm-3">
                                            <input class="form-check-input" name = "status" type="checkbox" value="true" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Agree
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </div> 
                                </form> 
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- change password -->
                    <div class="tab-pane" id="password" role="tabpanel">
                        <div class="card-body">
                        <?php if($this->session->userdata('user_type') !=='EMPLOYEE'):?> 
                            <form class="row" action="Reset_Password_Hr" method="post" enctype="multipart/form-data">
                                <div class="form-group col-md-4 m-t-20">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" name="new1" value=""  minlength="6"> 
                                </div>
                                <div class="form-group col-md-4 m-t-20">
                                    <label>Confirm Password</label>
                                    <input type="text" id="" name="new2" class="form-control "  minlength="6"> 
                                </div>
                                <div class="form-actions col-md-12">
                                    <input type="hidden" name="emid" value="<?=$basic->em_id; ?>">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                </div>
                            </form>
                        <?php else:?> 
                            <form class="row" action="Reset_Password" method="post" enctype="multipart/form-data">
                                <div class="form-group col-md-4 m-t-20">
                                    <label>Old Password</label>
                                    <input type="text" class="form-control" name="old" value="" placeholder="old password"  minlength="6"> 
                                </div>
                                <div class="form-group col-md-4 m-t-20">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" name="new1" value=""  minlength="6"> 
                                </div>
                                <div class="form-group col-md-4 m-t-20">
                                    <label>Confirm Password</label>
                                    <input type="text" id="" name="new2" class="form-control "  minlength="6"> 
                                </div>
                                <div class="form-actions col-md-12">
                                    <input type="hidden" name="emid" value="<?=$basic->em_id; ?>">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                </div>
                            </form>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

<?php $this->load->view('backend/footer'); ?>

<?php $settingsvalue = $this->settings_model->GetSettingsValue(); ?>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                        <?php 
                        $id = $this->session->userdata('user_login_id');
                        $basicinfo = $this->employee_model->GetBasic($id); 
                        ?>                
                <div class="user-profile" style="display:flex; justify-content:center; align-items: center;flex-direction: column">

                    <!-- User profile text-->
                    <div class="profile-text">
                        
						<?php if($this->session->userdata('user_type') == "ADMIN"): ?>	
                        	<a href="<?= base_url(); ?>settings/Settings" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
						<?php endif; ?>
                        <a href="<?= base_url(); ?>login/logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" >
                    <ul id="sidebarnav">
                        
                        <li> <a href="<?= base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employee </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>employee/queries" >Disciplinary </a></li>
                                <li><a href="<?= base_url(); ?>employee/requests">Requests</a></li>
                                <li><a <?php //if($basicinfo->designation !== null){ ?> href="<?= base_url()?>notice/All_notice" <?php //}?> >Announcements</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="iconify" data-icon="ic:sharp-dynamic-form" style ="margin-right:10px;font-size: 19px;display: inline-block;vertical-align: middle;"></span><span class="hide-menu">HR Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class=" waves-effect waves-dark"  href="<?= base_url(); ?>employee/PolicyDocuments"> Policy Documents </a></li>
                                <li><a class=" waves-effect waves-dark"  href="<?= base_url(); ?>employee/EmployeeForms"> Employee Forms </a></li>
                                <li><a class="waves-effect waves-dark" href="<?= base_url(); ?>employee/OnboardingForms"> Employee Onboarding Forms</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Tasks </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="<?= base_url(); ?>Projects/all_projects"> Projects </a></li> -->
                                <li><a href="<?= base_url(); ?>Projects/employeetasks"> Task List </a></li>
                                <li><a href="<?= base_url(); ?>Projects/EmployeeFieldVisit"> Field Visit</a></li>
                            </ul>
                        </li>   
                        <li> <a href="<?= base_url();?>organization/organogram" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Organogram </span></a></li> 
                        <?php } else { ?>
                            <li> <a href="<?= base_url()?>notice/All_notice" ><i class="fa fa-bullhorn"></i><span class="hide-menu">Announcements <span class="hide-menu"></a></li>
                            <li> <a href="<?= base_url()?>event" ><i class="fa fa-calendar"></i><span class="hide-menu">Events <span class="hide-menu"></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu">Organization </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url();?>organization/branch">Branch </a></li>
                                <li><a href="<?= base_url();?>organization/Department">Department </a></li>
                                <li><a href="<?= base_url();?>organization/Designation">Designation</a></li>
								<li><a href="<?= base_url();?>organization/organogram">Organogram</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>employee/employees">Employees </a></li>
                                <li><a href="<?= base_url(); ?>employee/employeeApplications">Employee Applications </a></li>
                                <li><a href="<?= base_url(); ?>employee/disciplinary">Disciplinary Actions</a></li>
                                <li><a href="<?= base_url(); ?>employee/employeeOfTheMonth">Employee of the Month</a></li>
                                <li><a href="<?= base_url(); ?>employee/Inactive_Employee">Inactive User </a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Attendance </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>attendance/Attendance">Attendance List </a></li>
                                <li><a href="<?= base_url(); ?>attendance/Attendance_Report">Attendance Report </a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Tasks </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>Projects/All_Projects">Projects </a></li>
                                <li><a href="<?= base_url(); ?>Projects/All_Tasks"> Task List </a></li>
                                <li><a href="<?= base_url(); ?>Projects/Field_visit"> Field Visit</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">Leave </span></a>
                        <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url(); ?>leave/Application"> Leave Applications </a></li>
                                <li><a href="<?= base_url(); ?>leave/leavetypes"> Leave Type</a></li>
                                <li><a href="<?= base_url(); ?>leave/Holidays"> Holiday </a></li>
                                <!-- <li><a href="<?= base_url(); ?>leave/Earnedleave"> Earned Leave </a></li> -->
                                <li><a href="<?= base_url(); ?>leave/Leave_report"> Report </a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Assets </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url(); ?>Logistice/Assets_Category"> Assets Category </a></li>
                            <li><a href="<?= base_url(); ?>Logistice/All_Assets"> Asset List </a></li>
                            <!-- <li><a href="<?= base_url(); ?>Logistice/logistic_support"> Logistic Support </a></li> -->
                        </ul>
                        </li>
                    
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

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
                        	<a href="<?php echo base_url(); ?>settings/Settings" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
						<?php endif; ?>
                        <a href="<?php echo base_url(); ?>login/logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="border-top: 3px solid #dcdcdc;">
                    <ul id="sidebarnav">
                        
                        <li> <a href="<?php echo base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employee </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>employee/queries" >Disciplinary </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/requests">Requests</a></li>
                                <li><a <?php //if($basicinfo->designation !== null){ ?> href="<?php echo base_url()?>notice/All_notice" <?php //}?> >Announcements</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="iconify" data-icon="ic:sharp-dynamic-form" style ="margin-right:10px;font-size: 19px;display: inline-block;vertical-align: middle;"></span><span class="hide-menu">HR Forms </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class=" waves-effect waves-dark"  href="<?php echo base_url(); ?>employee/PolicyDocuments"> Policy Documents </a></li>
                                <li><a class=" waves-effect waves-dark"  href="<?php echo base_url(); ?>employee/EmployeeForms"> Employee Forms </a></li>
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url(); ?>employee/OnboardingForms"> Employee Onboarding Forms</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Tasks </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="<?php echo base_url(); ?>Projects/all_projects"> Projects </a></li> -->
                                <li><a href="<?php echo base_url(); ?>Projects/employeetasks"> Task List </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/EmployeeFieldVisit"> Field Visit</a></li>
                            </ul>
                        </li>   
                        <li> <a href="<?php echo base_url();?>organization/organogram" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Organogram </span></a></li> 
                            <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Leave </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> Holiday </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmApplication"> Leave Application </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmLeavesheet"> Leave Sheet </a></li>
                            </ul>
                        </li>  -->

                        <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Projects </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects">Projects </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> Task List </a></li>
                                <li><a href="<?php #echo base_url(); ?>Projects/All_Tasks"> Field Visit</a></li>
                            </ul>
                        </li>     --> 
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

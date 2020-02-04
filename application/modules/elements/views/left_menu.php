<?php $cur_url = current_url(); ?>
<ul class="sidebar navbar-nav">
    <!-- ============================== SITE DASHBOARD ============================= -->
    <?php
    if(has_permission('menu-dashboard')){
        if(has_permission('admin/dashboard')){
    ?>
        <li class="active nav-item <?php if (strpos($cur_url, 'admin/dashboard') !== false){echo'menu_active active'; }?>">
            <a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    <!--    <li><label style="color: #c6c6c6;text-align: center;width: 100%;font-size: x-small;letter-spacing: 7px;"><hr>APPLICATION DATA<hr></label></li>-->
    <?php
        }
    }
    ?>
    <!-- ============================== EMPLOYEE MANAGEMENT ============================= -->
    <?php
    if(has_permission('menu-employee')){
    ?>
        <li class="active nav-item 
            <?php if(
                   strpos($cur_url, 'employee/index')               !== false || strpos($cur_url, 'employee/personal_details') !== false 
                || strpos($cur_url, 'employee/academic_details')    !== false || strpos($cur_url, 'employee/family_details')   !== false 
                || strpos($cur_url, 'employee/service_details')     !== false || strpos($cur_url, 'employee/payscale_section') !== false
                || strpos($cur_url, 'employee/award_section')       !== false || strpos($cur_url, 'employee/training_section') !== false
                || strpos($cur_url, 'employee/performance_section') !== false || strpos($cur_url, 'employee/promotion')        !== false
                || strpos($cur_url, 'employee/teacher_exchange')    !== false || strpos($cur_url, 'employee/foreign_visit')    !== false
                ){ echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url('employee/index'); ?>">
                <i class="fas fa-user-cog" aria-hidden="true"></i>
                <span>Add / Edit Employee</span>
            </a>
        </li>
    <?php
    }
    ?>
    <!-- ============================== PROFILE MANAGEMENT ============================= -->
    <?php
    if(has_permission('menu-profile')){
    ?>
    <li class="active nav-item <?php if (strpos($cur_url, 'profile/ProfileList') !== false) {
        echo'menu_active ';
    } ?>">
        <a class="nav-link" href="<?php echo site_url('profile/ProfileList'); ?>">
            <i class="fas fa-user-cog" aria-hidden="true"></i>
            <span>Regd. Employee List</span>
        </a>
    </li> 
    <?php
    }
    ?>
    <!-- ============================== MY PROFILE  ============================= -->
    <?php
    if (has_permission('menu-myprofile')) {
        $EC=$this->session->userdata['user_name'];
        $MyURI='profile/index?EC='. base64_encode($EC);
    ?>
        <li class="active nav-item <?php if (strpos($cur_url, 'profile/index') !== false) {  echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url($MyURI); ?>">
                <i class="fas fa-address-card"></i>
                <span>My Profile</span>
            </a>
        </li>
    <?php
    }
    ?>
    <!-- ============================== MIS REPORT ============================= -->
    <?php
    if(has_permission('menu-mis-report')){
        if($this->session->userdata['role_id']!= '6'){
        ?>
        <li class="active nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!--  <i class="fas fa-exchange-alt"></i> !-->
                      <i class="fa fa-newspaper-o"></i>
                <span>MIS Report</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="top-start" >
                <a class="dropdown-item" href="<?php echo site_url('reports/index'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Employee Report
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('reports/vacancy'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Vacancy Report
                </a>
                <!--<div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php // echo site_url('reports/reportone'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Custom One
                </a>--?
            </div>
        </li>
        <?php
        }
    }
    ?>
    <!-- ============================== TRANSFER MANAGEMENT ============================= -->
    <?php
    if(has_permission('menu-transfer')){
    ?>
        <li class="active nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-exchange-alt"></i>
                <span>Transfer</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="top-start" >
                <?php if (has_permission('swap/index')) { ?>
                <a class="dropdown-item" href="<?php echo site_url('swap/index'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Initiate Transfer
                </a>
                <?php } if (has_permission('swap/pending_for_approval')) { ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('swap/pending_for_approval'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Pending For Approval
                </a>
                <?php } if (has_permission('swap/pending_for_resolution')) { ?>
                <?php if($this->session->userdata['role_id']=='2' && $this->session->userdata['role_category']=='3'){ ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('swap/pending_for_resolution'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Pending For Resolution
                </a>
                <?php } ?>
                <?php } if (has_permission('swap/transfer_history')) { ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('swap/transfer_history'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Transfer History
                </a>
                <?php } ?>
            </div>
        </li>
    <?php
    }
    ?>
     <!-- ============================== COMPLIANCE REPORT ============================= -->
    <?php
    if(has_permission('menu-com-report')){
    ?>
    <li class="active nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--  <i class="fas fa-exchange-alt"></i> !-->
		  <i class="fa fa-gavel" aria-hidden="true"></i>
            <span>Compliance</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="top-start" >
            <?php
            if($this->session->userdata['role_id']!='1'){
            ?>
            <a class="dropdown-item" href="<?php echo site_url('compliance/index'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Submit Compliance
            </a>
            <?php
            }
            if($this->session->userdata['role_id']=='3'){
            ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('compliance/compliance_report'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Compliance Report
            </a>
            <?php
            }
            ?>
            <?php
            if($this->session->userdata['role_id']== '2' || $this->session->userdata['role_category']=='3'){
            ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('compliance/compliance_report'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Compliance Report
            </a>
            <?php
            }
            ?>
        </div>
    </li>
    <?php
    }
    ?>
    
    <!-- ============================== USER MASTER ============================= -->
    <?php
    if(has_permission('menu-user')){
        ?>
        <li><label style="color: #c6c6c6;text-align: center;width: 100%;font-size: x-small;letter-spacing: 10px;"><hr>MASTER DATA<hr></label></li>
        <li class="active nav-item  <?php if (strpos($cur_url, 'admin/users/index') !== false) {
            echo'menu_active active';
        } ?>">
            <a class="nav-link" href="<?php echo site_url('admin/users/index'); ?>">
                <i class="fas fa-users" aria-hidden="true"></i>
                <span>Users Master</span>
            </a>
        </li>
        
        <?php
    }?>
    <!-- ============================== ROLE MASTER ============================= -->   
    <?php
    if (has_permission('menu-role')) {
        ?>
        <li class="active nav-item <?php if (strpos($cur_url, 'admin/roles') !== false) {  echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url('admin/roles'); ?>">
                <i class="fas fa-address-card"></i>
                <span>Roles Master</span>
            </a>
        </li>
        <?php
    }
    ?>
    <!-- ============================== VACANCY MASTER ============================= -->
    <?php
    if(has_permission('menu-master')){
    ?>
    <li class="active nav-item <?php if (strpos($cur_url, 'vacancy/index') !== false) { echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url('vacancy/index'); ?>">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <span>Vacancy Master</span>
            </a>
    </li>
    <?php
    }
    ?>
    <!-- ============================== ALL MASTERS ============================= -->   
    <?php
        if(has_permission('menu-master')) {
    ?>
    <li class="active nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cogs" aria-hidden="true"></i>
            <span>PIS Master</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" x-placement="top-start" >
            <?php if (has_permission('master/designation_category')) {  ?>
                <a class="dropdown-item" href="<?php echo site_url('admin/master/designation_category'); ?>">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Designation Category
                </a>
                <?php }
            ?>
            <?php if (has_permission('master/designation')) { ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/designation'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Designation
            </a>
            <?php }?>
            
            <?php if (has_permission('master/category')) { ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/category'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Category
            </a>
            <?php }?>
            
            <?php if (has_permission('master/region')) { ?>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/region'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Region
            </a>
            <?php }?>
            
            <?php if (has_permission('master/school')) { ?>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/school'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;School
            </a>
            <?php }?>
            
            <?php if (has_permission('master/subject')) { ?>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/subject'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Subject
            </a>
            <?php }?>
            
            <?php //if (has_permission('master/qualification')) { ?>
<!--            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/qualification'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Qualification
            </a>-->
            <?php// }?>
            
            <?php //if (has_permission('master/promotions')) { ?>
<!--            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/promotions'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Promotions
            </a>-->
            <?php //}?>
            
            <?php if (has_permission('master/level_range')) { ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/master/level_range'); ?>">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Pay Level Range
            </a>
            <?php }?>
        </div>
    </li>
    
    <?php
        }
    ?>
    <!-- ============================== USER ACTIVITY ============================= -->
    <?php
    if(has_permission('menu-user')){
        ?>
        <li class="active nav-item  <?php if (strpos($cur_url, 'admin/users/activities_logs') !== false) {
            echo'menu_active active';
        } ?>">
            <a class="nav-link" href="<?php echo site_url('admin/users/activities_logs'); ?>">
                <i class="fa fa-history"></i>
                <span>Users Activity</span>
            </a>
        </li>
        
        <?php
    }?>
    <!-- ============================== EMPLOYEE PROFILE ============================= -->
    
    <?php
    if (has_permission('menu-notify')) {
    ?>
        <li class="active nav-item <?php if (strpos($cur_url, 'admin/Notification') !== false) {  echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url('admin/Notification'); ?>">
                <i class="fas fa-comment"></i>
                <span>Notifications</span>
            </a>
        </li>
    <?php
    if($this->session->userdata['role_id']== '6'){
    ?>
        <li class="active nav-item <?php if (strpos($cur_url, 'admin/Notification') !== false) {  echo'menu_active '; } ?>">
            <a class="nav-link" href="<?php echo site_url('admin/Notification/sendmessage'); ?>">
                <i class="fas fa-comment"></i>
                <span>Feedback</span>
            </a>
        </li>
    <?php
        }
    }
    ?>
</ul>
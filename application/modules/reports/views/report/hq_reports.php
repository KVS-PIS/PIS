<style>
    .buttons-excel{
       background-color: green;
       color: white;
    }
    
</style>

<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
				<a href="#">Dashboard</a>
				
            </li>
            <li class="breadcrumb-item active">Reports</li>
	</ol>
	<?php //pr($this->session->userdata); ?>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-users"></i>&nbsp; Employee Registration Report</div>
		<form>
		<div class="row col-md-12">
                <div class="form-group col-md-3" >
                    <label for="" class="col-form-label">Place of Posting  <span class="reqd">*</span></label>
                    <?php  $name = role_lists($this->session->userdata['role_id']) ;
                    echo form_dropdown("initial_role_id",role_lists($this->session->userdata['role_id']),isset($name[3])?$name:'', 'id="role_id_initial"  class="form-control validate[required]"  '); ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="col-form-label">Section<span class="reqd">*</span></label>
                    <?php echo form_dropdown("initial_section_id",section_lists($this->session->userdata['role_category']), '', 'class="form-control validate[required]"  id="initial_section_id" data-id="c" '); ?>
                    <span class="error"><?php echo form_error('initial_section_id'); ?></span>
                </div>
                <div class="form-group col-md-3" id="" >
                    <label for="" class="col-form-label" id="">Desiganition<span class="reqd">*</span></label>
                    <?php echo form_dropdown("desiganition_id", array("" => "Select") + designation_lists($this->session->userdata['role_id']), '', 'id="desiganition_id" data-id="c"  class="form-control validate[required]" onchange="getsubject()" ');    ?>
                </div>	
                <div class="form-group col-md-3" id="subject" style="display:none;" >
                    <label for="" class="col-form-label" id="">Subject</label>
                    <?php echo form_dropdown("subject_id", array("" => "Select") + subject_lists(), '', 'id="subject_id" data-id="c"  class="form-control" ');    ?>
                </div>    
                <div class="clearfix"></div>
                <div class="form-group col-md-8">&nbsp;</div>
                <div class="form-group col-md-2">
                    <button type="button" id="btn_filter" class="btn btn-primary btn-block float-left"><i class="fa fa-search"></i>&nbsp; SEARCH</button>
                </div>
                <div class="form-group col-md-2">
                <a href="<?php echo base_url('reports/index'); ?>" class="btn btn-warning btn-block float-right"><i class="fa fa-sync"></i>&nbsp; RESET</a>
                </div>
		</div>
                </form>
	</div>
			
           <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo SN;?></th>
                            <th>EMP_CODE</th>
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>SUBJECT</th>
                            <th>PLACE</th>
                            <th>REGION/UNIT</th>
                            <th>SCHOOL</th>
                           
                        </tr>
                    </thead>
                    <tbody></tbody>
                    
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>
<?php echo $this->load->view("reports/js/reports/reports_js",'',true); ?>     
        


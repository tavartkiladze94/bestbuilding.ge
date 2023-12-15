
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0"><?=$this->lang->line('Problems');?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('admin/index');?>"><?=$this->lang->line('Home');?></a>
                    </li>
                    </li>
                    <li class="breadcrumb-item"><a href="<?=base_url('admin/object/');?><?php echo $object; ?>"><?php  echo $this->lang->line($object); ?></a></li>
                     <li class="breadcrumb-item">უსაფრთხოება</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-body">
<!-- Basic table -->
<section id="advanced-search-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title"><?=$this->lang->line('Filter');?></h4>
        </div>
        <!--Search Form -->
        <div class="card-body mt-2">
          <form class="text-center" action="<?=base_url('admin/problems_all_search')?>" method="POST">
            <div class="row">

            <div class="col-xl-4 col-md-6 col-12 mb-1">
              <div class="form-group">
                <label for="type"><?=$this->lang->line('Object');?> :</label>
                 <select class="form-control" id="object" name="object" >
                     <option  value="0" id="charity"><?=$this->lang->line('Any');?></option>
                     <?php if (!empty($problems_all_select)) foreach ($problems_all_select as $problems_item_select): ?>
                                               
                             <option  value="<?php echo $problems_item_select['object']; ?>" ><?=$this->lang->line($problems_item_select['object']);?></option>
                                              
                    <?php endforeach; ?>
                                              
            </select>
              </div>
            </div>
             <div class="col-xl-4 col-md-6 col-12 mb-1">
              <div class="form-group">
               
                 <label for="type"><?=$this->lang->line('Status');?> :</label>
                 <select class="form-control" id="status" name="status" >
                                               <option  value="0" id="charity"><?=$this->lang->line('Any');?></option>
                                               <option  value="Done" >დახურული</option>
                                               <option  value="Active" >ღია</option>
                                              
            </select>
              </div>
            </div>
            
          
              
          </div>  
             <button class="dt-button create-new btn btn-primary waves-effect waves-float waves-light" style="height:40px; margin-top:25px; margin-left:20px;width:120px;" type="submit"><?=$this->lang->line('Search');?></span></button>
         
          </form>
        </div>
        <hr class="my-0">
        
      </div>
    </div>
  </div>
</section>

<section id="basic-datatable">
    <h1><?php  echo $this->lang->line($object); ?> </h1>
    <div class="card-datatable table-responsive pt-0">
        <div class="dt-buttons btn-group flex-wrap"><button class="btn add-new btn-primary mt-50" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in"><span> <a href="<?=base_url('admin/object_problem_create/');?><?php  echo $object; ?>" style="color:white;"><?=$this->lang->line('Add new');?></a></span></button> 
        </div>
        <br>
        <br>
    </div>
 
        
      <div class="card" style="overflow-x:scroll;">
          <h3>რაოდენობა - <?php  echo $count_problems; ?></h3>
        <table class="datatables-basic table" style="background-color:#373335;">
          <thead >
            <tr >
              <th ><?=$this->lang->line('Title');?></th>
											<th ><?=$this->lang->line('Object');?></th>
											<th ><?=$this->lang->line('Status');?></th>
											<th><?=$this->lang->line('Date');?></th>
											<th>ვადა</th>

											<th><?=$this->lang->line('Registrator');?></th>

            </tr>
          </thead>
          <tbody>
              <?php $r=1;?>
										<?php if (!empty($object_problems)) foreach ($object_problems as $problems_item): ?>
										
									<tr role="row" class="odd" style="width:100%; height:30px;<?php if($problems_item['viewed'] == '0') echo 'background-color: silver;' ;?>">
									    <td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php echo $problems_item['title_ge']; ?></a></td>
											<td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php echo $this->lang->line($problems_item['object']); ?></a></td>
											<td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php if($problems_item['status'] == '1') echo "<font color='#f44336'><b>ღია</b></font>"; if($problems_item['status'] == '0') echo  "<font color='#4CAF50'><b>დახურული</b></font>";?></a></td>
											<td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php echo $problems_item['date']; ?></a></td>
											<td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php echo $problems_item['duration']; ?></a></td>
											<td ><a href="<?=base_url('admin/problem_edit/');?><?php echo $problems_item['code']; ?>" style="color:#007bff;"><?php echo $problems_item['reg_name'] ; ?> <?php echo $problems_item['reg_surname'] ; ?></a></td>

										</tr>
										<?php $r++;?>
									<?php endforeach; ?>
								</tbody>
        </table>
        <div class="d-flex justify-content-between mx-0 row" style="margin-top:20px;">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination">
             <?php echo $links; ?>
                </ul></div></div></div>
      </div>
        
      
   

</section>




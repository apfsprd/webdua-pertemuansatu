<link href="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url();?>assets/js/js/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url();?>assets/js/js/jquery-1.11.1.min.js"></script> 
<link href="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/js/bootstrap-datepicker.min.js')?>"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
 
    <!-- <link href="<?php echo base_url();?>assets/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
          <?php echo $confirm;?>
          <div class="row">

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Profile Kegiatan
                </div>
                <div class="card-body">
                
<?php
$attributes = array('class' => 'form_user', 'id' => 'myform');
echo form_open('user/save_form_user', $attributes);

?>
 
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" name="name" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="inputAddress">Priviledge</label>
    <select id="inputState" class="form-control" name="previledge">
        <option selected value="Admin">Admin</option>
        <option>...</option>
      </select>
  </div>
  <div class="form-group">
    <label for="inputAddress">Username</label>
    <input type="text" name="username" class="form-control" id="username" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Password</label>
    <input type="password" name="password" class="form-control" id="inputAddress2" >
  </div>
  <div class="form-group">
    <div class="form-group">
      <label for="inputCity">Tanggal Lahir</label>
      <input type="text" name="form_date" class="form-control form_date" id="inputCity">
    </div>

  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form> 

<?php
echo form_close();

?>
                </div>
              </div>             
            </div>

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Data User
                </div>
                <div class="card-body">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Priviledge</th>
                <th>Username</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if($read_user) {
            foreach($read_user as $key => $value){
        ?>
            <tr>
                <td><?= $value->name;?></td>
                <td><?= $value->previledge;?></td>
                <td><?= $value->username;?></td>
                <td><?= $value->tgl_lahir;?></td>
            </tr>
        <?php
            }
        }
        ?>

            <tbody>
            </table>
                </div>
              </div> 

            </div> 
            <!-- TEST -->
            
            <div class="col-lg-12">

                          
            </div>

          </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
      $j('#example').DataTable();
    } );

    $('.form_date').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      todayHighlight: true,
      orientation: "auto",
      todayBtn: true,
    });
</script>

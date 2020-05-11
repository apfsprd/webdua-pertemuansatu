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
$attributes = array('class' => 'form_kegiatan', 'id' => 'myform');
echo form_open('Home/save_form_kegiatan', $attributes);

?>
 
  <div class="form-group">
    <label for="inputAddress">Judul Kegiatan</label>
    <input type="text" name="judul_kegiatan" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="inputAddress">Pembicara</label>
    <input type="text" name="pembicara" class="form-control" id="inputAddress" >
  </div>
  <div class="form-group">
    <label for="inputAddress">Tangal Pelaksanaan</label>
    <input type="text" name="tanggal_pelaksanaan" class="form-control form_date" id="form_date" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="inputAddress2" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Provinsi</label>
      <input type="text" name="provinsi" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Kota</label>
      <select id="inputState" class="form-control" name="kota">
        <option selected>Kota Tangerang</option>
        <option>...</option>
      </select>
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

              <!-- Dropdown Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upload Proposal</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <form>
                     <div class="form-group">
                     <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                     </div>
                   </form>
                </div>
              </div>

              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Undangan Narasumber</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                  <form>
                     <div class="form-group">
                     <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                     </div>
                   </form>
                  </div>
                </div>
              </div>

               <!-- Basic Card Example -->
               <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Status Kegiatan</h6>
                </div>
                <div class="card-body">


             

                <button type="button" class="btn btn-primary btn-lg btn-block">Register</button>
                </div>
              </div>

            </div>

            
            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Data Kegiatan
                </div>
                <div class="card-body">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Judul Kegiatan</th>
                <th>Pembicara</th>
                <th>Tgl Pelaksanaan</th>
                <th>Propinsi</th>
                <th>Kota</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if($read_kegiatan){
            foreach($read_kegiatan as $key => $value){

        
        ?>
            <tr>
                <td><?php echo $value->judul_kegiatan;?></td>
                <td><?php echo $value->pembicara;?></td>
                <td><?php echo $value->tanggal_pelaksanaan;?></td>
                <td><?php echo $value->provinsi;?></td>
                <td><?php echo $value->kota;?></td>
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

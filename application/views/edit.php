<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 	<link href="<?php echo base_url(); ?>public/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/DataTables/media/css/jquery.dataTables.min.css">
 	<script src="<?php echo base_url(); ?>public/jquery-3.1.1.min.js"></script>
<body>
<br>
<form action="update" method="post">
	<div class="row" >
  <div style=" background-color: #eee;" class="col-md-6 col-md-offset-3">
  <center><h3>Edit Data</h3></center>
  <?php foreach ($table->result() as $edit) { ?>
  <input type="hidden" name="id" value="<?php echo $edit->id; ?>">
 	<div class="form-group">
 		<label>Nama :</label>
 		<input value="<?php echo $edit->nama; ?>" type="text" name="nama" class="form-control" required="">
 	</div>
 	<div class="form-group">
 		<label>Kelas :</label>
 		<select class="select2" name="kelas" style="width: 100%" required="">
 			<option value=""> -Pilihan- </option>
 			<option <?php if($edit->kelas=="XRPLA"){ echo "selected";} ?> value="XRPLA">X RPL A</option>
 			<option <?php if($edit->kelas=="XRPLB"){ echo "selected";} ?> value="XRPLB">X RPL B</option>
 			<option <?php if($edit->kelas=="XRPLC"){ echo "selected";} ?> value="XRPLC">X RPL C</option>
 			<option <?php if($edit->kelas=="XRPLD"){ echo "selected";} ?> value="XRPLD">X RPL D</option>
 		</select>
 	</div>
 	<?php } ?>
 	<div class="form-group pull-right">
 		<a href="home"><button type="button" class="btn btn-warning">Back</button></a>
 	</div>
 	<div class="form-group pull-left">
 		<button type="submit" class="btn btn-success">Submit</button>
 	</div> 	 	
  </div>
	</div>
</form>

</body>
</html>

 <script src="<?php echo base_url(); ?>public/select2/dist/js/select2.min.js"></script>
 <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>public/DataTables/media/js/jquery.dataTables.js"></script>
 <script type="text/javascript">
 	 $('.select2').select2();
 </script>
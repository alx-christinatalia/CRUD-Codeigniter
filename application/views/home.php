 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tutorial</title>
 	<link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 	<link href="<?php echo base_url(); ?>public/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/DataTables/media/css/jquery.dataTables.min.css">
 	<script src="<?php echo base_url(); ?>public/jquery-3.1.1.min.js"></script>
 </head>
 <body>


 <div class="container">
 <br>
<div class="dropdown pull-right">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="logout">Logout</a></li>
  </ul>
</div>

 <center><h3>Example Data </h3></center>
  <button class="btn btn-primary btn-sm" onclick="show_tambah()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button>
	<div class="pull-right">
 		<a href="cetak_pdf"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> PDF</button></a>
 		<a href="cetak_excel"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Excel</button></a>
 	</div> 	
  <br><br>

 <div class="row" id="form_tambah">
 <form action="tambah" method="post">
  <div style=" background-color: #eee;" class="col-md-6">
 	<div class="form-group">
 		<label>Nama :</label>
 		<input type="text" name="nama" class="form-control" required="">
 	</div>
 	<div class="form-group">
 		<label>Kelas :</label>
 		<select name="kelas" class="select2" style="width: 100%" required="">
 			<option value=""> -Pilihan- </option>
 			<option value="XRPLA">X RPL A</option>
 			<option value="XRPLB">X RPL B</option>
			<option value="XRPLC">X RPL C</option>
			<option value="XRPLD">X RPL D</option>
 		</select>
 	</div>
 	<div class="form-group pull-right">
 		<button type="submit" class="btn btn-success">Submit</button>
 	</div> 	 	
  </div>
 </form>
</div>

<table class="table" id="list">
	<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Nama</center></th>
			<th><center>Kelas</center></th>
			<th><center>Action</center></th>
		</tr>
	</thead>
	<tbody>
	<?php $no=1; foreach ($table->result() as $d) { ?>
		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td align="left"><?php echo $d->nama; ?></td>
			<td align="center"><?php echo $d->kelas; ?></td>
			<td align="center">
				<a href="dataedit?id=<?php echo $d->id; ?>"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
				 <a href="hapus?id=<?php echo $d->id; ?>" onclick="return confirm('Apakah Anda Yakin Mengahpus Data Ini?');"><button type="button" class="btn btn-danger btn-sm" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
				<!-- <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-sm" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> -->
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">Apakah Anda Yakin Menghapus Data Ini??</h4></center>
      </div>
      <div class="modal-body">
        <center>
        	<button class="btn btn-success">Ya</button>
        	<button class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </center>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

 </body>
 </html>
 <script src="<?php echo base_url(); ?>public/select2/dist/js/select2.min.js"></script>
 <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>public/DataTables/media/js/jquery.dataTables.js"></script>
	 
 <script type="text/javascript">
 $('#form_tambah').hide();

 $('.select2').select2();

$('#list').DataTable({
	"dom": '<"toolbar">frtip',
	"bFilter": true,
  	"bInfo": false,
  	"pagingType": "simple_numbers",
  	"pageLength": 10,
 	"iDisplayLength": 25
});

function show_tambah() {
	$('#form_tambah').slideToggle(500);	
}

</script>

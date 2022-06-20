<?php 
	if(isset($_POST['find'])){
		$data = new RelevesController();
		$releves = $data->findReleves();
	}else{
		$data = new RelevesController();
		$releves = $data->getAllReleves();
	}
?>
<!-- Page content-->
<!-- table -->
<div class="container-xl overflow-auto">
  <div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-5">
            <h2><b>Relevés des Machines</b></h2>
            </div>
            <div class="col-sm-7">
            <a href="addreleve" class="btn btn-secondary"><i class="material-icons">&#xE147;</i><span>Add New Relevé</span></a>
            <button onclick="ExportToExcel('xlsx')" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i><span>Export to Excel</span>
            </button>
            </div>
          </div>
        </div>
        <table id="tbl_exporttable_to_xls" class="table table-striped table-hover">
          <thead>
          <tr>
          <th>#</th>
          <th>Matricule</th>						
          <th>Températur</th>
          <th>Vitesse</th>
          <th>Etat</th>
          <th>Date</th>
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($releves as $releve):?>
          <tr>
          <td><?php echo $releve['id'];?></td>
          <td><?php echo $releve['matricule'];?></td>
          <td><?php echo $releve['temperature'];?><span> °c</span></td>                        
          <td><?php echo $releve['vitesse'];?><span> tr/h</span></td>
          <td><?php echo $releve['etat']
                    ?
                    '<span class="badge bg-success">Disponible</span>'
                    :
                    '<span class="badge bg-danger">Indisponible</span>';
              ;?>
          </td>
          <td><?php echo $releve['date'];?></td>
          <td class="d-flex flex-row">
            <form method="post" class="mr-1" action="updatereleve">
                  <input type="hidden" name="id" value="<?php echo $releve['id'];?>">
                  <button class="btn btn-sm btn-primary"><i class="fa fa-wrench"></i></button>
            </form>
            <form method="post" class="mr-1" action="deletereleve">
                  <input type="hidden" name="id" value="<?php echo $releve['id'];?>">
                  <button class="btn btn-sm btn-danger mx-1"><i class="fa fa-times"></i></button>
            </form>
	        </td>
          </tr>
          <?php endforeach;?>
          </tbody>
        </table>
    </div>
  </div>
</div>     
<!-- table -->
<!-- Page content-->

<!-- tExport table to exel -->
<script>
function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('tbl_exporttable_to_xls');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Relevé.' + (type || 'xlsx')));
}
</script>


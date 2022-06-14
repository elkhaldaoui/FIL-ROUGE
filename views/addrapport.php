<?php 
	if(isset($_POST['submit'])){
		$newRapport = new RapportsController();
		$newRapport->addRapport();
	}
?>
<div class="container w-100">
	<div class="m-2">
		<div class="card">
			<div class="card-header">Ajouter Rapport</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
                        <select class="form-select" name="poste" aria-label="Default select example">
                            <option selected>Selectioné le Poste</option>
                            <option value="P1">P1</option>
                            <option value="P2">P2</option>
                            <option value="P3">P3</option>
                        </select>
						</div><br>
						<div class="form-group">
                            <label for="rapport">Rapport</label>
                            <textarea name="rapport" class="form-control"  id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div><br>
						<div class="form-group">
							<label for="date">Date</label>
							<input type="date" name="date" class="form-control">
						</div><br>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>
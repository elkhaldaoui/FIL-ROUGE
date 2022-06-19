<?php 
	if(isset($_POST['id'])){
		$exitAnomalie = new AnomaliesController();
		$anomalie = $exitAnomalie->getOneAnomalie();
	}
	if(isset($_POST['update'])){
		$exitAnomalie = new AnomaliesController();
		$exitAnomalie->updateAnomalie();
	}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier Anomalie</div>
                    <div class="card-body bg-light">
                    <form method="POST">
                        <div class="form-group">
                            <select class="form-select" name="titre" aria-label="Default select example">
                                <option selected>Selectioné le Niveau</option>
                                <option value="Important" <?php echo $anomalie->titre ? 'selected' : ''; ?>>Important</option>
                                <option value="Urgent" <?php echo !$anomalie->titre ? 'selected' : ''; ?>>Urgent</option>
                                <option value="Danger" <?php echo !$anomalie->titre ? 'selected' : ''; ?>>Danger</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="text">Anomalie</label>
                            <textarea name="text" class="form-control" rows="3"><?php echo $anomalie->text;?></textarea>
                        </div><br>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" value="<?php echo $anomalie->date;?>" class="form-control">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $anomalie->id; ?>">
                        <!-- <div class="form-group"> -->
                        <button type="submit" class="btn btn-primary mt-3" name="update">Valider</button>
                        <!-- </div> -->
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                
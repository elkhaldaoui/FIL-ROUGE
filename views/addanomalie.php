<?php 
	if(isset($_POST['submit'])){
		$newAnomalie = new AnomaliesController();
		$newAnomalie->addAnomalie();
	}
?>
<div class="container my-3 h-75 w-100 overflow-auto">
    <div class="m-2">
        <div class="card">
            <div class="card-header">Ajouter Anomalie</div>
                <div class="card-body bg-light">
                    <form method="post">
                        <div class="form-group">
                            <img src="views/assests/img/moteur-electrique.jpg" class="rounded mx-auto d-block" alt="...">
                        </div><br>
                        <div class="form-group">
                        <select class="form-select" name="titre" aria-label="Default select example">
                            <option selected>Selectioné Le Niveau </option>
                            <option value="Important">Important</option>
                            <option value="Urgent">Urgent</option>
                            <option value="Danger">Danger</option>
                        </select>
						</div><br>
                        <div class="form-group">
                            <label for="text">Anomalie</label>
                            <textarea name="text" class="form-control" rows="3"></textarea>
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
<?php
include_once 'models/anomalies_model.php';

class AnomaliesController
{

    public function getAllanomalies(){
        $anomalies = Anomalies::getAll();
        return $anomalies;
    }

    public function getOneAnomalie()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $Anomalie = Anomalies::getAnomalie($data);
            return $Anomalie;
        }
    }

    public function findAnomalies()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $anomalie = Anomalies::searchAnomalie($data);
            return $anomalies;
        }
    }

    /**
     * return @void
     */

    public function addAnomalie()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'titre' => $_POST['titre'],
                'text' => $_POST['text'],
                'date' => $_POST['date'],
            );
            $result = Anomalies::add($data);
            if ($result === 'ok') {
                Session::set('success','Anomalie Ajouté');
                Redirect::to('anomalies');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updateAnomalie()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'id' => $_POST['id'],
                'titre' => $_POST['titre'],
                'text' => $_POST['text'],
                'date' => $_POST['date'],
            );
            $result = Anomalies::update($data);
            if ($result == 'ok') {
                Session::set('success', 'Anomalie Modifié');
                Redirect::to('anomalies');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteAnomalie()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Anomalies::delete($data);
            if ($result === 'ok') {
                Session::set('error', 'Anomalie Supprimé');
                Redirect::to('anomalies');
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
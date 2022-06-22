<?php
include_once 'models/rapports_model.php';

class RapportsController
{

    public function getAllRapports(){
        $rapports = Rapports::getAll();
        return $rapports;
    }

    public function getOneRapport()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $rapport = Rapports::getRapport($data);
            return $rapport;
        }
    }

    public function findRapports()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $rapports = Rapports::searchRapport($data);
            return $rapports;
        }
    }

    /**
     * return @void
     */

    public function addRapport()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'poste' => $_POST['poste'],
                'rapport' => $_POST['rapport'],
                'date' => $_POST['date'],
            );
            $result = Rapports::add($data);
            if ($result === 'ok') {
                Session::set('success','Rapport Ajouté');
                Redirect::to('rapports');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updateRapport()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'id' => $_POST['id'],
                'poste' => $_POST['poste'],
                'rapport' => $_POST['rapport'],
                'date' => $_POST['date'],
            );
            $result = Rapports::update($data);
            if ($result == 'ok') {
                Session::set('success', 'Rapport Modifié');
                Redirect::to('rapports');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteRapport()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Rapports::delete($data);
            if ($result === 'ok') {
                Session::set('error', 'Rapport Supprimé');
                Redirect::to('rapports');
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
<?php
include_once 'models/releves_model.php';

class RelevesController
{

    public function getAllReleves(){
        $releves = Releves::getAll();
        return $releves;
    }

    public function getOneReleve()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $releve = Releves::getReleve($data);
            return $releve;
        }
    }

    public function findReleve()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $releves = Releves::searchReleve($data);
            return $releves;
        }
    }

    /**
     * return @void
     */

    public function addReleve()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'matricule' => $_POST['matricule'],
                'etat' => $_POST['etat'],
                'vitesse' => $_POST['vitesse'],
                'temperature' => $_POST['temperature'],
                'date' =>  $_POST['date'],
            );
            $result = Releves::add($data);
            if ($result === 'ok') {
                Session::set('success','Releve Ajouté');
                Redirect::to('releves');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updateReleve()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'id' => $_POST['id'],
                'matricule' => $_POST['matricule'],
                'etat' => $_POST['etat'],
                'vitesse' => $_POST['vitesse'],
                'temperature' => $_POST['temperature'],
                'date' =>  $_POST['date'],
            );
            $result = Releves::update($data);
            if ($result == 'ok') {
                Session::set('success', 'Relevé Modifié');
                Redirect::to('releves');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteReleve()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Releves::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'Releve Supprimé');
                Redirect::to('releves');
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
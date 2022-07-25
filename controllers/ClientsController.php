<?php
include_once 'models/clients_model.php';

class ClientsController
{

    public function getAllClients(){
        $clients = Clients::getAll();
        return $clients;
    }

    public function getOneclient()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $client = Clients::getclient($data);
            return $client;
        }
    }

    public function findClients()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $clients = Clients::searchclient($data);
            return $clients;
        }
    }

    /**
     * return @void
     */

    public function addClient()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'phone' => $_POST['phone'],
                'adresse' => $_POST['adresse'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'salaire' =>  $_POST['salaire'],
                'role' => $_POST['role']
            );
            $result = Clients::add($data);
            if ($result === 'ok') {
                // Session::set('success','Agent Ajouté');
                // Redirect::to('agents');
                echo '<script>window.location.href = "clients";</script>';
            }else{
                echo $result;
            }
        }
    }



    public function updateClient()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                // 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'phone' => $_POST['phone'],
                'adresse' => $_POST['adresse'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'role' =>  $_POST['role']
            );
            $result = Clients::update($data);
            if ($result === 'ok') {
                // echo "ok";
                Session::set('success', 'Agent Modifie');
                // Redirect::to('agents');
                // exit();
                echo '<script>window.location.href = "clients";</script>';
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteClient()   
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Clients::delete($data);
            if ($result === 'ok') {
                Session::set('error', 'Agent Supprimé');
                // Redirect::to('agents');
                echo '<script>window.location.href = "clients";</script>';
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
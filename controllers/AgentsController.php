<?php
include_once 'models/agents_model.php';

class AgentsController
{

    public function getAllAgents(){
        $agents = Agents::getAll();
        return $agents;
    }

    public function getOneAgent()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $agent = Agents::getAgent($data);
            return $agent;
        }
    }

    public function findAgents()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $agents = Agents::searchAgent($data);
            return $agents;
        }
    }

    /**
     * return @void
     */

    public function addAgent()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'phone' => $_POST['phone'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'role' => $_POST['role']
            );
            $result = Agents::add($data);
            if ($result === 'ok') {
                Session::set('success','Agent Ajouté');
                // Redirect::to('agents');
                echo '<script>window.location.href = "agents";</script>';
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updateAgent()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'phone' => $_POST['phone'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'role' =>  $_POST['role']
            );
            $result = Agents::update($data);
            if ($result === 'ok') {
                // echo "ok";
                Session::set('success', 'Agent Modifié');
                // Redirect::to('agents');
                echo '<script>window.location.href = "agents";</script>';
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteAgent()   
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Agents::delete($data);
            if ($result === 'ok') {
                Session::set('error', 'Agent Supprimé');
                // Redirect::to('agents');
                echo '<script>window.location.href = "agents";</script>';
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
<?php


class AgentController
{

    public function getAllAgent(){
        $agent = Agent::getAll();
        return $agent;
    }

    public function getOneAgent()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $agent = Agent::getAgent($data);
            return $agent;
        }
    }

    public function findAgent()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $agent = Agent::searchAgent($data);
            return $agent;
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
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'role' =>  $_POST['role']
            );
            $result = Agent::add($data);
            if ($result === 'ok') {
                Session::set('success','Agent Ajouté');
                Redirect::to('agent');
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
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                'situation' =>  $_POST['situation'],
                'date_admission' =>  $_POST['date_admission'],
                'role' =>  $_POST['role']
            );
            $result = Agent::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Agent Modifié');
                Redirect::to('agents');
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
            $result = Agent::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'Agent Supprimé');
                Redirect::to('agent');
            } else {
                echo $result;
            }
        }
    }
}
                                                        
                                                    
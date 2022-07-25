<?php

class Clients{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM clients");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getClient($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM clients WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $client = $statement->fetch(PDO::FETCH_OBJ);
            return $client;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchClient($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM clients WHERE adresse LIKE ?

            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $clients = $statement->fetchAll();
            return $clients;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO clients(nom,prenom,email,password,phone,adresse,situation,date_admission,salaire,role) VALUES 
                (:nom,:prenom,:email,:password,:phone,:adresse,:situation,:date_admission,:salaire,:role)");
        $stmt->bindParam(':nom', $data['nom'], PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $data['prenom'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':adresse', $data['adresse'], PDO::PARAM_STR);
        $stmt->bindParam(':situation', $data['situation'], PDO::PARAM_STR);
        $stmt->bindParam(':date_admission', $data['date_admission'], PDO::PARAM_STR);
        $stmt->bindParam(':salaire', $data['salaire'], PDO::PARAM_STR);
        $stmt->bindParam(':role', $data['role'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE clients SET nom = :nom,prenom = :prenom,email = :email,phone = :phone,adresse = :adresse,situation = :situation,date_admission = :date_admission,salaire = :salaire,role = :role WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':nom', $data['nom'], PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $data['prenom'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':adresse', $data['adresse'], PDO::PARAM_STR);
        $stmt->bindParam(':situation', $data['situation'], PDO::PARAM_STR);
        $stmt->bindParam(':date_admission', $data['date_admission'], PDO::PARAM_STR);
        $stmt->bindParam(':salaire', $data['salaire'], PDO::PARAM_STR);
        $stmt->bindParam(':role', $data['role'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM clients WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {
                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
                                                        
                                                    
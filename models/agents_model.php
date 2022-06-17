<?php

class Agents{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM agents");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getAgent($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM agents WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $agent = $statement->fetch(PDO::FETCH_OBJ);
            return $agent;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchAgent($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM agents WHERE situation LIKE ?
                OR email LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $agents = $statement->fetchAll();
            return $agents;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO agents(name,email,password,phone,situation,date_admission,role) VALUES 
                (:name,:email,:password,:phone,:situation,:date_admission,:role)");
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':situation', $data['situation'], PDO::PARAM_STR);
        $stmt->bindParam(':date_admission', $data['date_admission'], PDO::PARAM_STR);
        $stmt->bindParam(':role', $data['role'], PDO::PARAM_STR);
        if ($stmt->execute()) {

            $_SESSION['role'] = $data['role'];

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE agents SET name = :name,email = :email,password = :password,phone = :phone,situation = :situation,date_admission = :date_admission,role = :role WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':situation', $data['situation'], PDO::PARAM_STR);
        $stmt->bindParam(':date_admission', $data['date_admission'], PDO::PARAM_STR);
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
            $query = "DELETE FROM agents WHERE id=:id";
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
                                                        
                                                    
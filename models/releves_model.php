<?php

class Releves{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM releves");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getReleve($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM releves WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $releve = $statement->fetch(PDO::FETCH_OBJ);
            return $releve;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchReleve($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM releves WHERE date LIKE ?
                OR etat LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $releves = $statement->fetchAll();
            return $releves;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO releves(matricule,etat,vitesse,temperature,date) VALUES 
                (:matricule,:etat,:vitesse,:temperature,:date)");
        $stmt->bindParam(':matricule', $data['matricule'], PDO::PARAM_STR);
        $stmt->bindParam(':etat', $data['etat'], PDO::PARAM_STR);
        $stmt->bindParam(':vitesse', $data['vitesse'], PDO::PARAM_STR);
        $stmt->bindParam(':temperature', $data['temperature'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE releves SET matricule = :matricule,etat = :etat,vitesse = :vitesse,temperature = :temperature,date = :date WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':matricule', $data['matricule'], PDO::PARAM_STR);
        $stmt->bindParam(':etat', $data['etat'], PDO::PARAM_STR);
        $stmt->bindParam(':vitesse', $data['vitesse'], PDO::PARAM_STR);
        $stmt->bindParam(':temperature', $data['temperature'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
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
            $query = "DELETE FROM releves WHERE id=:id";
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
                                                        
                                                    
<?php

class Anomalies{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM anomalies");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getAnomalie($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM anomalies WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $anomalie = $statement->fetch(PDO::FETCH_OBJ);
            return $anomalie;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchAnomalie($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM anomalies WHERE date LIKE ?
                OR titre LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $anomalies = $statement->fetchAll();
            return $anomalies;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO anomalies(titre,text,date) VALUES 
                (:titre,:text,:date)");
        $stmt->bindParam(':titre', $data['titre'], PDO::PARAM_STR);
        $stmt->bindParam(':text', $data['text'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE anomalies SET
            titre = :titre,
            text = :text,
            date = :date 
            WHERE id = :id");
        $stmt->bindParam(':titre', $data['titre']);
        $stmt->bindParam(':text', $data['text']);
        $stmt->bindParam(':date', $data['date']);
        $stmt->bindParam(':id', $data['id']);
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
            $query = "DELETE FROM anomalies WHERE id=:id";
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
                                                        
                                                    
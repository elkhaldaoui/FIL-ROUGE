<?php

class Rapports{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM rapports");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getRapport($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM rapports WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $rapport = $statement->fetch(PDO::FETCH_OBJ);
            return $rapport;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchRapport($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM rapports WHERE poste LIKE ?
                OR date LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $rapports = $statement->fetchAll();
            return $rapports;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO rapports(poste,rapport,date) VALUES 
                (:poste,:rapport,:date)");
        $stmt->bindParam(':poste', $data['poste'], PDO::PARAM_STR);
        $stmt->bindParam(':rapport', $data['rapport'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE rapports SET
            poste = :poste,
            rapport = :rapport,
            date = :date 
            WHERE id = :id");
        $stmt->bindParam(':poste', $data['poste']);
        $stmt->bindParam(':rapport', $data['rapport']);
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
            $query = "DELETE FROM rapports WHERE id=:id";
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
                                                        
                                                    
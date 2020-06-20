<?php

class Technology{

    public function list_technology($db){

        $query = 'SELECT * FROM port_technologies';
        //Prepare query
        $sql = $db->prepare($query);
        //Execute the query in the database
        $sql->execute();
        //Get all the list of values in an object
        $tech = $sql->fetchAll(\PDO::FETCH_OBJ);
        //return the values
        return $tech;

    }

    public function list_tech_proj($db, $projId){

        $query = 'SELECT * FROM port_technologies INNER JOIN projectxtechnology ON port_technologies.id = port_technology_id WHERE projectxtechnology.port_project_id = :projectId';
        //Prepare query
        $sql = $db->prepare($query);
        //Execute the query in the database
        $sql->bindParam(':projectId',$projId);

        $sql->execute();
        //Get all the list of values in an object
        $tech = $sql->fetchAll(\PDO::FETCH_OBJ);
        //return the values
        return $tech;

    }
}
<?php


class Project{


    public function list_project($db){

        $query = 'SELECT * FROM port_projects';
        //Prepare query
        $sql = $db->prepare($query);
        //Execute the query in the database
        $sql->execute();
        //Get all the list of values in an object
        $projects = $sql->fetchAll(\PDO::FETCH_OBJ);
        //return the values
        return $projects;

    }

    public function list_project_tech($db){
        $query = 'SELECT * FROM port_projects INNER JOIN projectxtechnology ON port_projects.id = port_project_id INNER JOIN port_technologies ON port_project_id = port_technologies.id';
        //Prepare query
        $sql = $db->prepare($query);
        //Execute the query in the database
        $sql->execute();
        //Get all the list of values in an object
        $projects = $sql->fetchAll(\PDO::FETCH_OBJ);
        //return the values
        return $projects;

    }
}
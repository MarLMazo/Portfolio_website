<?php

class Message{
    public function create_message($db,$name,$email,$message){
        //sql query to insert into table
        $query = "INSERT INTO port_messages (name, email, message) VALUES (:name, :email, :message)";

        $sql = $db->prepare($query);

        //bind parameters
        $sql->bindParam(':name',$name);
        $sql->bindParam(':email',$email);
        $sql->bindParam(':message',$message);

        $count = $sql->execute();
        return $count;
    }
}
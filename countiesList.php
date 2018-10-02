<?php
    require_once("database.php");

    $msg = '';

    if(!empty($_POST["country"])) 
    {
        //depending on what country is chosen by the user, the relevent counties are selected from the database and grouped in an inner join table, and organised in alphabetical order
        $query = "SELECT cnty.* FROM `counties` AS cnty INNER JOIN `countries` AS c ON cnty.country_id=c.id " . "WHERE UPPER(c.country)=UPPER(:country) "
                 . "AND UPPER(cnty.name) LIKE UPPER(:county) ORDER BY `name` ASC";
        
        $statement = $db->prepare($query); //prepares the sql query written above
        $statement->bindValue(":country", $_POST["country"]);
        $statement->bindValue(":county", $_POST["keyword"] . "%"); //binds the relevant county to the country selected
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        
        //if a country is chosen, all of the relevant counties relating to the particular country in the database are chosen
        if(!empty($result)) 
        {
                foreach($result as $county) 
                {
                    $msg .= '<option name="county" id="county" value="' . $county["name"] . '">' . $county["name"] . '</option>';
                }
        }
    }
    
    die($msg);

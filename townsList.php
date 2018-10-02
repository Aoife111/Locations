<?php

    require_once("database.php");
    $msg = '';
   
    
    if(!empty($_POST["county"])) 
        {
            //selects and gets the towns associated with the county chosen by the user and displays them in alphabetical order
            $query = "SELECT twn.* FROM `towns` AS twn INNER JOIN `counties` AS cnty ON twn.countyID=cnty.id" . " WHERE UPPER(cnty.name)=UPPER('" . $_POST["county"] . "') ORDER BY twn.`townName` ASC";
       
            $statement = $db->prepare($query); //preparing statement
            $statement->bindValue(":county", $_POST["county"]); //binding the value to corresponding placeholder in above SQL statement (county)
            $statement->bindValue(":town", $_POST["keyword"] . "%");
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
        
        
            //if a county is selected, the corresponding towns appear
            if(!empty($result)) 
            {
                foreach($result as $town) 
                {
                    $msg .= '<option name="town" id="town" value="' . $town["townName"] . '">' . $town["townName"] . '</option>';
                }
            }
        }
    
    //prints the chosen county and exits the current script
    die($msg);
?>

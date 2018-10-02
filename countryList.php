<?php
    require_once("database.php");

    $msg = '';
    
  
    if(!empty($_POST["keyword"])) 
    {
        //gets 6 countries that relate to the keyword entered by the user, uses code from infoList.js
        $query = "SELECT * FROM countries" . " WHERE UPPER(country) LIKE UPPER(:keyword) ORDER BY country ASC LIMIT 0,6";
        
        $statement = $db->prepare($query); //prepares the above query
        $statement->bindValue(":keyword", $_POST["keyword"] . "%");
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();

        if(!empty($result)) 
        {
            //gets the country list relating the the text entered by the user
            $msg .= '<div id="country-list">';
            
            foreach($result as $country) 
            {
                $msg .= '<li class="liCountry">' . $country["country"] . '</li>';
            }
            
            $msg .= '</div>';
        }
    }
    
    //prints the result and exits the script after execution
    die($msg);
?>

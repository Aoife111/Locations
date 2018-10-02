<?php 

    //takes the posted information from the formfields from index.php entered by the user to be displayed on the submitted form table
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $street_line_1 = filter_input(INPUT_POST, 'street_line_1');
    $street_line_2 = filter_input(INPUT_POST, 'street_line_2');
    $country = filter_input(INPUT_POST, 'country');
    $county = filter_input(INPUT_POST, 'county');
    $town = filter_input(INPUT_POST, 'town');
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Success</title>
    </head>
    
    <body>
        
        <div class="container">
            
        <main>
            
            <h1>Thank You <?php echo $name?> For Your Submission!</h1>            
           
            <div id ="house_pic">
                <img src="images/marker.png" alt=""/>
            </div>
            
            <table id="table">
            <tr>
              <th>Name:</th>
              <td><?php echo $name ?></td>
            </tr>
            <tr>
              <th>Surname:</th>
              <td><?php echo $surname ?></td>
            </tr>
            <tr>
              <th>Street Line 1:</th>
              <td><?php echo $street_line_1 ?></td>
            </tr>
            <tr>
              <th>Street Line 2:</th>
              <td><?php echo $street_line_2 ?></td>
            </tr>
            <tr>
              <th>Country:</th>
              <td><?php echo $country ?></td>
            </tr>
            <tr>
              <th>County:</th>
              <td><?php echo $county ?></td>
            </tr>
            <tr>
              <th>Town:</th>
              <td><?php echo $town ?></td>
            </tr>
            </table>
            
        </main>
            
        </div>
        
    </body>
    
</html>

<?php
    include 'includes/footer.php'; 
?>
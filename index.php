<?php
    require('database.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="js/infoList.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>   
    </head>
    
    <body>
        
        <div class="container">
    
        <main>
            
            <h1> Address Registration Form </h1>
            
            <div class="form-style">
                
                <!--posts inputted info from user to info.php page to be displayed in table format -->
                <form action="info.php" method="post">
  
                <ul>
                <li>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <span>Enter surname here</span>
                </li>
                <li>
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="surname" required>
                    <span>Enter surname here</span>
                </li>
                <li>
                    <label>Street Line 1:</label>
                    <input type="text" name="street_line_1" id="street_line_1" required>
                    <span>Enter first line of your address</span>
                </li>
                <li>
                    <label>Street Line 2:</label>
                    <input type="text" name="street_line_2" id="street_line_2" required>
                    <span>Enter second line of your address</span>
                </li>
                <li>
                    <label>Country:</label>
                    <input type="text" name="country" id="country" required>
                    <span>Enter your country</span>
                </li>
                </ul>
                    <div id ="add_county">
                        <label for="county">County:</label>
                        <select name="county" id ="county"></select>
                    </div>
            
            
                    <div id ="add_town">
                        <label for ="town">Town:</label>
                        <select name="town" id ="town"></select>
                    </div>
            
                    <!-- displays list of countries retrieved from database depending on letters entered by user -->
                    <div id="lists"></div>
            
                <ul>
                    <li id = "submit">
                        <input type="submit" value="Send This" >
                    </li>
                </ul>
                    
                </form>
                
            </div>
    
        </main><!--maincontent end-->
         
    </div><!--container end-->     

    </body>
</html>

<?php
    include 'includes/footer.php'; 
?>

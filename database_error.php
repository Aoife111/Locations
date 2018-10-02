
<head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Database Error</title>
</head>
<body>
    
<div class="container">
    <main>
<!--Page Heading -->
        <h1 class="mt-4 mb-3 text-danger">Database Error</h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">
        <p>There was an error connecting to the database.</p>
        <p>Check that MySQL is running.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
              
            </div>
      
</div><!-- End row -->
</main>
</div>
    
</body>
<?php
include 'includes/footer.php';
?>

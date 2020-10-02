
<?php
 

    function getPostDetailsFromDatabase(){
        
        $postDetails = array('title' =>'Blog post1 example',
                              'content' => 'My first blog post',
                              'date' => '01/01/2020',
                              'author' => 'juanoctavio10');

        return $postDetails;
    }
?>
<html>

<head> 
    <title>Post Page</title> 
    <link rel="stylesheet" href="styles.css">
</head> 

<body>


<header>
    <h1>This is Task 7 Post</h1>
</header>
 
<?php 
    include 'nav.php';
?>

<main>

     <?php
        $postDetails= getPostDetailsFromDatabase(); 
     ?>   
     <h1><?php echo $postDetails['title']; ?> </h1>
     <div><?php echo $postDetails['author']; ?></div> 
     <div><?php echo $postDetails['date']; ?></div>
     <div><?php echo $postDetails['content']; ?>
    </div>
</main>

<?php 
    include 'footer.php';
?>

</body>

</html>

<?php
 

    
    function getPostDetailsFromDatabase(){

       include 'db_connect.php'; 
    
       $postTitle = rawurldecode($_GET['title']);
        
      /*  $postDetails = array('title' =>'Blog post1 example',
                              'content' => 'My first blog post',
                              'date' => '01/01/2020',
                              'author' => 'juanoctavio10');
      */
        $sql = "select * from posts where title='" . $postTitle . "'";
        $result = mysqli_query($conn,$sql);
        $postDetails = mysqli_fetch_assoc($result);

        return $postDetails;
    }
?>
<html>


<?php 
    include 'head.php';
?>

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
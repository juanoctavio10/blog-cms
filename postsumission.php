<html>


<?php 
    include 'head.php';
?>

<body>


<header>
    <h1>This is Task 7 PostSumission</h1>
</header>
 
<?php 
    include 'nav.php';
?>

<main>
    <form action="submit-post.php" method="POST" >
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="lname">Autor:</label><br>
        <input type="text" id="autor" name="autor" value=""><br><br>
        <label for="lname">Date:</label><br>
        <input type="date" id="date" name="date" value=""><br><br>
        <label for="lname">Content:</label><br>
        <textarea  id="content" name="content" value="" > </textarea> <br><br>
        <input type="submit" value="Submit">
      </form>
</main>

<?php 
    include 'footer.php';
?>

</body>

</html>
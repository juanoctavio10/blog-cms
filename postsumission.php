<html>

<head> 
    <title>PostSumission Page</title> 
</head> 

<body>


<header>
    <h1>This is Task 7 PostSumission</h1>
</header>
 
<?php 
    include 'nav.php';
?>

<main>
    <form action="/post.html">
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="lname">Autor:</label><br>
        <input type="text" id="autor" name="autor" value=""><br><br>
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
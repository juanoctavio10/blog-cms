<nav>
    <ul>
        <?php
            
            function getPostTitlesFromDatabase(){

                $postTitles = array("Blog Post 1","Blog Post 2","Blog Post 3");
                
                return $postTitles;
            }


            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle){
                echo "<li> <a href='post.php?title=". $postTitle . "'>" . $postTitle . "</a> </li>";
            }
        ?>
        
    </ul>
</nav>

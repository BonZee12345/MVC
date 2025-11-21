<?php

echo "<div class= 'books'>";
    foreach ($books as $book){
        echo"<div class='book'";
            echo "<div href='?page=view-book&book_id=".$book['book_id']."'>";
            echo "<img src='assets/img/".$book['book_img']."' alt='".$book['book_name']."'>";

            echo "<div class='actions'>";
                echo "<a href='?page=edit-book&book_id=".$book['book_id']."' class='edit-book'>Edit</a>";
                echo "<a href='?page=delete-book&book_id=".$book['book_id']."' class='delete-book'>Delete</a>";
            echo "</div>";

            echo "<a class='bookTitle>";
                echo "<h2>".$book['book_name']."</h2>";
            echo "</a>";

            echo "<h3>".$book['author']."</h3>";
            echo "<h4>".$book['publication_year']."</h4>";
        echo "</div>";
    }
    
echo "</div>";

trace($books);
?>

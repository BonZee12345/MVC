<?php

echo"<div class='movie'>";
            echo "<div href='?page=view-movie&movie_id=".$movie['movie_id']."'>";
            echo "<img src='assets/img/".$movie['movie_img']."' alt='".$movie['title']."'>";

            echo "<div class='actions'>";
                echo "<a href='?page=reserve-movie&movie_id=".$movie['movie_id']."' class='reserve-movie'>Reserve</a>";
            echo "</div>";

            echo "<a class='movieTitle>";
                echo "<h2>".$movie['title']."</h2>";
            echo "</a>";

            echo "<h3>".$movie['director']."</h3>";
            echo "<h4>".$movie['release_year']."</h4>";
            echo "<h4>".$movie['stock_available']."</h4>";
echo "</div>";

echo "
    <form action='' method='post'>
        <input type ='hidden' name='book_id' value='';>

        <label for='book_name'>Name</label>
        <input type ='text' name='book_name' id='book_name' value='';>

        <label for='author'>author</label>
        <input type ='text' name='author' id='author' value='';>

        <label for='publication_year'>pub. year</label>
        <input type ='number' name='publication_year' id='publication_year' value='';>

        <label for='book_status'>Status</label>
        <input type ='text' name='book_status' id='book_status' value='';>

        <label for='book_img'>Image</label>
        <input type='text' name='book_img' id='book_img' value='';>

        <input type='submit' values='Save';
    </form>
";

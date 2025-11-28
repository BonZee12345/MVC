<?php

echo "<div class= 'movies'>";
    foreach ($movies as $movie){
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
    }
    
echo "</div>";

trace($movies);
?>
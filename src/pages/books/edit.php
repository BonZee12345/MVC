<?php
        // $i = $_GET['book_id']-1;
        // echo '<div class='book editPage'>" . "<h1>" . $books[0]["book_name"] . "</h1><br>" .
        //      "<img src='assets/img/" . $books[0]["book_img"] . "'>" .
        //      "<p> by: " . $books[0]["author"] . "<br></p>" .
        //      "<p> published in: " . $books[0]["publication_year"] . "<br></p>" .
        //      "<p> bookID: " . $books[0]["book_id"] . "<br></p>" .
        //      "</div>";
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

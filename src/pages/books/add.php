<?php

echo "
    <form action='index.php?page=books' method='post'>

        <label for='book_name'>Name</label>
        <input type ='text' name='book_name' id='book_name' required>

        <label for='author'>author</label>
        <input type ='text' name='author' id='author' required>

        <label for='publication_year'>pub. year</label>
        <input type ='number' name='publication_year' id='publication_year' required>

        <label for='book_status'>Status</label>
        <input type ='text' name='book_status' id='book_status' value=''>

        <label for='book_img'>Image</label>
        <input type='text' name='book_img' id='book_img' value=''>

        <input type='submit' values='Save'>
    </form>
";
trace($_POST);


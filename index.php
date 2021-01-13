<?php include "header.php"; ?>
<h2>Type in a keyword and get result. the 2 posts in database are below for keyword hints</h2>
<h2>See the sql on search.php and how it gets from the database</h2>
<form action='search.php' method='post'>
    <input type='text' name='search' placeholder='search'>
    <button type='submit' name='submitSearch'>Search</button>
</form>

<h1>Front Page</h1>
<h2>All articles:</h2>

<div class='article-container'>
    <?php
    $sql = "SELECT * from article";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='article-box'>
                <h3>" . $row['a_title'] . "</h3>
                <p>" . $row['a_text'] . "</p>
                <p>" . $row['a_date'] . "</p>
                <p>" . $row['a_author'] . "</p>
            </div>";
        }
    }
    ?>

</div>







</body>

</html>
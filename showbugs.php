<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="assets/stylesheet.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <meta name="viewpoint"
          content="width=device-width,
          initial-scale=1,
          minimum-scale=1,
          maximum-scale=1"/>
</head>
<body>
<header class="grid-container">
    <img src="assets/images/trackerlogo.png" alt="Bug Tracker" id="logo" class="grid-30"/>
    <div id="title" class="grid-60">
        <h1>BugTracker</h1>
        <h2>Keep track of all the pesky little bugs</h2>
    </div>
</header>


<main class="grid-container">
    <nav class="grid-30">
        <ul>
            <li><a href="showbugs.php">All Bug Items</a></li>
            <li><a href="showbugs.php">Android Bug Items</a></li>
            <li><a href="showbugs.php">iOS Bug Items</a></li>
            <li><a href="showbugs.php">Windows Bug Items</a></li>
            <li><a href="addbug.php">Insert Bug Items</a></li>
        </ul>
    </nav>

    <section class="grid-70">
        <div id="bugitem">
            <?php
                include ("db_connection.php");
                $getbugs = "SELECT * FROM Bugs";
                $result = mysqli_query($db, $getbugs);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<h3>". $row['bugname'] . "</h3>";
                    echo "<h5>". $row['bugcategory'] . "</h5>";
                    echo "<p>". $row['bugsummary'] . "</p>";
                }
            ?>

        </div>
    </section>

</main>


<footer>
    <p>Designed by Oluwaseyi Nojimu-Yusuf, 2016 (c).</p>
</footer>
</body>
</html>
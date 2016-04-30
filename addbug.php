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
            <li><a href='showbugs.php'>All Bug Items</a></li>
            <li>.<a href='showbugs.php?bugcategory=android'>Android Bug Items</a></li>
            <li><a href='showbugs.php?bugcategory=ios'>iOS Bug Items</a></li>
            <li><a href='showbugs.php?bugcategory=windows'>Windows Bug Items</a></li>
            <li><a href='addbug.php'>Insert Bug Items</a></li>
        </ul>
    </nav>

    <section class="grid-70">
        <form action="addcode.php" method="post">
            <label>Bug Name</label>
            <input type="text" name="bugName" required><br><br>
            <label>Bug Summary</label>
            <textarea name="summary" rows="4" cols="30" placeholder="Enter text here..." required></textarea><br><br>
            <label>Bug Category</label>
            <select name="category" size="1" required>
                <option>Android</option>
                <option>iOS</option>
                <option>Windows</option>
            </select><br><br>
            <input type="submit" value="submit">
        </form>


    </section>

</main>


<footer>
    <p>Designed by Oluwaseyi Nojimu-Yusuf, 2016 (c).</p>
</footer>
</body>
</html>
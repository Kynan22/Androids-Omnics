<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<header>
    <div class="title">
        <h1 id="title">Androids and Omnics</h1>
    </div>
    <div class="navdiv">
        <img src="images/omnic.png"/>
        <nav class="navbar">

            <ul>
                <li><a href="display.php">Home</a></li>
                <li><a href="display.php">Products</a></li>
                <li id="dropdown"><a href="modify.php">Modify
                        <div class="dropdown-content">
                            <p><a href="insert_form.php">Insert</a></p>
                            <p><a href="update_search.php">Update</a></p>
                            <p><a href="select_record.php">Delete</a></p>
                        </div></a></li>
            </ul>

        </nav>
        <div class="search">
            <form method="get" action="display.php">
                <input type="text" name="product" id="product"/>
                <input type="submit" name="submit" value="search"/>
            </form>
        </div>

    </div>

</header>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"> 
        <title>MyELGA</title>
    </head>
    <body>
        <div class="container">
            <h1>MyELGA</h1>
            <form class="form" method="POST">
                <div class="form-group">
                    <label for="svn">SVN:</label>
                    <input type="number" id="svn" name="svn" placeholder="Sozialversicherungsnummer">
                </div>
                <div class="form-group">
                    <label for="vorname">Vorname:</label>
                    <input type="text" id="vorname" name="vorname" placeholder="Ihr Vorname">
                </div>
                <div class="form-group">
                    <label for="nachname">Nachname:</label>
                    <input type="text" id="nachname" name="nachname" placeholder="Ihr Nachname">
                </div>
                <button type="submit" class="btn">Speichern</button>
            </form>
        </section>
        <br>
        <?php
        include_once("functions.php");
        echo getHTMLTable(tableName: "patienten");

            if(!empty($_POST)){
                $svn = $_POST["svn"]; 
                $vorname = $_POST["vorname"]; 
                $nachname = $_POST["nachname"];
                $columns = ["svn", "vorname", "nachname"];
                $values = [$svn, $vorname, $nachname];
                insertValues(tableName: "patienten", columns: $columns, values: $values); 
            }
        ?>
    </body>
    </html>
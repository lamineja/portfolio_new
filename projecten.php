<?php
$servername = "localhost";
$username = "Lamine";
$password = "Lamine123@";
$dbname = "Database_proces_opdracht";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Schrijf een query: select * from projecten
$sql = "SELECT * FROM Projecten_new";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- Header -->
    <header class="d-flex justify-content-center py-5">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.html" class="nav-link " aria-current="page">Home</a></li>
            <li class="nav-item"><a href="overmij.html" class="nav-link">Over mij</a></li>
            <li class="nav-item"><a href="projecten.php" class="nav-link active bg-secondary">Projecten</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link ">Contact</a></li>
            <li class="nav-item"><a href="media.html" class="nav-link ">Media (voor de opdracht)</a></li>
        </ul>
    </header>
    <!-- Einde header-->
    <!-- Projectkolommen -->
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
                <?php
                // Loop door de resultaten en toon deze op de webpagina
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?php echo $row['Foto']; ?>" class="card-img-top" alt="Image">
                            <div class="card-body">
                                <p class="card-text"><?php echo $row['Beschrijving']; ?></p>
                                <div class="btn-group">
                                    <a href="<?php echo $row['Link']; ?>" class="btn btn-sm btn-outline-secondary">Bekijken</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
        <div class="col-md-1 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© Lamine Fadiga</span>
        </div>
    </footer>
</body>
</html>

<?php
// Sluit de databaseverbinding
$conn->close();
?>

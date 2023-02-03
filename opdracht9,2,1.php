<?php
 try {
    $db = new PDO ("mysql:host=localhost;dbname=fietsenmaker",
    "root","");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = "
                            . $_GET['id'] );
    $query->execute ();
    $result = $query->fetchALL (PDO::FETCH_ASSOC) ;
    foreach ($result as &$data) {
        echo "Artikelnummer: " . $data['id'] . "<br>";
        echo "Merk: " . $data['merk'] . "<br>";
        echo "Type: " . $data['type'] . "<br>";
        echo "prijs: &euro; " .
            number_format($data ["prijs"],2,",",",") . "<br><br>";
        }
    } catch(PDOException $e)  {
        die("Error!: " . $e->getMessage());
    }
?>
<a href="opdracht_9,2">terug naar master pagina</a>
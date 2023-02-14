<?php 
if(isset($_GET['int-form'])){
    $intitule_formation = $_GET['int-form'];
    $nom_formateur = $_GET['name-form'];
    $date_formation = $_GET['date-el'];
    $lieu_formation = $_GET['lieu-el'];
    $nom_participant = $_GET['numpar-el'];
    $etablissement_participant = $_GET['etp-el'];
    $evaluation_formateur = $_GET['note'];
    $evaluation_environnement = $_GET['note1'];
    $evaluation_materiel = $_GET['note2'];
    $evaluation_global = $_GET['note3'];
    $commentaires = $_GET['com-el'];
  
    $servername = "localhost";
    $username = "root3";
    $password = "pass";
    $dbname = "form1";  

    // Create connection
    $conn = new mysqli($form, $rayen, $rayen2003sa , $server);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO appreciation (intitule_formation, nom_formateur, date_formation, lieu_formation, nom_participant, etablissement_participant, evaluation_formateur, evaluation_environnement, evaluation_materiel, evaluation_global, commentaires) 
    VALUES ('$intitule_formation', '$nom_formateur', '$date_formation', '$lieu_formation', '$nom_participant', '$etablissement_participant', '$evaluation_formateur', '$evaluation_environnement', '$evaluation_materiel', '$evaluation_global', '$commentaires')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

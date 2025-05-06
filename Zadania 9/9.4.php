<?php
$plik = 'odnosniki';
if(file_exists($plik)){
    $lines = file($plik);
    foreach($lines as $line){
        $line = trim($line);
        list($url, $description) = explode(";", $line);
        echo "<a href='$url'>$description</a>\n";
    }
}
else{
    echo "Plik nie istnieje";
}

?>
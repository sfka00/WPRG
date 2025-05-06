<?php

function function1($path,$directory,$operation){

    if (!is_dir($path)) {
        return "Sciezka $path nie istnieje lub nie jest katalogiem.";
    }
    if (substr($path, -1) !== DIRECTORY_SEPARATOR) {
        $path .= DIRECTORY_SEPARATOR;
    }
    $fulldirectory = $path.$directory;

    switch($operation){
        case 'create':
            if(!file_exists($fulldirectory)){
                mkdir($fulldirectory);
                return "Katalog $fulldirectory zostal utworzony";
            }
            else{
                return "Katalog $fulldirectory juz istnieje";
            }

        case 'read':
            if(!file_exists($fulldirectory)){
                return "Katalog $fulldirectory nie istnieje";
            }
            else{
                $elements = array_diff(scandir($fulldirectory), ['.', '..']);
                if (empty($elements)) {
                    return "Katalog '$fulldirectory' jest pusty.";
                } else {
                    return "Zawartość katalogu '$fulldirectory':<br>" . implode("<br>", $elements);
                }
            }


        case 'delete':
            if(!file_exists($fulldirectory)){
                return "Katalog $fulldirectory nie istnieje";
            }
            else{
                if(count(scandir($fulldirectory))>2){
                    return "Katalog $fulldirectory nie jest pusty wiec nie mozna go usunac";
                }
                else{
                    rmdir($fulldirectory);
                    return "Katalog $fulldirectory zostal usuniety";
                }


            }

        default:
            return "Podales zla wartosc";
    }
}
?>
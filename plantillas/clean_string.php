
<?php  

function clean_string($value){
    return htmlspecialchars(trim(strip_tags($value)));
}

?>


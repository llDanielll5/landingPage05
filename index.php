<?php

    if(isset($_GET['url'])){
        
    }
    $url = $_GET['url'];

    
    if(file_exists($url)){
        include($url.'.html');
    }

?>
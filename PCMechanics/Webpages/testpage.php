<?php

    $rigname =  $_REQUEST['rig'];
    $rigname = $rigname."'s PC.txt";
    rename("pcmechanics.txt",$rigname);
    
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($rigname));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($rigname));
    readfile($rigname);
    unlink($rigname);
    exit;

    

?>

   
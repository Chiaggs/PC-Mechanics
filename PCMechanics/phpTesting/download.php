<html>

    
    <body>
    
        
        
            <?php
                $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                $txt = "John Doe \r\n";
                fwrite($myfile, $txt);
                $txt = "John Doe \r\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('newfile.txt'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('newfile.txt'));
    readfile('newfile.txt');
    exit;
              




                
            ?>
      
    
    </body>


</html>
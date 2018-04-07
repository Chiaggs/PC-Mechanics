<html>

    <body>
    
        <?php
        
            $sql = "select * from specsheet_processor where p_id = 1;";
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"pcmechanics");
            $result = mysqli_query($con,$sql); 
            if($row = mysqli_fetch_array($result))
            {
                echo $row[4];
            }
        
        ?>
    
    </body>

</html>
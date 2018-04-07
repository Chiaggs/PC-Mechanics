<html>

    <head>
    
        <?php
            
                session_start();
        ?>
        
    </head>
    
    <body>
    
        
        <?php 
    
            $selected_gfx=$_GET["pro"];
            $con = mysqli_connect("localhost","root","");
        
            mysqli_select_db($con,"pcmechanics");
            $sql = "select name,price from specsheet_gfx where g_id = ".$selected_gfx.";";
            $result = mysqli_query($con,$sql); 
            if($row = mysqli_fetch_array($result))
            {
                  $_SESSION['gfx_name'] = $row[0];
                  $_SESSION['gfx_price'] = $row[1];   
            }
            else
            {
                $_SESSION['gfx_price'] = 0;
            }
        
            $currentRig = $_SESSION['processor_price'] + $_SESSION['motherboard_price'] + $_SESSION['drive_price'] + $_SESSION['ram_price'] + $_SESSION['smps_price'] + $_SESSION['gfx_price'];
        
            $_SESSION['opCurrentRig'] = $currentRig;
            
            header('location:result.php');
        
        ?>
    
    </body>


</html>
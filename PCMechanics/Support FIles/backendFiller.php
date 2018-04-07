<html>

    <body>
    
        <?php

            $m_id = $_POST["m_id"];
           $socket = $_POST["socket"];
            $ramtype = $_POST["ramtype"];
            $maxram = $_POST["maxram"];
           $price = $_POST["price"];
            $name = $_POST["name"];
       //     $clockspeed = $_POST["clockspeed"];
           // $power = $_POST["power"];
      //      $intGfx = $_POST["integrated_graphics"];
        //    $cache = $_POST["cache"];
        
            $sql = "insert into specsheet_motherboard values(".$m_id.",'".$socket."','".$ramtype."','".$maxram."',".$price.",'".$name."');";
        
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"pcmechanics");
            mysqli_query($con,$sql);
            mysqli_close($con);
        
            header("location:databaseFiller.php");
    
        ?>
        
    </body>


</html>

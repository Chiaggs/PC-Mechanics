<html>

    <head>
    
        <?php
            session_start();
        ?>
        
    </head>
    
    <body>
    
        <?php
        
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"pcmechanics");
        
        
            $budget = $_GET["bdgt"];
            $currentRig =0;
            $counter=1;
        
        
            $p_no=1;
            $processor_price = array();
            $no_of_processors=0;
            $processor_price[0]=0;
            $selected_processor=0;
        
            $m_no=1;
            $motherboard_price = array();
            $no_of_motherboards=0;
            $motherboard_price[0]=0;
            $selected_motherboard=0;
        
            $r_no=1;
            $ram_price = array();
            $no_of_rams=0;
            $ram_price[0]=0;
            $selected_ram=0;
        
            $d_no=1;
            $drive_price = array();
            $no_of_drives=0;
            $drive_price[0]=0;
            $selected_drive=0;
        
            $g_no=1;
            $gfx_price = array();
            $no_of_gfxs=0;
            $gfx_price[0]=0;
            $selected_gfx=0;
        
            $s_no=1;
            $smps_price = array();
            $no_of_smpss=0;
            $smps_price[0]=0;
            $selected_smps=0;
            
        
            
            $sql = "select price from specsheet_processor;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_processors++;
                $processor_price[$no_of_processors]=$row[0];                
                
            }
        
            $sql = "select price from specsheet_motherboard;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_motherboards++;
                $motherboard_price[$no_of_motherboards]=$row[0];                
                
            }
        
            $sql = "select price from specsheet_ram;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_rams++;
                $ram_price[$no_of_rams]=$row[0];                
                
            }
        
            $sql = "select price from specsheet_drive;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_drives++;
                $drive_price[$no_of_drives]=$row[0];                
                
            }
        
            $sql = "select price from specsheet_gfx;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_gfxs++;
                $gfx_price[$no_of_gfxs]=$row[0];                
                
            }
        
            $sql = "select price from specsheet_smps;";
            $result = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_array($result))
            {
                $no_of_smpss++;
                $smps_price[$no_of_smpss]=$row[0];                
                
            }
        
            //echo $no_of_rams."<br/>";
        
        
          //  print_r($processor_price);
            while ($counter <= $no_of_processors)
            {
               
            
                if($budget>=$currentRig+$processor_price[$p_no]-$processor_price[$selected_processor])
                {
                    $currentRig=$currentRig + $processor_price[$p_no]-$processor_price[$selected_processor];
                    $selected_processor=$p_no;
                }
                //echo $motherboard_price[$m_no]."<br/>";
                
                if($budget>=$currentRig+$motherboard_price[$m_no]-$motherboard_price[$selected_motherboard])
                {
                    $currentRig=$currentRig + $motherboard_price[$m_no]-$motherboard_price[$selected_motherboard];
                    $selected_motherboard=$m_no;
                }
               // echo $currentRig."<br/>";
                
                if($budget>=$currentRig+$ram_price[$r_no]-$ram_price[$selected_ram])
                {
                    $currentRig=$currentRig + $ram_price[$r_no]-$ram_price[$selected_ram];
                    $selected_ram=$r_no;
                }
                
                if($budget>=$currentRig+$drive_price[$d_no]-$drive_price[$selected_drive])
                {
                    $currentRig=$currentRig + $drive_price[$d_no]-$drive_price[$selected_drive];
                    $selected_drive=$d_no;
                }
                
                if($budget>=$currentRig+$smps_price[$s_no]-$smps_price[$selected_smps])
                {
                    $currentRig=$currentRig + $smps_price[$s_no]-$smps_price[$selected_smps];
                    $selected_smps=$s_no;
                }
                
                if($budget>=$currentRig+$gfx_price[$g_no]-$gfx_price[$selected_gfx])
                {
                    $currentRig=$currentRig + $gfx_price[$g_no]-$gfx_price[$selected_gfx];
                    $selected_gfx=$g_no;
                }
                
               
                if($p_no<$no_of_processors)
                    $p_no++;
                if($m_no<$no_of_motherboards)
                    $m_no++;
                if($r_no<$no_of_rams)
                    $r_no++;
                 if($d_no<$no_of_drives)
                    $d_no++;
                if($s_no<$no_of_smpss)
                    $s_no++;
                 if($g_no<$no_of_gfxs)
                    $g_no++;
                
                $counter++;
            }
        
        echo $currentRig." CurrentRig <br/>";
        //echo $p_no."<br/>";
        //echo $m_no."<br/>";
        echo $selected_processor." Processor <br/>";
        echo $selected_motherboard." Motherboard <br/>";
        echo $selected_ram." ram <br/>";
        echo $selected_drive." Drive <br/>";
        echo $selected_smps." Smps <br/>";
        echo $selected_gfx." Graphic Card <br/>";
        //echo $currentRig."<br/>";
        
        
        $_SESSION['opCurrentRig'] = $currentRig;
        $_SESSION['processor'] = $selected_processor;
        $_SESSION['ram'] = $selected_ram;
        $_SESSION['motherboard'] = $selected_motherboard;
        $_SESSION['smps'] = $selected_smps;
        $_SESSION['drive'] = $selected_drive;
        $_SESSION['gfx'] = $selected_gfx;
        
        
        // Sending Specifications
        
        $sql = "select name,price from specsheet_processor where p_id = ".$selected_processor.";";
        $result = mysqli_query($con,$sql); 
        if($row = mysqli_fetch_array($result))
        {
            $_SESSION['processor_name'] = $row[0];
            $_SESSION['processor_price'] = $row[1];
                
        }
        
        $sql = "select name,price from specsheet_motherboard where m_id = ".$selected_motherboard.";";
        $result = mysqli_query($con,$sql); 
        if($row = mysqli_fetch_array($result))
        {
            $_SESSION['motherboard_name'] = $row[0];
            $_SESSION['motherboard_price'] = $row[1];
                
        }
        
        $sql = "select name,price from specsheet_ram where r_id = ".$selected_ram.";";
        $result = mysqli_query($con,$sql); 
        if($row = mysqli_fetch_array($result))
        {
            $_SESSION['ram_name'] = $row[0];
            $_SESSION['ram_price'] = $row[1];
                
        }
        
        $sql = "select name,price from specsheet_smps where s_id = ".$selected_smps.";";
        $result = mysqli_query($con,$sql); 
        if($row = mysqli_fetch_array($result))
        {
            $_SESSION['smps_name'] = $row[0];
            $_SESSION['smps_price'] = $row[1];
                
        }
        
        $sql = "select name,price from specsheet_drive where d_id = ".$selected_drive.";";
        $result = mysqli_query($con,$sql); 
        if($row = mysqli_fetch_array($result))
        {
            $_SESSION['drive_name'] = $row[0];
            $_SESSION['drive_price'] = $row[1];
                
        }
        
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
        
        header('location:result.php');
        
        ?>
        
    </body>

</html>
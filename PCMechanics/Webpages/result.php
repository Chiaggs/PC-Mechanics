<html>

    <head>
    
        <?php session_start(); ?>
        
        <script src="../Jquery/jquery-3.1.0.min.js"></script>
        <script>var downcounter=0;
            
        </script>
        
        <style>
        
            @font-face
            {
                font-family: windowsDefault;
                src: url(../fonts/ufonts.com_segoe-ui-light.ttf);
            }
            body
            {
                margin: 0px; border: 0px; min-width: 1024px;
            }
            .tester
            {
                width: 100px; height: 50px; background-color: aqua;
            }
            
            #horizontalBar
            {
                width: 100%; height: 42px; top: 0px; position: fixed; background: #213235; z-index: 5;
            }
            #logo
            {
                font-family: windowsDefault; color: white; font-size: 30px;  height: 40px; line-height: 40px;
                vertical-align: middle; text-align: center; width: 250px; top: 0px; margin: 0px; left: 50%; margin-left: -100px; position: absolute; 
            }
            #pc
            {
                float: left;
            }
            #mechanics
            {
                float: left; margin-left: 10px; overflow: hidden; width: 0px;
            }
            .container
            {
                width: 500px; height: 400px; left: 50%; position: absolute; top: 65px; margin-left: -550px;
            }
            #motherboard
            {
                margin-left: 50px;
            }
            #smps
            {
                margin-left: 50px; margin-top: 475px;
            }
            #ram
            {
                margin-top: 475px;
            }
            #drive
            {
                margin-top: 950px;
            }
            #gfx
            {
                 margin-top: 950px; margin-left: 50px;
            }
            .tag
            {
                font-family: windowsDefault; font-size: 30px; color: #213235; position: absolute; font-weight: bold;left: 50px;
            }
            .image
            {
                width: 300px; margin-left: 50px; height: 250px;  margin-top: 50px; position: absolute; 
            }
            .name
            {
                font-family: windowsDefault; font-size: 30px; color: #213235; position: absolute; margin-top: 300px; left: 150px;
            }
            .price
            {
                font-family: windowsDefault; font-size: 30px; color: #213235; position: absolute; margin-top: 350px; left: 150px;
            }
            #p_tag, #d_tag, #r_tag
            {
                left: 150px;
            }
            #p_img, #d_img, #r_img
            {
                right: 50px;
            }
            #m_name, #m_price, #s_name, #s_price, #g_name, #g_price
            {
                left: 50px;
            }
    
            #amount
            {
                  font-family: windowsDefault; font-size: 30px; color: #ffffff; position: absolute; text-align: center;  left: 45px; cursor: pointer; font-weight: bold;
            }
            #footer
            {
                width: 100%; height: 250px; position: absolute; margin-top: 1500px; background: #001013;
            }
            #footer1
            {
                color: white; font-family: windowsDefault; text-align: center; position: absolute; width: 100%; font-size: 20px; height: 50px; background:#213235; line-height: 50px; vertical-align: middle; overflow: hidden;
            }
            #glace
            {
                width: 0px; height: 200px; border-radius: 200px; opacity: 0.5; background: #000000; position: absolute; left: 50%;
                margin-left: 0px; margin-top: -125px;
            }
            #footer2
            {
                position: absolute; width: 100%; height: 130px; margin-top: 50px; z-index: 2; background-color: #001013;
            }
            #contactus
            {
                border: 1px solid white; color: white; font-family: windowsDefault; text-align: center; position: absolute; width: 175px; height: 60px; font-size: 30px; line-height: 55px; vertical-align: middle; left: 50%; margin-left: -82px; margin-top: 35px; cursor: pointer; z-index: 2;
            }
            #contactus:hover
            {
                color:#001013; background-color: white;
            }
            #qr
            {
                left: 50%; margin-left: -100px; position: absolute; top: 25px;
            }
            #facebook
            {
                border: 1px solid white; color: white; font-family: windowsDefault; text-align: center; position: absolute; width: 100px; height: 40px; font-size: 20px; line-height: 38px; vertical-align: middle; left: 50%; margin-left: -250px; margin-top: 100px; cursor: pointer; z-index: 2; opacity: 0;
            }
            #google
            {
                border: 1px solid white; color: white; font-family: windowsDefault; text-align: center; position: absolute; width: 100px; height: 40px; font-size: 20px; line-height: 38px; vertical-align: middle; left: 50%; margin-left: 150px; margin-top: 100px; cursor: pointer; z-index: 2; opacity: 0;
            }
            #footclose
            {
                position: absolute; z-index: 2; right: 5px; top: 5px; cursor: pointer;
            }
            #facebook:hover
            {
                color:#001013; background-color: white;
            }
            #google:hover
            {
                color:#001013; background-color: white;
            }
            .summer
            {
                display: none;
            }
            #footer3
            {
                width: 100%; height: 70px; position: absolute; background: #213235; bottom: 0px; text-align: center; 
                color: white; font-family: windowsDefault; font-size: 18px;
            }
            
            #viewspecs
            {
                position: fixed; width: 200px; height: 42px; background: #1a5d6b; font-family: windowsDefault; font-size: 20px; 
                text-align: center; line-height: 42px; vertical-align: middle; color: white; right: 45px; cursor: pointer; z-index: 10;
            }
            
            #specsheet
            {
                position: fixed; width: 500px; height: 400px; background: #1a5d6b; font-family: windowsDefault; font-size: 20px; 
                color: white;  z-index: 10; top: 80px; left: 50%; margin-left: -270px; box-shadow: 5px 5px 5px #999999; overflow-y: scroll; display: none; padding: 20px;
            }
            span
            {
                left:  170px; position: absolute;
            }
            #speccover
            {
                width: 540px; height: 440px; position: fixed; top: 80px; left: 50%; margin-left: -270px; overflow: hidden;
            }
            #animator
            {
                position: absolute; background: #1a5d6b; left: 50%; top: 50%;
            }
            
            ::-webkit-scrollbar {
                    width: 8px;
            }
 
            ::-webkit-scrollbar-track { 
                    border-radius: 0px;
            }
 
            ::-webkit-scrollbar-thumb {
                    border-radius: 0px;
                    background: #213235;
             }
            
            #rupee
            {
                position: absolute; left: 0px; width: 42px; height: 42px; 
            }
            #rupee img
            {
                margin-left: 8px; margin-top: 5px;
            }
            #home
            {
                position: absolute; right: 0px; height: 42px; width: 45px; cursor: pointer;
            }
            #home img
            {
                margin-left: 8px; margin-top: 7px;
            }
            #home:hover
            {
                background-color: darkgreen;    
            }
            #download
            {
                position: fixed; bottom: 0px; left: 0px; width: 70px; height: 70px; border-top-right-radius: 70px; background: #213235;  z-index: 3;
            }
            #download img
            {
                margin-left: 10px; bottom: 12px; position: absolute;cursor: pointer;
            }
            #downoptions
            {
                 display: none;
            }
            #closeTag
            {
                 position: fixed; left: 0px; bottom: 0px; width: 60px; height: 60px; z-index: 4; border-radius: 60px; background:#213235; overflow: hidden;
            }
            #closeTag img
            {
                margin-left: 14px; margin-top: 13px; cursor: pointer;
            }
            #captioner
            {
                 font-family: windowsDefault; font-size: 35px; color: white; position: fixed;  z-index: 4;  
                    width: 400px; height: 50px; top: 50px; text-align: center; left: 50%; margin-left: -200px;
                top: 100px;
            }
            #rigname
            {
                width: 200px; height: 60px; background: #213235; color: white; font-family: windowsDefault; font-size: 35px; line-height: 60px; vertical-align: middle; text-align: center; position: fixed; top: 200px; left: 50%; margin-left: -130px; z-index: 4;
            }
            #closecaption
            {
                font-family: windowsDefault; font-size: 35px; color: white; position: fixed;  z-index: 4;  
                    width: 100px; height: 50px; top: 200px; text-align: center; left: 50%; margin-left: 65px;
            }
            #submitter
            {
                position: fixed; z-index: 4; width: 200px; height: 60px; border-width: 2px; border-color: black; top: 300px; color: white; left: 50px; border: 1px solid white; line-height: 60px; text-align: center; font-family: windowsDefault; font-size: 35px; cursor: pointer; left: 50%; margin-left: -100px;
            }
            #submitter:hover
            {
                color: #213235; background-color: white; z-index: 3;
            }

            
        </style>
    
    </head>
    <body onkeydown="speccall(1);" onkeypress="keyhandler(event);" id="spider">
        
        <div id="horizontalBar">
            <div id="rupee"><img src="../Images/rupee.png" width="60%" height="80%"/></div>
            <div id="amount"></div>
            <div id="home" onclick="goToHome();"><img src="../Images/home.png" width="65%" height="65%"/></div>
            <div id="logo">
                <div id="pc"><b>PC |</b></div>
                <div id="mechanics"><b>Mechanics</b></div>
            </div> 
        </div>
        
        <div id="download" onclick="downloader();" ><img src="../Images/download.png" width="32px" height="35px"/></div>
        <div id="downoptions">
            <div id="closeTag" onclick="downloader();"><img src="../Images/UI/xicon.png" width="32px" height="35px"/></div>
            <div id="captioner">I would name my rig</div>
            <input type="text" id="rigname" autofocus/>
            <div id="closecaption">'s PC</div>
            <div id="submitter" onclick="proceeddownload();">Download</div>
        </div>
        <div id="viewspecs" onclick="speccall(0);">View Specsheet</div>
        
    <div id="backcontent">    
        <div id="processor" class="container">
            <div id="p_tag" class="tag">Processor</div>
            <div id="p_img" class="image"></div>
            <div id="p_name" class="name"></div>
            <div id="p_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
        
        <div id="motherboard" class="container">
            <div class="tag">Motherboard</div>
            <div id="m_img" class="image"></div>
            <div id="m_name" class="name"></div>
            <div id="m_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
        
        <div id="ram" class="container">
            <div id="r_tag" class="tag">Ram</div>
            <div id="r_img" class="image"></div>
            <div id="r_name" class="name"></div>
            <div id="r_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
        
        <div id="smps" class="container">
            <div class="tag">Smps</div>
            <div id="s_img" class="image"></div>
            <div id="s_name" class="name"></div>
            <div id="s_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
        
        <div id="drive" class="container">
            <div id="d_tag" class="tag">Storage Drive</div>
            <div id="d_img" class="image"></div>
            <div id="d_name" class="name"></div>
            <div id="d_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
        
        <div id="gfx" class="container">
            <div class="tag">Graphic Card</div>
            <div id="g_img" class="image"></div>
            <div id="g_name" class="name"></div>
            <div id="g_price" class="price">
                <div class="rupeeImg"></div>
            </div>  
        </div>
    </div>    
        
        
     
        
        <div id="footer">
            <div id="footer1">Designed And Developed By : Chiranjivi Agarwal
                <div id="glace"></div>
            </div>
            <div id="footer2">
                <div id="contactus" onclick="footerExpand();">Contact Us</div>
                <div id="qr" class="summer"><img src="../Images/qr.jpg" width="200px" height="200px"/></div>
                <div id="facebook" class="summer" onclick="contactCaller(1);">facebook</div>
                <div id="google" class="summer" onclick="contactCaller(2);">google+</div>
                <div id="footclose" class="summer" onclick="footerContract();"><img src="../Images/UI/xicon.png" width="35px" height="35px"/></div>
            </div>
            <div id="footer3">PC Mechanics<br/> The One Stop Solution For All PC Enthusiasts</div>
        </div>
            
            <?php
        
            $currentRig = $_SESSION['opCurrentRig'];
            $processor = $_SESSION['processor'];
            $smps = $_SESSION['smps'];
            $ram = $_SESSION['ram'];
            $motherboard = $_SESSION['motherboard'];
            $gfx = $_SESSION['gfx'];
            $drive = $_SESSION['drive'];
        
            $p_name = $_SESSION['processor_name'];
            $p_price = $_SESSION['processor_price'];
        
            $m_name = $_SESSION['motherboard_name'];
            $m_price = $_SESSION['motherboard_price'];
        
            $r_name = $_SESSION['ram_name'];
            $r_price = $_SESSION['ram_price'];
        
            $s_name = $_SESSION['smps_name'];
            $s_price = $_SESSION['smps_price'];
        
            $d_name = $_SESSION['drive_name'];
            $d_price = $_SESSION['drive_price'];
        
            $g_name = $_SESSION['gfx_name'];
            $g_price = $_SESSION['gfx_price'];
            /*echo $currentRig."<br/>";
            echo $processor."<br/>";
            echo $motherboard."<br/>";
            echo $ram."<br/>";
            echo $smps."<br/>";
            echo $drive."<br/>";
            echo $gfx."<br/>";
            */
        
            
        
            ?>
        
        <div id="speccover">
            <div id="animator"></div>
        </div>
        <div id="specsheet">
            
            
            <?php
            
                $con = mysqli_connect("localhost","root","");
                mysqli_select_db($con,"pcmechanics");
                
                $sql = "select name, price, cores, threads,clockspeed,power,integrated_graphics from specsheet_processor where price=".$p_price." AND name='".$p_name."' ;";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result);
                
                $myfile = fopen("pcmechanics.txt", "w") or die("Unable to open file!");
                $txt = "Total Cost Of Rig : Rs. ".$currentRig."\r\n\r\n";
                fwrite($myfile, $txt);
                $txt = "--Processor-- \r\n";
                fwrite($myfile, $txt);
                $txt = "Name : ".$row[0]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Price : ".$row[1]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Cores : ".$row[2]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Threads : ".$row[3]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Clockspeed : ".$row[4]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Power : ".$row[5]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Integrated Graphics : ".$row[6]."\r\n\r\n";
                fwrite($myfile, $txt);
            
                echo "--Processor--"."<br/>";
                echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                echo "Cores : "."<span>".$row[2]."</span>"."<br/>";
                echo "Threads : "."<span>".$row[3]."</span>"."<br/>";
                echo "Clockspeed : "."<span>".$row[4]."</span>"."<br/>";
                echo "Power : "."<span>".$row[5]."</span>"."<br/>";
                echo "Int. Graphics : "."<span>".$row[6]."</span>"."<br/>";
            
                $sql = "select name, price, socket, ram_type, max_ram from specsheet_motherboard where price=".$m_price." AND name='".$m_name."' ;";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result);
            
                $txt = "--Motherboard-- \r\n";
                fwrite($myfile, $txt);
                $txt = "Name : ".$row[0]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Price : ".$row[1]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Socket : ".$row[2]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Ram Type : ".$row[3]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Max Ram : ".$row[4]."\r\n\r\n";
                fwrite($myfile, $txt);
            
                echo "<br/>"."--Motherboard--"."<br/>";
                echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                echo "Socket : "."<span>".$row[2]."</span>"."<br/>";
                echo "Ram Type : "."<span>".$row[3]."</span>"."<br/>";
                echo "Max Ram : "."<span>".$row[4]."</span>"."<br/>";
            
                
                $sql = "select name, price, type, frequency, capacity from specsheet_ram where price=".$r_price." AND name='".$r_name."' ;";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result);
            
                $txt = "--RAM-- \r\n";
                fwrite($myfile, $txt);
                $txt = "Name : ".$row[0]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Price : ".$row[1]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Type : ".$row[2]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Frequency : ".$row[3]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Capacity : ".$row[4]."\r\n\r\n";
                fwrite($myfile, $txt);
            
                echo "<br/>"."--RAM--"."<br/>";
                echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                echo "Type : "."<span>".$row[2]."</span>"."<br/>";
                echo "Frequency : "."<span>".$row[3]."</span>"."<br/>";
                echo "Capacity : "."<span>".$row[4]."</span>"."<br/>";
            
            
                $sql = "select name, price, power from specsheet_smps where price=".$s_price." AND name='".$s_name."' ;";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result);
            
                $txt = "--SMPS-- \r\n";
                fwrite($myfile, $txt);
                $txt = "Name : ".$row[0]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Price : ".$row[1]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Power : ".$row[2]."\r\n\r\n";
                fwrite($myfile, $txt);
            
                echo "<br/>"."--SMPS--"."<br/>";
                echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                echo "Power : "."<span>".$row[2]."</span>"."<br/>";
            
            
                $sql = "select name, price, type, form_factor, cache, storage from specsheet_drive where price=".$d_price." AND name='".$d_name."' ;";
                $result = mysqli_query($con,$sql); 
                $row = mysqli_fetch_array($result);
            
                $txt = "--Drive-- \r\n";
                fwrite($myfile, $txt);
                $txt = "Name : ".$row[0]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Price : ".$row[1]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Type : ".$row[2]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Form Factor : ".$row[3]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Cache : ".$row[4]."\r\n";
                fwrite($myfile, $txt);
                $txt = "Storage : ".$row[5]."\r\n\r\n";
                fwrite($myfile, $txt);
            
                echo "<br/>"."--Drive--"."<br/>";
                echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                echo "Type : "."<span>".$row[2]."</span>"."<br/>";
                echo "Form Factor : "."<span>".$row[3]."</span>"."<br/>";
                echo "Cache : "."<span>".$row[4]."</span>"."<br/>";
                echo "Storage : "."<span>".$row[5]."</span>"."<br/>";
            
                
                $sql = "select name, price, memory, base_clock, pcie, cores from specsheet_gfx where price=".$g_price." AND name='".$g_name."' ;";
                $result = mysqli_query($con,$sql); 
                if($row = mysqli_fetch_array($result))
                {
                    $txt = "--Graphic Card-- \r\n";
                    fwrite($myfile, $txt);
                    $txt = "Name : ".$row[0]."\r\n";
                    fwrite($myfile, $txt);
                    $txt = "Price : ".$row[1]."\r\n";
                    fwrite($myfile, $txt);
                    $txt = "Memory : ".$row[2]."\r\n";
                    fwrite($myfile, $txt);
                    $txt = "Base Clock : ".$row[3]."\r\n";
                    fwrite($myfile, $txt);
                    $txt = "PCIe : ".$row[4]."\r\n";
                    fwrite($myfile, $txt);
                    $txt = "Cores : ".$row[5]."\r\n\r\n";
                    fwrite($myfile, $txt);
                    
                    echo "<br/>"."--Graphic Card--"."<br/>";
                    echo "Name : "."<span>".$row[0]."</span>"."<br/>";
                    echo "Price : "."<span>".$row[1]."</span>"."<br/>";
                    echo "Memory : "."<span>".$row[2]."</span>"."<br/>";
                    echo "Base Clock : "."<span>".$row[3]."</span>"."<br/>";
                    echo "PCIe : "."<span>".$row[4]."</span>"."<br/>";
                    echo "Cores : "."<span>".$row[5]."</span>"."<br/>";
                }
             
                fclose($myfile);  
            ?>
        
        </div>
        
        
        <script>
            
            $("#mechanics").delay(1000).animate({
                 width : "150px",
             },1000);
        
            var tester = document.getElementById("tester");
            var currentRig, processor, motherboard, ram, smps, drive, gfx;
            var p_name, p_price;
            var m_name, m_price;
            var r_name, r_price;
            var s_name, s_price;
            var d_name, d_price;
            var g_name, g_price;
        
            currentRig = "<?php echo $currentRig ?>";
            
            p_price = "<?php echo $p_price ?>";
            p_name = "<?php echo $p_name ?>";
            
            m_price = "<?php echo $m_price ?>";
            m_name = "<?php echo $m_name ?>";
            
            r_price = "<?php echo $r_price ?>";
            r_name = "<?php echo $r_name ?>";
            
            s_price = "<?php echo $s_price ?>";
            s_name = "<?php echo $s_name ?>";
            
            d_price = "<?php echo $d_price ?>";
            d_name = "<?php echo $d_name ?>";
            
            g_price = "<?php echo $g_price ?>";
            g_name = "<?php echo $g_name ?>";
            
            /*tester1.innerHTML=p_price;
            tester2.innerHTML=m_price;
            tester3.innerHTML=r_price;
            tester4.innerHTML=s_price;
            tester5.innerHTML=d_price;
            tester6.innerHTML=g_price;*/
            
            
            function update_list()
            {
                $("#p_name").html(p_name);
                $("#p_price").append("Rs ").append(p_price);
                
                $("#m_name").html(m_name);
                $("#m_price").append("Rs ").append(m_price);
                
                $("#r_name").html(r_name);
                $("#r_price").append("Rs ").append(r_price);
                
                $("#s_name").html(s_name);
                $("#s_price").append("Rs ").append(s_price);
                
                $("#d_name").html(d_name);
                $("#d_price").append("Rs ").append(d_price);
                
                if(g_price>0)
                {
                        $("#g_name").html(g_name);
                        $("#g_price").append("Rs ").append(g_price);
                }
                else
                    {
                        $("#gfx").css("display","none");
                    }
                
                $("#amount").append(currentRig);
                $("#p_img").html('<img src="../Images/Processors/db/'+p_price+'.jpg" width="100%" height="100%" />');
                $("#m_img").html('<img src="../Images/Motherboards/db/'+m_price+'.jpeg" width="100%" height="100%" />');
                $("#r_img").html('<img src="../Images/Ram/db/'+r_price+'.jpg" width="100%" height="100%" />');
                $("#s_img").html('<img src="../Images/Smps/db/'+s_price+'.jpg" width="100%" height="100%" />');
                $("#d_img").html('<img src="../Images/Hdd/db/'+d_price+'.jpeg" width="100%" height="100%" />');
                $("#g_img").html('<img src="../Images/Graphic Card/db/'+g_price+'.jpg" width="100%" height="100%" alt="Insufficient Funds" />');
                
            }
            update_list();
            
            var breaker;
            var specer = false;
            function speccall(breaker)
            {
                specer = !specer;
                if (breaker==1)
                    specer=false;
                if(specer)
                    {
                        
                        $("#animator").animate({
                            width: "700px",
                            borderRadius: "700px",
                            height: "700px",
                            marginTop: "-350px",
                            marginLeft: "-350px",
                    
                        },750,function(){
                                $("#specsheet").css("display","block");
                                $("#viewspecs").html("Close Specsheet");
                        });
                        
                        $("#backcontent").animate({
                            opacity: "0.3",
                        },750);
                    }
                else
                    {
                        $("#specsheet").css("display","none");
                        $("#viewspecs").html("Open Specsheet");
                        $("#animator").animate({
                            width: "0px",
                            borderRadius: "0px",
                            height: "0px",
                            marginTop: "-0px",
                            marginLeft: "-0px",
                    
                        },750);
                        $("#backcontent").animate({
                            opacity: "1",
                        },750);        
                    }
            }
            
            function goToHome()
            {
                window.location="../home_redesign.php";
            }
            var width=screen.width;
            var height=screen.height;
            var dcounter=flase;
            var animtime=1750;
            function downloader()
            {
                dcounter=!dcounter;
                if(dcounter)
                {
                     $("#download").animate({
                         width: width*1.0855,
                         height: width*1.0855,
                         borderTopRightRadius: width*1.0855,
                         opacity: "0.8",
                     },1000);   
                    $("#download img").animate({
                        opacity: "0",
                    },1000,function(){
                        $("#downoptions").css("display","block");
                    });
                }
                else
                {
                    $("#downoptions").css("display","none");
                    $("#download").animate({
                         width: "70px",
                         height: "70px",
                         borderTopRightRadius: "70px",
                         opacity: "1",
                     },1000);
                    $("#download img").animate({
                        opacity: "1",
                    },1000);
                }
                
            }
            
            
            
            function proceeddownload()
            {
                var rignamer = document.getElementById("rigname");
                
                if(downcounter>0)
                    alert("You Have Already Downloaded This Rig");
                else if(rignamer.value.length>0 && rignamer.value.length<16)
                {
                    downcounter++;
                     window.location="testpage.php?rig="+rignamer.value;
                } 
                else if (rignamer.value.length>15)
                    alert("Please Shorten The Name");
                else
                    alert("Name Can't Be Left Blank");
            }
        
            function keyhandler(event)
            {
                if(event.charCode==13 && dcounter)
                    proceeddownload();
            }
            
            
        </script> 
        
        <script>
            var masterEl = document.getElementById("spider");
            var c;
            var callEffect=true;
            var widthc=screen.width;
            function crawler()
            {
                c=spider.scrollTop;
                if(c>=1000 && callEffect)
                    {
                        callEffect = false;
                        footerEffect();
                    }
                if(c<1000)
                    {
                        callEffect = true;
                        footerReset();
                    }
                setTimeout("crawler()",250);
            }
            crawler();
            
            function footerReset()
            {
                $("#glace").css("opacity",0.50).css("width","0px").css("marginLeft","0px");
            }
            
            function footerEffect()
            {
                $("#glace").animate({
                    width: widthc,
                    marginLeft: -widthc/2,
                    opacity: 0,
                },2000);
            }
            
            function footerExpand()
            {
                $("#footer2").animate({
                    height: "250px",
                    marginTop: "0px",
                },1000);
                $("#contactus").animate({
                    marginTop: "85px",
                    opacity: 0,
                },1000,function(){
                    $("#contactus").css("display","none");
                    $(".summer").css("display","block");
                    $("#facebook").css("marginTop","100px");
                    $("#google").css("marginTop","100px");
                    $("#facebook").animate({
                        opacity: "1",
                    },500);
                    $("#google").animate({
                        opacity: "1",
                    },500);
                 });
                
            }
            
            function footerContract()
            {
                $("#qr").css("display","none");
                $("#footclose").css("display","none");
                $("#contactus").css("display","block");
                $("#footer2").animate({
                    height: "130px",
                    marginTop: "50px",
                },1000);
                $("#contactus").animate({
                    marginTop: "35px",
                    opacity: "1",
                },1000);
                $("#facebook").animate({
                    opacity: "0",
                    marginTop: "50px",
                },1000);
                $("#google").animate({
                    opacity: "0",
                    marginTop: "50px",
                },1000,function(){
                    $(".summer").css("display","none");
                });
            }
            var chooser;
            function contactCaller(chooser)
            {
                if(chooser==1)
                    window.open('https://www.facebook.com/chiranjivi.agarwal');
                else
                    window.open('https://plus.google.com/u/0/102733004836079656736');
            }
            
        </script>
        
        
    
    </body>


</html>
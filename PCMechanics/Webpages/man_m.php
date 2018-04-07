<html>

    <head>
    
        <?php session_start(); ?>
        <script src="../Jquery/jquery-3.1.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
        
        <style>
        
            #footer
            {
                width: 100%; height: 250px; position: absolute; margin-top: 975px; background: #001013;
            }
             @font-face
            {
                font-family: windowsDefault;
                src: url(../fonts/ufonts.com_segoe-ui-light.ttf);
            }
            
            body
            {
                margin: 0px; border: 0px;
            }
            
            #verticalBar
            {
                width: 45px; height: 100%; right: 0; position: fixed; background: #213235; z-index: 2;
            }
            
            #horizontalBar
            {
                width: 100%; height: 42px; top: 0px; position: fixed; background: #213235;
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
            
            #menuBox
            {
                width: 45px; height: 100%; background: #213235; position: fixed; right: 0px; z-index: 4; 
            }
            
            #menuButton
            {
                width: 40px; height: 40px; position: fixed; right: 0px; z-index: 5; background: #213235; cursor: pointer;
            }
            
            #menuBarTop
            {
                margin-top:6px;
            }
            #menuBarMiddle
            {
                margin-top:17px;
                clear: left;
            }
            #menuBarBottom
            {
                margin-top:29px;
                clear: left;
            }
            
            .menuBar
            { 
                width: 35px; height: 5px; margin-left: 0px; background-color: white; position: absolute; float: left;
            }
            
            @keyframes starter
            {
                from{transform: rotate(0deg);}
                to{transform: rotate(45deg); margin-top: 17px;}
            }
            
            @keyframes reverser
            {
                from{transform: rotate(45deg);margin-top: 17px;}
                to{transform: rotate(0deg); margin-top: 29px;}
            }
            
            @keyframes starter2
            {
                from{transform: rotate(0deg);}
                to{transform: rotate(-45deg); margin-top: 17px;}
            }
            
            @keyframes reverser2
            {
                from{transform: rotate(-45deg);margin-top: 17px;}
                to{transform: rotate(0deg); margin-top: 6px;}
            }
            
            .component
            {
                width: 100px; height: 100px; float: left; margin-left: 18px; margin-top: 18px; display: none; border: 3px solid #bbbb00;
            }
            #component1
            {
                margin-top: 70px; border-color: darkgreen;
            }
            #component1 img
            {
                margin-left: -5px;
            }
            #component2
            {
                margin-top: 70px; border-color: #213235;
            }
            #component4 img
            {
                margin-top: 20px; margin-left: 5px;
            }
            #component6 img
            {
                margin-left: 15px;
            }
            #menuTextBox
            {
                width: 100px; height: 16px; line-height: 16px; vertical-align: middle; text-align: center; background: #213235;
                position: absolute; font-family: windowsDefault; color: white; display: none;
            }
            
            #currentPageIndicator
            {
                height: 42px;line-height: 42px; vertical-align: middle; text-align: center;  color: white; font-family: windowsDefault; font-size: 25px; float: left; margin-left: 5px;
            }
            #currentPageIndicator:hover
            {
                color: #213235; background-color: white;
            }
            #inpageTitle
            {
                position: fixed; z-index: 2;
            }
            #titleImage
            {
                height: 42px; width: 42px; float: left; margin-left: 2px;
            }
            
            
/*      ----------------------------------------------------------------------------------------------------------           */
             .subTag
            {
                width: 200px; height: 50px;font-family: windowsDefault; font-size: 40px; line-height: 50px;
                vertical-align: middle; text-align: center; color: #213235;float: left;clear: left;
            }
            .contentWindow
            {
                width: 250px; height: 200px; background-color: cornsilk;margin-left: 80px; margin-top: 30px;float: left; cursor: pointer; border: 1px solid white;
            }
            #contentWindow1,  #contentWindow4, #contentWindow8
            {
                clear: left;
            }
            .nameTag
            {
                width: 250px; height: 40px; background-color: aliceblue; float: left; margin-left: 80px;margin-top: 5px;font-family: windowsDefault; font-size: 30px; line-height: 40px; vertical-align: middle; text-align: center; color: #213235;border: 1px solid white;
            }
            #nameTag1,  #nameTag4, #nameTag8
            {
                clear: left;
            }
            .ruler
            {
                margin-top: 30px;float: left; margin-left: 25%; border-color: #213235;margin-bottom: 30px;clear: left;
            }
             .buyTag
            {
                width: 50px; height: 50px; border-radius: 50px; background: #213235; float: left; margin-left: 192px; margin-top: 10px; margin-right: 88px; cursor: pointer;border: 1px solid white;
            }
            #buyTag1, #buyTag4, #buyTag8
            {
                clear: left;
            }
            .buyTag img
            {
               margin-top: 7px; margin-left: 7px;
            }
            
    /*           --------------------------------------------------------------------------------             */
            
            #specsheet
            {
                width: 700px; height: 400px; position: fixed; z-index: 5; background: #1a5d6b; left: 50%; margin-left: -350px;
                margin-top: 60px; box-shadow: 5px 5px 5px #999999; color: white; font-family: windowsDefault; font-size: 25px;
                display: none;
            }
            pre
            {
                font-family: windowsDefault;
            }
            #attributec
            {
                float: left; width: 320px; height: 500px; color: white; font-family: windowsDefault; font-size: 25px;padding-left: 30px;
            }
            #valuec
            {
                float: left; width: 350px; height: 500px; ; color: white; font-family: windowsDefault; font-size: 25px;
            }
            #specclose
            {
                position: absolute; width: 40px; height: 40px;  right: 5px; cursor: pointer; top: 5px;
            }
            
            #proceed
            {
                position: fixed; width: 200px; height: 42px; background: #1a5d6b; font-family: windowsDefault; font-size: 20px; 
                text-align: center; line-height: 42px; vertical-align: middle; color: white; right: 45px; cursor: pointer;
                display: none;
            }
            ::-webkit-scrollbar {
                    width: 8px;
            }
 
            ::-webkit-scrollbar-track { 
                    border-radius: 0px;
            }
 
            ::-webkit-scrollbar-thumb {
                    border-radius: 0px;
                    background: #546568;
             }
        
        </style>
        
    </head>

    
    <body id="spider">
    
        <?php 
    
            $selected_processor=$_GET["pro"];
            $con = mysqli_connect("localhost","root","");
        
            mysqli_select_db($con,"pcmechanics");
            $sql = "select name,price from specsheet_processor where p_id = ".$selected_processor.";";
            $result = mysqli_query($con,$sql); 
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['processor_name'] = $row[0];
                $_SESSION['processor_price'] = $row[1];   
            }
            
        ?>
        
        
        <div id="specsheet">
            <div id="attributec">
                   <br/>    Name
                   <br/>    Socket    
                   <br/>    Ram type
                   <br/>  Max Ram
                   <br/>  Price  
            
            </div>
            <div id="valuec">
  
            </div>
        
            <div id="specclose"><img src="../Images/UI/xicon.png" width="100%" height="100%"/></div>
            
        
        </div>
        
        <div id="inpageTitle">
            <div id="titleImage"><img src="../Images/UI/menuItems/wmotherboardIcon.png" width="100%" height="100%"/></div>
            <div id="currentPageIndicator"><strong>Motherboard</strong></div>
        </div>
        
    
        <div id="verticalBar"></div>
        <div id="horizontalBar">
            <div id="logo">
                <div id="pc"><b>PC |</b></div>
                <div id="mechanics"><b>Mechanics</b></div>
            </div> 
        </div>
        
        <div id="proceed">Confirm &amp Proceed</div>
        
        <div id="menuButton" onclick="menuBar_animation();">
        
            <div id="menuBarTop" class="menuBar"></div>
            <div id="menuBarMiddle" class="menuBar"></div>
            <div id="menuBarBottom" class="menuBar"></div>
        
        </div>
        
        
        <div id="menuBox">
        
            <div id="menuTextBox"></div>
            <div id="component1" class="component"><img src="../Images/UI/menuItems/wcpuIcon.png" width="110%" height="100%"/></div>
            <div id="component2" class="component"><img src="../Images/UI/menuItems/wmotherboardIcon.png" width="100%" height="100%"/></div>
            <div id="component3" class="component"><img src="../Images/UI/menuItems/wramIcon.png" width="100%" height="100%"/></div>
            <div id="component4" class="component"><img src="../Images/UI/menuItems/wsmpsIcon.png" width="95%" height="60%"/></div>
            <div id="component5" class="component"><img src="../Images/UI/menuItems/wgfxCardIcon.png" width="100%" height="100%"/></div>
            <div id="component6" class="component"><img src="../Images/UI/menuItems/whddIcon.png" width="70%" height="100%"/></div>
        
        </div>
    <!--   -------------------------------------------------------------------------------     -->    
        
        
        <div id="pentiumTitle" class="subTag" style="margin-top:50px;">MSI</div>
        <div id="contentWindow1" class="contentWindow" onclick="specsheet_called(1);"><img src="../Images/Motherboards/msi_h110m.jpeg" width="100%" height="100%"/></div>
        <div id="contentWindow2" class="contentWindow" onclick="specsheet_called(2);"><img src="../Images/Motherboards/Msi_b150m.jpeg" width="100%" height="100%"/></div>
        <div id="contentWindow3" class="contentWindow" onclick="specsheet_called(3);"><img src="../Images/Motherboards/Msi_b150a.jpeg" width="100%" height="100%"/></div>
        <div id="nameTag1" class="nameTag">H110M</div>
        <div id="nameTag2" class="nameTag">B150M</div>
        <div id="nameTag3" class="nameTag">B150A</div>
        <div id="buyTag1" class="buyTag" onclick="buy_press(1);"><image src="../Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag2" class="buyTag" onclick="buy_press(2);"><image src="../Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag3" class="buyTag" onclick="buy_press(3);"><image src="../Images/UI/wcart.png" width="75%" height="75%" /></div>
        <hr width="50%" class="ruler" />
        
        
        <div id="i3Title" class="subTag">Asus</div>
        
        
        <div id="contentWindow4" class="contentWindow" onclick="specsheet_called(4);"><img src="../Images/Motherboards/Asus_z170.jpeg" width="100%" height="100%"/></div>
        
        <div id="nameTag4" class="nameTag">Z170 Pro Gaming</div>
        
        <div id="buyTag4" class="buyTag" onclick="buy_press(4);"><image src="../Images/UI/wcart.png" width="75%" height="75%" /></div>
        
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
        
        <script>
            
            $("#mechanics").delay(1000).animate({
                 width : "150px",
             },1000);
        
            var countMenu=true;
            var menu_bottom_element=document.getElementById("menuBarBottom");
            var menu_top_element=document.getElementById("menuBarTop");
            var menu_item_selector=1;
            var menu_text_box=document.getElementById("menuTextBox");
            
            function menuBar_animation()
            {
                if(countMenu)
                {
                    menu_bottom_element.style.animation='starter 1s';
                    menu_top_element.style.animation='starter2 1s';
                    menu_bottom_element.style.animationFillMode='forwards';
                    menu_top_element.style.animationFillMode='forwards';
                    open_menuBar();
                    $("#menuBarMiddle").animate({
                        width: "0px",
                    },750);
                }
                else
                    {
                        setTimeout(function(){
                            
                            menu_bottom_element.style.animation='reverser 1s';
                            menu_top_element.style.animation='reverser2 1s';
                            menu_bottom_element.style.animationFillMode='forwards';
                            menu_top_element.style.animationFillMode='forwards';
                             $("#menuBarMiddle").animate({
                                 width: "35px",
                            },750);
                        },500);
                        
                        close_menuBar();
                       
                    }
                countMenu=!countMenu;
            }
            
            function open_menuBar()
            {
                $("#verticalBar").animate({
                    width: "0px",
                },400);
                
                $("#menuBox").animate({
                    width: "250px",
                    
                },750,"swing",function(){
                    menu_items_animation_open();
                    
                });
            }
            
            function close_menuBar()
            {
                menu_items_animation_close();
                menu_text_box.style.display="none";
                $("#verticalBar").animate({
                    width: "45px",
                },800);
            
                $("#menuBox").delay(500).animate({
                    width: "45px",
                    
                },750,"swing");
            }
            
            function menu_items_animation_open()
            {
                $("#component"+menu_item_selector).fadeIn("fast");
                menu_item_selector++;
                if(menu_item_selector<7)
                    setTimeout("menu_items_animation_open()",100);
                else
                    menu_item_selector=6;
            }
            
            function menu_items_animation_close()
            {
                $("#component"+menu_item_selector).fadeOut(200);
                menu_item_selector--;
                if(menu_item_selector>0)
                    setTimeout("menu_items_animation_close()",100);
                else
                    menu_item_selector=1;
            }
            
            $("#component1").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=18+"px";
                menu_text_box.style.marginTop=113+"px";
                menu_text_box.innerHTML="Processor";
            });
            $("#component2").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=136+"px";
                menu_text_box.style.marginTop=113+"px";
                menu_text_box.innerHTML="Motherboard";
            });
            $("#component3").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=18+"px";
                menu_text_box.style.marginTop=230+"px";
                menu_text_box.innerHTML="RAM";
            });
            $("#component4").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=136+"px";
                menu_text_box.style.marginTop=230+"px";
                menu_text_box.innerHTML="SMPS";
            });
            $("#component5").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=18+"px";
                menu_text_box.style.marginTop=350+"px";
                menu_text_box.innerHTML="Graphic Card";
            });
            $("#component6").mouseenter(function(){
                menu_text_box.style.display="block";
                menu_text_box.style.marginLeft=136+"px";
                menu_text_box.style.marginTop=350+"px";
                menu_text_box.innerHTML="HDD/SSD";
            });
            $("#menuTextBox").mouseenter(function(){
               menu_text_box.style.display="block";
                
            });
            $("#component1,#component2,#component3,#component5").mouseout(function(){
               menu_text_box.style.display="none";
                
            });
            
    // ----------------------------------------------------------------------------------------
            
            var buy_button;
            var prev_button;
            
            function buy_press(buy_button)
            {
                if(prev_button==buy_button)   //After Reclicking Selected Icon
                   {
                       $("#buyTag"+buy_button).css("background","#213235");
                       
                       $("#contentWindow"+buy_button).css("border","white");
                       
                       $("#nameTag"+buy_button).css("backgroundColor","aliceblue");
                       $("#nameTag"+buy_button).css("color","#213235");
                       $("#nameTag"+buy_button).css("border","0px");
                       
                       prev_button = 0;
                       buy_button =0;
                   } 
                else              // after clicking another icon (before/after selecting any)
                    {
                        $("#buyTag"+prev_button).css("background","#213235");
                        $("#buyTag"+buy_button).css("backgroundColor","green");
                        
                        $("#contentWindow"+buy_button).css("border","1px solid green");
                        $("#contentWindow"+prev_button).css("border","white");
                        
                        $("#nameTag"+buy_button).css("backgroundColor","green");
                        $("#nameTag"+buy_button).css("color","white");
                        $("#nameTag"+prev_button).css("backgroundColor","aliceblue");
                        $("#nameTag"+prev_button).css("color","#213235");
                        $("#nameTag"+buy_button).css("border","1px solid green");
                        $("#nameTag"+prev_button).css("border","white");
                        
                         prev_button=buy_button;
                    }
                    if(buy_button > 0)
                        $("#proceed").css("display","block");
                    else
                        $("#proceed").css("display","none");
                
                    $("#proceed").click(function(){
               
                            window.location="man_r.php?pro="+buy_button;
                
                    });
                
            }
            
            
//        ---------------------------------------------------------------------------
            
            var specsheet=0;
            
            function specsheet_called(specsheet)
            {
                $("#specsheet").css("display","block");
                    $("#valuec").empty();
                    var name, clockspeed, cores, threads,  price;
                    generation = "6th";
                    if (specsheet==1)
                        {
                            name = "MSI H110M";
                            cores = "LGA 1151";
                            threads = "DDR4";
                            clockspeed = "32 GB";
                            price = "Rs. 5,600"; 
                        }
                    else if (specsheet==2)
                        {
                            name = "MSI B150M";
                            cores = "LGA 1151";
                            threads = "DDR4";
                            clockspeed = "64 GB";
                            price = "Rs. 8,500"; 
                            
                        }
                    else if (specsheet==3)
                        {
                            name = "MSI B150A";
                            cores = "LGA 1151";
                            threads = "DDR4";
                            clockspeed = "32 GB";
                            price = "Rs. 13,300"; 
                            
                        }
                    else if (specsheet==4)
                        {
                            name = "Asus Z170 Pro Gaming";
                            cores = "LGA 1151";
                            threads = "DDR4";
                            clockspeed = "64 GB";
                            price = "Rs. 16,500"; 
                            
                        }
                    
                
                    $("#valuec").append("<br/>").append(": ").append(name);
                    $("#valuec").append("<br/>").append(": ").append(cores);
                    $("#valuec").append("<br/>").append(": ").append(threads);
                    $("#valuec").append("<br/>").append(": ").append(clockspeed);
                    $("#valuec").append("<br/>").append(": ").append(price);
            }
            
            $("#specclose").click(function(){
               $("#specsheet").css("display","none");
                
            });
            
          
            $("#contentWindow1").mouseenter(function(){
                $("#nameTag1").html("Rs 5,600");   
            });
            $("#contentWindow1").mouseout(function(){
                $("#nameTag1").html("H110M");   
            });
            
            $("#contentWindow2").mouseenter(function(){
                $("#nameTag2").html("Rs 8,500");   
            });
            $("#contentWindow2").mouseout(function(){
                $("#nameTag2").html("B150M");   
            });
            
            $("#contentWindow3").mouseenter(function(){
                $("#nameTag3").html("Rs 13,300");   
            });
            $("#contentWindow3").mouseout(function(){
                $("#nameTag3").html("B150A");   
            });
            
            $("#contentWindow4").mouseenter(function(){
                $("#nameTag4").html("Rs 16,500");   
            });
            $("#contentWindow4").mouseout(function(){
                $("#nameTag4").html("Z170 Pro Gaming");   
            });
            
        
            //REMEMBER TO REDUCE OPACITY OF BACKGROUND ITEMS WHILE BROWSING MENU SECTION
            
        </script>
    
        <script>
            var masterEl = document.getElementById("spider");
            var c;
            var callEffect=true;
            var widthc=screen.width;
            function crawler()
            {
                c=spider.scrollTop;
                //$("#footer1").html(c);
                if(c>=380 && callEffect)
                    {
                        callEffect = false;
                        footerEffect();
                    }
                if(c<380)
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
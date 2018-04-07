<html>

    <head>
        <script src="Jquery/jquery-3.1.0.min.js"></script>
        <style>
        
             @font-face
            {
                font-family: windowsDefault;
                src: url(fonts/ufonts.com_segoe-ui-light.ttf);
            }
            
            body
            {
                margin: 0px; border: 0px;
            }
            
            #verticalBar
            {
                width: 40px; height: 100%; right: 0; position: fixed; background: #213235; z-index: 2;
            }
            
            #horizontalBar
            {
                width: 100%; height: 42px; top: 0px; position: fixed; background: #213235;
            }
            
            #menuBox
            {
                width: 40px; height: 100%; background: #213235; position: fixed; right: 0px; z-index: 1; 
            }
            
            #menuButton
            {
                width: 40px; height: 40px; position: fixed; right: 0px; z-index: 5; background: #213235;
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
                width: 100px; height: 100px; float: left; margin-left: 18px; margin-top: 18px; display: none;
            }
            #component1, #component2
            {
                margin-top: 70px;
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
                width: 250px; height: 200px; background-color: cornsilk;margin-left: 80px; margin-top: 30px;float: left;
            }
            #contentWindow1, #contentWindow2, #contentWindow5, #contentWindow8
            {
                clear: left;
            }
            .nameTag
            {
                width: 250px; height: 40px; background-color: aliceblue; float: left; margin-left: 80px;margin-top: 5px;font-family: windowsDefault; font-size: 30px; line-height: 40px; vertical-align: middle; text-align: center; color: #213235;
            }
            #nameTag1, #nameTag2, #nameTag5, #nameTag8
            {
                clear: left;
            }
            .ruler
            {
                margin-top: 30px;float: left; margin-left: 25%; border-color: #213235;margin-bottom: 30px;clear: left;
            }
             .buyTag
            {
                width: 50px; height: 50px; border-radius: 50px; background: #213235; float: left; margin-left: 192px; margin-top: 10px; margin-right: 88px;
            }
            #buyTag1, #buyTag2, #buyTag5, #buyTag8
            {
                clear: left;
            }
            .buyTag img
            {
               margin-top: 7px; margin-left: 7px;
            }
        
        </style>
    
    </head>

    <body>
        
        <div id="inpageTitle">
            <div id="titleImage"><img src="Images/UI/menuItems/wcpuIcon.png" width="100%" height="100%"/></div>
            <div id="currentPageIndicator"><strong>Processor</strong></div>
        </div>
        
    
        <div id="verticalBar"></div>
        <div id="horizontalBar"></div>
        
        <div id="menuButton" onclick="menuBar_animation();">
        
            <div id="menuBarTop" class="menuBar"></div>
            <div id="menuBarMiddle" class="menuBar"></div>
            <div id="menuBarBottom" class="menuBar"></div>
        
        </div>
        
        
        <div id="menuBox">
        
            <div id="menuTextBox"></div>
            <div id="component1" class="component"><img src="Images/UI/menuItems/wcpuIcon.png" width="110%" height="100%"/></div>
            <div id="component2" class="component"><img src="Images/UI/menuItems/wmotherboardIcon.png" width="100%" height="100%"/></div>
            <div id="component3" class="component"><img src="Images/UI/menuItems/wramIcon.png" width="100%" height="100%"/></div>
            <div id="component4" class="component"><img src="Images/UI/menuItems/wsmpsIcon.png" width="95%" height="60%"/></div>
            <div id="component5" class="component"><img src="Images/UI/menuItems/wgfxCardIcon.png" width="100%" height="100%"/></div>
            <div id="component6" class="component"><img src="Images/UI/menuItems/whddIcon.png" width="70%" height="100%"/></div>
        
        </div>
    <!--   -------------------------------------------------------------------------------     -->    
        
        
        <div id="pentiumTitle" class="subTag" style="margin-top:50px;">Pentium</div>
        <div id="contentWindow1" class="contentWindow" onclick="specsheet_called();"><img src="Images/Processors/Pentium_G4400.jpg" width="100%" height="100%"/></div>
        <div id="nameTag1" class="nameTag">G4400</div>
        <div id="buyTag1" class="buyTag" onclick="buy_press(1);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <hr width="50%" class="ruler" />
        
        
        <div id="i3Title" class="subTag">i3</div>
        <div id="contentWindow2" class="contentWindow"><img src="Images/Processors/i3_common.jpg" width="100%" height="100%"/></div>
        <div id="contentWindow3" class="contentWindow"><img src="Images/Processors/i3_common.jpg" width="100%" height="100%"/></div>
        <div id="contentWindow4" class="contentWindow"><img src="Images/Processors/i3_common.jpg" width="100%" height="100%"/></div>
        <div id="nameTag2" class="nameTag">6098P</div>
        <div id="nameTag3" class="nameTag">6100</div>
        <div id="nameTag4" class="nameTag">6300</div>
        <div id="buyTag2" class="buyTag" onclick="buy_press(2);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag3" class="buyTag" onclick="buy_press(3);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag4" class="buyTag" onclick="buy_press(4);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <hr width="50%" class="ruler" />
        
        
        <div id="i5Title" class="subTag">i5</div>
        <div id="contentWindow5" class="contentWindow"><img src="Images/Processors/i5_6400.jpg" width="100%" height="100%"/></div>
        <div id="contentWindow6" class="contentWindow"><img src="Images/Processors/i5_6500.jpg" width="100%" height="100%"/></div>
        <div id="contentWindow7" class="contentWindow"><img src="Images/Processors/i5_6600.jpg" width="100%" height="100%"/></div>
        <div id="nameTag5" class="nameTag">6400</div>
        <div id="nameTag6" class="nameTag">6500</div>
        <div id="nameTag7" class="nameTag">6600</div>
        <div id="buyTag5" class="buyTag" onclick="buy_press(5);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag6" class="buyTag" onclick="buy_press(6);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <div id="buyTag7" class="buyTag" onclick="buy_press(7);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <hr width="50%" class="ruler" />
        
        
        <div id="i7title" class="subTag">i7</div>
        <div id="contentWindow8" class="contentWindow"><img src="Images/Processors/i7_6700K.jpg" width="100%" height="100%"/></div>
        <div id="nameTag8" class="nameTag">6700K</div>
        <div id="buyTag8" class="buyTag" onclick="buy_press(8);"><image src="Images/UI/wcart.png" width="75%" height="75%" /></div>
        <hr width="50%" class="ruler" />
        
        
        <script>
        
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
                    width: "40px",
                },800);
            
                $("#menuBox").delay(500).animate({
                    width: "40px",
                    
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
                       
                       $("#contentWindow"+buy_button).css("border","0px");
                       
                       $("#nameTag"+buy_button).css("backgroundColor","aliceblue");
                       $("#nameTag"+buy_button).css("color","#213235");
                       $("#nameTag"+buy_button).css("border","0px");
                       
                       prev_button = 0;
                   } 
                else              // after clicking another icon (before/after selecting any)
                    {
                        $("#buyTag"+prev_button).css("background","#213235");
                        $("#buyTag"+buy_button).css("backgroundColor","green");
                        
                        $("#contentWindow"+buy_button).css("border","1px solid green");
                        $("#contentWindow"+prev_button).css("border","0px");
                        
                        $("#nameTag"+buy_button).css("backgroundColor","green");
                        $("#nameTag"+buy_button).css("color","white");
                        $("#nameTag"+prev_button).css("backgroundColor","aliceblue");
                        $("#nameTag"+prev_button).css("color","#213235");
                        $("#nameTag"+buy_button).css("border","1px solid green");
                        $("#nameTag"+prev_button).css("border","0px");
                        
                         prev_button=buy_button;
                    }
            }
            
          
            
        
            //REMEMBER TO REDUCE OPACITY OF BACKGROUND ITEMS WHILE BROWSING MENU SECTION
            
        </script>
    
    </body>

</html>
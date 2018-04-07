<html>

    <head>
    
        <script src="Jquery/jquery-3.1.0.min.js"></script>
        
        <style>
        
            @font-face
            {
                font-family: windowsDefault;
                src: url(fonts/ufonts.com_segoe-ui-light.ttf);
            }
            #horizontalBar
            {
                width: 100%; height: 42px; top: 0px; position: fixed; background: #213235;
            }
            body
            {
                margin: 0px; border: 0px;/*background-image: url('homewp2.jpg');*/ background-position: center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-blend-mode: darken;
                background-image: linear-gradient(to bottom, black 0%,white 0%), url('Images/homewp2.jpg'); perspective: 500px;
            
            }
            #robertFrost
            {
                position: fixed; color: #102124; font-family: windowsDefault; width: 700px; height: 100px; left: 50%; margin-left: -350px; top: 50%; margin-top: -130px; font-size: 35px;
            }
            #quote
            {
                float: right;text-align: center;
            }
            #poet
            {
                clear: right; float: right; color: white;
            }
            #quote2
            {
                position: fixed; color: #102124; font-family: windowsDefault; width: 300px; height: 100px; left: 50%; margin-left: -150px; top: 50%; margin-top: -150px; font-size: 44px; opacity: 0; text-align: center;
            }
            
            #arrow
            {
                position: fixed; bottom: 0%; margin-bottom: 30px; width: 15px; height: 50px; left: 50%; margin-left: -10px;
            }
            #scroller
            {
                position: fixed; bottom: 0%; margin-bottom: 90px;  left: 50%; margin-left: -27px; font-family: windowsDefault;
                color: white; font-size: 25px;
            }
            .road
            {
                position: fixed; width: 400px; height: 60px; top: 57%; left: 50%;  vertical-align: middle; font-family: windowsDefault; color: white; font-size: 35px; line-height: 60px; vertical-align: middle; display: none;
                cursor: pointer;
                
            }
            #road1
            {
                transform: rotateY(38deg); margin-left: 0px;
            }
            #road2
            {
                transform: rotateY(-38deg); margin-left: -425px; text-align: right;
            }
            #logo
            {
                font-family: windowsDefault; color: white; font-size: 30px;  height: 40px; line-height: 40px;
                vertical-align: middle; text-align: center; width: 250px; top: 0px; margin: 0px; left: 50%; margin-left: -125px; position: absolute;
            }
            #pc
            {
                float: left;
            }
            #mechanics
            {
                float: left; margin-left: 10px; overflow: hidden; width: 0px;
            }
           
                        
        </style>
        
    </head>

    <body onmousewheel="changeQuote();">
    
        <div id="horizontalBar">
        
            <div id="logo">
            
                <div id="pc"><b>PC |</b></div>
                <div id="mechanics"><b>Mechanics</b></div>
                
            </div>
            
        </div>
        
        <div id="robertFrost">
            <div id="quote">
                <blockquote><b>" Two roads diverged in a wood, and I - <br/> I took the one less travelled by "</b></blockquote>
            </div>
            <div id="poet"> -Robert Frost</div>  
        </div>
       
        <div id="quote2"><b>So, which road will you choose</b></div>
        
        <div id="arrow"><img src="Images/arrow.png" width="100%" height="100%"/></div>
        <div id="scroller">scroll</div>
        
        
        <div id="road1" class="road" onclick="roadCall(2);"><b>Step-by-step build</b></div>
        <div id="road2" class="road" onclick="roadCall(1);"><b>One-click build</b></div>
        
        <script>
            
            var opacity=1;
            var quote1 = document.getElementById("robertFrost");
            var quote2 = document.getElementById("quote2");
            var arrow = document.getElementById("arrow");
            var scroller = document.getElementById("scroller");
        
            function changeQuote()
            {
                if(opacity>=0)
                {
                    quote1.style.opacity = opacity;
                    arrow.style.opacity = opacity;
                    scroller.style.opacity = opacity;
                    opacity=opacity-0.2;   
                } 
                
                quote2.style.opacity=1-opacity;
                if(opacity<0)
                {
                    quote1.style.display="none";
                    arrow.style.display="none";
                    scroller.style.display="none";
                    call_roads();
                }
                    
        
            }
            
            function call_roads()
            {
                $(".road").fadeIn(1000);
            }
            
         
            $("#mechanics").delay(1000).animate({
                 width : "150px",
             },1000);
              
            var road;
            function roadCall(road)
            {
                if(road==1)
                    window.location="Webpages/road1.php";
                else
                    window.location="Webpages/road2.php";
            }
            
        
        </script>
    
    </body>

</html>
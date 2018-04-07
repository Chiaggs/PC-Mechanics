<html>

    <head>
    
        <script src="../Jquery/jquery-3.1.0.min.js"></script>
        <style>
        
            @font-face
            {
                font-family: windowsDefault;
                src: url(../fonts/ufonts.com_segoe-ui-light.ttf);
            }
            #horizontalBar
            {
                width: 100%; height: 42px; top: 0px; position: fixed; background: #213235;
            }
            body
            {
                margin: 0px; border: 0px;
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
           
            #opt1
            {
                position: fixed; top: 25%; text-align: center; left: 50%; margin-left: -170px; opacity: 0;
            }
            .quote
            {
                width: 100%; font-family: windowsDefault; font-size: 50px; text-align: center; color: #213235; 
            }
            
        </style>
        
    </head>

    <body>
        
         <div id="horizontalBar">
            <div id="logo">
                <div id="pc"><b>PC |</b></div>
                <div id="mechanics"><b>Mechanics</b></div>
            </div> 
        </div>
        
        <div id="opt1">
            <div class="quote">And miles to go</div>
            <div class="quote">before you build,</div>
            <div class="quote">and miles to go</div>
            <div class="quote">before you build.</div>
        </div>
        
        
        <script>
        
            var amount = document.getElementById("amount");
            var question = document.getElementById("question");
            
             $("#mechanics").delay(1000).animate({
                 width : "150px",
             },1000);
            
           
            
           
            $("#opt1").animate({
                opacity : "1",
            },500);
            
            $("#opt1").delay(3500).animate({
                opacity : "0",
            },1000);
            
            setTimeout(function(){
                window.location = "man_p.php";
                
            },4500);
            
            
            
        
        
            
        </script>
    
    </body>
</html>
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
            #amount
            {
                width: 500px; height: 100px; font-family: windowsDefault; font-size: 50px; text-align: center; position: fixed; font-weight: 900; left: 50%; margin-left: -250px; top: 50%; margin-top: -100px; color: #213235; border: 5px solid #213235;
            }
            #rupee
            {
                width: 100px; height: 100px; position: fixed; background: #213235; left: 50%; margin-left: -250px; top: 50%; margin-top: -100px;
            }
            #rupee img
            {
                margin-top: 10px; margin-left: 18px;
            }
            #question
            {
                position: fixed; font-family: windowsDefault; font-size: 50px; top: 50px; color: #213235; width: 100%; text-align: center;
            }
            #button
            {
                width: 200px; height: 100px; background: #213235; color: white; font-family: windowsDefault; font-size: 50px; line-height: 100px; vertical-align: middle; text-align: center; position: fixed; top: 55%; font-weight: bold; left: 50%; margin-left: -100px;
            }
            #opt2
            {
                opacity: 0;
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
        
        
        
        <div id="opt2">
            <div id="question">How much are you willing to shell out ?</div>
        
            <form action="algo.php" method="get">
                <input type="number" id="amount" name="bdgt" onfocus="f1();" autofocus />
                <input type="submit" id="button" value="Build" onclick="return validate();"/>
            </form>
        
            <div id="rupee"><img src="../Images/rupee.png" width="60%" height="80%"/></div>
        </div>
        <script>
        
            var amount = document.getElementById("amount");
            var question = document.getElementById("question");
            
             $("#mechanics").delay(1000).animate({
                 width : "150px",
             },1000);
            
            function validate()
            {
               if(amount.value >= 18500)
                   return true;
                else
                    {
                         var str = "Sorry, but even the cheapest PC here costs Rs. 18500";
                         question.innerHTML=str;
                         return false;
                    }
                   
            }
            
            function f1()
            {
                var str = "How much are you willing to shell out ?";
                question.innerHTML=str;
            }
            
           
            
            $("#opt2").animate({
                opacity : "1",
            },1000);
            
            
            
        
        
            
        </script>
    
    </body>
</html>
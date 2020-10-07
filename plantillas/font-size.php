 <script>
        $(window).resize(function() {
            if(window.outerWidth > 550)
            {
                $("html").css("font-size", "medium")
                $(".main").css("font-size", "medium")
                $(".table").css("font-size", "medium")   
   
            }
            else 
            {
                $("html").css("font-size", "small")   
                $(".main").css("font-size", "small")   
                $(".table").css("font-size", "small")   

            }
        });
    
        window.onload = function() {
            if(window.outerWidth > 550)
            {
                $("html").css("font-size", "medium")
                $(".main").css("font-size", "medium")   
                $(".table").css("font-size", "medium")   

            }
            else 
            {
                $("html").css("font-size", "small")  
                $(".main").css("font-size", "small")  
                $(".table").css("font-size", "small")     
            }
        };
    </script>

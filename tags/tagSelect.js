$(document).ready(function(){
    $("#tagSelectDiv").hide();
    
    $("#tag").click(function(){
     console.log("Button Clicked");
        $.get("http://pamda1ver2.16mb.com/ca/tagSearch.php",function(data){
            console.log(JSON.stringify(data));
        })
        
    });
    

});
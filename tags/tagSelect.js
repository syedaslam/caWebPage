/*
Author : Kunchala Anil
Email : anilkunchalaece@gmail.com
*/
$(document).ready(function(){
    $("#tagSelectDiv").hide();
    $("#subTagSelectDiv").hide();

    $("#tag").click(function(){
     console.log("Button Clicked");
        $.get("http://pamda1ver2.16mb.com/ca/tagSearch.php",function(data){
           console.log(typeof data);
           console.log(data);
           data=JSON.parse(data);
           $("#tagSelectDiv").show();
           $("#selectForTag").append('<option value="0" selected="selected"> Branch </option>')
             for (var key in data){
                     $("#selectForTag").append('<option value="'+key+'">'+ data[key]+"</option>");
         }

       });

    });


    $('#selectForTag').on('change', function() {

      console.log("tag option is changed");

      $("#selectForSubTag option").each(function()
      {
         $(this).remove();
      });

      $("#subTagSelectDiv").show();
      $.post("http://pamda1ver2.16mb.com/ca/subTagSearch.php",{'tag':$('#selectForTag').val()} ,function(data){
              data=JSON.parse(data);
        $("#selectForSubTag").append('<option value="0" selected="selected"> Topic </option>')
          for (var key in data){
                  $("#selectForSubTag").append('<option value="'+key+'">'+ data[key]+"</option>");
      }

    });


   });

 });

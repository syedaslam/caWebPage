$(document).ready(function(){
    $("#tagSelectDiv").hide();
    $("#subTagSelectDiv").hide();
	$("#quts").hide();
	$("#mcqDiv").hide();
	$("#queDiv").hide();
	$("#optDiv").hide();
	

    $("#tag").click(function(){
     console.log("Button Clicked");
        $.get("tagSearch.php",function(data){
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
      $.post("subTagSearch.php",{'tag':$('#selectForTag').val()} ,function(data){
              data=JSON.parse(data);
        $("#selectForSubTag").append('<option value="0" selected="selected"> Topic </option>')
          for (var key in data){
                  $("#selectForSubTag").append('<option value="'+key+'">'+ data[key]+"</option>");
      }

    });



   });
   
    $('#selectForSubTag').on('change', function() {
   	$("#quts").show();
	console.log("subtag Option Changed");
	});
   
   
    $("#quts").click(function(){
     console.log("Button Clicked");
        $.post("loadquestions.php",{tag:$('#selectForTag').val(),subTag:$("#selectForSubTag").val()},function(data){
			data = JSON.parse(data);
            console.log(data);
			console.log(typeof data);
			console.log(Object.keys(data).length);
			var qId = Math.ceil(Math.random()*Object.keys(data).length);
			console.log(qId);
			console.log(data[qId]);
			
			 $.post("getQuestions.php",{'qId':data[qId]},function(data){
				 console.log(data);
				 
				 	$("#mcqDiv").show();
					$("#queDiv").show();
					$("#optDiv").show();
					 
				 $("#queDiv").html(data);
			 })
			
 });
 });
 });

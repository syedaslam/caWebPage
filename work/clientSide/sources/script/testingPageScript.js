    $(document).ready(function() {
                $("#tagSelectDiv").hide();
                $("#subTagSelectDiv").hide();
                $("#takeTest").hide();

                $("#noOfQuestions").on('change', function(){
                  var noOfQuestions = $("noOfQuestions").val();
                    console.log("No Of Questions Selected is"+noOfQuestions);
                    $.ajax({
                        type: "POST",
                        url: "ca/getTags.php",
                        data: {
                            key: "tag"
                        },
                        success: function(data) {
                            console.log("Tags :: " + data);
                            data = JSON.parse(data);
                            $("#selectForTag").append('<option value="0" selected="selected"> Branch </option>')

                            for (var key in data) {
                                $("#selectForTag").append('<option value="' + key + '">' + data[key] + "</option>");
                            }

                            $("#tagSelectDiv").show();

                        },
                    });
                  })


                    $('#selectForTag').on('change', function() {
                        console.log("Tag option Changed");

                        $("#selectForSubTag option").each(function() {
                            $(this).remove();
                        });

                        $.ajax({
                            type: "POST",
                            url: "ca/getTags.php",
                            data: {
                                key: "subTag", val : $('#selectForTag').val()
                            },
                            success: function(data) {

                                console.log("Sub Tags ::" + data);
                                data = JSON.parse(data);

                                for (var key in data) {
                                    $("#selectForSubTag").append('<option value="' + key + '">' + data[key] + "</option>");
                                }
                                $("#subTagSelectDiv").show();
                                $("#takeTest").show();

                            },

                        });
                      });


                      $("#takeTest").click(function(){
                        var subTagsArray = $("#selectForSubTag").val();
                        var noOfSubTags = subTagsArray.length;
                        var questionForSubTag = noOfQuestions/noOfSubTags;


                      })


                        $(document).ajaxError(function() {
                            alert("there is a Error in Ajax Call");
                        });
                    });

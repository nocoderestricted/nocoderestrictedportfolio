(function ($) {
    $(document).ready(function () {

        var contactform = $("#contact");


        contactform.on("submit", function(){

            var $name = $("#name").val(),
                $email = $("#email").val(),
                $website = $("#website").val(),
                $budget = $("#budget").val(),
                $comment = $("#comment").val();
            
            function validateform(){
                if($name == null || $name == ""){
                    $("#errors").slideToggle();
                    setTimeout(function(){
                        $("#errors").slideToggle();
                    }, 5000);
                    $("#errors > div > p").html("Seems like you left the name field blank.");
                }else if($email == null || $email == ""){
                    $("#errors").slideToggle();
                    setTimeout(function(){
                        $("#errors").slideToggle();
                    }, 5000);
                    $("#errors > div > p").html("Seems like you left the email field blank.");
                }else if($budget == null || $budget == ""){
                    $("#errors").slideToggle();
                    setTimeout(function(){
                        $("#errors").slideToggle();
                    }, 5000);
                    $("#errors > div > p").html("Seems like you left the budget field blank.");
                }else if($comment == null || $comment == ""){
                    $("#errors").slideToggle();
                    setTimeout(function(){
                        $("#errors").slideToggle();
                    }, 5000);
                    $("#errors > div > p").html("Seems like you left the comment field blank.");
                }else{
                    $.ajax({
                        type:"post",
                        url: "assets/xhr/mail.php",
                        dataType: "HTML",
                        data: {
                            name: $name,
                            email: $email,
                            website: $website,
                            budget: $budget,
                            comment: $comment
                        },
                        xhrFields: {
                            onprogress: function (e) {
                                if (e.lengthComputable) {
                                    // console.log(e.loaded / e.total * 100 + '%');
                                    console.log(Math.round((e.loaded / e.total) * 100));
                                }
                            }
                        },
                        success: function(response){
                            console.log(response);
                            $("#succuess-errors").slideToggle();
                            setTimeout(function(){
                                $("#succuess-errors").slideToggle();
                            }, 15000);
                        },
                        error: function(jqXHR, textStatus, errorThrown){

                            $("#errors").slideToggle();
                            setTimeout(function(){
                                $("#errors").slideToggle();
                            }, 15000);
                            
                            console.log("textStatus: " + textStatus);
                            console.log("errorThrown: " + errorThrown);

                        }
                    });
                }
            }
            validateform();
            return false;
        });
        

    });
})(jQuery);
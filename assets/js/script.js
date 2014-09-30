(function ($) {
    $(document).ready(function () {

        var contactform = $("#contact");


        contactform.on("submit", function(){

            var name = $("#name").val(),
                email = $("#email").val(),
                website = $("#website").val(),
                budget = $("#budget").val(),
                comment = $("#comment").val();
            
            $.ajax({
                    type:"post",
                    url: "assets/xhr/mail.php",
                    dataType: "HTML",
                    data: {
                        name: name,
                        email: email,
                        website: website,
                        budet: budget,
                        comment: comment
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
            return false;
        });
        

    });
})(jQuery);
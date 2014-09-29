(function ($) {
    $(document).ready(function () {
        var $nfl = $("#nfl section"),
            $div = document.createElement("div");
        $.ajax({
            type:"post",
            url: "nfl.php",
            dataType: "JSON",
            success: function(response){
                
                var $data = response;
                    $htmlvalue = '';
                
                for(i=0; i < $data.length; i++){
                    var $day = $data[i].d,
                        $time = $data[i].t,
                        $eid = $data[i].eid,
                        $quarter = $data[i].q,
                        $home = $data[i].h + $data[i].hnn,
                        $homeScore =$data[i].hs,
                        $oppenent = $data[i].v + $data[i].vnn,
                        $oppenentScore = $data[i].vs,
                        $season = $data[i].gt;
                        $h3 = document.createElement("h3");
                        $h3.innerText = $day;
                        $h3.setAttribute("data-eid", $eid);
                        // $nfl.append($h3);
                     // document.write($season);
                     if ($data[i].h === "BAL") {
                        console.log("hello Ravens");
                     }else if($data[i].h === "WAS"){
                        console.log("hello Redskins!");
                     }
                }
                $nfl.append($div);



            },
            error: function(){
                console.log("error");
            }
        });

    });
})(jQuery);
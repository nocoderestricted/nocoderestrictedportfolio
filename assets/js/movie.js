(function($) {
    $(document).ready(function() {

        var $apikey = 'dk2vzhwrz5g3s73ys2k5zwk3',
            $apiURL = 'http://api.rottentomatoes.com/api/public/v1.0.json?apikey=',
            $topboxoffice = 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?apikey=',
            $topboxofficeSearch = $topboxoffice + $apikey + '&limit=6',
            $movieSearch = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=' + $apikey + '&q=';
            

        var searchmovies = function($query){

            $.ajax({
                url: $movieSearch + encodeURI($query) + '&page_limit=10',
                dataType: 'jsonp',
                success: function(response){
                    console.log(response);
                    var $resultshtml = $("#results"),
                        $moviesearchdata = response.movies,
                        $results = 'YO! I found ' +response.total + ' with the name <span>' + $query + '</span> in the string!';
                        $resultshtml.html(' ');
                        $resultshtml.html($results);

                    $.each($moviesearchdata, function(index, $data){
                        var $searchposter = $data.posters.original,
                            $searchposter = $searchposter.replace("tmb", "pro");
                            $(".searchlist").append('<li><img src="'+$searchposter+'"/></li>')
                        //console.log($searchposter);
                    });
                },
                error: function(){
                    console.log("error");
                }
            });
        };
        $("#moviesearchform").on("submit", function(){
            var $input = $("#moviesearchinput").val();
            if ($input === '' || $input === undefined) {
                console.log("Trying to test me?");
            }else{
                console.log(searchmovies($input));
            }
            
            return false;
        });
        $.ajax({
            url: $topboxofficeSearch,
            dataType: 'jsonp',
            success: function(response){
                

                var $movies = response.movies,
                    $moviehtml = $("#movies");

                
                $.each($movies, function(index, $movie){
                    var $poster = $movie.posters.original,
                        $title = $movie.title,
                        $mpaarating = $movie.mpaa_rating,
                        $runtime = $movie.runtime,
                        $synopsis = $movie.synopsis,
                        $crating = $movie.ratings.critics_rating,
                        $cratings = $movie.ratings.critics_score,
                        $urating = $movie.ratings.audience_rating,
                        $uratings = $movie.ratings.audience_score;
                    
                        $poster = $poster.replace("tmb", "det");
                        $("#movies > .container").append( '<section class="movieTile">'+
                             '<div class="movieinfo">'+
                                '<img src= "'+$poster+'" class="movieImage">'+
                                '<div class="movieabout">'+
                                    '<h2 class="movieTitle fa fa-video-camera">'+$title+'<br/><span class="fa fa-clock-o">Runtime ( '+$runtime+' minutes )</span></h2>'+
                                    '<h3 class="mpaa">MPAA Rating<br/><span>'+$mpaarating+'</span></h3>'+
                                '</div>' +
                                '<div class="score">'+
                                    '<div class="cr-rating">'+
                                        '<h4>Critics Rating:</h4>'+
                                        '<span class="score-rating">'+$crating+': '+$cratings+'%</span>'+
                                    '</div>'+
                                    '<div class="ur-rating">'+
                                        '<h4>User Rating:</h4>'+
                                        '<span class="score-rating">'+$urating+' '+$uratings+'%</span>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</section>');
                });
            },
            error: function(){
                console.log("error");
            }
        });
        
    });
})(jQuery);
$(document).ready(function(){

    $("#movieForm").submit(function(event){
            event.preventDefault();
            var apikey = "61f77f0a96f899da53ac1f48e470fad7";
            //var apikey = "86c0134de858b135203d58484890fec4";
            var movie = $("#movie").val()+"-";
            var movieID = movie.split(".org/movie/")[1].split("-")[0];
            var url = "https://api.themoviedb.org/3/movie/";
    
            $.get(`${url}${movieID}?api_key=${apikey}&language=en-US`, function(data, save){
                basicInfo = data;
            });
    
            $.get(`${url}${movieID}/credits?api_key=${apikey}&language=en-US`, function(data, save){
                Cast = data;
            });
    
            $.get(`${url}${movieID}/videos?api_key=${apikey}&language=en-US`, function(data, save){
                video = data;
            });
    
            $.get(`${url}${movieID}/images?api_key=${apikey}`, function(data, save){
    Images = data;
      console.log(basicInfo);  
      console.log(Cast);  
      console.log(Images); 
      console.log(video); 
      //Cast For
        if (Cast.cast.length >= 9){
            noOfCast = 9;
        } else {
            noOfCast = Cast.cast.length;
        }
        castFor = "";
        castLabel = "";
        for(i=0; i < noOfCast; i++){
        if (Cast.cast[i].profile_path === null){profile = "https://1.bp.blogspot.com/-i1zEh00jCvI/YJqvyttN_FI/AAAAAAAAClo/6P1E7gFGWdYg90-YZEDl2bpisIX6pfLCQCLcBGAsYHQ/s92/1.png"}
        else {profile = Cast.cast[i].profile_path;}
            castFor = `${castFor}
            {
                name: "${Cast.cast[i].name}",
                char: "${Cast.cast[i].character}",
                img: "${profile}"
            },`;
            castLabel = `${castLabel}${Cast.cast[i].name},`;
        }
        $(".hiddent-Con").css("display", "none");
        $(".display-Con").css("display", "block");
        //Gener For
        if (basicInfo.genres.length >= 5){
            noOfGenre = 5;
        } else {
            noOfGenre = basicInfo.genres.length;
        }  
        console.log(noOfGenre);
        genreFor = "";
        labelGenre = "";
        for(i=0; i < noOfGenre; i++){
            genreFor = `${genreFor} "${basicInfo.genres[i].name.replace("Science Fiction", "Sci-Fi")}",`;
            labelGenre = `${labelGenre}${basicInfo.genres[i].name.replace("Science Fiction", "Sci-Fi")},`;
        }  
        genreFor = genreFor+"****";
    
        //BackDrop For
        backFor= "";
        if (Images.backdrops.length >= 9){
            noOfBacks = 9;
        } else {
            noOfBacks = Images.backdrops.length;
        }
        backFor
        for(i=0; i<noOfBacks; i++){
            backFor = `${backFor} "${Images.backdrops[i].file_path}",`;
        }
        backFor = backFor + "****";
    
        //Original language
        if (basicInfo.original_language == "en"){oriLang = "English";} 
            else if (basicInfo.original_language == "te"){oriLang = "Telugu"}
            else if (basicInfo.original_language == "ta"){oriLang = "Tamil"}
            else if (basicInfo.original_language == "ml"){oriLang = "Malayalam"}
            else if (basicInfo.original_language == "es"){oriLang = "Spanish"}
            else if (basicInfo.original_language == "si"){oriLang = "Sinhala"}
            else if (basicInfo.original_language == "fr"){oriLang = "French"}
            else if (basicInfo.original_language == "hi"){oriLang = "Hindi"}
            else if (basicInfo.original_language == "th"){oriLang = "Thai"}
            else if (basicInfo.original_language == "tr"){oriLang = "Turkish"}
            else if (basicInfo.original_language == "kn"){oriLang = "Kannada"}
            else if (basicInfo.original_language == "cn"){oriLang = "Cantonese"}
            else if (basicInfo.original_language == "zh"){oriLang = "Chinese"}
            else if (basicInfo.original_language == "pl"){oriLang = "Polish"}
            else if (basicInfo.original_language == "ru"){oriLang = "Russian"}
            else if (basicInfo.original_language == "sv"){oriLang = "Swedish"}
            else if (basicInfo.original_language == "de"){oriLang = "German"}
            else if (basicInfo.original_language == "it"){oriLang = "Italian"}
            else if (basicInfo.original_language == "ko"){oriLang = "Korean"}
            else if (basicInfo.original_language == "bn"){oriLang = "Bengali"}
        else {oriLang = "Unknown"}
        
        //Movie Link Gen 
        if (dlLinkCount<6){linkT66 = "";}
        if (dlLinkCount<5){linkT55 = "";}
        if (dlLinkCount<4){linkT44 = "";}
        if (dlLinkCount<3){linkT33 = "";}
        if (dlLinkCount<2){linkT22 = "";}
        if (dlLinkCount == 6){
            fileSize = fileSizeFun(document.getElementById("size66").value);
            if (document.getElementById("language66").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language66").value;}
            linkT66 = `{
                        dlLink: ["${document.getElementById("link66A").value}", "${document.getElementById("link66B").value}", "${document.getElementById("link66C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont66").value}",
                        codec: "${document.getElementById("codec66").value}",
                        rip: "${document.getElementById("rip66").value}",
                        resolution: "${document.getElementById("res66").value}",
                        lang: "${movieLang}"
                    },`;
            dlLinkCount = 5;
        }
        if (dlLinkCount == 5){
            fileSize = fileSizeFun(document.getElementById("size55").value);
            if (document.getElementById("language55").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language55").value;}
            linkT55 = `{
                        dlLink: ["${document.getElementById("link55A").value}", "${document.getElementById("link55B").value}", "${document.getElementById("link55C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont55").value}",
                        codec: "${document.getElementById("codec55").value}",
                        rip: "${document.getElementById("rip55").value}",
                        resolution: "${document.getElementById("res55").value}",
                        lang: "${movieLang}"
                    },`;
            dlLinkCount = 4;
        }
        if (dlLinkCount == 4){
            fileSize = fileSizeFun(document.getElementById("size44").value);
            if (document.getElementById("language44").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language44").value;}
            linkT44 = `{
                        dlLink: ["${document.getElementById("link44A").value}", "${document.getElementById("link44B").value}", "${document.getElementById("link44C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont44").value}",
                        codec: "${document.getElementById("codec44").value}",
                        rip: "${document.getElementById("rip44").value}",
                        resolution: "${document.getElementById("res44").value}",
                        lang: "${movieLang}"
                    },`;
            dlLinkCount = 3;
        }
        if (dlLinkCount == 3){
            fileSize = fileSizeFun(document.getElementById("size33").value);
            if (document.getElementById("language33").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language33").value;}
            linkT33 = `{
                        dlLink: ["${document.getElementById("link33A").value}", "${document.getElementById("link33B").value}", "${document.getElementById("link33C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont33").value}",
                        codec: "${document.getElementById("codec33").value}",
                        rip: "${document.getElementById("rip33").value}",
                        resolution: "${document.getElementById("res33").value}",
                        lang: "${movieLang}"
                    },`;
            dlLinkCount = 2;
        }
        if (dlLinkCount == 2){
            fileSize = fileSizeFun(document.getElementById("size22").value);
            if (document.getElementById("language22").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language22").value;}
            linkT22 = `{
                        dlLink: ["${document.getElementById("link22A").value}", "${document.getElementById("link22B").value}", "${document.getElementById("link22C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont22").value}",
                        codec: "${document.getElementById("codec22").value}",
                        rip: "${document.getElementById("rip22").value}",
                        resolution: "${document.getElementById("res22").value}",
                        lang: "${movieLang}"
                    },`;
            dlLinkCount = 1;
        }
        if (dlLinkCount == 1){
            fileSize = fileSizeFun(document.getElementById("size11").value);
            if (document.getElementById("language11").value == ""){movieLang = oriLang;}
            else {movieLang = document.getElementById("language11").value;}
            linkT11 = `{
                        dlLink: ["${document.getElementById("link11A").value}", "${document.getElementById("link11B").value}", "${document.getElementById("link11C").value}"],
                        size: "${fileSize}",
                        exces: "${document.getElementById("exCont11").value}",
                        codec: "${document.getElementById("codec11").value}",
                        rip: "${document.getElementById("rip11").value}",
                        resolution: "${document.getElementById("res11").value}",
                        lang: "${movieLang}"
                    },`;
        }
        //Movie Link Gen End
        //Video Definder 
        if (video.results.length === undefined || video.results.length == 0){videoTVar = "NoTVid"; videoVar = "NoVid";}
        else {videoTVar = video.results[0].type; videoVar = video.results[0].key}
      finalMovieInfo = `<ZZ^^^ZZ>
    iruPCMInfo = {
        title: "${basicInfo.title}",
        year: "${basicInfo.release_date.split("-")[0]}",
        genre: [${genreFor.replace(",****","")}],
        cTypeOfPost: "movie",
        releaseInfo: '${basicInfo.release_date}',
        poster: "${basicInfo.poster_path}",
        backdrop: [${backFor.replace(",****", "")}],
        trailer: ["${videoTVar}", "${videoVar}",],
        rating: "${basicInfo.vote_average}",
        vote_count: "${basicInfo.vote_count}",
        runtime: "${basicInfo.runtime}",
        tagLine: "${basicInfo.tagline}",
        language: "${oriLang}",
        imdb: "${basicInfo.imdb_id}",
        tmdb: "${basicInfo.id}",
        smallDes: "${basicInfo.overview}",
        cast: [${castFor}],
        dlList: [${linkT11}${linkT22}${linkT33}${linkT44}${linkT55}${linkT66}]
    };
</ZZ^^^ZZ>
    <img style="display:none;" border="0" data-original-height="900" data-original-width="600" height="320" src="https://www.themoviedb.org/t/p/w300${basicInfo.poster_path}" />`;
    
    finalLabel = `${basicInfo.title.slice(0,1)},${oriLang},${basicInfo.release_date.split("-")[0]},${labelGenre}${castLabel}`;
    titleOfPG = `${basicInfo.title} (${basicInfo.release_date.split("-")[0]})`;
      document.getElementById("outPut").value = finalMovieInfo.replace("ZZ^^^ZZ", "script").replace("ZZ^^^ZZ", "script");
      document.getElementById("labels").value = finalLabel;
      document.getElementById("titleOfMovie").value = titleOfPG;
            });
        });   
    });

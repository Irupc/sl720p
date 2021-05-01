<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TG Code Maker</title>
</head>
<style>
    :root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace
}

*,::after,::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fff;
    text-align: left;
    background-color: #000
}
h1,h2,h3,h4,h5,h6 {
    margin-top: 0;
    margin-bottom: .5rem
}
label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}
button,input,optgroup,select,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,input {
    overflow: visible
}

button,select {
    text-transform: none
}
[type=button],[type=reset],[type=submit],button {
    -webkit-appearance: button
}

[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled) {
    cursor: pointer
}
.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2
}

.h1,h1 {
    font-size: 2.5rem
}
.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}
@media (min-width: 576px) {
    .container,.container-sm {
        max-width:540px
    }
}

@media (min-width: 768px) {
    .container,.container-md,.container-sm {
        max-width:720px
    }
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
.form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1
}
.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}
.form-group {
    margin-bottom: 1rem
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
.btn:hover {
    color: #212529;
    text-decoration: none
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer
}
.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}
textarea, .form-control{
    background-color: #212529;
    color: white;
    place-content: #ffffff;
    border-radius: 1%;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: yellow;
    opacity: 1; /* Firefox */
  }
  
  :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: yellow;
  }
  
  ::-ms-input-placeholder { /* Microsoft Edge */
    color: yellow;
  }
</style>
<body align="center" bgcolor="black" text="white">
    <div class="container">
        <h1 class="text-center mt-5">IruPC Telegram Code Creator</h1>
        <form id="movieForm" autocomplete="off">
            <div class="form-group">
                <label for="Movie">Use TMDB.org</label>
                <input class="form-control" type="text" id="movie" placeholder="TMDB Link...">
            </div>
            <div class="form-group">
                <button class="btn btn-danger btn-block">Get the Code</button>
            </div>
        </form>
    </div>
    <center>
        <textarea style="display: none;" textarea rows="15" cols="70" id="result"></textarea>
        <textarea class="mainCodeOut" textarea rows="15" cols="70" id="result_final" placeholder="Click on Get Code Button to Generate Code"></textarea>
        <textarea style="display: none;" textarea rows="15" cols="70" id="result_lst"></textarea>
<br>
        <textarea name="IruPCLink" id="ipLinkBtn" cols="70" rows="1" placeholder="Past URL of IruPC"></textarea><br>
        <p id="copied-out"></p>
        <button onclick="genAndCopyBtn()" class="btn btn-danger btn-block">Get URL Buttons</button><br>
        <input type="radio" id="movieID" name="UrlType" checked>Movie</input>
        <input type="radio" id="tvSeriesID" name="UrlType">Series</input>
        <input type="radio" id="episodeID" name="UrlType">Episode</input>
        <br><br>
        <div id="imageOFMovie"></div>
    </center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function genAndCopyBtn(){
    inputURL = document.getElementById("ipLinkBtn").value;
    if (document.getElementById("movieID").checked){
    outputLink = `📥 Download Movie - ${inputURL}
🖥 Watch Online - ${inputURL}`;
    }
    if (document.getElementById("tvSeriesID").checked){
    outputLink = `📥 Download Series - ${inputURL} | 🖥 Watch Online - ${inputURL}`;
    }
    if (document.getElementById("episodeID").checked){
    outputLink = `📥 Download Episode - ${inputURL} | 🖥 Watch Online - ${inputURL}`;
    }
    document.getElementById("ipLinkBtn").value = outputLink;
    var copyText = document.getElementById("ipLinkBtn");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    document.getElementById("copied-out").innerHTML = "Copied";
    //window.location.reload();
}
    $(document).ready(function(){

        var apikey = "61f77f0a96f899da53ac1f48e470fad7";

        $("#movieForm").submit(function(event){
            event.preventDefault();

            var movie = $("#movie").val()+"-";
            var man = movie.split(".org/movie/")[1];
            var movieID = man.split("-")[0];

            var result = "";

            var url = "https://api.themoviedb.org/3/movie/";
            $.ajax({
                method:'GET',
                url:url+movieID+"?api_key="+apikey+"&language=en-US",
                success:function(data){
                    console.log(data);
                var genreIP = "";
            for(i=0;i<data.genres.length;i++){
                var genreIP = genreIP+" #"+data.genres[i].name;
            }
            var genreIP = genreIP.replace("Science Fiction", "Sci_Fi");
            var runtime = data.runtime;
            console.log(runtime);
            if (runtime < 60){
                final_min = runtime+"m";
                final_h = "";
            } else {
                final_h = (runtime/60|0)+"h";
                final_min = (runtime%60)+"m";
            }
            var oriLang = "";
            if (data.original_language == "en"){oriLang = "English";} 
            else if (data.original_language == "te"){oriLang = "Telugu"}
            else if (data.original_language == "ta"){oriLang = "Tamil"}
            else if (data.original_language == "ml"){oriLang = "Malayalam"}
            else if (data.original_language == "es"){oriLang = "Spanish"}
            else if (data.original_language == "si"){oriLang = "Sinhala"}
            else if (data.original_language == "fr"){oriLang = "French"}
            else if (data.original_language == "hi"){oriLang = "Hindi"}
            else if (data.original_language == "th"){oriLang = "Thai"}
            else if (data.original_language == "tr"){oriLang = "Turkish"}
            else if (data.original_language == "kn"){oriLang = "Kannada"}
            else if (data.original_language == "cn"){oriLang = "Cantonese"}
            else if (data.original_language == "zh"){oriLang = "Chinese"}
            else if (data.original_language == "pl"){oriLang = "Polish"}
            else if (data.original_language == "ru"){oriLang = "Russian"}
            else if (data.original_language == "sv"){oriLang = "Swedish"}
            else if (data.original_language == "de"){oriLang = "German"}
            else if (data.original_language == "it"){oriLang = "Italian"}
            else if (data.original_language == "ko"){oriLang = "Korean"}
            else if (data.original_language == "bn"){oriLang = "Bengali"}
            else {oriLang = "Unknown"}
            document.getElementById("imageOFMovie").innerHTML = "<img src=https://www.themoviedb.org/t/p/w600_and_h900_bestv2/"+data.poster_path+" alt=&quot;image&quot;>";
result_English = `🎬 ${data.title} #${data.release_date.split("-")[0]}
🔥 TMDB ---» ${data.vote_average*10}%
⏱ ${final_h} ${final_min}
⚖️ ${genreIP}
🔊 #${oriLang}
`;
result_Other = `🎬 ${data.title} #${data.release_date.split("-")[0]}
🔥 TMDB --» ${data.vote_average*10}%
⏱ ${final_h} ${final_min}
⚖️${genreIP}
🔊 #${oriLang}
💎 ${data.original_title}
`;
                if (data.spoken_languages[0].english_name == "English"){
                    final_res = result_English;
                } else {
                    final_res = result_Other;
                }
result_lst = `
🔰 ${data.title} (${data.release_date.split("-")[0]}) was added to IruPC.net
❖━ @IruPC ━❖`;
                    $("#result").html(final_res);
                    $("#result_lst").html(result_lst);
                }
                
            })
        })
    })

$(document).ready(function(){

    var apikey = "61f77f0a96f899da53ac1f48e470fad7";

    $("#movieForm").submit(function(event){
        event.preventDefault();

        var movie = $("#movie").val()+"-";
        var man = movie.split(".org/movie/")[1];
        var movieID = man.split("-")[0];

        var result = "";

        var url = "https://api.themoviedb.org/3/movie/";
        $.ajax({
            method:'GET',
            url:url+movieID+"/credits?api_key="+apikey+"&language=en-US",
            success:function(data_cast){
                console.log(data_cast);
            var noOfCastmod = "";
            var castIP = "";
            if (data_cast.cast.length >= 9){
                noOfCast = 9;
            } else {
                noOfCast = data_cast.cast.length;
            }
        for(i=0; i < noOfCast; i++){
            var castIP = "#"+data_cast.cast[i].name+"@";
            noOfCastmod = castIP.replace(/'/g, "_").replace(/\. /, "_").replace(/\./g, "_").replace(/ /g, "_").replace(/\@/g, " ") + noOfCastmod;
        }
pre_value = document.getElementById("result").value;
aft_value = document.getElementById("result_lst").value;
result = `${pre_value}
👉 Top Billed Cast 👇🏿
${noOfCastmod}
${aft_value}`;
                $("#result_final").html(result);
                copy_data();
            }
            
        });
    });
});
function copy_data() {
    var copyText = document.getElementById("result_final");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
</script>
</html>

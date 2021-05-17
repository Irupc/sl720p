
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="style.css" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    
</head>
<style>
    .set{display: none;}
    textarea#link11A, textarea#link22A, textarea#link33A, textarea#link44A, textarea#link55A, textarea#link66A {
    display: none;
}
</style>
<body align="center">
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
    <div class="display-Con">
        <textarea id="titleOfMovie" name="finalc" cols="30" rows="2"></textarea>
        <textarea name="outPut" id="outPut" cols="30" rows="10"></textarea>
        <textarea id="labels" name="finalx" cols="30" rows="5"></textarea><br><br>
        <button id="titleCopy" onclick="copyText('titleOfMovie')" class="btn btn-danger btn-block">Copy Title</button>
        <button onclick="copyText('outPut')" class="btn btn-danger btn-block">Copy Content</button>
        <button onclick="copyText('labels')" class="btn btn-danger btn-block">Copy Labels</button>
        <br><br><br>
        <textarea name="error" id="error" cols="30" rows="10"></textarea>
    </div>
    <div id="errorRep"></div>
<div class="hiddent-Con">
        <button id="btn11">1 Links</button>
        <button id="btn22">2 Links</button>
        <button id="btn33">3 Links</button>
        <button id="btn44">4 Links</button>
        <button id="btn55">5 Links</button>
        <button id="btn66">6 Links</button>
    <div class="set11" id="set11">
        <textarea id="link11A" cols="32" rows="3" placeholder="Download Link 11A"></textarea><br>
        <textarea id="link11B" cols="32" rows="3" placeholder="@tgstreamerbot - 1"></textarea><br>
        <textarea id="link11C" cols="32" rows="3" placeholder="@irupc_sever_bot - 1"></textarea><br>
        <select id="exCont11">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res11">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip11">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec11">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size11" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language11" cols="21" rows="1" placeholder="Custom Language" name="langInput"></textarea>
    </div>
    <br><br><br>
    <div class="set" id="set22">
        <textarea id="link22A" cols="32" rows="3" placeholder="Download Link 22A"></textarea><br>
        <textarea id="link22B" cols="32" rows="3" placeholder="@tgstreamerbot - 2"></textarea><br>
        <textarea id="link22C" cols="32" rows="3" placeholder="@irupc_sever_bot - 2"></textarea><br>
        <select id="exCont22">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res22">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip22">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec22">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size22" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language22" cols="21" rows="1" placeholder="Custom Language" name="langInput"></textarea>
    </div>
    <br><br><br>
    <div class="set" id="set33">
        <textarea id="link33A" cols="32" rows="3" placeholder="Download Link 33A"></textarea><br>
        <textarea id="link33B" cols="32" rows="3" placeholder="@tgstreamerbot - 3"></textarea><br>
        <textarea id="link33C" cols="32" rows="3" placeholder="@irupc_sever_bot - 3"></textarea><br>
        <select id="exCont33">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res33">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip33">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec33">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size33" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language33" cols="21" rows="1" placeholder="Custom Language" name="langInput"></textarea>
    </div>
    <br><br><br>
    <div class="set" id="set44">
        <textarea id="link44A" cols="32" rows="3" placeholder="Download Link 44A"></textarea><br>
        <textarea id="link44B" cols="32" rows="3" placeholder="@tgstreamerbot - 4"></textarea><br>
        <textarea id="link44C" cols="32" rows="3" placeholder="@irupc_sever_bot - 4"></textarea><br>
        <select id="exCont44">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res44">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip44">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec44">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size44" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language44" cols="21" rows="1" placeholder="Custom Language" name="langInput"></textarea>
    </div>
    <br><br><br>
    <div class="set" id="set55">
        <textarea id="link55A" cols="32" rows="3" placeholder="Download Link 55A"></textarea><br>
        <textarea id="link55B" cols="32" rows="3" placeholder="@tgstreamerbot - 5"></textarea><br>
        <textarea id="link55C" cols="32" rows="3" placeholder="@irupc_sever_bot - 5"></textarea><br>
        <select id="exCont55">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res55">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip55">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec55">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size55" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language55" cols="21" rows="1" placeholder="Custom Language" name="langInput"></textarea>
    </div>
    <br><br><br>
    <div class="set" id="set66">
        <textarea id="link66A" cols="32" rows="3" placeholder="Download Link 66A"></textarea><br>
        <textarea id="link66B" cols="32" rows="3" placeholder="@tgstreamerbot - 6"></textarea><br>
        <textarea id="link66C" cols="32" rows="3" placeholder="@irupc_sever_bot - 6"></textarea><br>
        <select id="exCont66">
            <option value="">No Special</option>
            <option value="10-bit">10-bit</option>
            <option value="2CH">2CH</option>
            <option value="6CH">6CH</option>
            <option value="HBOMAX">HBOMAX</option>
            <option value="PSA">PSA</option>
            <option value="IMAX">IMAX</option>
            <option value="HC-Esub">HC-Esub</option>
            <option value="Esub">Esub</option>
            <option value="Low Quality">Low Quality</option>
        </select>
        <select id="res66">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
            <option value="540p">540p</option>
            <option value="360p">360p</option>
            <option value="240p">240p</option>
        </select>
        <select id="rip66">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
            <option value="">NO Rip</option>
        </select>
        <select id="codec66">
            <option value="x265">x265</option>
            <option value="x264">x264</option>
            <option value="Xvid">Xvid</option>
            <option value="MPEG">MPEG</option>
        </select>
        <textarea id="size66" cols="12" rows="1" placeholder="File Size 1"></textarea><br><br>
        <textarea id="language66" cols="21" rows="1" placeholder="Custom Language" name="langInput6"></textarea>
    </div>
</div>
    </center>
</body>
<script>
function fileSizeFun(value){
    if (value > 999){
        value = (value/1000).toFixed(2);
        return value+"GB";
    } else {
        return value+"MB";
    }
}
dlLinkCount = 1;
$("#btn22,#btn33,#btn44,#btn55,#btn66").click(function(){$("#set22").css("display", "block");});
$("#btn33,#btn44,#btn55,#btn66").click(function(){$("#set33").css("display", "block");});
$("#btn44,#btn55,#btn66").click(function(){$("#set44").css("display", "block");});
$("#btn55,#btn66").click(function(){$("#set55").css("display", "block");});
$("#btn66").click(function(){$("#set66").css("display", "block");});

$("#btn11").click(function(){$("#set22,#set33,#set44,#set55,#set66").css("display", "none"); dlLinkCount = 2;});
$("#btn22").click(function(){$("#set33,#set44,#set55,#set66").css("display", "none"); dlLinkCount = 2;});
$("#btn33").click(function(){$("#set44,#set55,#set66").css("display", "none"); dlLinkCount = 3;});
$("#btn44").click(function(){$("#set55,#set66").css("display", "none"); dlLinkCount = 4;});
$("#btn55").click(function(){$("#set66").css("display", "none"); dlLinkCount = 5;});
$("#btn66").click(function(){dlLinkCount = 6;});

function copyText(value){
    var copyText = document.getElementById(value);
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
$("#titleCopy").click(function(){
    contenFt = document.getElementById("outPut").value;
    if (contenFt.indexOf("NoVid")>-1){err1 = "No Trailer | ";} else {err1 = "";}
    if (contenFt.indexOf(`poster: "null"`)>-1){err2 = "No Poster | ";} else {err2 = "";}
    if (contenFt.indexOf(`backdrop: [****]`)>-1){err3 = "No BackDrop | ";} else {err3 = "";}
    if (contenFt.indexOf("cast: [],")>-1){err4 = "No Cast | ";} else {err4 = "";}
    if (contenFt.indexOf(`language: "Unknown",`)>-1){err5 = "No language | ";} else {err5 = "";}
    document.getElementById("error").value = `${err1}${err2}${err3}${err4}${err5}`;
});
</script>

</html>

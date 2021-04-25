<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Creator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<style>
    #outPut-text{display: none;}
</style>
<body align="center">
    <div id="input-Text"><br><br>
        <input placeholder="Link Number" type="text" id="linkNum"></input><br><br>
        <input placeholder="Link Letter" type="text" id="LinkLett"></input><br><br>
        <textarea id="link1A" cols="33" rows="3" placeholder="Download Link 1A"></textarea><br>
        <textarea id="link1B" cols="33" rows="3" placeholder="Download Link 1B"></textarea><br>
        <select id="BigText1">
            <option value="x264 Codec Video">x264 Codec Video</option>
            <option value="Warning! This is x265 (HEVC) Codec">Warning! This is x265 (HEVC) Codec</option>
            <option value="Warning! This is x265 (10-bit) Codec">x265-10bit</option>
            <option value="Xvid Codec Video">Xvid Codec Video</option>
            <option value="Warning! <blink>Low Resolution</blink> video file">Warning! low resolution Video</option>
            <option value="Warning! This is CamRip File">Warning! This is CamRip File</option>
        </select><br>
        <select id="res1">
            <option value="720p">720p</option>
            <option value="480p">480p</option>
            <option value="1080p">1080p</option>
            <option value="2160p">2160p</option>
        </select>
        <select id="rip1">
            <option value="BluRay">BluRay</option>
            <option value="WebRip">WebRip</option>
            <option value="WebDL">WebDL</option>
            <option value="HDRip">HDRip</option>
            <option value="DVD">DVD</option>
            <option value="Cam">Cam</option>
        </select>
        <textarea id="size1" cols="11" rows="2" placeholder="File Size 1"></textarea>
        <br><button id="copyTitle">Generate</button>
    </div>
    <div id="outPut-text">
        <textarea name="outPut-HTML" id="outHTML" cols="30" rows="5"></textarea>
        <textarea name="outPut-JS" id="outJS" cols="30" rows="5"></textarea>
    </div>
</body>
<script>
        $("#copyTitle").click(function(){
            linkNumeber = document.getElementById("linkNum").value;
            LinkLetter = document.getElementById("LinkLett").value;
    htmlOfLink1 = ""; pop_text1 = "";
    scriptOfLink1 = ""; displayVar1="";
    
        var linkA1 = $("#link1A").val();
        var linkB1 = $("#link1B").val();
        var BigText1 = $("#BigText1").val();
        var res1 = $("#res1").val();
        var rip1 = $("#rip1").val();
        var size1 = $("#size1").val();
        if (BigText1 == "x264 Codec Video"){
            smallText1 = "---";
            pop_text1 = "togglePopupa";
            codecOuter1 = "x264";
        } else if (BigText1 == "Warning! This is x265 (HEVC) Codec"){
            smallText1 = "Some &lt;b&gt;Televisions&lt;/b&gt; may not be able to play this video";
            pop_text1 = "togglePopupaa";
            codecOuter1 = "x265";
        } else if (BigText1 == "Warning! This is x265 (10-bit) Codec"){
            smallText1 = "Some &lt;b&gt;Televisions&lt;/b&gt; may not be able to play this video";
            pop_text1 = "togglePopupaa";
            codecOuter1 = "x265-10bit";
        } else if (BigText1 == "Xvid Codec Video"){
            smallText1 = "---";
            pop_text1 = "togglePopupa";
            codecOuter1 = "Xvid";
        } else if(BigText1 == "Warning! <blink>Low Resolution</blink> video file"){
            smallText1 = "<b>Higher resolutions</b> are also Available</b>";
            pop_text1 = "togglePopupaa";
            codecOuter1 = "x264";
        } else if (BigText1 == "Warning! This is CamRip File"){
            smallText1 = "Low Quality!!!";
            pop_text1 = "togglePopupaa";
            codecOuter1 = "CamRip";
        }
        if (res1 == "720p"){
            resOuter1 = "HD";
        } else if (res1 == "1080p"){
            resOuter1 = "FullHD";
        } else if (res1 == "2160p"){
            resOuter1 = "4K";
        } else {resOuter1 = "SD";}
        if (linkB1 == ""){displayVar1 = "none";} else {displayVar1 = "block";}
    //Script Code of Link 1
    scriptOfLink1 = `    resolution${linkNumeber} = "`+res1+`";
    size${linkNumeber} = "`+size1+`";
    ripInfo${linkNumeber} = "`+rip1+`";
    downloadUrl${LinkLetter}1 = "`+linkA1+`";
    downloadUrl${LinkLetter}2 = "`+linkB1+`";
    $("#iruPCdl${linkNumeber}").click(function(){document.getElementById("url2").style.display = "${displayVar1}";});

`; 
    //Html Code of Link 1
    htmlOfLink1 = `<a onclick="s01Info1Id(resolution${linkNumeber}, size${linkNumeber}, ripInfo${linkNumeber}, '`+BigText1+`', '`+smallText1+`')">
        <button id="iruPCdl${linkNumeber}" class="ipdbtn" onclick="`+pop_text1+`(' -', downloadUrl${LinkLetter}1, downloadUrl${LinkLetter}2)">`+codecOuter1+` | `+resOuter1+`</button>
    </a>
    `;
document.getElementById("outHTML").value = htmlOfLink1;
document.getElementById("outJS").value = scriptOfLink1;
document.getElementById("outPut-text").style.display = "block";
});
    
</script>
</html>

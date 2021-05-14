
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series Code Generator</title>
</head>
<style>
#WebCodeHTML{display:none;}
</style>
<body align="center">
    <input type="text" id="noOfSeason2s" placeholder="Number of Season"></input><br>
    <input type="text" id="noOfSeasons" placeholder="Number of Season +1"></input><br>
    <input type="text" id="noOfEpisodes" placeholder="Number of Episodes"></input><br>
    <textarea name="LinksX" id="linksX" cols="30" rows="10" placeholder="Link X"></textarea>
    <textarea name="LinksY" id="linksY" cols="30" rows="10" placeholder="Link Y"></textarea><br>
    <textarea style="display:none;" name="outLink1s" id="outLink1s" cols="30" rows="10"></textarea><br>
    <textarea style="display:none;" name="outLink2s" id="outLink2s" cols="30" rows="10"></textarea><br>
    <!--<textarea name="outLinks" id="outLinks" cols="30" rows="10"></textarea><br><br>-->
    <textarea name="WebCodeHTML" id="WebCodeHTML" cols="30" rows="10" placeholder="HTML Code Out"></textarea>
    <textarea name="finalX" id="finalX" cols="30" rows="10" placeholder="Link Out"></textarea><br><br>
    <textarea style="display:none;" name="defHTML" id="defHTML" cols="30" rows="10" placeholder="Link Out"></textarea><br>
    <textarea style="display:none;" name="defJS" id="defJS" cols="30" rows="10" placeholder="Link Out"></textarea><br>
    <button onclick="clickBtn()">Click Me</button><br><br>
    <input type="radio" id="x264" name="rad">x264 Codec
    <input type="radio" id="x265" name="rad" checked>x265 Codec
</body>
<script>
    function clickBtn(){
        console.log("huh");
        inputLinksX = document.getElementById("linksX").value.split("https://");
        inputLinksY = document.getElementById("linksY").value.split("https://");
        noOfEpi = document.getElementById("noOfEpisodes").value;
        noOfSeas = document.getElementById("noOfSeasons").value;
        noOfSea2s = document.getElementById("noOfSeason2s").value;

        outPut = "";
        outPutHTML = "";
        popupType = "";
        for(i=1; i <= noOfEpi; i++){
            numBer = "";
            if (i<10){numBer = "0"+i;}
            else {numBer = i;}
            outPut = `${outPut}
<a href="https://${inputLinksX[i]}">S${noOfSea2s}E${numBer}x</a> |`;
        }
        document.getElementById("outLink1s").value = `<p style="text-align: center;"><span style="font-size: 18pt;"><strong>Season ${noOfSea2s}</strong></span></p>`+outPut.split(`
`);
    if (document.getElementById("x264").checked){popupType = "togglePopupa";}
    else {popupType = "togglePopupaa";}
    for(i=1; i <= noOfEpi; i++){
            numBe2r = "";
            if (i<10){numBe2r = "0"+i;}
            else {numBe2r = i;}
            outPutHTML = `${outPutHTML}
        <button class="epibutton" onclick="${popupType}(' ${numBe2r}', s${noOfSeas}e${numBe2r}x, s${noOfSeas}e${numBe2r}y)"><b>Episode ${i}

</b></button>`;
        }
    if (document.getElementById("x264").checked){codecType = "x264";}
    else {codecType = "x265";}
        document.getElementById("WebCodeHTML").value = 
`<div id="irupcS${noOfSeas.split("0")[1]}" class="target">
    <h2><b><span style="color: red;">Season ${noOfSeas}</span></b></h2>
    <div class="grid-container">
      <div></div>
      <div class="codecIs${codecType}"></div>
      <div class="qualityIs720p"></div>
      <div></div>
    </div>
    <a onclick="s01Info1Id(s${noOfSeas}Res, s${noOfSeas}Size, s${noOfSeas}Rip, s${noOfSeas}Msg1, s${noOfSeas}Msg2)">${outPutHTML}
    </a>
</div>`;
    numBe3r = "";
    outPutYY = "";
        for(i=1; i <= noOfEpi; i++){
            numBe3r = "";
            if (i<10){numBe3r = "0"+i;}
            else {numBe3r = i;}
            outPutYY = `${outPutYY}
<a href="https://${inputLinksY[i]}">S${noOfSeas}E${numBe3r}</a> |`;
        }
    document.getElementById("outLink2s").value = outPutYY.split(`
`);
    document.getElementById("finalX").value = document.getElementById("outLink1s").value.replace(/,"/g, `"`).replace(/,/g, `
`)+`

<p style="text-align: center;"><span style="font-size: 18pt;"><strong>Season ${noOfSeas}</strong></span></p>`+ document.getElementById("outLink2s").value.replace(/,"/g, `"`).replace(/,/g, `
`);
    }
</script>
</html>

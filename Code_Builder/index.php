
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <script src="maincode.js"></script>
    <link href='styles.css' rel='stylesheet' type='text/css'/>
</head>
<body>
<center>
    <!--<button id="windowopenBtn" onclick="showSource()">Source Code Founder</button>
    <button id="codegeneratorBtn" onclick="showCode()">Code Generator</button>
    <br><br>-->
    <div id="sourceFounder">
        <textarea rows="3" cols="60" id="webUrl" placeholder="Past Source Code from tmdb.org Movie Page. And hit of Generate Button"></textarea>
        <br><button id="windowOpen" onclick="windowOpenOnClink()">Show Source Code</button>
        <br><br>
    </div>
    <div id="codeGen">
        <textarea rows="20" cols="60" id="mainSource" placeholder="Past Source Code from tmdb.org Movie Page. And hit of Generate Button"></textarea>
        <br><button onclick="genNow()">Click to Generate</button>
    <br><br>
    <!--<button type="button" onclick="copy_data(select_txt)">copy</button><br>-->
    <div id="select_txt">Click on Generate Button. Then Data will Shown Here</div>
    <div id="urlBtnGen">
        <textarea rows="3" cols="50" id="irupcLink" placeholder="Past the URL from IruPC.net"></textarea>
        <br><button onclick="getUrlBtn()">Click get URL Btns</button>
    <br><br>
    <div id="imgURLid">Image URL Will Add Here</div>
    <div id="imgURLview">Image URL Will Add Here</div>
    </div>
</center>
</body>
<script>
indexVar = "chrome";
function copy_data(containerid) {
  var range = document.createRange();
  range.selectNode(containerid); //changed here
  window.getSelection().removeAllRanges(); 
  window.getSelection().addRange(range); 
  document.execCommand("copy");
  window.getSelection().removeAllRanges();
  var textInTextArea = document.getElementById("webUrl").value;
  var textInIruPCArea = document.getElementById("irupcLink").value;
  if (indexVar == "tg" && textInTextArea != "") {
    document.getElementById("select_txt").innerHTML = "Text Copied!!! Just Past on Telegram";
  } else if (indexVar == "chrome" && textInTextArea != ""){
    document.getElementById("select_txt").innerHTML = "Text Copied!!! Just Past it on Chrome New Tab";
  } else if (textInIruPCArea != "") {
    document.getElementById("select_txt").innerHTML = "Past Copied text as URL btns";
  } else {
    document.getElementById("select_txt").innerHTML = "Just Insert Valid URL of tmdb.org Movie Page";
  }
}
function windowOpenOnClink(){
    var url = document.getElementById("webUrl").value;
    document.getElementById("select_txt").innerHTML = "view-source:"+url;
}
function showSource(){
    document.getElementById("sourceFounder").style.display='block';
    document.getElementById("codeGen").style.display='none';
}
function showCode(){
    document.getElementById("codeGen").style.display='block';
    document.getElementById("sourceFounder").style.display='none';
    indexVar = "tg";
}
function getUrlBtn(){
    var urlSource = document.getElementById("irupcLink").value;
    document.getElementById("select_txt").innerHTML = "📥 Download Movie - "+ urlSource+"<br>🖥 Watch Online - " + urlSource;
    copy_data(select_txt);
    document.getElementById("irupcLink").value = "";
}
</script>
</html>

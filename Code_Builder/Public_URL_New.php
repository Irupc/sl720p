<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Soul Link Creator</title>
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
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", 

"Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    *,
    ::after,
    ::before {
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
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI 

Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #fff;
        text-align: left;
        background-color: #000
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
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

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2
    }

    .h1,
    h1 {
        font-size: 2.5rem
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width: 576px) {

        .container,
        .container-sm {
            max-width: 540px
        }
    }

    @media (min-width: 768px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 720px
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
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
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
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
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

    textarea,
    .form-control {
        background-color: #212529;
        color: white;
        place-content: #ffffff;
        border-radius: 1%;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: yellow;
        opacity: 1;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: yellow;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: yellow;
    }
</style>

<body>
    <center><br>
        <h1 class="text-center mt-5">Download Links</h1>
        <input type="text" id="Episodes" style="background-color:black; color: blanchedalmond;" placeholder="No Of Epis + 1"><br><br>
        <textarea name="Input" id="Input" cols="30" rows="5" placeholder="Input the Link from @tgstreamerbot"></textarea><br>
        <textarea name="Output" id="Output" cols="30" rows="5" placeholder="Output will Appear here"></textarea><br>
        <input type="text" id="fileSize" style="background-color:black; color: blanchedalmond;" placeholder="File Size"><br><br>
        <button class="btn btn-danger btn-block" onclick="startWorking()">Single Link</button> | <button class="btn btn-danger btn-block" onclick="clickMe()">TV 

Series</button>
    </center>
</body>
<script>
    function startWorking() {
        windowURL = document.getElementById("Input").value.replace("irupc-net.herokuapp.com", "dl.irupc.xyz");
        clickMeBtn(windowURL);
    }

    function clickMeBtn(windowURL) {
        fileSize = document.getElementById("fileSize").value
        indexOfSever = windowURL.split("/")[2];
        fileName = windowURL.split("search?q=")[1];
        if (indexOfSever == "dl.irupc.xyz") {
            urlOfSever = "/0:/";
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "tgstreamerbot.glitch.me") {
            urlOfSever = "/1:/"; //@tgstreamerbot
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "url.moviessquad.com:8080") {
            urlOfSever = "/2:/"; //@PublicURL_bot
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "filestolink.herokuapp.com") {
            urlOfSever = "/3:/"; //@filestolinkebot
            fileName = "";
            fileName = windowURL.split("/")[4];
        } else if (indexOfSever == "maxx-direct-download-bot.herokuapp.com") {
            urlOfSever = "/4:/"; //@Files2LinkProBot
            fileName = "";
            fileName = windowURL.split("/")[3];
        }
        realNumbers = numberVar.replace(/1/g, "r").replace(/2/g, "c").replace(/3/g, "y").replace(/4/g, "j").replace(/5/g, "p").replace(/6/g, "q").replace(/7/g, "k").replace

(/8/g, "a").replace(/9/g, "t").replace(/0/g, "z");

        document.getElementById("Output").value = `https://darksoul.irupc.net${urlOfSever}${realNumbers}/search_q=${fileName}-iRuPC.LInKs=${fileSize}`;

        var copyText = document.getElementById("Output");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function clickMeBtnSec(windowURL) {
        fileSize = document.getElementById("fileSize").value
        indexOfSever = windowURL.split("/")[2];
        fileName = windowURL.split("search?q=")[1];
        if (indexOfSever == "dl.irupc.xyz") {
            urlOfSever = "/0:/";
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "tgstreamerbot.glitch.me") {
            urlOfSever = "/1:/"; //@tgstreamerbot
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "url.moviessquad.com:8080") {
            urlOfSever = "/2:/"; //@PublicURL_bot
            fileName = windowURL.split("/")[4];
            numberVar = windowURL.split("/")[3];
        } else if (indexOfSever == "filestolink.herokuapp.com") {
            urlOfSever = "/3:/"; //@filestolinkebot
            fileName = "";
            fileName = windowURL.split("/")[4];
        } else if (indexOfSever == "maxx-direct-download-bot.herokuapp.com") {
            urlOfSever = "/4:/"; //@Files2LinkProBot
            fileName = "";
            fileName = windowURL.split("/")[3];
        }
        realNumbers = numberVar.replace(/1/g, "r").replace(/2/g, "c").replace(/3/g, "y").replace(/4/g, "j").replace(/5/g, "p").replace(/6/g, "q").replace(/7/g, "k").replace

(/8/g, "a").replace(/9/g, "t").replace(/0/g, "z");

        //document.getElementById("Output").value = `https://darksoul.irupc.net${urlOfSever}${realNumbers}/search_q=${fileName}`;
        newLink = `https://darksoul.irupc.net${urlOfSever}${realNumbers}/search?q=${fileName}-iRuPC.LInKs=${fileSize}`;

        var copyText = document.getElementById("Output");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function clickMe() {
        noOfEpi = document.getElementById("Episodes").value;
        source = document.getElementById("Input").value;
        cutNoOne = source.split("Link to download file: ");
        fineal_Cut = "";
        for (i = 1; i < noOfEpi; i++) {
            fineal_Cut = fineal_Cut + cutNoOne[i].split(`

TGStreamerBot,`)[0] + "***";
        }
        console.log(fineal_Cut.split("***").sort());
        outPut = "";
        for (i = 1; i < noOfEpi; i++) {
            clickMeBtnSec(fineal_Cut.split("***").sort()[i]);
            outPut = outPut + `
` + newLink+`
`;
        }
        document.getElementById("Output").value = outPut;
    }
</script>

</html>

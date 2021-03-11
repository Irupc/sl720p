function genNow(){
    source = document.getElementById("mainSource").value;
    if (source.indexOf("<!DOCTYPE html>") > -1) {
        nameOfMovie();
        yearOfMovie();
        scoreOfMovie();
        genre1OfMovie();
        castOfMovie();
        langOfMovie();
        timeOfMovie();
        oriTitle();
        testLastChar();
        MovieImg();
        copy_data(select_txt);
        document.getElementById("mainSource").value = "";
    } else {
        document.getElementById("mainSource").value = "Please input Correct Source Code Copied from tmdb.org";
    }
}

function nameOfMovie(){
    if (source.indexOf("header_poster_wrapper false") > -1) {
        var cuta1 = source.split("header_poster_wrapper false")[1];
        var cuta2 = cuta1.split("<a href=")[1];
        var cuta3 = cuta2.split(">")[1];
        movieName = cuta3.split("<")[0];
    } else {
        movieName = "Name_Not_Available";
    }
}
function yearOfMovie(){
    if (source.indexOf("tag release_date") > -1) {
        var cutb1 = source.split("header_poster_wrapper false")[1];
        var cutb2 = cutb1.split("tag release_date")[1];
        var cutb3 = cutb2.split("(")[1];
        movieYear = cutb3.split(")")[0];
    } else {
        movieYear = "Year_Not_Available";
    }
}
function scoreOfMovie(){
    var cutc1 = source.split("icon icon-r")[1];
    var cutc2 = cutc1.split(">")[0];
    var cutc3 = cutc2.slice(0,1);
    if (cutc3 == 0) {
        movieScore = "0";
    } else {
        movieScore = cutc2.slice(0,2);
    }
}
function genre1OfMovie(){
    if (source.indexOf("/genre/") > -1) {
        c1utd1 = source.split("genres")[1];
        var c1utd2_u = c1utd1.split("<a href=")[1];
        var c1utd2 = c1utd2_u.split(">")[1];
        var movie1Genre = c1utd2.split("<")[0];
        if (movie1Genre == "Science Fiction") {
            movie1Genre = "Sci_Fi";
        }
        movie1Genre_final = "#"+movie1Genre+" ";
        genre2OfMovie();
    } else {
        movie1Genre_final = "Genre_Not_Available";
        movie2Genre_final = "";
    }
}
function genre2OfMovie(){
    if (source.indexOf(",&nbsp;") > -1) {
        var c2utd1 = source.split(",&nbsp;")[1];
        var c2utd2 = c2utd1.split(">")[1];
        var movie2Genre = c2utd2.split("<")[0];
        if (movie2Genre == "Science Fiction") {
            movie2Genre = "Sci_Fi";
        }
        movie2Genre_final = "#"+movie2Genre+" ";
    } else {
        movie2Genre_final = "";
    }
}
function castOfMovie(){
    if (source.indexOf("We don't have any cast added to this movie") > -1) {
        cast1_f = "No_Cast";
        cast2_f = "";
        cast3_f = "";
        cast4_f = "";
        cast5_f = "";
        cast6_f = "";
        cast7_f = "";
        cast8_f = "";
        cast9_f = "";
    } else if (source.indexOf("View More <span class=") > -1) {
        var cute1 = source.split("Top Billed Cast")[1];
        var cute2 = cute1.split("View More <span class=")[0];
        var c1ute1 = cute2.split("<p><a href=")[1];
        var c1ute2 = c1ute1.split(">")[1];
        var c1ute3 = c1ute2.split("<")[0];
        var cast1 = c1ute3.replace(/ /g, "_");
        cast1_f = "#" + cast1 +" ";
        //Cast 2
        var c2ute1 = cute2.split("<p><a href=")[2];
        var c2ute2 = c2ute1.split(">")[1];
        var c2ute3 = c2ute2.split("<")[0];
        var cast2 = c2ute3.replace(/ /g, "_");
        cast2_f = "#" + cast2 +" ";
        //Cast 3
        var c3ute1 = cute2.split("<p><a href=")[3];
        var c3ute2 = c3ute1.split(">")[1];
        var c3ute3 = c3ute2.split("<")[0];
        var cast3 = c3ute3.replace(/ /g, "_");
        cast3_f = "#" + cast3 +" ";
        //Cast 4
        var c4ute1 = cute2.split("<p><a href=")[4];
        var c4ute2 = c4ute1.split(">")[1];
        var c4ute3 = c4ute2.split("<")[0];
        var cast4 = c4ute3.replace(/ /g, "_");
        cast4_f = "#" + cast4 +" ";
        //Cast 5
        var c5ute1 = cute2.split("<p><a href=")[5];
        var c5ute2 = c5ute1.split(">")[1];
        var c5ute3 = c5ute2.split("<")[0];
        var cast5 = c5ute3.replace(/ /g, "_");
        cast5_f = "#" + cast5 +" ";
        //Cast 6
        var c6ute1 = cute2.split("<p><a href=")[6];
        var c6ute2 = c6ute1.split(">")[1];
        var c6ute3 = c6ute2.split("<")[0];
        var cast6 = c6ute3.replace(/ /g, "_");
        cast6_f = "#" + cast6 +" ";
        //Cast 7
        var c7ute1 = cute2.split("<p><a href=")[7];
        var c7ute2 = c7ute1.split(">")[1];
        var c7ute3 = c7ute2.split("<")[0];
        var cast7 = c7ute3.replace(/ /g, "_");
        cast7_f = "#" + cast7 +" ";
        //Cast 8
        var c8ute1 = cute2.split("<p><a href=")[8];
        var c8ute2 = c8ute1.split(">")[1];
        var c8ute3 = c8ute2.split("<")[0];
        var cast8 = c8ute3.replace(/ /g, "_");
        cast8_f = "#" + cast8 +" ";
        //Cast 9
        var c9ute1 = cute2.split("<p><a href=")[9];
        var c9ute2 = c9ute1.split(">")[1];
        var c9ute3 = c9ute2.split("<")[0];
        var cast9 = c9ute3.replace(/ /g, "_");
        cast9_f = "#" + cast9 +" ";
    } else {
        cast1_f = "Please_Add_Cast_Mannually";
        cast2_f = "# ";
        cast3_f = "# ";
        cast4_f = "# ";
        cast5_f = "# ";
        cast6_f = "# ";
        cast7_f = "# ";
        cast8_f = "# ";
        cast9_f = "";
    }
}
function langOfMovie(){
    if (source.indexOf("Original Language") > -1) {
        var cutf1_f = source.split("Original Language</bdi></strong> ")[1];
        var cutf1 = cutf1_f.split("</p>")[0];
        if (cutf1 == "Sinhala; Sinhalese"){
            lang = "🔊 #Sinhala";
        } else lang = "🔊 #"+cutf1;
        //lang = "🔊 #"+cutf1;
    } else {
        lang = "🔊 #Add_Lang_Mannually";
    }
}
function timeOfMovie(){
    if (source.indexOf("runtime") > -1) {
        var cutg1 = source.split("runtime")[1];
        var cutg2 = cutg1.split(">")[1];
        var cutg3 = cutg2.split("</span>")[0];
        runtime = "<br>⏱ "+ cutg3;
    } else {
        runtime = "";
    }
}
function oriTitle(){
    if (source.indexOf("Original Title") > -1) {
        var cuth1 = source.split("Original Title</strong> ")[1];
        var cuth2 = cuth1.split("</p>")[0];
        otiTitle = "<br><br>💎 "+ cuth2;
    } else {
        otiTitle = "";
    }
}
function MovieImg(){
    if (source.indexOf("w300_and_h450_bestv2_filter(blur)") > -1) {
        var cuti1 = source.split("poster lazyload")[1];
        var cuti2 = cuti1.split("/t")[1];
        var cuti3 = cuti2.split(" data-src")[0];
        var cuti4 = cuti3.split(".")[0];
        var ImgURL = cuti4.replace("w300_and_h450_bestv2_filter(blur)", "w600_and_h900_bestv2/");
        if (cuti3.indexOf("jpg") > -1 || cuti3.indexOf("JPG") > -1){
            var imgExtenction = ".jpg";
        } else if (cuti3.indexOf("png") > -1 || cuti3.indexOf("PNG") > -1){
            var imgExtenction = ".png";
        } else if (cuti3.indexOf("jpeg") > -1 || cuti3.indexOf("JPEG") > -1){
            var imgExtenction = ".jpeg";
        }else {
            var imgExtenction = ".###";
        }
        var finalImgURL = "https://www.themoviedb.org/t" + ImgURL + imgExtenction;
        document.getElementById("imgURLview").innerHTML = "<img src="+finalImgURL+" alt=Image></img>";
        document.getElementById("imgURLid").innerHTML = "<a href="+finalImgURL+" target=&quot;_blank&quot;>Click Here to Open Image</a>";
    } else {
        document.getElementById("imgURLview").innerHTML = "Please Add Image Mannually";
    }
}
function testLastChar(){
    document.getElementById("select_txt").innerHTML = "🎬 "+movieName+" #"+movieYear+"<br>"+"🔥 TMDB ---» "+ movieScore+"%"+"<br>⚖️ "+ movie1Genre_final + movie2Genre_final + "<br>" + lang + runtime+ otiTitle+ "<br>"+"<br><br> <b>👉Top Billed Cast👇🏿</b> <br>" + cast1_f + cast2_f + cast3_f + cast4_f + cast5_f + cast6_f + cast7_f + cast8_f + cast9_f+ "<br>"+"<br> 🔰 "+movieName+ " ("+movieYear+")"+" was added to IruPC.net <br>❖━ @IruPC ━❖";
}

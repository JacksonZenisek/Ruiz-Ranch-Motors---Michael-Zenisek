function gotohomepage(){
    window.location.href ="index.html";
}

function gotohomeadmin(){
    window.location.href ="index.html";
}

setInterval(greetingtimer,1000);

function greetingtimer(){

    const time = new Date().getHours();

    let lz;

    if(time < 12){
        lz = "Good morning valued customer!";
    }else if(time > 12, time < 18){
        lz = "Good afternoon valued customer!";
    }else{
        lz = "Good evening valued customer!";
    }

    document.getElementById("time_of_day_alt").innerHTML = lz;
}

setInterval(homegalpicsswitch, 1000);

function homegalpicsswitch(){
    let a = document.getElementById("home_pic1_alt");
    let b = document.getElementById("home_pic2_alt");
    let c = document.getElementById("home_pic3_alt");
    let d = document.getElementById("home_pic4_alt");
    let e = document.getElementById("home_pic5_alt");
    let f = document.getElementById("home_pic6_alt");
    let g = document.getElementById("home_pic7_alt");
    let h = document.getElementById("home_pic8_alt");
    let i = document.getElementById("home_pic9_alt");
    let j = document.getElementById("home_pic10_alt");
    let k = document.getElementById("home_pic11_alt");
    let l = document.getElementById("home_pic12_alt");

    const featurepicture = new Date().getSeconds();

    if(featurepicture < 5){
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if(featurepicture > 5, featurepicture < 10){
        k.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        f.style.display = "none";
        l.style.display = "none";
    
    }else if (featurepicture > 10, featurepicture < 15){
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 15, featurepicture < 20){
        c.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 20, featurepicture < 25){
        d.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 25, featurepicture < 30){
        e.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        f.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 30, featurepicture < 35){
        f.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 35, featurepicture < 40){
        g.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        f.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 40, featurepicture < 45){
        h.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        f.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 45, featurepicture < 50){
        i.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        f.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else if (featurepicture > 50, featurepicture < 55){
        j.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        f.style.display = "none";
        k.style.display = "none";
        l.style.display = "none";
    }else{
        l.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        i.style.display = "none";
        j.style.display = "none";
        k.style.display = "none";
        f.style.display = "none";
    }
};

function gotocontactmepage(){
    window.location.href = "contact.html";
}

function gotolistingspage(){
    window.location.href = "listings.html";
}

function showlinksslidemenu(){
    document.getElementById("medialinks_slide_container_alt").style.height = "150px";
}

function hidelinksslidemenu(){
    document.getElementById("medialinks_slide_container_alt").style.height = "0px";
}

function showcal(){
    let a = document.getElementById("create_a_listing_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("dal_main_container_alt");
    let d = document.getElementById("caa_outermain_container_alt");

    if(a.style.display === "none"){
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }else{
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}

function hidecal(){
    let a = document.getElementById("create_a_listing_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("caa_outermain_container_alt");
    let d = document.getElementById("dal_main_container_alt");
    

    if(b.style.display === "none"){
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }else{
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}

function showcaa(){
    let a = document.getElementById("caa_outermain_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("dal_main_container_alt");

    if(a.style.display === "none"){
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
        
    }else{
        a.style.display = "block";
        b.style.display = "none";
        c.style.display = "none";
    }
}


function hidecaa(){
    let a = document.getElementById("caa_outermain_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("create_a_listing_container_alt");
    let d = document.getElementById("dal_main_container_alt");

    if(b.style.display === "none"){
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }else{
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}

function showdal(){
    let a = document.getElementById("caa_outermain_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("create_a_listing_container_alt");
    let d = document.getElementById("dal_main_container_alt");

    if(d.style.display === "none"){
        d.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        b.style.display = "none";
    }else{
        d.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        b.style.display = "none";
    }
}

function hidedal(){
    let a = document.getElementById("caa_outermain_container_alt");
    let b = document.getElementById("option_selection_container_alt");
    let c = document.getElementById("create_a_listing_container_alt");
    let d = document.getElementById("dal_main_container_alt");

    if(b.style.display === "none"){
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }else{
        bh.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}

function showmobileslidemenu(){
    document.getElementById("mobile_slide_main_menu_container_alt").style.height = "1200px";

}

function hideuparrowbutton(){
    let a = document.getElementById("mobileslidedownbutton_alt");
    let b = document.getElementById("mobileslideupbutton_alt");

    if(b.style.display === "none"){
        b.style.display = "block";
        a.style.display = "none";
    }else{
        b.style.display = "block";
        a.style.display = "none";
    }

}

function hidemobileslidemenu(){
    document.getElementById("mobile_slide_main_menu_container_alt").style.height = "0px";

}

function showuparrowbutton(){
    let a = document.getElementById("mobileslidedownbutton_alt");
    let b = document.getElementById("mobileslideupbutton_alt");

    if(a.style.display === "none"){
        a.style.display = "block";
        b.style.display = "none";
    }else{
        a.style.display = "block";
        b.style.display = "none";
    }

}


setInterval(console_time,1000);

function console_time(){
    
    const consoletime = new Date();
    document.getElementById("console_time_alt").innerHTML = consoletime.toLocaleTimeString();

}

setInterval(caagetcurrentdate,1000);

function caagetcurrentdate(){

    let date = new Date();
    let current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
    document.getElementById("caa_uinput_date_box_alt").innerHTML = current_date;
}
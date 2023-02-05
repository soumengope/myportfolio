function home_btn(){
    const my_btn = document.querySelector("#hom_btn");
    let width = my_btn.offsetWidth;
    if(width==150){
        my_btn.style.width="140px";
        my_btn.style.height="32px";
        window.scrollBy(0,0);
    }else{
        my_btn.style.width="150px";
        my_btn.style.height="35px";
    }
}
function whoamiScroll(){
    const my_btn = document.querySelector("#whoami_btn");
    let width = my_btn.offsetWidth;
    if(width==150){
        my_btn.style.width="140px";
        my_btn.style.height="32px";
        window.scrollBy(0,347);
    }else{
        my_btn.style.width="150px";
        my_btn.style.height="35px";
    }
}
function hobbiesScroll(){
    const my_btn = document.querySelector("#hob_btn");
    let width = my_btn.offsetWidth;
    if(width==150){
        my_btn.style.width="140px";
        my_btn.style.height="32px";
        window.scrollBy(0,643);
    }else{
        my_btn.style.width="150px";
        my_btn.style.height="35px";
    }
}
function skill_skillScroll(){
    const my_btn = document.querySelector("#skill_btn");
    let width = my_btn.offsetWidth;
    if(width==150){
        my_btn.style.width="140px";
        my_btn.style.height="32px";
        window.scrollBy(0,1212);
    }else{
        my_btn.style.width="150px";
        my_btn.style.height="35px";
    }
}
function contact_me(){
    const my_btn = document.querySelector("#rate_btn");
    let width = my_btn.offsetWidth;
    if(width==150){
        my_btn.style.width="140px";
        my_btn.style.height="32px";
        window.scrollBy(0,1973);
    }else{
        my_btn.style.width="150px";
        my_btn.style.height="35px";
    }
}

function data_submit(){
    const data_submit = document.querySelector("#submit");
    let width = data_submit.offsetWidth;
    if(width==100){
        data_submit.style.width="90px";
        data_submit.style.height="25px";
        data_submit.style.fontSize="14px";
        data_submit.style.boxShadow = "1px 1px 2px 1px rgb(255, 255, 255)";
    }else{
        data_submit.style.width="100px";
        data_submit.style.height="28px";
        data_submit.style.fontSize="16px";
        data_submit.style.boxShadow = "1px 1px 4px 1px rgb(255, 255, 255)";
    }
    
}


const html_load = document.getElementById("html_load");
const css_load = document.getElementById("css_load");
const js_load = document.getElementById("js_load");
const php_load = document.getElementById("php_load");
const mysql_load = document.getElementById("mysql_load");
const ps_load = document.getElementById("ps_load");
window.addEventListener("scroll",function(event){
    var scroll = this.scrollY;
    //console.log(scroll);
    if(scroll >=1350 && scroll <= 1650){
        html_load.id = "html_anim";
        css_load.id = "css_anim";
        js_load.id = "js_anim";
        php_load.id = "php_anim";
        mysql_load.id = "mysql_anim";
        ps_load.id = "ps_anim";
    }else{
        html_load.id = "html_load";
        css_load.id = "css_load";
        js_load.id = "js_load";
        php_load.id = "php_load";
        mysql_load.id = "mysql_load";
        ps_load.id = "ps_load";
    }
})
// Disclaimer DHTML
// Copyright Outils.XXX 2012

function Entrer()
{
 document.cookie="disclaimerok=oui;path=/;";
 if(document.getElementById) document.getElementById("disclaimer").style.display='none'
 top.location.href=location.href;
}

if(document.cookie.indexOf("disclaimerok")<=-1)
{
 document.write(""
 +"<style type=\"text/css\">"
 +"<!--"
 +"html{overflow-y: hidden;}"
 +"object{ visibility:hidden; }"
 +"#disclaimer{ text-align:left; }"
 +"#disclaimer-fond{ position:absolute; z-index:15000; width:100%; height:2000px; background:#000; text-align:center; line-height:normal; clear:both; filter:alpha(opacity=70); -moz-opacity:0.70; opacity:0.70; }"
 +"#disclaimer-conteneur{ position:absolute; z-index:15001; width:100%; text-align:center; clear:both; }"
 +"#disclaimer-cadre{ width:50%; padding:10px; margin:150px auto 0 auto; text-align:left; background:#fff0ce; border:rgb(174, 15, 9) 2px solid; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; }"
 +"@media screen and (max-width: 600px){#disclaimer-cadre{ width:90%; margin:5%;}}"
 +"#disclaimer-cadre b{ display:block; padding:10px 0 10px 0; text-align:center; font-size:21px; color:rgb(174, 15, 9); }"
 +"#disclaimer-cadre font{ display:block; padding:10px 0 20px 0; text-align:center; font-size:21px; color:rgb(174, 15, 9); }"
 +"#disclaimer-cadre p{ margin:0; padding:10px; font-size:16px; color:rgb(174, 15, 9); }"
 +"#disclaimer-cadre .boutons{ margin:0; padding:10px; text-align:center; }"
 +"#disclaimer-cadre a{ text-decoration:none; font-size:36px; font-weight:bold; color:#312f48; }"
 +"#disclaimer-cadre a:hover{ text-decoration:underline; }"
 +"-->"
 +"<\/style>"
 +"<div id='disclaimer'><div id='disclaimer-fond'></div><div id='disclaimer-conteneur'>"
 +"<div id='disclaimer-cadre'>"
 +"<img class='center img-responsive' src='img/majeur_marquisette.png'/>"
 +"<div class='boutons'><a href='#' onclick='Entrer(); return(false)'>OUI</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a rel='nofollow' href='http://www.tfou.fr/'>NON</a></div>"
 +"</div>"
 +"</div></div>"
 );
}

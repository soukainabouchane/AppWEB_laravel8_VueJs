<template>
    <div id="conexion">
    <section class="register">
 <div class="register-full">
 <div class="register-lefttt">
 <div class="register">
 <div class="leftparr">
 <h1>Logiciels et systèmes intelligents (LSI) - FSTT</h1>
 <p class="redwane">Former des ingénieurs capables de :Comprendre les enjeux des techniques de l’information,Proposer et construire des solutions informatiques et décisionnelles compétitives et réalistesIntervenir sur des problématiques informatiques complexes,Piloter des projets informatiques et les changements qu'ils entraînent.</p>
 <div class="content3">
 <ul>
 <li><a class="" href="http://www.fstt.ac.ma/Portail/formation/formation-initiale/cycle-ingenieur?pid=92&sid=107:logiciel-et-systeme-informatique"> Savoir plus</a></li>
 <li><a class="read" href="#"> Retour</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="register-right">
 <div class="register-in">
 <h2><span class="fa fa-pencil"></span> Se connecter</h2>
 <div class="register-form">
 <form action="#" method="post">
 <div class="fields-grid">
 <div class="styled-input">
 <input v-model="data.email" type="email" name="Email" required="">
 <label>Email</label>
 <span></span>
 </div>
 <div class="styled-input">
 <input  v-model="data.mot_de_passe" type="password" name="password" required="">
 <label>Mot de Passe</label>
 <span></span>
 </div>
 <div class="clear"> </div>
 <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Se souvenir de moi</label>
 </div>
 <router-link to="/" class="botuu fa" @click.prevent="submit">Se connecter</router-link>
 </form>
 </div>
 </div>
 <div class="clear"> </div>
 </div>
 <div class="clear"> </div>
 </div>
</section>
<!-- //section -->
    </div>
</template>

<script lang="ts">
import { reactive } from 'vue'
import { useRouter } from 'vue-router'

export default {
  name: 'Login',
  setup () {
    const data = reactive({
      email: null,
      mot_de_passe: null
    })
    const router = useRouter()

    const submit = async () => {
      await fetch('http://localhost:8000/api/list_admin/1', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        credentials: 'include',
        body: JSON.stringify(data)
      })

      await router.push('/etuHome/:id')
    }

    return {
      data,
      submit
    }
  }
}
</script>

<style>
.register-form .botuu {
    outline: none;
    color: #FFFFFF;
    width: 100%;
    padding: .4em 1em;
    font-size: 1.1em;
letter-spacing: 1px;
    margin: 1.5em 0 0 0;
    -webkit-appearance: none;
    background: #2dde98;
    border: 2px solid #2dde98;
    border-right: 20px solid #000;
    border-left: 20px solid #000;
    border-width: 20px;
    line-height: 20px;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
font-family: 'Poppins', sans-serif;
}
.register-form .botuu:hover {
    background: #ff4f81;
border: 2px solid #ff4f81;
}
.logooo{

text-align: center;
margin-top: 5em;
width: 8%;
position:fixed;
top:70px;
left: 850px;
z-index: 10;
}
.leftparr {
    background: rgba(0, 0, 0, 0.6);
    box-shadow: 0px 0px 2px 1px rgb(253 249 249 / 75%);
    margin: 5px;
    padding: 40px;
    position: absolute;
    top: 155px;
    left: 350px;
    width: 600px;
    height: 425px;
}
#conexion ,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
margin:0;
padding:0;
border:0;
font-size:100%;
font:inherit;
vertical-align:baseline;
}
article, aside, details, figcaption, figure hgroup, section {
display: block;
}
ol,ul {
list-style:none;
margin:0px;
padding:0px;
}
blockquote,q {
quotes:none;
}
blockquote:before,blockquote:after,q:before,q:after {
content:'';
content:none;
}
table {
border-collapse:collapse;
border-spacing:0;
}

/* start editing from here */
a {
text-decoration:none;
}
.txt-rt {
text-align:right;
}/* text align right */
.txt-lt {
text-align:left;
}/* text align left */
.txt-center {
text-align:center;
/*-- W3Layouts --*/
}/* text align center */
.float-rt {
float:right;
}/* float right */
.float-lt {
float:left;
}/* float left */
.clear {
clear:both;
}/* clear float */
.pos-relative {
position:relative;
}/* Position Relative */
.pos-absolute {
position:absolute;
}/* Position Absolute */
.vertical-base {
vertical-align:baseline;
}/* vertical align baseline */
.vertical-top {
vertical-align:top;
}/* vertical align top */
nav.vertical ul li {
display:block;
}/* vertical menu */
nav.horizontal ul li {
display: inline-block;
}/* horizontal menu */
img {
max-width:100%;
}
/*--- end reset code ---*/
#conexion {
padding: 0;
margin: 0;
background: #FFF;
margin: 0;
font-family: 'Poppins', sans-serif;
}
#conexion a {
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
text-decoration: none;
}
#conexion a:hover {
text-decoration: none;
}
#conexion a:focus, a:hover {
text-decoration: none;
}
input[type="button"], input[type="submit"] {
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
}
label {
margin: 0;
    letter-spacing: 1px;
    color: #fff;
}
a:focus, a:hover {
text-decoration: none;
outline: none;
}
p{
font-family: 'Open Sans', sans-serif;
}
.register-full {
    width: 80%;
    margin: 2em auto 0;
}
.register-right {
    background: rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    -moz-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
}
.register-in {
    padding: 3em;
}
.register-lefttt{
    width: 60%;
    float: left;
}
.register-right {
    width: 40%;
    float: left;
    top:160px;
    left: 30px;
}
.register-lefttt p {
    margin: 2em 0;
    line-height: 28px;
    font-size: 15px;
    font-weight: 100;
padding:0 4em;
    letter-spacing: 1px;
    color: #FFFFFF;
    text-align: center;
}
.register-lefttt h1 {
    font-size: 3em;
    text-transform: uppercase;
    margin-top: .5em;
    margin-bottom: .5em;
    color: #FFFFFF;
    text-align: center;
}
.register-right h2 {
    text-transform: uppercase;
    font-size: 2em;
    font-weight: 300;
    letter-spacing: 1px;
    word-spacing: 5px;
    color: #fff;
}
.link a {
    color: #FFFFFF;
    padding: .5em;
    font-size: 1.5em;
    border:2px solid #0a7369;
}
.checkbox a {
    color: #999;
}
.checkbox a:hover {
    color: #fff;
}
.link a:hover{
color:#000;
    border:2px solid #FFFFFF;
background:none;
}
.register-form{
margin:2em 0 0 0;
}
.register-form h4,.address h4{
    margin-bottom: 2em;
    color: #404040;
    margin: 0 0 2em 0;
    font-weight: 600;
}
 .register input[type="text"],.register input[type="email"],.register input[type="password"],.register input[type="tel"]{
    font-size: 1em;
    color: #fff;
    padding: 0.5em 1em;
    border: 0;
    width: 90%;
    border-bottom: 1px solid #fff;
    background: none;
    -webkit-appearance: none;
outline: none;
}

select{
    font-size: .9em;
    letter-spacing: 1px;
    color: #fff;
font-weight:100;
    padding: 0.6em .5em;
    border: 0;
    width: 97%;
    border-bottom: 1px solid #dcdcdc;
    background: none;
font-family: 'Poppins', sans-serif;
}

input[type="checkbox"] {
    cursor: pointer;
    margin-right: 10px;
}
.register textarea {
min-height: 150px;
    resize: none;
}
/*-- input-effect --*/
.styled-input.agile-styled-input-top {
    margin-top: 0;
}
.styled-input input:focus ~ label, .styled-input input:valid ~ label,.styled-input textarea:focus ~ label ,.styled-input textarea:valid ~ label{
    font-size: .9em;
    color: #999;
    top: -1.3em;
    -webkit-transition: all 0.125s;
-moz-transition: all 0.125s;
-o-transition: all 0.125s;
-ms-transition: all 0.125s;
    transition: all 0.125s;
}
.styled-input {
width: 100%;
    position: relative;
    margin: 0 0 2em;
}
.styled-input:nth-child(1),.styled-input:nth-child(3){
margin-left:0;
}
.textarea-grid{
float:none !important;
width:100% !important;
margin-left:0 !important;
}
.styled-input label {
color: #fff;
    padding: 0.5em .9em;
    letter-spacing: 1px;
font-weight:100;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    pointer-events: none;
    font-size: .9em;
    display: block;
    line-height: 1em;
}
.styled-input input ~ span,.styled-input textarea ~ span {
display: block;
    width: 0;
    height: 2px;
    background: #fff;
    position: absolute;
    bottom: 0;
    left: 0;
    -webkit-transition: all 0.125s;
    -moz-transition: all 0.125s;
    transition: all 0.125s;
}
option {
    background: #222;
}
select:focus {
    outline: none;
}
.styled-input textarea ~ span {
    bottom: 5px;
}
.styled-input input:focus.styled-input textarea:focus {
outline: 0;
}
.styled-input input:focus ~ span,.styled-input textarea:focus ~ span {
width: 100%;
-webkit-transition: all 0.075s;
-moz-transition: all 0.075s;
transition: all 0.075s;
}
/*-- //input-effect --*/
.register-form input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    width: 100%;
    padding: .4em 1em;
    font-size: 1.1em;
letter-spacing: 1px;
    margin: 1.5em 0 0 0;
    -webkit-appearance: none;
    background: #2dde98;
    border: 2px solid #2dde98;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
font-family: 'Poppins', sans-serif;
}
.register-form input[type="submit"]:hover {
    background: #ff4f81;
border: 2px solid #ff4f81;
}
input[type="text"] {
    width: 100%;
}
.content3 {
    text-align: center;
    margin: 7% auto 2%;
}
.content3 a {
    background: #2dde98;
    font-size: 15px;
    outline-offset: 4px;
    outline: 2px solid #fff;
color: #ffffff;
    padding: 12px 30px;
letter-spacing: 1px;
    display: initial;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.content3 a:hover {
    background: #ff4f81;
    outline: 2px solid transparent;
}
.content3 a.read {
    background: #ff4f81;
    font-size: 16px;
    outline-offset: 4px;
    outline: 2px solid #fff;
    padding: 12px 30px;
    display: initial;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.content3 a.read:hover {
    background: #2dde98;
    outline: 2px solid transparent;
}
.content3 ul li {
    display: inline-block;
    margin: 0 .5em;
}
/*-- //contact --*/
/*-- copyright --*/

/*-- //copyright --*/

/* responsive design */
@media (max-width: 1440px) {
.register-lefttt h1 {
font-size: 2.9em;
}
}
@media (max-width: 1366px) {
.register-lefttt h1 {
font-size: 2.7em;
}
.register-right {
width: 42%;
float: left;
}
.register-lefttt {
width: 58%;
float: left;
}
}
@media (max-width: 1280px) {
.register-right {
width: 44%;
float: left;
}
.register-lefttt {
width: 56%;
float: left;
}
}
@media (max-width: 1080px) {
.register-full {
width: 90%;
}
.register-lefttt p {
line-height: 1.6em;
}
.link a {
padding: .4em;
font-size: 1.4em;
}
.register-in {
padding: 2em;
}
}

.register-right h2 {
font-size: 1.8em;
}
label {
letter-spacing: 0px;
}
.register-lefttt p {
padding: 0 2em;
}
.content3 a.read ,.content3 a{
font-size: 15px;
padding: 8px 30px;
}

.styled-input {
margin: 0 0 1.7em;
}

.register-lefttt h1 {
font-size: 2.1em;
}

.register-lefttt p {
padding: 0 1em;
}

@font-face {
 font-family: 'FontAwesome';
 src: url('./fonts/fontawesome-webfont.eot?v=4.7.0');
src: url('./fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('./fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('./fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('./fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('./fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
 font-weight: normal;
 font-style: normal;
  }
  .fa {
 display: inline-block;
 font: normal normal normal 14px/1 FontAwesome;
 font-size: inherit;
 text-rendering: auto;
 -webkit-font-smoothing: antialiased;
 -moz-osx-font-smoothing: grayscale;
  }
  .fa-pencil:before {
 content: "\f040";
  }
  .fa-edit:before,
  .fa-pencil-square-o:before {
 content: "\f044";
  }
  /*ddddddddddddddddddddddddddd*/
.register-lefttt {

position: fixed;
right: 300px;
top: 0px;
}
/*dddddddddddddddddddddddddd*/
</style>

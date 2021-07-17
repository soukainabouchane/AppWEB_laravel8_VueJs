<template>
<div class="register-fulll">
        <div class="register-righttt">
        <div class="register-in">
            <h2><span class="fa fa-pencil"></span> Option possible</h2>
                <div class="register-form">
                <form >
                    <div class="fields-grid">
                          <div class="styled-input">
                             <router-link to="/" class="botu">Gestiondes des professeurs</router-link>
                            </div>
                            <div class="styled-input">
                             <router-link to="/etulist" class="botu">Gestion Des des étudiants</router-link>
                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            <div class="clear"> </div></div>
  </div>
 </template>

 <style>
.register-righttt {
    background: rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    -moz-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    position: absolute;
    top: 125px;
    left: 410px;
}
.register-in {
    padding: 3em;
}
.register-left{
    width: 60%;
    float: left;
    position: fixed;
    top: 170px;
    right: 20px;
}
.register-righttt {
    width: 40%;
    float: left;
}
.register-left p {
    margin: 2em 0;
    line-height: 28px;
    font-size: 15px;
    font-weight: 100;
padding:0 4em;
    letter-spacing: 1px;
    color: #FFFFFF;
    text-align: center;
}
.register-left h1 {
    font-size: 3em;
    text-transform: uppercase;
    margin-top: .5em;
    margin-bottom: .5em;
    color: #FFFFFF;
    text-align: center;
}
.register-righttt h2 {
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
.logo{
text-align: center;
margin-top: 5em;
width: 20%;
height: 30px;
position:absolute;
top:0px;
left: 330px;
}
.leftpar{
position: absolute;
top:180px;
left: 40px;

}

 </style>

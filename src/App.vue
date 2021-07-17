<template>

  <div id="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark" id="nav">
        <a href="  http://www.fstt.ac.ma/Portail/"><img src="./views/Admin/image/fst.png" class="logofstt"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="aall">
            <ul class="navbar-nav mr-auto">
              <li class="btn btn-outline-success my-3 my-sm-0" id="btn1">
                 <router-link to="/" class="nav-link">Acceuil</router-link>
              </li>
              <li class="btn btn-outline-success my-2 my-sm-0" id="btn2">
                 <router-link :to="{name:'adminLogin'}" class="nav-link">Admin</router-link>
              </li>
                <li class="btn btn-outline-success my-1 my-sm-0" id="btn3">
                  <router-link to="/" class="nav-link">L'espace du professeur</router-link>
                </li>
                <li class="btn btn-outline-success my-4 my-sm-0" id="btn4">
                  <router-link :to="{name:'etuLogin'}" class="nav-link">L'espace des étudiants</router-link>
                </li>
            </ul></div>
            <form class="form-inline my-2 my-lg-0" id="search">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-5 my-sm-0 " type="submit">Search</button>
            </form>
           <a href="https://www.uae.ma/website/index.php"><img src="./views/Admin/image/uni.png" class="logofsttt"></a>
          </div>
        </nav>
        <div class="head-frist">
            <ul>
                <li><a href="https://www.uae.ma/website/index.php"><span class="fab fa-facebook-f" id="fb"></span></a></li>
                 <li><a href="https://www.uae.ma/website/index.php"><span class="fab fa-twitter" id="twi"></span></a></li>
                  <li><a href="https://www.uae.ma/website/index.php"><span class="fab fa-instagram" id="ins"></span></a></li>
                   <li><a href="https://www.uae.ma/website/index.php"><span class="fab fa-linkedin-in" id="link"></span></a></li>
                   <li><a href="https://www.uae.ma/website/index.php"><span class="fab fa-youtube" id="you"></span></a></li>
             </ul>
    </div>
  </div>
 <router-view/>
 <!-- copyright -->
 <p class="agile-copyright">© 2021 Formulaire de conexion au site web de filière (LSI) - FSTT. Tous les droits sont réservés | MAHJOUBI REDWANE and BOUCHANE SOKAINA</p>
 <!-- //copyright -->
</template>

<script>
export default {
}
</script>

<style lang="scss">
#fb{
color: #0656eb;
}
#ins{
color:#cc3a00;
}
#you{
color:#ff0000;
}
#link{
color:#0602f8;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#you{
    position: absolute;
    top: 7px;
    left: 7px;
}
#link ,#twi ,#ins,#fb{
    position: absolute;
    top: 7px;
    left: 8px;
}
.logofsttt{
    width: 80px;
    position: absolute;
    top: 0px;
    left: 1255px;
}
.logofstt{
  width: 110px;
  top: 0px;
  right: 1255px;
}
#app {
background: url(./views/Admin/image/f.jpg);
background-attachment:fixed;
background-size:cover;

}
.aall{
position: absolute;
  top: 18px;
  left:600px;
}
/* copyright */

.agile-copyright {
    color: #fff;
    text-align: center;
    font-size: 15px;
    margin: 2em 0 0;
    letter-spacing: 2px;
    font-weight: 200;
font-family: 'Poppins', sans-serif;
position: fixed;
bottom: 5px;
left: 16px;
}

.head-frist ul{
  display: flex;
  height: 1000px;
  width: 300px;
  text-align: center;
  margin: 0;
  padding: 0;
  list-style: none;
}
.head-frist ul li{
  position: relative;
  display: block;
  color: #666;
  font-size: 15px;
  height: 30px;
  width: 30px;
  background: #383737;
  line-height: 60px;
  border-radius: 50%;
  margin: 0 2px;
  cursor: pointer;
  transition: .5s;
}
.head-frist ul li:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: inherit;
  width: inherit;
  background: #d35400;
  border-radius: 50%;
  transform: scale(.9);
  z-index: -1;
  transition: .5s;
}
.head-frist ul li:nth-child(1):before{
  background: #4267B2;
}
.head-frist ul li:nth-child(2):before{
  background: #1DA1F2;
}
.head-frist ul li:nth-child(3):before{
  background: #E1306C;
}
.head-frist ul li:nth-child(4):before{
  background: #2867B2;
}
.head-frist ul li:nth-child(5):before{
  background: #ff0000;
}
.head-frist ul li:hover:before{
  filter: blur(3px);
  transform: scale(1.2);
  box-shadow: 0 0 15px #d35400;
}
.head-frist ul li:nth-child(1):hover:before{
  box-shadow: 0 0 15px #4267B2;
}
.head-frist ul li:nth-child(2):hover:before{
  box-shadow: 0 0 15px #1DA1F2;
}
.head-frist ul li:nth-child(3):hover:before{
  box-shadow: 0 0 15px #E1306C;
}
.head-frist ul li:nth-child(4):hover:before{
  box-shadow: 0 0 15px #2867B2;
}
.head-frist ul li:nth-child(5):hover:before{
  box-shadow: 0 0 15px #ff0000;
}
.head-frist ul li:nth-child(1):hover{
  color: #456cba;
  box-shadow: 0 0 15px #4267B2;
  text-shadow: 0 0 15px #4267B2;
}
.head-frist ul li:nth-child(2):hover{
  color: #26a4f2;
  box-shadow: 0 0 15px #1DA1F2;
  text-shadow: 0 0 15px #1DA1F2;
}
.head-frist ul li:nth-child(3):hover{
  color: #e23670;
  box-shadow: 0 0 15px #E1306C;
  text-shadow: 0 0 15px #E1306C;
}
.head-frist ul li:nth-child(4):hover{
  color: #2a6cbb;
  box-shadow: 0 0 15px #2867B2;
  text-shadow: 0 0 15px #2867B2;
}
.head-frist ul li:nth-child(5):hover{
  color: #ff1a1a;
  box-shadow: 0 0 15px #ff0000;
  text-shadow: 0 0 15px #ff0000;
}
/* ul li:hover{
  color: #ffa502;
  box-shadow: 0 0 15px #d35400;
  text-shadow: 0 0 15px #d35400;
} */
/* --------------menu---------------- */
.register-right {

    background: rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    -moz-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    position: fixed;
    top: 150px;
    left: 28%;
}
.register-in {
    padding: 3em;
}
.register-right {
    width: 40%;
    float: left;
}
.register-right h2 {
    text-transform: uppercase;
    font-size: 2em;
    font-weight: 300;
    letter-spacing: 1px;
    word-spacing: 5px;
    color: #fff;
    text-align: center;
}
.link a {
    color: #FFFFFF;
    padding: .5em;
    font-size: 1.5em;
    border:2px solid #0a7369;
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
.register .botu,.register .botu,.register .botu,.register .botu{
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
.styled-input .botu:focus ~ label, .styled-input input:valid ~ label,.styled-input textarea:focus ~ label ,.styled-input textarea:valid ~ label{
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
.styled-input input ~ span,.styled-input .botu ~ span,.styled-input textarea ~ span {
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
}.styled-input .botu:focus.styled-input textarea:focus {
outline: 0;
}
.styled-input .botu:focus ~ span,.styled-input textarea:focus ~ span {
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
}.register-form .botu {
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
    line-height: 70px;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
font-family: 'Poppins', sans-serif;
}
.register-form .botu:hover {
    background: #ff4f81;
border: 2px solid #ff4f81;
}

</style>

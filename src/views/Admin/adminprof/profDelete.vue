<template>
<div class="register-full">
<div class="register-left">
<div class="register">
 <div class="leftpar">
 <h1>professeur {{nom}} a été supprimé</h1>
 <div class="content3">
 <ul>
 <div class="styled-input fields-grid register-form">
<router-link to="/profList" class="botu">Retour</router-link>
</div>
 </ul>
 </div>
 </div>
 </div>
 </div>
  </div>
 <p>{{deleteprof (id)}}</p>
</template>

<script>
import axios from 'axios'

export default {

  name: 'App',
  data () {
    return {
      id: this.$route.params.id,
      nom: this.$route.params.nom,
      Admins: [],
      todaName: '',
      Admin: this.id
    }
  },

  methods: {
    async deleteprof ($id) {
      try {
        await axios.delete('http://127.0.0.1:8000/api/delete_list_prof/' + $id)
      } catch (e) {
        console.error(e)
      }
    }
  }
}
</script>

 <style>
.register-right {
    background: rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    -moz-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
}
.register-in {
    padding: 3em;
}
.register-left{
    width: 60%;
    float: left;
    position: fixed;
    right: 500px;
    top: 5px;
}
.register-right {
    width: 40%;
    float: left;
}
.register-leftt p {
    margin: 2em 0;
    line-height: 28px;
    font-size: 15px;
    font-weight: 100;
padding:0 4em;
    letter-spacing: 1px;
    color: #FFFFFF;
    text-align: center;
}
.register-leftt h1 {
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
.register-form{
margin:2em 0 0 0;
}
.register-form h4,.address h4{
    margin-bottom: 2em;
    color: #404040;
    margin: 0 0 2em 0;
    font-weight: 600;
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
.leftpar{
position: absolute;
top:180px;
left: 40px;

}
 </style>

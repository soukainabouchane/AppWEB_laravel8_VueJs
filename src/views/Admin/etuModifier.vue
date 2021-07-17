<template>
<div class="register-full">
<div class="register">
 <div class="leftpar">
<label>nom</label>
<input class="form-control" type="text" v-model="nom" :placeholder="nom">
<label>prenom</label>
<input class="form-control" type="text" v-model="prenom" :placeholder="prenom">
<label>sexe</label>
<input class="form-control" type="text" v-model="sexe" :placeholder="sexe">
<label>civilite</label>
<input class="form-control" type="text" v-model="civilite" :placeholder="civilite">
 <div class="content3">
 <ul>
 <div class="styled-input fields-grid register-form">
<router-link to="/etuList" class="botu" @click="updatEetu()" >Modifier</router-link>
<router-link :to="{name:'etuModifier2' , params:{id: this.id ,nom: this.nom,prenom: this.prenom,sexe: this.sexe,civilite: this.civilite,situation_familiale: this.situation_familiale,date_naissance: this.date_naissance,ville_nais: this.ville_nais ,nationalite: this.nationalite ,pays_nais: this.pays_nais ,adresse: this.adresse ,tel_fixe: this.tel_fixe ,tel_portable: this.tel_portable ,cin: this.cin ,cne: this.cne ,email: this.email ,password: this.password ,created_at: this.created_at ,updated_at: this.updated_at ,id_admin: this.id_admin ,id_pfe: this.id_pfe ,id_emp: this.id_emp ,}}"  class="botu" @click="updatEetu()" >Suivant</router-link>
</div>
 </ul>
 </div>
 </div>
 </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {

  name: 'App',
  data () {
    return {
      id: this.$route.params.id,
      nom: this.$route.params.nom,
      prenom: this.$route.params.prenom,
      sexe: this.$route.params.sexe,
      civilite: this.$route.params.civilite,
      situation_familiale: this.$route.params.situation_familiale,
      date_naissance: this.$route.params.date_naissance,
      ville_nais: this.$route.params.ville_nais,
      nationalite: this.$route.params.nationalite,
      pays_nais: this.$route.params.pays_nais,
      adresse: this.$route.params.adresse,
      tel_fixe: this.$route.params.tel_fixe,
      tel_portable: this.$route.params.tel_portable,
      cin: this.$route.params.cin,
      cne: this.$route.params.cne,
      email: this.$route.params.email,
      password: this.$route.params.password,
      created_at: this.$route.params.created_at,
      updated_at: this.$route.params.updated_at,
      id_admin: this.$route.params.id_admin,
      id_pfe: this.$route.params.id_pfe,
      id_emp: this.$route.params.id_emp
    }
  },

  methods: {
    async updatEetu () {
      try {
        await axios.patch('http://127.0.0.1:8000/api/update_etudiant/' + this.id, {
          nom: this.nom,
          prenom: this.prenom,
          sexe: this.sexe,
          civilite: this.civilite,
          situation_familiale: this.situation_familiale,
          date_naissance: this.date_naissance,
          ville_nais: this.ville_nais,
          nationalite: this.nationalite,
          pays_nais: this.pays_nais,
          adresse: this.adresse,
          tel_fixe: this.tel_fixe,
          tel_portable: this.tel_portable,
          cin: this.cin,
          cne: this.cne,
          email: this.email,
          password: this.password,
          id_admin: this.id_admin,
          id_pfe: this.id_pfe,
          id_emp: this.id_emp
        })
      } catch (e) {
        console.error(e)
      }
    }
  }
}
</script>

 <style>
 .leftpar{
 background: rgba(0, 0, 0, 0.6);
  -webkit-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    -moz-box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
    box-shadow: 0px 0px 2px 1px rgba(253, 249, 249, 0.75);
 margin: 5px;
 padding: 40px;
 position: absolute;
top:180px;
left: 350px;
width: 600px;
height: 425px;
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
.register-leftt{
    width: 60%;
    float: left;
    position: fixed;
    right: 300px;
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
 </style>

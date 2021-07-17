<template>
<div>
    <table>
    <thead>
        <tr>
            <th >situation_familiale</th>
            <th >mail</th>
            <th >date_naissance</th>
            <th >pays</th>
            <th >ville</th>
            <th >nationalite</th>
            <th >code_postal</th>
        </tr>

    </thead>

    <tbody>
        <tr>
            <th>{{situation_familiale}}</th>
            <th>{{mail}}</th>
            <th>{{date_naissance}}</th>
            <th>{{pays}}</th>
               <th>{{ville}}</th>
            <th>{{nationalite}}</th>
            <th>{{code_postal}}</th>
        </tr>
    </tbody>
    </table>
    <table id="tb2">
    <thead>
        <tr>
            <th >tel_fixe</th>
            <th >tel_portable</th>
            <th>mot_de_passe</th>
            <th>id_admin</th>
            <th>id_emp_temps</th>
            <th>created_at</th>
            <th>updated_at</th>

        <!--
        'tel_fixe',
        'tel_portable',
        'mot_de_passe',
        'id_admin',
        'id_emp_temps',
        'created_at',
        'updated_at', -->
        </tr>

    </thead>

    <tbody>
        <tr>
            <th>{{tel_fixe}}</th>
            <th>{{tel_portable}}</th>
            <th>{{mot_de_passe}}</th>
            <th>{{id_admin}}</th>
            <th>{{id_emp_temps}}</th>
            <th>{{created_at}}</th>
            <th>{{updated_at}}</th>
        </tr>
    </tbody>
    </table>
    </div>
    <div>
    <ul>
    <li><router-link :to="{name: 'profList'}"  class="btnAjout" >Retour</router-link></li>
    </ul></div>
</template>

<script>
import axios from 'axios'
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'

const baseURL = 'http://127.0.0.1:8000/api/list_etudiants/'

export default {

  name: 'App',
  data () {
    return {
      id: this.$route.params.id,
      nom: this.$route.params.nom,
      prenom: this.$route.params.prenom,
      cin: this.$route.params.cin,
      sexe: this.$route.params.sexe,
      civilite: this.$route.params.civilite,
      situation_familiale: this.$route.params.situation_familiale,
      mail: this.$route.params.mail,
      date_naissance: this.$route.params.date_naissance,
      pays: this.$route.params.pays,
      ville: this.$route.params.ville,
      nationalite: this.$route.params.nationalite,
      code_postal: this.$route.params.code_postal,
      tel_fixe: this.$route.params.tel_fixe,
      tel_portable: this.$route.params.tel_portable,

      mot_de_passe: this.$route.params.mot_de_passe,
      id_admin: this.$route.params.id_admin,
      id_emp_temps: this.$route.params.id_emp_temps,
      created_at: this.$route.params.created_at,
      updated_at: this.$route.params.updated_at
    }
  },
  async created () {
    try {
      const res = await axios.get(baseURL)
      this.Admins = res.data
    } catch (e) {
      console.error(e)
    }
  },
  methods: {
    async addAdmin () {
      try {
        await axios.post('http://127.0.0.1:8000/api/list_admina/', {
          nom: this.Admin.nom,
          prenom: this.Admin.prenom,
          cin: this.Admin.cin,
          mot_de_passe: this.Admin.mot_de_passe
        })
        this.Admin.nom = ''
        this.Admin.prenom = ''
        this.Admin.cin = ''
        this.Admin.mot_de_passe = ''
      } catch (e) {
        console.error(e)
      }
    },
    async updateAdmin () {
      try {
        await axios.patch('http://127.0.0.1:8000/api/update_admin/' + this.Admin.id, {
          nom: this.Admin.nom,
          prenom: this.Admin.prenom,
          cin: this.Admin.cin,
          mot_de_passe: this.Admin.mot_de_passe
        })
        this.Admin.nom = ''
        this.Admin.prenom = ''
        this.Admin.cin = ''
        this.Admin.mot_de_passe = ''
      } catch (e) {
        console.error(e)
      }
    },
    async deleteAdmin ($id) {
      try {
        await axios.delete('http://127.0.0.1:8000/api/delete_admin/' + $id)
        console.log(this.Admin.id)
      } catch (e) {
        console.error(e)
      }
    }
  }
}
</script>

<style>
table,td {
    border: 1px solid #333;
    background: rgb(0, 0, 0, 0.5);
    position: absolute;
    top: 140px;
    left: 50px;
}
#tb2 {
    border: 1px solid #333;
    background: rgb(0, 0, 0, 0.5);
    position: absolute;
    top: 320px;
    left: 50px;
}
#tb3 {
    border: 1px solid #333;
    background: rgb(0, 0, 0, 0.5);
    position: absolute;
    top: 500px;
    left: 50px;
}

thead,tfoot {
    background-color: rgb(0, 0, 0,0.5);
    color: #fff;
}
textarea{
width: 300px;
height: 70px;
}
th{
color:#fff;
border:rgb(255, 255, 255) 1px solid  ;
padding: 25px;

}
th :hover{
background-color: rgb(255, 0, 0) ;
border:rgb(30, 39, 165) 5px solid  ;
border-radius: 4px;
padding: 20px;
}
.route_th{
background-color: rgb(66, 151, 63) ;
border:rgb(30, 165, 142) 5px solid  ;
border-radius: 4px;
padding: 20px;
color: black;
}
.btnAjout{
background-color: rgb(255, 0, 0) ;
border:rgb(30, 39, 165) 5px solid  ;
border-radius: 4px;
padding: 20px;
color: black;
   position: fixed;
    top: 128px;
    left: 1250px;

}
</style>

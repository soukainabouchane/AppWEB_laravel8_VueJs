<template>
<div>
    <table>
    <thead>
        <tr>
            <th >id</th>
            <th >le nom</th>
            <th >le prenom</th>
            <th >date_naissance</th>
            <th >ville_nais</th>
            <th >nationalite</th>
            <th >pays_nais</th>
        </tr>

    </thead>

    <tbody>
        <tr>
            <th>{{id}}</th>
            <th>{{nom}}</th>
            <th>{{prenom}}</th>
            <th>{{date_naissance}}</th>
               <th>{{ville_nais}}</th>
            <th>{{nationalite}}</th>
            <th>{{pays_nais}}</th>
        </tr>
    </tbody>
    </table>
    <table id="tb2">
    <thead>
        <tr>
            <th >date_naissance</th>
            <th >ville_nais</th>
            <th>adresse</th>
            <th>tel_fixe</th>
            <th>tel_portable</th>
            <th>cin</th>
            <th>cne</th>

        <!-- 'cne',
        'email',
        'password',
        'created_at',
        'updated_at',
        'id_admin',
        'id_pfe',
        'id_emp', -->
        </tr>

    </thead>

    <tbody>
        <tr>
            <th>{{date_naissance}}</th>
            <th>{{ville_nais}}</th>
            <th>{{adresse}}</th>
            <th>{{tel_fixe}}</th>
            <th>{{tel_portable}}</th>
            <th>{{cin}}</th>
            <th>{{cne}}</th>
        </tr>
    </tbody>
    </table>
    <table id="tb3">
    <thead>
        <tr>
            <th >email</th>
            <th >password</th>
            <th >created_at</th>
            <th >updated_at</th>
            <th >id_admin</th>
            <th>id_pfe</th>
            <th>tel_fixe</th>
            <th>id_emp</th>

        <!-- 'cne',
        'email',
        'password',
        'created_at',
        'updated_at',
        'id_admin',
        'id_pfe',
        'id_emp', -->
        </tr>

    </thead>

    <tbody>
        <tr>
            <th>{{email}}</th>
            <th>{{nationalite}}</th>
            <th>{{created_at}}</th>
            <th>{{updated_at}}</th>
            <th>{{id_admin}}</th>
            <th>{{id_pfe}}</th>
            <th>{{tel_fixe}}</th>
            <th>{{id_emp}}</th>
        </tr>
    </tbody>
    </table>

    </div>
    <div>
    <ul>
    <li><router-link :to="{name: 'etuList'}"  class="btnAjout" >Retour</router-link></li>
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

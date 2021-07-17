<template>
<div>
    <table>
    <thead>
        <tr>
            <th >id</th>
            <th >le nom</th>
            <th >le prenom</th>
            <th >sexe</th>
            <th >civilite</th>
            <th >situation_familiale</th>

            <!-- 'id',
        'nom',
        'prenom',
        'sexe',
        'civilite',
        'situation_familiale',
        'date_naissance',
        'ville_nais',
        'nationalite',
        'pays_nais',
        'adresse',
        'tel_fixe',
        'tel_portable',
        'cin',
        'cne',
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
        <tr v-for="adm in Admins" :key="adm.id">
            <th>{{adm.id}}</th>
            <th>{{adm.nom}}</th>
            <th>{{adm.prenom}}</th>
            <th>{{adm.sexe}}</th>
            <th>{{adm.civilite}}</th>
            <th>{{adm.situation_familiale}}</th>
         <th><router-link :to="{name:'etuPlusinformation' , params:{id: adm.id ,nom: adm.nom,prenom: adm.prenom,date_naissance: adm.date_naissance,ville_nais: adm.ville_nais ,nationalite: adm.nationalite ,pays_nais: adm.pays_nais ,adresse: adm.adresse ,tel_fixe: adm.tel_fixe ,tel_portable: adm.tel_portable ,cin: adm.cin ,cne: adm.cne ,email: adm.email ,password: adm.password ,created_at: adm.created_at ,updated_at: adm.updated_at ,id_admin: adm.id_admin ,id_pfe: adm.id_pfe ,id_emp: adm.id_emp ,}}" class="route_th" >plus de détail</router-link></th>
            <th><router-link :to="{name:'etuModifier' , params:{id: adm.id ,nom: adm.nom,prenom: adm.prenom,sexe: adm.sexe,civilite: adm.civilite,situation_familiale: adm.situation_familiale,date_naissance: adm.date_naissance,ville_nais: adm.ville_nais ,nationalite: adm.nationalite ,pays_nais: adm.pays_nais ,adresse: adm.adresse ,tel_fixe: adm.tel_fixe ,tel_portable: adm.tel_portable ,cin: adm.cin ,cne: adm.cne ,email: adm.email ,password: adm.password ,created_at: adm.created_at ,updated_at: adm.updated_at ,id_admin: adm.id_admin ,id_pfe: adm.id_pfe ,id_emp: adm.id_emp ,}}" class="route_th" >Modifier</router-link></th>
             <th><router-link :to="{name:'etuDelete' , params:{id: adm.id ,nom: adm.nom}}"  class="route_th" >Supprimer</router-link></th>
        </tr>
    </tbody>
    </table>

    </div>
    <div>
    <ul>
    <li><router-link :to="{name: 'etuAjouter'}"  class="btnAjout" >Ajouter un étudiant</router-link></li>
    </ul></div>
</template>

<script>
import axios from 'axios'
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'

const baseURL = 'http://127.0.0.1:8000/api/list_etudiants/'
const baseURLL = 'http://127.0.0.1:8000/api/list_note/'

export default {

  name: 'App',
  data () {
    return {
      Admins: [],
      todaName: '',
      notes: []
    }
  },
  async created () {
    try {
      const res = await axios.get(baseURL)
      this.Admins = res.data
      const ress = await axios.get(baseURLL)
      this.notes = ress.data
    } catch (e) {
      console.error(e)
    }
  },
  methods: {
    // async cherchnote ($id) {

    // },
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
        await axios.delete('http://127.0.0.1:8000/api/delete_etudiant/' + $id)
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
    left: 100px;
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
    left: 1155px;

}
</style>

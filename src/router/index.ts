import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import About from '../views/About.vue'
import allAdmin from '../views/allAdmin.vue'
import adminPage from '../views/Admin/adminPage.vue'
import adminLogin from '../views/Admin/adminLogin/adminLogin.vue'
import etuLogin from '../views/etudiant/etuLogin/etuLogin.vue'
import etuDelete from '../views/Admin/etuDelete.vue'
import pageHome from '../views/pageHome/pageHome.vue'
import etuModifier from '../views/Admin/etuModifier.vue'
import etuModifier2 from '../views/Admin/etuModifier2.vue'
import etuModifier3 from '../views/Admin/etuModifier3.vue'
import etuModifier4 from '../views/Admin/etuModifier4.vue'
import etuModifier5 from '../views/Admin/etuModifier5.vue'
import etuModifier6 from '../views/Admin/etuModifier6.vue'
import etuAjouter from '../views/Admin/etuAjouter.vue'
import etuAjouter6 from '../views/Admin/etuAjouter6.vue'
import etuAjouter2 from '../views/Admin/etuAjouter2.vue'
import etuAjouter3 from '../views/Admin/etuAjouter3.vue'
import etuAjouter4 from '../views/Admin/etuAjouter4.vue'
import etuAjouter5 from '../views/Admin/etuAjouter5.vue'
import utilisateurGes from '../views/Admin/utilisateurGes.vue'
import etuPlusinformation from '../views/Admin/etuPlusinformation.vue'
import profList from '../views/Admin/adminprof/profList.vue'
import profPlusinformation from '../views/Admin/adminprof/profPlusinformation.vue'
import profDelete from '../views/Admin/adminprof/profDelete.vue'
import profModifier from '../views/Admin/adminprof/profModifier.vue'
import profModifier2 from '../views/Admin/adminprof/profModifier2.vue'
import profModifier3 from '../views/Admin/adminprof/profModifier3.vue'
import profModifier4 from '../views/Admin/adminprof/profModifier4.vue'
import profModifier5 from '../views/Admin/adminprof/profModifier5.vue'
import profAjouter2 from '../views/Admin/adminprof/profAjouter2.vue'
import profAjouter3 from '../views/Admin/adminprof/profAjouter3.vue'
import profAjouter from '../views/Admin/adminprof/profAjouter.vue'
import profAjouter4 from '../views/Admin/adminprof/profAjouter4.vue'
import profAjouter6 from '../views/Admin/adminprof/profAjouter6.vue'
import profAjouter7 from '../views/Admin/adminprof/profAjouter7.vue'
import gestionDesnote from '../views/Admin/gestionDesnote.vue'
import etuHome from '../views/etudiant/etuHome.vue'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'pageHome',
    component: pageHome
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/allAdmin',
    name: 'allAdmin',
    component: allAdmin
  },
  {
    path: '/adminPage',
    name: 'adminPage',
    component: adminPage
  },
  {
    path: '/adminLogin',
    name: 'adminLogin',
    component: adminLogin
  },
  {
    path: '/utilisateurGes',
    name: 'utilisateurGes',
    component: utilisateurGes
  },
  {
    path: '/etuLogin',
    name: 'etuLogin',
    component: etuLogin
  },
  {
    path: '/etuList',
    name: 'etuList',
    component: () => import(/* webpackChunkName : *etuList* */'../views/Admin/etuList.vue')
  },
  {
    path: '/etuDelete/:id/:nom',
    name: 'etuDelete',
    component: etuDelete
  },
  {
    path: '/etuModifier/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier',
    component: etuModifier
  },
  {
    path: '/etuModifier2/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier2',
    component: etuModifier2
  },
  {
    path: '/etuModifier3/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier3',
    component: etuModifier3
  },
  {
    path: '/etuModifier4/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier4',
    component: etuModifier4
  },
  {
    path: '/etuModifier5/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier5',
    component: etuModifier5
  },
  {
    path: '/etuModifier6/:id/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuModifier6',
    component: etuModifier6
  },
  {
    path: '/etuAjouter',
    name: 'etuAjouter',
    component: etuAjouter
  },
  {
    path: '/etuAjouter2/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuAjouter2',
    component: etuAjouter2
  },
  {
    path: '/etuAjouter3/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuAjouter3',
    component: etuAjouter3
  },
  {
    path: '/etuAjouter4/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuAjouter4',
    component: etuAjouter4
  },
  {
    path: '/etuAjouter5/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuAjouter5',
    component: etuAjouter5
  },
  {
    path: '/etuAjouter6/:nom/:prenom/:sexe/:civilite/:situation_familiale/:date_naissance/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuAjouter6',
    component: etuAjouter6
  },
  {
    path: '/etuPlusinformation/:id/:nom/:prenom/:ville_nais/:nationalite/:pays_nais/:adresse/:tel_fixe/:tel_portable/:cin/:cne/:email/:password/:created_at/:updated_at/:id_admin/:id_pfe/:id_emp',
    name: 'etuPlusinformation',
    component: etuPlusinformation
  },
  {
    path: '/profPlusinformation/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profPlusinformation',
    component: profPlusinformation
  },
  {
    path: '/profList',
    name: 'profList',
    component: profList
  },
  {
    path: '/profDelete/:id/:nom',
    name: 'profDelete',
    component: profDelete
  },
  {
    path: '/profModifier/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profModifier',
    component: profModifier
  },
  {
    path: '/profModifier2/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profModifier2',
    component: profModifier2
  },
  {
    path: '/profModifier3/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profModifier3',
    component: profModifier3
  },
  {
    path: '/profModifier4/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profModifier4',
    component: profModifier4
  },
  {
    path: '/profModifier5/:id/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profModifier5',
    component: profModifier5
  },
  {
    path: '/profAjouter',
    name: 'profAjouter',
    component: profAjouter
  },
  {
    path: '/profAjouter2/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profAjouter2',
    component: profAjouter2
  },
  {
    path: '/profAjouter3/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profAjouter3',
    component: profAjouter3
  },
  {
    path: '/profAjouter4/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profAjouter4',
    component: profAjouter4
  },
  {
    path: '/profAjouter6/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profAjouter6',
    component: profAjouter6
  },
  {
    path: '/profAjouter7/:nom/:prenom/:cin/:sexe/:civilite/:situation_familiale/:mail/:date_naissance/:pays/:ville/:nationalite/:code_postal/:tel_fixe/:tel_portable/:mot_de_passe/:id_admin/:id_emp_temps/:created_at/:updated_at',
    name: 'profAjouter7',
    component: profAjouter7
  },
  {
    path: '/etuHome/:id',
    name: 'etuHome',
    component: etuHome
  },
  {
    path: '/gestionDesnote',
    name: 'gestionDesnote',
    component: gestionDesnote
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

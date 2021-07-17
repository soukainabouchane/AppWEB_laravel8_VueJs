<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
       'http://127.0.0.1:8000/api/list_admina/',
       'http://127.0.0.1:8000/api/update_admin/',
       'http://127.0.0.1:8000/api/delete_admin/',
       'http://127.0.0.1:8000/api/list_etudiants/',
       'http://127.0.0.1:8000/api/list_etudiant/',
       'http://127.0.0.1:8000/api/update_etudiant/',
       'http://127.0.0.1:8000/api/delete_etudiant/',
       
    
       'http://127.0.0.1:8000/api/list_emploi_tempss/',
       'http://127.0.0.1:8000/api/list_emploi_temps/',
       'http://127.0.0.1:8000/api/update_emploi_temps/',
       'http://127.0.0.1:8000/api/delete_emploi_temps/',

       'http://127.0.0.1:8000/api/update_list_prof/',
       'http://127.0.0.1:8000/api/list_prof/',
       'http://127.0.0.1:8000/api/list_profs/',
       'http://127.0.0.1:8000/api/delete_list_prof/',

       'http://127.0.0.1:8000/api/update_list_module/',
       'http://127.0.0.1:8000/api/list_module/',
       'http://127.0.0.1:8000/api/list_modules/',
       'http://127.0.0.1:8000/api/delete_list_module/',
      
    ];
}

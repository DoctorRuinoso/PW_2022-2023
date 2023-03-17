<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Para manejar excepciones.

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encuentra una vista disponible para esa peticion.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Convierte en mayuscula la primera letra.

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
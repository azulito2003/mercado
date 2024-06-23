<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class RegistroUsuarioController extends Controller
{
    public function index()
    {
        return view('registro_usuario');
    }

    public function guardar()
    {
        $model = new UsuarioModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellidos' => $this->request->getPost('apellidos'),
            'tutor' => $this->request->getPost('tutor'),
            'carrera' => $this->request->getPost('carrera'),
            'caso' => $this->request->getPost('caso'),
            'matricula' => $this->request->getPost('matricula'),
        ];

        $model->insert($data);

        return redirect()->to('/lista-usuarios');
    }

    public function lista()
    {
        $model = new UsuarioModel();

        $data['usuarios'] = $model->findAll();

        return view('lista_usuarios', $data);
    }
}

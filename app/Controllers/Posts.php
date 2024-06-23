<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class Posts extends Controller
{
    public function index()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->findAll();
        return view('posts/index', $data);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $postModel = new PostModel();
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $imagenes = [];
        $files = $this->request->getFiles();
        if ($files && isset($files['imagenes'])) {
            foreach ($files['imagenes'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $filePath = $file->store('uploads');
                    if ($filePath !== false) {
                        $imagenes[] = $filePath;
                    } else {
                        // Manejar el error de guardado del archivo
                        return redirect()->back()->with('error', 'Error al guardar el archivo.');
                    }
                }
            }
        }
        $data['imagenes'] = json_encode($imagenes);

        if ($postModel->save($data)) {
            return redirect()->to('/')->with('success', 'Post creado exitosamente.');
        } else {
            // Manejar el error al guardar el post en la base de datos
            return redirect()->back()->with('error', 'Error al guardar el post.');
        }
    }

    public function view($id)
    {
        $postModel = new PostModel();
        $data['post'] = $postModel->find($id);
        if (!$data['post']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se pudo encontrar el post con el ID: ' . $id);
        }
        return view('posts/view', $data);
    }
}

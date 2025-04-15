<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form_view');
    }

    public function submit()
    {
        $usuarioModel = new UsuarioModel();

        $rules = [
            'name'  => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
        ];

        $messages = [
            'name' => [
                'required'   => 'O campo nome é obrigatório.',
                'min_length' => 'O nome deve ter pelo menos 3 caracteres.',
            ],
            'email' => [
                'required'   => 'O campo e-mail é obrigatório.',
                'valid_email' => 'O e-mail informado não é válido.',
                'is_unique'  => 'Este e-mail já está cadastrado!',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $data = [
            'nome'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        $usuarioModel->insert($data);

        return redirect()->to('/')->with('success', 'Usuário cadastrado com sucesso!');
    }
}

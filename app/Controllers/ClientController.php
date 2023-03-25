<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Client;

class ClientController extends BaseController
{

    public function index()
    {
        $client             = new Client();
        $data['clients']    = $client->findAll();

        $data['title']      = 'Home';
        $data['header']     = view('layout/header', $data);

        return view('clients/index', $data);
    }

    public function create()
    {
        $data['title']  = 'Crear';
        $data['header'] = view('layout/header', $data);

        return view('clients/create', $data);
    }

    public function store()
    {
        $client = new Client();

        $validation = $this->validate([
            'name'      => 'required|min_length[3]',
            'lastname'  => 'required|min_length[3]',
            'phone'     => 'required',
            'email'     => 'required|valid_email',
        ]);

        if (!$validation) {
            $session = session();
            $session->setFlashdata('message', 'Revise la información');

            return redirect()->back()->withInput();
        }

        $data = [
            'name'          => $this->request->getVar('name'),
            'lastname'      => $this->request->getVar('lastname'),
            'phone'         => $this->request->getVar('phone'),
            'email'         => $this->request->getVar('email'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        $client->insert($data);
        return $this->response->redirect(site_url('/clients'));
    }

    public function edit($id = null)
    {
        $client = new Client();
        $data['client'] = $client->find($id);

        $data['title']  = 'Editar';
        $data['header'] = view('layout/header', $data);

        return view('clients/edit', $data);
    }

    public function update($id = null)
    {
        $client = new Client();

        $validation = $this->validate([
            'name'      => 'required|min_length[3]',
            'lastname'  => 'required|min_length[3]',
            'phone'     => 'required',
            'email'     => 'required|valid_email',
        ]);

        if (!$validation) {
            $session = session();
            $session->setFlashdata('message', 'Revise la información');

            return redirect()->back()->withInput();
        }

        $data = [
            'name'          => $this->request->getVar('name'),
            'lastname'      => $this->request->getVar('lastname'),
            'phone'         => $this->request->getVar('phone'),
            'email'         => $this->request->getVar('email'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        $client->update($id, $data);
        return $this->response->redirect(site_url('/clients'));
    }

    public function delete($id = null)
    {
        $client = new Client();
        $client->delete($id);
        return $this->response->redirect(site_url('/clients'));
    }
}

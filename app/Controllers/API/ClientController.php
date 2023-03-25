<?php

namespace App\Controllers\API;

use App\Models\Client;
use CodeIgniter\RESTful\ResourceController;

class ClientController extends ResourceController
{
    public function index()
    {
        $client     = new Client();
        $clients    = $client->findAll();

        return $this->respond($clients);
    }

    public function create()
    {
        $client = new Client();

        try {
            $data = $this->request->getJSON();
            if ($client->insert($data)) {
                $data->id = $client->insertID();
                return $this->respondCreated($data);
            } else {
                return $this->failValidationErrors($client->validation->listErrors());
            }
        } catch (\Exception $e) {
            return $this->failServerError('Server error');
        }
    }

    public function show($id = null)
    {
        $client     = new Client();
        $clientFound    = $client->find($id);

        if (!$clientFound) {
            return $this->failNotFound('Not found');
        }

        return $this->respond($clientFound);
    }

    public function update($id = null)
    {
        $client = new Client();

        $clientFound = $client->find($id);

        if (!$clientFound) {
            return $this->failNotFound('Not found');
        }

        try {
            $data = $this->request->getJSON();
            if ($client->update($id, $data)) {
                $data->id = $id;
                return $this->respondUpdated($data);
            } else {
                return $this->failValidationErrors($client->validation->listErrors());
            }
        } catch (\Exception $e) {
            return $this->failServerError('Server error');
        }
    }

    public function delete($id = null)
    {
        $client = new Client();

        $clientFound = $client->find($id);

        if (!$clientFound) {
            return $this->failNotFound('Not found');
        }

        try {
            if ($client->delete($id)) {
                return $this->respondDeleted($clientFound);
            } else {
                return $this->failValidationErrors($client->validation->listErrors());
            }
        } catch (\Exception $e) {
            return $this->failServerError('Server error');
        }
    }
}

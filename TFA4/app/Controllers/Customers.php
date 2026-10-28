<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = (new \App\Models\CustomerModel())->findAll();

        return view('customers/index', ['customers' => $customers]);
    }

    public function newCustomer(): string
    {
        return view('customers/new');
    }
    public function create()
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new \App\Models\CustomerModel();
        $model->insert([
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'created_at' => date('Y-m-d H:i:s'),
            'phone'      => $this->request->getPost('phone') ?: null,
    ]);

    return redirect()->to('/customers');
    }
    
    public function editCustomer(int $id): string
    {
         $customer = (new \App\Models\CustomerModel())->find($id);

        if ($customer === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Customer not found');
        }

        return view('customers/edit', ['customer' => $customer]);
    }

    public function show(int $id): string
    {
        $customer = (new \App\Models\CustomerModel())->find($id);

        if ($customer === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Customer not found');
        }

        return view('customers/show', ['customer' => $customer]);
    }

    public function update(int $id)
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new \App\Models\CustomerModel();
        if ($model->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Customer not found');
         }

        $model->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone') ?: null,
        ]);

        return redirect()->to('/customers');
    }

    public function delete(int $id)
    {
        $model = new \App\Models\CustomerModel();

        if ($model->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Customer not found');
        }

        $model->delete($id);

        return redirect()->to('/customers');
    }
}
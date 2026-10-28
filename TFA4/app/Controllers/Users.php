<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = (new \App\Models\UserModel())->findAll();
        
        return view('users/index', ['users' => $users]);
    }
    public function newUser(): string
    {
        return view('users/new');
    }
    public function create()
    {
        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
         ];

         if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new \App\Models\UserModel();
        $model->insert([
             'username'   => $this->request->getPost('username'),
             'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s'),
         ]);

        return redirect()->to('/users');
    }
    public function editUser(int $id): string
    {
        $user = (new \App\Models\UserModel())->find($id);

        if ($user === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('User not found');
        }

        return view('users/edit', ['user' => $user]);
    }

    public function show(int $id): string
    {
        $user = (new \App\Models\UserModel())->find($id);

        if ($user === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('User not found');
        }

        return view('users/show', ['user' => $user]);
    }

    public function update(int $id)
    {
        $model = new \App\Models\UserModel();
        $user = $model->find($id);

        if ($user === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('User not found');
        }

        $rules = [
            'username'  => 'required|max_length[50]',
            'full_name' => 'required|max_length[100]',
        ];

        if ($this->request->getPost('username') !== $user['username']) {
            $rules['username'] .= '|is_unique[users.username]';
        }

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $avatar = $this->request->getFile('avatar');

        $updateData = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ];

        if ($avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarRules = [
                'avatar' => [
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'mime_in[avatar,image/jpeg,image/png]',
                    ],
                ],
            ];

            if (! $this->validateData([], $avatarRules)) {
                return redirect()->back()->withInput();
            }

            $uploadPath = FCPATH . 'uploads';

            if (! is_dir($uploadPath) && ! mkdir($uploadPath, 0775, true) && ! is_dir($uploadPath)) {
                throw new \RuntimeException('Could not create the public uploads directory.');
            }

            $newName = $avatar->getRandomName();
            $avatar->move($uploadPath, $newName);

            $imagePath = $uploadPath . DIRECTORY_SEPARATOR . $newName;
            service('image')
                ->withFile($imagePath)
                ->fit(300, 300, 'center')
                ->save($imagePath);

            $updateData['avatar'] = $newName;
        }

        $model->update($id, $updateData);

        return redirect()->to('/users');
    }

    public function delete(int $id)
    {
        $model = new \App\Models\UserModel();

        if ($model->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('User not found');
        }

        $model->delete($id);

        return redirect()->to('/users');
    }
}
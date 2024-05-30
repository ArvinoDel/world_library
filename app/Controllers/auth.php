<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }

    public function login()
    {
        // dd('oke');
        // if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            } else {
                $model = new UserModel();
                $user = $model->where('username', $this->request->getVar('username'))->first();

                if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
                    $sessionData = [
                        'isLoggedIn' => true,
                        'username' => $user['username'],
                        'id' => $user['id']
                    ];
                    session()->set($sessionData);
                    session()->set('user', $user);
                    return redirect()->to('/')->with('success', 'Login successful!'); 
                } else {
                    return redirect()->back()->withInput()->with('error', 'Invalid username or password');
                }
            }
        // } else {
            // return view('pages/login'); 
        // }
    }



    public function register()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getVar('username'),
            'email'    => $this->request->getVar('email'),
            'telp'     => $this->request->getVar('phone'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        if ($model->insert($data)) {
            // Registrasi berhasil
            session()->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
            return redirect()->to('/login');
        } else {
            // Registrasi gagal
            session()->setFlashdata('error', 'Registrasi gagal.');
            return redirect()->back();
        }
    }


    public function update() {
        $validation = \Config\Services::validation();
    
        $validation->setRules([
            'usn' => 'required',
            'full_name' => 'required',
            'email' => 'required|valid_email',
            'birthday' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'file' => 'uploaded[file]|max_size[file,800]|ext_in[file,jpg,jpeg,png]'
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    
        $data = [
            'username' => $this->request->getPost('usn'),
            'nama' => $this->request->getPost('full_name'),
            'email' => $this->request->getPost('email'),
            'birthday' => $this->request->getPost('birthday'),
            'country' => $this->request->getPost('country'),
            'gender' => $this->request->getPost('gender'),
            'telp' => $this->request->getPost('telp'),
            'image' => $this->saveImage()
        ];
    
        
        $userModel = new UserModel();
        $userModel->update(session('user')['id'], $data);
        
        dd($this->saveImage());
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    private function saveImage()
    {
        $image = $this->request->getFile('img');
        $imageName = $image->getRandomName();
        $image->move('image/', $imageName);
        return $imageName;
    }
private function getCountryList() {
    return [
        'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda', 
        'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 
        'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 
        'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 
        'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Central African Republic', 
        'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Costa Rica', 'Croatia', 
        'Cuba', 'Cyprus', 'Czech Republic', 'Democratic Republic of the Congo', 'Denmark', 
        'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 
        'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini', 'Ethiopia', 'Fiji', 'Finland', 
        'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 
        'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 
        'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 
        'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 
        'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 
        'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 
        'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 
        'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 
        'North Korea', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestine', 'Panama', 
        'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 
        'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 
        'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 
        'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 
        'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 
        'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 
        'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tonga', 
        'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 
        'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 
        'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 
        'Zambia', 'Zimbabwe'
    ];
}


    public function logout(){
        session()->remove('user');
        return redirect()->to('/login');
    }
}

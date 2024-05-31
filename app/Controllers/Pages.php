<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home Page | WorldLibrary",
            'title_link' => 'home',
            'scrumb' => 'Home',
            'bg' => '../img/bg-library.jpg',
        ];

        return view('pages/index', $data);
    }

    public function contact(){
        $data =[
            'title' => "Contact Page | WorldLibrary",
            'title_link' => 'contact',
            'scrumb' => 'Contact',
            'bg' => '../img/bg-library6.jpg',
        ];
        return view('pages/contact', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About | WorldLibrary",
            'scrumb' => "About",
            'title_link' => 'about',
            'bg' => '../img/bg-library.png'
        ];
        return view('pages/about', $data);
    }

    public function product(){
        $data = [
            'title' => "Product | WorldLibrary",
            'scrumb' => "Product",
            'title_link' => 'product',
            'bg' => '../img/bg-library4.jpg',
        ];
        return view('pages/product', $data);
    }

    public function profile(){
        $data = [
            'title' => "Profile | WorldLibrary",
            'scrumb' => "Profile",
            'title_link' => 'profile',
        ];
        return view('pages/profile', $data);
    }

    // public function admin(){
    //     $data = [
    //         'title' => "Admin | WorldLibrary",
    //         'scrumb' => "Admin",
    //         'title_link' => 'admin',
    //         ];
    //         return view('pages/admin', $data);
    // }

    public function tambah(){
        $data = [
            'title' => "Add Product | WorldLibrary",
            'scrumb' => "Add Product",
            'title_link' => 'tambah',
            ];
            return view('pages/tambah', $data);
    }

    public function user(){
        $data = [
            'title' => "User | WorldLibrary",
            'scrumb' => "User",
            'title_link' => 'user',
            ];
            return view('pages/admin-user', $data);
    }

    public function pinjam(){
        $data = [
            'title' => "Pinjam | WorldLibrary",
            'scrumb' => "Pinjam",
            'title_link' => 'pinjam',
            ];
            return view('pages/pinjam', $data);
    }

    public function category(){
        $data = [
            'title' => "Category | WorldLibrary",
            'scrumb' => "Category",
            'title_link' => "category",
            'bg' => '../img/bg-library0.jpg',

        ];
        return view('pages/category', $data);
    }

    // public function detail(){
    //     $data = [
    //         'title' => "Detail | WorldLibrary",
    //         'scrumb' => "Detail",
    //         'title_link' => "detail",
    //     ];
    //     return view('/detail', $data);
    // }
    // public function contact()
    // {
    //     $data = [
    //         'title' => "Contact | Web Andika",
    //         'alamat' => [
    //             [
    //                 'tipe' => 'perusahaan',
    //                 'alamat' => 'Jl. Pangeran Agung No.56',
    //                 'kota' => 'Cirebon'
    //             ],
    //             [
    //                 'tipe' => 'kantor',
    //                 'alamat' => 'Jl. Pangeran Cakra Buana',
    //                 'kota' => 'Jakarta'
    //             ]
    //             ],
    //             'title_link' => 'contact'
    //     ];

    //     return view('pages/contact', ['title' => $data['title'],'title_link' => $data['title_link'], 'data' => $data['alamat']]);
    // }
}

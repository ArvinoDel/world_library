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

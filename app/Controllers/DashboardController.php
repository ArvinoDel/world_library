<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\UserActivityModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();
        $userActivityModel = new UserActivityModel();

        $data = [
            'books' => $bookModel->getBooksWithDetails(),
            'user_activities' => $userActivityModel->getUserActivities(),
            'title' => "Admin | WorldLibrary",
            'scrumb' => "Admin",
            'title_link' => 'admin',
        ];

        return view('/pages/admin', $data);
    }
}

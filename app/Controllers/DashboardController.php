<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function admin()
    {
        // Data dummy untuk admin (4. Mengambil Value dari Controller ke View)
        $data = [
            'title' => 'Admin Dashboard',
            'users' => [
                ['id' => 1, 'name' => 'Admin'],
                ['id' => 2, 'name' => 'Regular User']
            ],
            'stats' => [
                'total_users' => 2,
                'active_users' => 2
            ]
        ];

        return view('admin', $data);
    }

    public function user()
    {
        // Data dummy untuk user (4. Mengambil Value dari Controller ke View)
        $data = [
            'title' => 'User Dashboard',
            'tasks' => [
                'Complete project',
                'Attend meeting',
                'Submit report'
            ],
            'profile' => [
                'last_login' => date('Y-m-d H:i:s')
            ]
        ];

        return view('user', $data);
    }
}

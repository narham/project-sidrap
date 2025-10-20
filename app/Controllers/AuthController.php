<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeamsModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $session;
    protected $teamsmodel;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->teamsmodel = new TeamsModel();
    }


    public function index()
    {
        // Render the login view
        return view('auth/login');
    }

    // Login method to handle login form submission dan session cek
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validate credentials (this is just a simple example, use proper validation in production)
        $team = $this->teamsmodel->where('username', $username)->first();

        if ($team && password_verify($password, $team['password'])) {
            // Set session data
            $this->session->set([
                'isLoggedIn' => true,
                'team_id' => $team['id'],
                'name' => $team['name'],
                // Add other team data as needed
            ]);

            return redirect()->to('/dashboard'); // Redirect to dashboard or desired page
        } else {
            // Invalid credentials, redirect back with error
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    
    // Logout method to destroy the session
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/'); 
    }
}
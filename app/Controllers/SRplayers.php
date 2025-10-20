<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PlayersModel;
use App\Models\TeamsModel;
use Config\Session;

class SRplayers extends BaseController
{
   protected $session;
    protected $teamsmodel;
    protected $playersmodel;
    protected $pager;
    
    public function __construct()
    {
        
       
        $this->session = \Config\Services::session();
        $this->teamsmodel = new TeamsModel();
        $this->playersmodel = new PlayersModel();
        $this->pager = \Config\Services::pager();
        // Load other necessary models, libraries, etc.
        
    }
    
    public function index()
    {
         // // Check if user is logged in
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/'); // Redirect to login if not logged in
        }
         $team_id = $this->session->get('team_id');
        $team = $this->teamsmodel->find($team_id);
    //   Menampilkan Form Input Data Players
        $data = [
            'title' => 'Input Data Pemain',
            'team' => $team,
            'validation' => \Config\Services::validation()
        ];
        return view('players/sr_players', $data);    
    }

}
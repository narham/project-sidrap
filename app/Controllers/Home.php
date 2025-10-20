<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeamsModel;
use App\Models\PlayersModel;
use Config\Session;

class Home extends BaseController
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
    // menmpilkan data team dan players sesuai team yang login
    public function index()
    {
        // Check if user is logged in
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/'); // Redirect to login if not logged in
        }

        $team_id = $this->session->get('team_id');
        $team = $this->teamsmodel->find($team_id);
        $players = $this->playersmodel->getPlayersWithTeam($team_id);
        // $players = $this->playersmodel->getActivePlayersByTeam($team_id);
        // current page
        $currentPage = $this->request->getVar('page_players') ? $this->request->getVar('page_players') : 1;

        $data  = [
            'title' => 'Dashboard',
            'team' => $team,
            'players' => $players->paginate(10,'players'), // Paginate players, 10 per page
            'pager' => $this->playersmodel->pager,            
            // untuk nomor urut
            'currentPage' => $currentPage
        ];
        // dd($data);
        return view('dashboard', $data);
    }
   
}
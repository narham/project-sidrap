<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PlayersModel;
use App\Models\TeamsModel;
use Config\Session;

class PlayersController extends BaseController
{
    protected $playersModel;
    protected $teamsmodel;
    protected $session;
    protected $pager;
    public function __construct()
    {
        $this->playersModel = new PlayersModel();
        $this->teamsmodel = new TeamsModel();
        $this->session = \Config\Services::session();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        // // Check if user is logged in
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/'); // Redirect to login if not logged in
        }
        $team_id = $this->session->get('team_id');
        $team = $this->teamsmodel->find($team_id);
        // $players = $this->playersModel->getPlayersByTeam($team_id);
        $players = $this->playersModel->getActivePlayers($team_id); // Menampilkan data pemain dengan status aktif

        // current page
        $currentPage = $this->request->getVar('page_players') ? $this->request->getVar('page_players') : 1;

        $data = [
            'title' => 'Database Pemain',
            'team' => $team,
            'players' => $players->paginate(10,'players'), // Paginate players, 10 per page
            'pager' => $this->playersModel->pager,            
            // untuk nomor urut
            'currentPage' => $currentPage
        ];
        // dd($data);
        return view('players/players', $data);
    }

    // Menampilkan detail pemain berdasarkan ID
    public function view($id)
    {
        // Check if user is logged in
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/'); // Redirect to login if not logged in
        }
        $team_id = $this->session->get('team_id');
        $team = $this->teamsmodel->find($team_id);
        $player = $this->playersModel->find($id);       
        if (!$player) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Player not found');
        }
        $data = [
            'title' => 'Detail Pemain',
            'player' => $player,
            'team' => $team,            
        ];
        return view('players/player_detail', $data);
    }

    //pencarian pemain berdasarkan nama atau noid
    
       
}
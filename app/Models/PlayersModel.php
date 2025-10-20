<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayersModel extends Model
{
    protected $table            = 'players';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
       'team_id','name','panggilan','tanggal_lahir','noid','jenis_id',
       'jenis_kelamin','negara_lahir','provinsi_lahir','kota_lahir','kewarganegaraan',
       'kaki_utama','tinggi_badan','berat_badan','alamat','provinsi','kota','email','no_telp',
       'photo','created_at','updated_at','deleted_at'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

//    Menampilkan Data Players Sesuai Team
    public function getPlayersByTeam($team_id)
    {
        return $this->where('team_id', $team_id)->findAll();
    }

    // menampilkan data Players by team status  aktif
    public function getActivePlayersByTeam($team_id)
    {
        return $this->where('team_id', $team_id)
                    ->where('status_pemain', 'aktif')
                    ->findAll();
    }

//    Menampilkan Data lengkap Tim Sebelumnya
    public function getPlayersWithTeam($team_id)
    {
        return $this->select('players.*, teams.name as team_name')
        ->join('teams','players.teams_id = teams.id', 'left')
        ->where('players.teams_id', $team_id)
        // Old_team name
        ->join('teams as old_teams', 'players.old_teams = old_teams.id', 'left')
        ->select('old_teams.name as old_team_name');
    }
    
    // Menampilkan Data Player By Team Id dan Status_pemain Aktif dan status_pendaftaran diterima
    public function getActivePlayers($team_id)
    {
           return $this->where('teams_id', $team_id)
                        ->where('status_pemain', 'Aktif')
                        ->where('status_pendaftaran', 'Diterima');
    }

    // menghitung Jumlah Pemain Aktif Pada Tim Tertentu
    public function countActivePlayers($team_id)
    {
        return $this->where('teams_id', $team_id)
                    ->where('status_pemain', 'aktif')
                    ->where('status_pendaftaran', 'diterima')
                    ->countAllResults();
    }       
            //  Menghitunng Jumlah Pemain Status Pendaftaran Pending
    public function countPendingPlayers($team_id)
    {
        return $this->where('teams_id', $team_id)
                    ->where('status_pendaftaran', 'pending')
                    ->countAllResults();
    }

    // Pencarian Pemain berdasarkan Nama atau No ID
    public function searchPlayers($keyword)
    {
        return $this->like('name', $keyword)
                    ->orLike('noid', $keyword)
                    ->findAll();
    }
    
}
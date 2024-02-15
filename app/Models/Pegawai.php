<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai extends Model
{
    protected $table            = 'kepegawaian.kp_pegawai';
    protected $primaryKey       = 'peg_nip_baru';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['peg_nip_baru','peg_nrp','nama','peg_jender','jabatan_panjang','instansi','gol_kd','gol_pangkat2'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

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

    public function getDataJaksa($nip)
    {
        $query = $this->db->table('kepegawaian.kp_pegawai')
        ->where('peg_nip_baru', $nip)
        ->select('peg_nip_baru, peg_nrp, nama, gol_pangkat2, gol_kd, jabatan, instansi');

        $results = $query->get()->getRow();
        
        return $results;
    }
}

<?php namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'Id';
    protected $allowedFields = [
        'Kode_voucher','Tanggal_mulai_berlaku','Tanggal_akhir_berlaku','Besar_diskon','Aktif'
    ];
    protected $returnType = 'App\Entities\Diskon';
    protected $useTimestamps = false;
}
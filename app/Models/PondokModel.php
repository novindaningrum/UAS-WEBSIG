<?php
namespace App\Models;
use CodeIgniter\Model;
class PondokModel extends Model
{
 protected $table = 'sekolah'; // nama tabel
 protected $primaryKey = 'npps'; // primary key tabel
 protected $returnType = 'object';
 protected $useSoftDeletes = false;
 protected $useAutoIncrement = false;
 // nama semua field pada tabel
 protected $allowedFields =['npps','kode_kecamatan','nama_pondok','alamat_pondok','koordinat'];
 protected $skipValidation = true;
}


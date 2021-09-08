<?php namespace App\Models;

use CodeIgniter\Model;

class ContModel extends Model
{
    protected $table      = 'feedback';
    protected $primaryKey = 'id';

    protected $returnType = 'App\Entities\User';
    protected $useSoftDeletes = true;

    // 准許進事件的key(跟資料庫欄位無關)
    protected $allowedFields = ['username','email', 'subject','message'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'email' => 'required|valid_email',
        'subject' => 'required',
        'message' => 'required',
        
    ];

    protected $validationMessages = [
        'email' => [
          'valid_email' => 'Email不合法',
          'required' => 'Email不能為空'
        ],
        'subject' => [
          'is_unique' => 'subject不能重複哦',
        ],
        'message' => [
          'is_unique' => 'message不能重複哦',
        ],
        
      ];
    protected $skipValidation = false;

}

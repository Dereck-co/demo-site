<?php namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    protected $attributes = [
        'id' => null,
        'email' => null,
        'password' => null,
        'pass_confirm' => null,
        'password_hash' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null
    ];
    
    // 會依 "set + 屬性名稱" 的方式自動套用的邏輯
    public function setPassword(string $pass)
    {
        $this->attributes['password_hash'] = password_hash($pass, PASSWORD_BCRYPT);
        
        return $this;
    }

    //當登入成功時把user資訊存入session
    private function _saveToSession($user)
    {
        $session = session();
        $session->set('user',$user);

    }
    //如過登入要做什麼
    public function isLogin()
    {
        $session = session();
        return $session->has('user');
    }
    //存取已登入用戶sessioin
    public function getCurrentUser()
    {
        $session = session();
        return $session->get('user');
    }

    //處理登入訊息要帶email和password
    public function doLogin($email, $password)
    {
        $result = false;
        
        //$userModel = \App\Models\UserModel();
        $userModel = model('App\Models\UserModel');
        //找尋輸入email並填入實體然後比對資料庫，尋找第一筆

        $hash_pass = password_hash($password, PASSWORD_BCRYPT);

        $user = $userModel->where([
            'email' => $email
            ])->first();

        $isValid = password_verify($password, $user->password);

        if($isValid){
            $this->_saveToSession($user);
            $result = true;
        }
        return $result;
    }

    public function doLogout()
    {
        $session = session();
        $session->remove('user');
        // $session->destory();
    }

    public function doRegister($userData)
    {
        //初始化狀態
        $result = [
            'result' => false,
            'errMsg' => null
        ];
        //將資料填入實體
        $this->fill($userData);

        // $userModel = \App\Models\UserModel();
        $userModel = model('App\Models\UserModel');
        //將註冊資料填入資料庫時如果失敗就回傳errMsg，成功就將result回傳true
        if($userModel->save($userData) === false){
            $result['errMsg'] = $userModel->errors();
        }else{
            $result['result'] = true;
        }
            return $result;
    }
}
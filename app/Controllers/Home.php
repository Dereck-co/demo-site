<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      return view('pages/index');
    }
    public function setfetch()
    {
        $postData = $this->request->getJSON();
        return $this->response->setJSON($postData);
    }
    public function about()
    {
      return view('pages/about');
    }

    public function auth1(){
      return view('authors/yang');
	  }

	  public function auth2(){
      return view('authors/dereck');
	  }

    public function portfolio()
    {
      return view('pages/portfolio');
    }

    public function portfoliosingle()
    {
      return view('pages/portfoliosingle');
    }

    public function services()
    {
      return view('pages/services');
    }

    public function contact()
    {
      return view('pages/contact');
    }

    public function toLogin()
    {
      //初始化登入資訊值
      $result = [
        'result' => false,
        'errMsg' => '',
      ];

      //存取網頁請求值POST
      $method = $this->request->getMethod();

      //die是一中PHP函數當條件成立後直接跳出
      //檢查是否為AJAX資訊
      if(!$this->request->isAJAX()) die('bad request AJAX');

      //檢查網頁方法是否為POST
      if($method != 'post') die('bad request');

      $postData = $this->request->getJSON();
      $user = new \App\Entities\User();


      if($user->doLogin($postData->email, $postData->password)){
        $result['result'] = true;
      }else{
        $result['errMsg'] = '登入失敗，請確認帳戶及密碼是否正確';
      }

      return $this->response->setJSON($result);
    }

    public function toContact()
    {
      //初始化登入資訊值

      $result = [
        'result' => false,
        'errMsg' => '',
      ];

      //存取網頁請求值POST
      $method = $this->request->getMethod();

      //檢查是否為AJAX資訊
      if(!$this->request->isAJAX()) die('bad request AJAX');

      //檢查網頁方法是否為POST
      if($method != 'post') die('bad request');

      $postData = $this->request->getJSON();
      $user = new \App\Entities\User();

      if($user->isLogin()){
        $doRegist = $user->doContant((array)$postData);
        return $this->response->setJSON($doRegist);
      }else{
        $result['errMsg'] = '請先登入';
        return $this->response->setJSON($result);
      }
      
    }

    public function toRegister()
    {
      //存取網頁請求值POST
      $method = $this->request->getMethod();

      //檢查是否為AJAX資訊
      if(!$this->request->isAJAX()) die('bad request AJAX');

      //檢查網頁方法是否為POST
      if($method != 'post') die('bad reqiest');

      $postData = $this->request->getJSON();

      $user = new \App\Entities\User();

      $doRegist = $user->doRegister((array)$postData);

      return $this->response->setJSON($doRegist);
    }
    public function logout()
    {
      $user = new \App\Entities\User();
      $user->doLogout();
      //重新導向首頁
      // return redirect('/home/index');
      return redirect()->to('/home/index');
    }
}

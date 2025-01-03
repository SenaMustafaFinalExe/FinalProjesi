<?php

namespace App\Controllers;
use App\Models\panel;
class Admin extends BaseController
{
      protected $helpers = ['form'];
          public function adminpanel()
    {
       return view('Admin/admin_panel');
    }
    public function adminlogin()
    {
       return view('Theme/header').view('Admin/admin_giris').view('Theme/footer') ;
      }
     public function adminregister()
    {
       return view('Theme/header').view('Admin/admin_kayit').view('Theme/footer') ;
    
    }
      public function login()
    {
    $session=session();
    if($session->has('durum')&&$session->get('durum'))
    {
      return redirect()->to(base_url('adminpanel'));
    }else{
       
        if (! $this->request->is('post')) {
            return view('Theme/header').view('Admin/admin_giris').view('Theme/footer') ;
        }

        $rules = [
    'password' => 'required|max_length[255]|min_length[1]',
    'mail'    => 'required|max_length[254]'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validate($rules)) {
             return view('Theme/header').view('Admin/admin_giris').view('Theme/footer') ;
        }
   $veri = $this->validator->getValidated();
       $model= model('panel');
       $sor=$model->where(['password'=>$veri['password'],'mail'=>$veri['mail'],])->find();
    if(count($sor)>0)
    {

$user_info=[

'isim'=>'Mustafa Kemal',
'durum'=>true

];
$session->set($user_info);
   return redirect()->to(base_url('adminpanel'));
    }
    else
    {
     return view('Theme/header',['uyari'=>'Yanlış Kullanıcı Bilgileri!']).view('Admin/admin_giris').view('Theme/footer') ;
    }
    }
    
    
    }
}
 #   $exist=$this->Database->from('admin')->where(['mail'=>$this->input->post('mail'),'password'=>$this->input->post('password')]);      print_r($exist);

# kayıt kuralları $rules = [
 #           'name' => 'required|max_length[30]',
  #          'lastname' => 'required|max_length[30]',
 #           'phone' => 'required|max_length[11]',
 #   'password' => 'required|max_length[255]|min_length[10]',
 #   'con-pass' => 'required|max_length[255]|matches[password]',
 #   'mail'    => 'required|max_length[254]|valid_email',
 #       ];
?>
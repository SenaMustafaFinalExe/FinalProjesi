<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Theme/header').view('Pages/Anasayfa').view('Theme/footer') ;
    }
      public function uyegiris()
    {
       return view('Theme/header').view('Pages/uyelogin').view('Theme/footer') ;
    }
      public function register()
    {
       return view('Theme/header').view('Pages/register').view('Theme/footer') ;
    }
       public function workshop()
    {
       return view('Theme/header').view('Pages/workshop').view('Theme/footer') ;
    }
       public function Products()
    {
       return view('Theme/header').view('Pages/products').view('Theme/footer') ;
    }
       public function Cantalar()
    {
       return view('Theme/header').view('Pages/cantalar').view('Theme/footer') ;
    }
       public function Aksesuar()
    {
       return view('Theme/header').view('Pages/aksesuar').view('Theme/footer') ;
    }
       public function Care()
    {
       return view('Theme/header').view('Pages/care').view('Theme/footer') ;
    }
      public function ecourse()
    {
       return view('Theme/header').view('Pages/ecourse').view('Theme/footer') ;
    }
     public function contact()
    {
       return view('Theme/header').view('Pages/contact').view('Theme/footer') ;
    }
 public function aboutus()
    {
       return view('Theme/header').view('Pages/aboutus').view('Theme/footer') ;
    }
     public function workshoptotal()
    {
       return view('Theme/header').view('Pages/workshoptotal').view('Theme/footer') ;
    }
     public function whoweare()
    {
       return view('Theme/header').view('Pages/whoweare').view('Theme/footer') ;
    }
    

 

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gcuPages extends Controller
{
    public function branch()
    {
        return view('branch');
    }
    public function values()
    {
        return view('core-values');
    }

     public function fedt()
    {
        return view('fedt');
    }
     public function nec()
    {
        return view('nec');
    }
      public function fame()
    {
        return view('hall-of-fame');
    }
      public function events()
    {
        return view('events');
    }
      public function gallery()
    {
        return view('gallery');
    }
     public function projects()
    {
        return view('projects');
    }
     public function archives()
    {
        return view('archives');
    }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\SendMassMailJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SendMassEmailController extends Controller
{
   function index() : View {

        return view('welcome');
   }

   public function sendEmail()
    {
        $users = User::all();
        dispatch(new SendMassMailJob($users));

        return "Courriel envoyé avec succès!";
    }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\SendMassMailJob;
use App\Mail\SendMassMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

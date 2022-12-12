<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
 
class EmailController extends Controller
{
	public function index(){
 
		Mail::to("adilaarya694@gmail.com")->send(new Email());
 
		return "Email telah dikirim";
 
	}
 
}
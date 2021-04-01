<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Cart;
use Session;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function about()
    {
        return view('client.about');
    }
    public function service()
    {
        return view('client.service');
    }
    public function portfolio()
    {
        return view('client.portfolio');
    }
    public function contact()
    {
        return view('client.contacts');
    }
    public function portfolio_detail()
    {
        return view('client.portfolio-item');
    }
    public function sehgalmotors()
    {
        return view('client.sehgalmotor');
    }
    public function hmt()
    {
        return view('client.hmt');
    }
    public function mochicc()
    {
        return view('client.mochicc');
    }
    public function blog()
    {
        return view('client.blog');
    }
    
    public function contact_form(Request $request)
    {
        $note = $request->input('note');
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $data = array(
            'customer_name' => $name,
            'email' => $email,
            'note' => $note,
            'subject' => $subject,
        );
        Mail::send('contact_us', $data, function ($message) use ($email)
        {
            $message->from('support@picaudience.com', 'PICAUDIENCE');
            $message->to('support@picaudience.com')
                ->subject('Contact Us mail');
        });
        return redirect()->back()->with('message', 'Your message has been delivered successfully');
    }
}

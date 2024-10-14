<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }
    public function software()
    {
        return view('portal.software');
    }
    public function marketing()
    {
        return view('portal.marketing');
    }
    public function about_us()
    {
        return view('portal.about_us');
    }
    public function contact_us()
    {
        return view('portal.contact-us');
    }
    public function why_us()
    {
        return view('portal.why_us');
    }
    public function partner()
    {
        return view('portal.partner');
    }
    public function terms_and_conditions()
    {
        return view('portal.terms_and_conditions');
    }
    public function privacy_policy()
    {
        return view('portal.privacy_policy');
    }

    public function sendEmail($from, $to, $subject, $message)
    {
        $encodedPassword = urlencode('*Contacting99#');
        $dsn = "smtp://contact@merilsoft.com:$encodedPassword@webmail.merilsoft.com:587?verify_peer=0";
    
        try {
            // Set up the Transport with SMTP settings
            $transport = Transport::fromDsn($dsn);
    
            // Create the Mailer
            $mailer = new Mailer($transport);
    
            // Create the Email message
            $email = (new Email())
                ->from($from)
                ->to($to)
                ->subject($subject)
                ->text($message)
                ->html("<p>$message</p>");
    
            // Send the Email
            $mailer->send($email);
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log error or use session for debugging
            session()->flash('error', 'Failed to send email: ' . $e->getMessage());
            return false;
        }
    
        return true;
    }
    
    public function sendManualEmail(Request $request)
    {
        $name = $request->name;
        $email_p = $request->email;
        $number = $request->number;
        $message = $request->message;
    
        // Send emails
        $isSentToAdmin = $this->sendEmail(
            $email_p,
            'contact@merilsoft.com',
            'New Contact Request',
            "Name: $name\nEmail: $email_p\nNumber: $number\nMessage: $message"
        );
    
        $isSentToUser = $this->sendEmail(
            'contact@merilsoft.com',
            $email_p,
            'Thank you for contacting us',
            "Thank you for contacting us. We will get back to you soon."
        );
    
        // Check if both emails were sent successfully
        if ($isSentToAdmin && $isSentToUser) {
            session()->flash('success', 'Thank you for contacting us!');
        } else {
            session()->flash('error', 'Failed to send one or more emails.');
        }
    
        return redirect()->back();
    }
    

}
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

    public function sendManualEmail(Request $request)
{
    $name = $request->name;
    $email_p = $request->email;
    $number = $request->number;
    $message = $request->message;

    // URL-encoded password
    $encodedPassword = urlencode('ingdlvjfngwmdkkt');
    $dsn = "smtp://ahaduzzamanapon@gmail.com:$encodedPassword@smtp.gmail.com:587";

    // Set up the Transport with SMTP settings
    $transport = Transport::fromDsn($dsn);

    // Create the Mailer
    $mailer = new Mailer($transport);

    // Create the first Email message
    $email = (new Email())
        ->from('contact@merilsoft.com')
        ->to($email_p)
        ->subject('Contact Request Sent')
        ->text('Thank you for contacting us. We will get back to you soon.')
        ->html('<p>Thank you for contacting us. We will get back to you soon.</p>');

    // Send the first email and then the internal notification
    try {
        $mailer->send($email); // Send email to the customer

        // Now, send the internal notification email to the company
        $email2 = (new Email())
            ->from($email_p)
            ->to('contact@merilsoft.com')
            ->subject('New Contact Request')
            ->text("Name: $name\nEmail: $email_p\nNumber: $number\nMessage: $message")
            ->html("<p>Name: $name</p><p>Email: $email_p</p><p>Number: $number</p><p>Message: $message</p>");

        $mailer->send($email2); // Send internal notification

        // Flash success message
        session()->flash('success', 'The message should be Thank you for contacting us!');
        return redirect()->back();
    } catch (\Exception $e) {
        session()->flash('error', 'Failed to send email: ' . $e->getMessage());
        return redirect()->back();
    }
}

}

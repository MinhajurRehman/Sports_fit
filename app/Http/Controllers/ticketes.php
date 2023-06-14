<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class ticketes extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'membership' => 'required',
            'event' => 'required',
            'payment' => 'required',
        ]);
        $ticket_details = new ticket;
        $ticket_details->name = $request['name'];
        $ticket_details->email = $request['email'];
        $ticket_details->membership = $request['membership'];
        $ticket_details->event = $request['event'];
        $ticket_details->payment = $request['payment'];
        $ticket_details->save();

        $name = $request->name;
        $email = $request->email;
        $membership = $request->membership;
        $event = $request->event;
        $payment = $request->payment;

        // SMTP protocol mail sending
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Mailer = "smtp";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "albert.08774573829920@gmail.com";
        $mail->Password = "qnqxqmckwsvdjfgg";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom($email, "$name");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "$event , Ticket Purchaser Information";
        $mail->Body   = "Name: $name <br> , Membership card #: $membership <br> , Your Email: $email , <br> , Event Name: $event <br> , Payment Method: $payment";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully sent to user';
        } else {
            echo 'something went wrong';
        }
        $mail->setFrom($email, "SPORTS FIT");
        $mail->addAddress("albert.08774573829920@gmail.com");
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "$event , Tickets Information";
        $mail->Body   = "Name: $name <br> , Membership card #: $membership <br> , Your Email: $email , <br> , Event Name: $event <br> , Payment Method: $payment";
        $dt = $mail->send();
        if ($dt) {
        } else {
            echo 'something went wrong';
        }
        return redirect('/stripe');
    }
}

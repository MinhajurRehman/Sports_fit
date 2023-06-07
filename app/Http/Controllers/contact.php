<?php

namespace App\Http\Controllers;

use App\Models\contact as ModelsContact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'textarea' => 'required'
        ]);
        $contact_details = new ModelsContact;
        $contact_details->name = $request['name'];
        $contact_details->email = $request['email'];
        $contact_details->subject = $request['subject'];
        $contact_details->textarea = $request['textarea'];
        $contact_details->save();



        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $textarea = $request->textarea;

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
        $mail->Subject  = "Complain";
        $mail->Body   = "Name: $name <br> , Email: $email , <br> , Subject : $subject <br> , Message: $textarea";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully sent to user';
        } else {
            echo 'something went wrong';
        }
        return redirect('/');
    }
}

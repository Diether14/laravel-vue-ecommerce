<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    public function subscribe($email) 
    {
        return $email;
        $to = "cerico.renzmartin@gmail.com";
        $subject = "Subscribe to our newsletter";

        $message = "
        <html>
        <head>
            <title>Subscribe to our newsletter</title>
        </head>
        <body>
            <table style='width: 100%;'>
            <thead>
                <tr>
                    <th style='padding: 50px; background: #3d3c3c; color: white;'>
                        <h1>Newsletter</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style='padding: 100px;'>
                        <h2>Thank you for subscribing.</h2>
                        <br />
                        <br />
                        <a href='www.thegoodmobph.co' target='_blank' style='background: #fa9e05; color: white; padding: 20px 40px;'>Shop now!</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th style='padding: 50px; background: #3d3c3c; color: white;'>&copy; 2021. The Good Mob PH.</th>
                </tr>
            </tfoot>
            </table>
        </body>
        </html>";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: newsletter@thegoodmobph.co' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}

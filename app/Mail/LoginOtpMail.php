<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LoginOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;

    /**
     * Create a new message instance.
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Login OTP - BeAurex',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            htmlString: '
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Your Login OTP</title>
            </head>

            <body style="
                margin:0;
                padding:0;
                background-color:#f5f7fb;
                font-family:Arial, Helvetica, sans-serif;
                color:#1f2937;
            ">

                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="background-color:#f5f7fb; padding:40px 15px;">

                    <tr>
                        <td align="center">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="
                                    max-width:560px;
                                    background:#ffffff;
                                    border-radius:12px;
                                    overflow:hidden;
                                    box-shadow:0 4px 20px rgba(0,0,0,0.08);
                                ">

                                <!-- Header -->
                                <tr>
                                    <td align="center"
                                        style="
                                            background:#111827;
                                            padding:28px 20px;
                                        ">

                                        <div style="
                                            font-size:26px;
                                            font-weight:bold;
                                            color:#ffffff;
                                        ">
                                            BeAurex
                                        </div>

                                        <div style="
                                            margin-top:6px;
                                            font-size:13px;
                                            color:#d1d5db;
                                        ">
                                            Secure Account Verification
                                        </div>

                                    </td>
                                </tr>

                                <!-- Content -->
                                <tr>
                                    <td style="padding:40px 35px;">

                                        <h2 style="
                                            margin:0 0 15px;
                                            font-size:24px;
                                            color:#111827;
                                        ">
                                            Verify Your Login
                                        </h2>

                                        <p style="
                                            margin:0 0 20px;
                                            font-size:15px;
                                            line-height:1.7;
                                            color:#4b5563;
                                        ">
                                            Hello,
                                        </p>

                                        <p style="
                                            margin:0 0 25px;
                                            font-size:15px;
                                            line-height:1.7;
                                            color:#4b5563;
                                        ">
                                            We received a request to sign in to your
                                            BeAurex account. Please use the verification
                                            code below to continue.
                                        </p>

                                        <!-- OTP Box -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td align="center">

                                                    <div style="
                                                        display:inline-block;
                                                        padding:18px 35px;
                                                        background:#f3f4f6;
                                                        border:1px solid #e5e7eb;
                                                        border-radius:10px;
                                                        font-size:32px;
                                                        font-weight:bold;
                                                        letter-spacing:8px;
                                                        color:#111827;
                                                    ">
                                                        ' . $this->otp . '
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>

                                        <p style="
                                            margin:25px 0 0;
                                            text-align:center;
                                            font-size:14px;
                                            color:#6b7280;
                                        ">
                                            This verification code will expire in
                                            <strong>10 minutes</strong>.
                                        </p>

                                        <!-- Security Notice -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                            style="
                                                margin-top:30px;
                                                background:#fff7ed;
                                                border-left:4px solid #f97316;
                                            ">

                                            <tr>
                                                <td style="
                                                    padding:15px 18px;
                                                    font-size:13px;
                                                    line-height:1.6;
                                                    color:#7c2d12;
                                                ">
                                                    <strong>Security notice:</strong><br>
                                                    Never share this OTP with anyone.
                                                    Our team will never ask you for your
                                                    verification code.
                                                </td>
                                            </tr>

                                        </table>

                                        <p style="
                                            margin:30px 0 0;
                                            font-size:14px;
                                            line-height:1.6;
                                            color:#6b7280;
                                        ">
                                            If you did not request this login code,
                                            you can safely ignore this email.
                                        </p>

                                    </td>
                                </tr>

                                <!-- Footer -->
                                <tr>
                                    <td style="
                                        padding:22px 30px;
                                        background:#f9fafb;
                                        border-top:1px solid #e5e7eb;
                                        text-align:center;
                                    ">

                                        <p style="
                                            margin:0;
                                            font-size:12px;
                                            color:#9ca3af;
                                            line-height:1.6;
                                        ">
                                            This is an automated email. Please do not
                                            reply to this message.
                                        </p>

                                        <p style="
                                            margin:8px 0 0;
                                            font-size:12px;
                                            color:#9ca3af;
                                        ">
                                            &copy; ' . date('Y') . ' BeAurex. All rights reserved.
                                        </p>

                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                </table>

            </body>
            </html>
            ',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

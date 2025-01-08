<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactFormController extends Controller
{
    public function sendContact(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'agreement' => 'required|accepted',
        ]);

        // Format data untuk email
        $formData = [
            'First Name' => $validated['first_name'],
            'Last Name' => $validated['last_name'],
            'Email' => $validated['email'],
            'Job Title' => $validated['job_title'],
            'Company Name' => $validated['company_name'],
            'Industry' => $validated['industry'],
            'Phone' => $validated['phone'],
        ];

        try {
            // Inisialisasi PHPMailer
            $mail = new PHPMailer(true);

            // Pengaturan SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Ganti sesuai SMTP server Anda
            $mail->SMTPAuth = true;
            $mail->Username = 'ripp634@gmail.com'; // Alamat email pengirim
            $mail->Password = 'fvnycxgjrhwcxruv'; // App Password Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Pengaturan email
            $mail->setFrom('ripp634@gmail.com', 'Sangfor Cyber Command');
            $mail->addAddress('ripp634@gmail.com'); // Penerima email
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';

            // Isi email
            $emailBody = '
                <h1>New Contact Form Submission</h1>
                <p><strong>First Name:</strong> ' . $formData['First Name'] . '</p>
                <p><strong>Last Name:</strong> ' . $formData['Last Name'] . '</p>
                <p><strong>Email:</strong> ' . $formData['Email'] . '</p>
                <p><strong>Job Title:</strong> ' . $formData['Job Title'] . '</p>
                <p><strong>Company Name:</strong> ' . $formData['Company Name'] . '</p>
                <p><strong>Industry:</strong> ' . $formData['Industry'] . '</p>
                <p><strong>Phone:</strong> ' . $formData['Phone'] . '</p>
            ';

            $mail->Body = $emailBody;

            // Kirim email
            $mail->send();

            // Redirect ke halaman thank you
            return redirect()->route('thankyou');
        } catch (Exception $e) {
            // Tangani error
            return back()->with('error', 'Error sending email: ' . $mail->ErrorInfo);
        }
    }
}

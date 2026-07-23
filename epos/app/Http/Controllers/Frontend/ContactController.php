<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller
{
    private function loadDataFromJson()
    {
        $publicPath = resource_path();
        $file_name = '/data/data.json';
        $items = file_get_contents($publicPath . $file_name);
        return json_decode($items, true);
    }

    public function index()
    {
        $data = $this->loadDataFromJson();

        $chefOnlineEpos = $data['category'][0]['products'];
        $addons = $data['category'][1]['products'];

        $allProducts = array_merge($chefOnlineEpos, $addons);

        return view('frontend.contact', [
            'allProducts' => $allProducts,
            'filterProducts' => "",
        ]);
    }

    public function product($slug)
    {
        $data = $this->loadDataFromJson();

        $chefOnlineEpos = $data['category'][0]['products'];
        $addons = $data['category'][1]['products'];

        $allProducts = array_merge($chefOnlineEpos, $addons);

        $filteredProducts = "";

        foreach ($allProducts as $item) {
            if ($item['slug'] === $slug) {
                $filteredProducts = $item;
            }
        }

        // Render the view with the filtered products and the selected product
        return view('frontend.contact', [
            'allProducts' => $allProducts,
            'filterProducts' => $filteredProducts,
        ]);
    }


    public function store(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required | string | max:255',
            'email' => 'required | email',
            'business' => 'required | string | max:255',
            'postcode' => 'required | string',
            'enquiry' => 'required | nullable',
            'product' => 'nullable | string',
        ]);


        if ($validator->fails()) {
            return redirect()
                ->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        } else {

            $data = ['name' => $request->name, 'email' => $request->email, 'business' => $request->business, 'postcode' => $request->postcode, 'enquiry' => $request->enquiry, 'product' => $request->product];

            // dd($data);

            $user['to'] = 'mohibbullah.chefonline@gmail.com';

            Mail::send('frontend.mail', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject('Contact Us - Chef Online EPoS Quote');
                $message->from('mohibbullah.chefonline@gmail.com', 'Chef Online');
            });
        }

        return redirect()->route('thanks');
    }

    // public function OrderConfirmationEmail($to, $subject, $message, $sender_email, $from_text, $bcc_email, $restaurant_order_email_list)
    public function sendEmail(Request $request)
    {
        // dd("request", $request->all());
        // First, validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'business' => 'required|string|max:255',
            'postcode' => 'required|string',
            'enquiry' => 'nullable|string',
            'product' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ]);

        // If validation fails, return with errors
        if ($validator->fails()) {
            return redirect()
                ->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare the email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'business' => $request->business,
            'postcode' => $request->postcode,
            'enquiry' => $request->enquiry,
            'product' => $request->product,
        ];

        // Prepare the email content for the body in HTML table format
        $emailContent = "
        <html>
        <head>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                table, th, td {
                    border: 1px solid black;
                }
                th, td {
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h2>New Contact Form Submission</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <td>" . $data['name'] . "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>" . $data['email'] . "</td>
                </tr>
                <tr>
                    <th>Business</th>
                    <td>" . $data['business'] . "</td>
                </tr>
                <tr>
                    <th>Postcode</th>
                    <td>" . $data['postcode'] . "</td>
                </tr>
                <tr>
                    <th>Enquiry</th>
                    <td>" . ($data['enquiry'] ? $data['enquiry'] : 'N/A') . "</td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>" . ($data['product'] ? $data['product'] : 'N/A') . "</td>
                </tr>
            </table>
        </body>
        </html>
        ";

        // Create PHPMailer instance and configure SMTP settings
        $mail = new PHPMailer(true);
        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom('info@chefonline.co.uk', 'Chef Online EPoS');
            $mail->Username   = 'AKIA4FDBYMQAVBBEBPPE';  // AWS SES SMTP Username
            $mail->Password   = 'BEBqcbr8IM7BPtlFeGYHFpUCXwC580dlUJ8MVHdYNvo2';  // AWS SES SMTP Password
            $mail->Host       = 'email-smtp.eu-west-2.amazonaws.com';
            $mail->Port       = 587;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';

            // Optional: Add BCC if needed
            if (!empty($bcc_email)) {
                $mail->addBCC($bcc_email);
            }

            // Set recipient and other email details
            $mail->addAddress('hello@chefonline.co.uk');
            $mail->Subject    = 'Contact Us - Chef Online EPoS Quote';
            $mail->Body       = $emailContent;  // Sending the HTML formatted table content as the email body
            $mail->AltBody    = "Email Sent";   // Alternative body for non-HTML clients

            // Send email
            $mail->Send();

            // If the mail is sent using PHPMailer, redirect to the thank you page
            return redirect()->route('thanks');
        } catch (\Exception $e) {
            // Catch errors and return a failure message
            return back()->withErrors(['error' => 'There was an error sending your message. Please try again later.']);
        }
    }
}

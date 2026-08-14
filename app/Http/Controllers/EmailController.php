<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Gmail;
use App\Models\Trail;
use App\Mail\TrailMail;
use App\Mail\CompanyMail;
use App\Mail\CompanyGmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'service' => ['required'],
            'message' => ['required'],
        ]);

        $data = [
            'title' => 'Zingo Assist Email',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'message' => $request->message,
        ];

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $adminEmail = "sales@zingoassist.us";

        $emailDatabase = Email::create($data);

        $mail = Mail::to($adminEmail)->send(new CompanyMail($data));


        if ($mail && $emailDatabase) {
            return response()->json([
                'success' => 'Successfully stored info!'
            ]);
        } else {
            return response()->json([
                'failure' => 'Oops, Operation Failed!'
            ]);
        }
    }

    public function send_mail(Request $request)
    {
        $request->validate([
            'mail' => 'required',
        ]);

        $data = [
            'title' => "Zingo Assist Email",
            'mail' => $request->mail,
        ];


        $adminEmail = "sales@zingoassist.us";

        $gmailDatabase = Gmail::create($data);

        $mail = Mail::to($adminEmail)->send(new CompanyGmail($data));


        if ($gmailDatabase && $mail) {
            return redirect()->back()->with(['success' => "Successfully, email send!"]);
        } else {
            return redirect()->back()->with(['failure' => "Operation Failed!"]);
        }
    }

    public function trail_mail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        $data = [
            'title' => 'Zingo Assist 2 Days Free Trail Email',
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $adminEmail = "sales@zingoassist.us";

        $emailDatabase = Trail::create($data);

        $mail = Mail::to($adminEmail)->send(new TrailMail($data));


        if ($mail && $emailDatabase) {
            return response()->json([
                'success' => 'Successfully stored info!'
            ]);
        } else {
            return response()->json([
                'failure' => 'Oops, Operation Failed!'
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Mail\NewYearGreetings;
use App\Models\EmailTracker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class UserSendMailController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('panel.usermail', compact('users'));
    }
    public function post(Request $request)
    {

        function createSlug($string)
        {
            $slug = strtolower(trim($string));
            $slug = preg_replace('/[\s-]+/', '-', $slug);
            $slug = preg_replace('/[^a-z0-9-]+/', '', $slug);
            return $slug;
        }

        function createTracker($userID, $subject, $code)
        {
            $tracker = new EmailTracker();
            $tracker->mail_id = $userID;
            $tracker->mail_subject = createSlug($subject);
            $tracker->tracker = $code;
            $tracker->save();
        }

        foreach ($request->selected_users as $key => $value) {
            $trackerCode = Str::random(32);
            $mailData = [
                'subject' => $request->mail_subject,
                'content' => $request->mail_content,
                'tracker' => $trackerCode,
                // 'files' => [
                //     public_path('email/logo.png'),
                //     public_path('email/example.pdf'),
                // ],
            ];
            $userID = User::where('email', $value)->select('id')->first();
            Mail::to($value)->send(new NewYearGreetings($mailData));
            createTracker($userID->id, $request->mail_subject, $trackerCode);

            echo $key . ": " . $value . " - <b>SUCCESS</b><br>";

        }
        echo '<hr><a href="' . url()->previous() . '"><button class="btn btn-primary">Return Back</button></a>';

    }

    public function tracker($trackerCode)
    {
        $tracker = EmailTracker::where('tracker', $trackerCode)->first();
        if (!$tracker) {
            return false;
        }
        $tracker->show = true;
        $tracker->save();

        return response()->file(public_path('email/logo.png'));
    }




    public function trackerlist()
    {
        $trackers = EmailTracker::all();
        return view('panel.tracker', compact('trackers'));
    }
}

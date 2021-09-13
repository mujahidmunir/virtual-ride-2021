<?php
/**
 * Created by NYXLab.
 * User: Rifal Pramadita G
 * Date: 23/06/2021
 * Time: 21.49
 */

namespace App\Helpers;


use App\Models\Alert;
use App\Models\Sender;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Whatsapp
{
    private static $url;

    public function __construct()
    {

    }

    protected static function client($path, $number, $msg)
    {
        $host = env('APP_DOMAIN', 'localhost');

        $port = env('whatsapp_port', 3000);

        $url = "http://$host:$port";

        $client = new Client(['base_uri' => $url]);

        try {
            $request = $client->post("/api/" . $path, [
                'form_params' => [
                    'number' => $number,
                    'message' => $msg
                ]
            ]);
            return json_decode($request->getBody()->getContents());

        } catch (ClientException $exception) {
            return json_decode($exception->getResponse()->getBody()->getContents());
        }
    }

    public static function job($job)
    {
        $alert = Alert::whereName('job-created')->first();
        $text = $alert->message;
        $text = str_replace("\\n", "\n", $text);
        $text = str_replace("{name}", $job->name, $text);
        $text = str_replace("{description}", $job->description, $text);
        $text = str_replace("{started_at}", $job->started_at->format('d/M/Y') . " WIB", $text);
        $text = str_replace("{url}", route('vendor.job.show', $job->id), $text);
        self::saveLog($job->vendor->phon, $job->vendor->phone, $text);
    }


    public static function requestNew($internalRequest)
    {
        $internal = User::find($internalRequest->user_id);
        $alert = Alert::whereName('request-new')->first();
        $text = $alert->message;
        $text = str_replace("\\n", "\n", $text);
        $text = str_replace("{title}", $internalRequest->title, $text);
        $text = str_replace("{url}", route('admin.request.detail', $internalRequest->id), $text);
        $text = str_replace("{internal}", $internal->name, $text);

        $admins = User::role(['super admin'])->orderby('id')->get();
        foreach ($admins as $admin) {
            self::saveLog($admin->name, $admin->phone, $text);
        }
    }

    public static function requestSelected($internalRequest)
    {

        $arr = ['pic' => [$internalRequest->pic_name, $internalRequest->whatsapp, null], 'vendor' => [$internalRequest->vendor->name, $internalRequest->vendor->phone, $internalRequest->type_request->slug]];

        foreach ($arr as $jab => $data) {
            try {
                $alert = Alert::whereName("request-selected:$jab")->first();
                $text = $alert->message;

                $text = str_replace("\\n", "\n", $text);
                $text = str_replace("{name}", $internalRequest->vendor->name, $text);
                $text = str_replace("{title}", $internalRequest->title, $text);
                if ($data[2]) $text = str_replace("{url}", route("vendor.$data[2].request.show", [$internalRequest->id]), $text);
                self::saveLog($data[0], $data[1], $text);
            } catch (\Exception $exception) {
                dd($exception, $alert, $jab);
            }
        }

    }

    public static function requestFinish($internalRequest)
    {
        $admin = User::role(['super admin'])->orderby('id')->first();

        $arr = [[$internalRequest->pic_name, $internalRequest->whatsapp], [$admin->name, $admin->phone]];
        $alert = Alert::whereName("request-finish")->first();

        foreach ($arr as $data) {
            try {
                $text = $alert->message;

                $text = str_replace("\\n", "\n", $text);
                $text = str_replace("{title}", $internalRequest->title, $text);
                str_replace("{url}", $internalRequest->fileUrl(), $text);
                self::saveLog($data[0], $data[1], $text);

            } catch (\Exception $exception) {
                dd($exception);
            }
        }
    }

    private static function saveLog($name, $phone, $text)
    {
        $sender = new Sender();
        $sender->name = $name;
        $sender->phone = $phone;
        $sender->status = 'success';
        $sender->message = $text;
        sendWa($phone, $text, $sender, false);
        $sender->save();
    }

    public static function sendMessage($number, $msg)
    {
        return self::client('send-message', $number, $msg);
    }
}

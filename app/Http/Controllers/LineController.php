<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LineController extends Controller
{
    //
    public function index(Request $request)
    {
        error_log(json_encode($request->all()['events']));
        error_log(json_encode($request->all()['events'][0]['message']['text']));
        error_log(json_encode('1'));
        
        $replyToken = $request['events'][0]['replyToken'];
        $fromText = $request->all()['events'][0]['message']['text'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('LINE_CHANNEL_ASCCES_TOKEN')
        ])->post(
            'https://api.line.me/v2/bot/message/reply',
            [
                'replyToken' => $replyToken,
                'messages' => [
                    [
                        'type' => 'text',
                        'text' => 'hello'
                    ],
                    [
                        'type' => 'sticker',
                        'stickerId' => '10857',
                        'packageId' => '789'
                    ],
                    [
                        'type' => 'sticker',
                        'id' => '1501597916',
                        'stickerId' => '52002737',
                        'packageId' => '11537',
                        'stickerResourceType' => 'ANIMATION',
                        'keywords' => ['cony','sally','Staring','hi','whatsup','line','howdy','HEY','Peeking','wave','peek','Hello','yo','greetings']
                    ]
                ]
            ]
        );

        return response('ok', '200');
    }
}

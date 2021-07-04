// public function index(Request $request)
    // {
    //     $fromText = $request->all()['events'][0]['message']['text'] ?? '';
    //     $replyToken = $request['events'][0]['replyToken'];
    //     error_log(json_encode($fromText));
    //     error_log(json_encode($replyToken));

    //     switch ($fromText) {
    //         case '123':
    //             $messages=[
    //                 [
    //                     'type' => 'text',
    //                     'text' => '456'
    //                 ]
    //              ];
    //              $this->replyToLine( $replyToken,$messages);
    //             break;
            
    //         default:
    //         $messages=[
    //             [
    //                 'type' => 'text',
    //                 'text' => 'hello'
    //             ]
    //          ];
    //          $this->replyToLine( $replyToken,$messages);
    //             break;
    //     }

        

    //     return response('ok', '200');
    // }

    // public function replyToLine( $giveReplyToken,$messages){

    //      Http::withHeaders([
    //         'Content-Type' => 'application/json',
    //         'Authorization' => 'Bearer ' . env('LINE_CHANNEL_ASCCES_TOKEN')
    //     ])->post(
    //         'https://api.line.me/v2/bot/message/reply',
    //         [
    //             'replyToken' => $giveReplyToken,
    //             'messages' => 
    //                 $messages
                
    //         ]
    //     );

    // }
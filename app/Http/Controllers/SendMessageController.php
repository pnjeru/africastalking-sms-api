<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Log;
use App\SendMessage;
use Aft\SMS;

class SendMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = SendMessage::get();
        return view('sms.index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validate($request, [
              'recipient' => 'required',
              'message' => 'required',
          ]);

        $data = $request->all();
        $recepients = $data['recipient'];
        $message = $data['message'];

        $response = SMS::send($recepients , $message);

       
        if($response != null){
            foreach ($response as $value) {
                // dd($value->status=="Success"?!SendMessage::DELIVERED:SendMessage::DELIVERED);
                SendMessage::create([
                    'message_id' => $value->messageId,
                    'recipient' => $recepients,
                    'message' => $message,
                    'status' => $value->status=="Success"?!SendMessage::DELIVERED:SendMessage::DELIVERED,
                    'response' => $value->status,
                ]);

                if ($value->status == "Success") {
                    return redirect()->back()->with(['message' => 'Message sent successfully']);
                }else{
                   return redirect()->back()->with(['error' => 'An Error Occured while sending message']); 
                }
            }
            
        }            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

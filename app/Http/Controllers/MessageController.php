<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages = Message::orderBy('etat','ASC')->get();
        $messages_lu = Message::where('etat',1)->orderBy('created_at','ASC')->get();
        $messages_nonlu = Message::where('etat',0)->orderBy('created_at','ASC')->get();
        $count = 1;
        session(['messages_nonlu'=>$messages_nonlu,'messages_lu'=>$messages_lu]);

        return View('admin.messages.index',compact('messages','messages_lu','messages_nonlu','count'));
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

    public function createMessage(Request $request){
        //validation des champs du message

        $validator = Validator::make($request->all(), [
            'objet'=> 'required',
            'emetteur'=> 'required',
            'contenu'=> 'required',
        ],
            [
                'objet.required'=> 'objet du message obligatoire',
                'emetteur.required'=> 'L\'email / l\'emetteur ne doit pas etre vide' ,
                'contenu.required'=> 'Le contenu du message doit etre specifier',
            ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        /*si tout s'est bien passé on specifie le nom du repertoire pour uploader*/

        $message = Message::create($request->all());
        return redirect()->back()->with('message','succes de creation de message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}

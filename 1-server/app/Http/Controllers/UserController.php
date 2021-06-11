<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private $token_key = "I m Jervi, no body can do that, Okay, Contact me if u want to get hired cuz u catched my header Request, so I hate to admit my naivete, but yh this system isnt well secure, just api brk, al mohim, rani f la fac ta3 tmouchent. call me at 0558054300 and say :: I got yow ass Jervi with Txi Txi:: . so i can know what u are talking about";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {   
        $mmbr = Member::all();

        return $mmbr;
    }

    public function store()
    {
        //if(request()->header('Authosization') == $this->token_key)
        //{
            if(request('choice') == NULL)
            {
                return response('choice empty', 275);
            }

            if(request('full_name') == NULL)
            {
                return response('name empty', 276);
            }

            if (preg_match('~[0-9]+~', request('full_name'))) {
                return response('name contain not accepted symbol', 279);
            }

            if (strlen(request('full_name')) < 3) {
                return response('name too small', 280);
            }

            if(request('phone_number') == NULL)
            {
                return response('phone number empty', 277);
            }
            if(strlen(request('phone_number')) < 9 || strlen(request('phone_number')) < 10)
            {
                return response('phone number not correct', 278);
            }
            
            Member::create([
                'full_name' => request('full_name'),
                'phone_number' => request('phone_number'),
                'choice' => request('choice'),
            ]);

            return response('man that a succ', 200);
        //}

        /*else {
            return "you are not authorized to do that";
        }
        */
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

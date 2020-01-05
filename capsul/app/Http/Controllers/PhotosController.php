<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Photo::with('user')->latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
      */
      public function userphotoindex()
      {
          return Photo::where('user_id', auth()->user()->id)->with('user')->latest()->get();
      }

      /**
       * Show the form for creating a new resource.
       * @return \Illuminate\Http\Response
        */
        public function userinfoindex()
        {
            return User::where('id', auth()->user()->id)->get();
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
        //middleware

        //validation
        $this->validate($request, ['image' => 'required', 'neighborhood' => 'required', 'caption' => 'required', 'decade' => 'required']);

        //create the photo
        $photo = Photo::create([
            'user_id' => auth()->user()->id,
            'image' => $request->image,
            'neighborhood' => $request->neighborhood,
            'caption' => $request->caption,
            'decade' => $request->decade
        ]);

        //return it and include the user
        return  response($photo, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if($photo->user_id !== auth()->user()->id){
            return response()->json('Unauthorized', 401);
        }

        $photo->delete();

        $photos =  Photo::where('user_id', auth()->user()->id)->with('user')->latest()->get();

        return response($photos , 200);
    }
}

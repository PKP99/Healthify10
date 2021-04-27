<?php

namespace App\Http\Controllers;

use App\Models\userd;
use Illuminate\Http\Request;

class userdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userd = userd::all();

        return response()->json([
              "data" => $userd
        ]);
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
        $input = $request->all();
        
        $userd = new userd([
            'id' => $input -> get('id'),
            'Email' => $input -> get('Email'),
            'Weight' => $input -> get('Weight'),
            'Height' => $input -> get('Height'),
            'DOB' => $input -> get('DOB'),
            'Gender' => $input -> get('Gender'),
            'BMR' => $input -> get('BMR'),
            'created_at' => null,
            'updated_at' => null
        ]);
        $userd -> save();

        return response()->json([
            "success" => true,
            "message" => "Student created successfully.",
            "data" => $userd
        ]);
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userd  $userd
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userd = userd::find($id);
        if (is_null($userd)) {
        return $this->sendError('Student not found.');  
        }
        else{
        return response()->json([
        "success" => true,
        "message" => "Student retrieved successfully.",
        "data" => $userd
        ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userd  $userd
     * @return \Illuminate\Http\Response
     */
    public function edit(userd $userd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userd  $userd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request['id'];
        
        if (userd::where('id', $id)->exists()) {
            $userd = userd::find($id);
        $input = $request->all();

        $userd->Email = $input['Email'];
        $userd->Weight = $input['Weight'];
        $userd->Height = $input['Height'];
        $userd->DOB = $input['DOB'];
        $userd->Gender = $input['Gender'];
        $userd->BMR = $input['BMR'];
        $userd->save();
        
        
        return response()->json([
        "success" => true,
        "message" => "Student updated successfully.",
        "data" => $userd
        ]);
        }else{
            return response()->json([
                "message" => "Details not found"
              ], 404);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userd  $userd
     * @return \Illuminate\Http\Response
     */
    public function destroy(userd $userd)
    {
        //
    }
}

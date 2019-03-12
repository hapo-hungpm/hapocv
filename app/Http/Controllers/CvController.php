<?php

namespace App\Http\Controllers;

use App\Cv;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //progressing...
        $cvs = Cv::paginate(5);
        return view('cvs.index', compact('cvs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //is progressing...
        $userId = Auth::user()->id;
        $cv = new Cv();
        $cv->email = $request->email;
        $cv->firstname = $userId;
        $cv->lastname = 'hihi';
        $cv->user_id = $userId;
        $cv->date_of_birth = $request->date_of_birth;
        $cv->facebook = $request->facebook;
        $cv->skype = $request->skype;
        $cv->chatwork = $request->chatwork;
        $cv->address = $request->address;
        $cv->image = '';
        $cv->position = $request->position;
        $cv->summary = $request->skills;
        $cv->image_mini = '';
        $cv->status = '';
        $cv->professional_skill_title = $request->professional_skill_title;
        $cv->personal_skill_title = $request->personal_skill_title;
        $cv->work_experience_title = $request->work_experience_title;
        $cv->education_title = $request->education_title;
        $cv->save();
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

    public function showAllCv()
    {
        $cvs = Cv::paginate(5);
        return view('cvs.index', compact('cvs'));
    }
}

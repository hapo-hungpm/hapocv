<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\Company;
use App\Models\School;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Cv::where('user_id', Auth::id())
            ->orderby('id', 'DESC')
            ->paginate(2);
        return view('cvs.index', compact('cvs'));
    }

    public function create()
    {
        return view('cvs.create');
    }

    public function store(Request $request)
    {
        //is progressing...
        $data = array_merge($request->all(), ['user_id' => Auth::user()->id]);
        $cv = Cv::create($data);
        $cv->save();

        $skills = json_decode($request->skills);
        foreach ($skills as $skill) {
            $skillId = Skill::firstOrCreate(['name' => $skill->name, 'type' => $skill->type])->id;
            $cv->skills()->attach(
                $skillId,
                ['percent' => $skill->percent]);
        }

        $work_experiences = json_decode($request->work_experiences);
        foreach ($work_experiences as $work_experience) {
            $companyId = Company::firstOrCreate(['name' => $work_experience->company_name])->id;
            $data = array_merge((array)$work_experience, ['cv_id' => $cv->id, 'company_id' => $companyId]);
            WorkExperience::create($data);
        }

        $educations = json_decode($request->educations);
        foreach ($educations as $education) {
            $schoolId = School::firstOrCreate(['name' => $education->school_name])->id;
            $data = array_merge((array)$education, ['cv_id' => $cv->id, 'school_id' => $schoolId]);
            Education::create($data);
        }

        $references = json_decode($request->references);
        foreach ($references as $reference) {
            $data = array_merge((array)$reference, ['cv_id' => $cv->id]);
            Reference::create($data);
        }

        return 'Success!';
    }


    public function show($id)
    {
        //is progressing...
    }

    public function edit($id)
    {
        //is progressing...
    }

    public function update(Request $request, $id)
    {
        //is progressing...
    }

    public function destroy($id)
    {
        //is progressing...
    }

    public function showAllCvs()
    {
        $cvs = Cv::select(['id', 'title', 'user_id'])
            ->orderby('id', 'DESC')
            ->paginate(env('PAGINATION'));
        return view('system_management.cvs.index', compact('cvs'));
    }
}
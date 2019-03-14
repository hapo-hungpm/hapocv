<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Education;
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
        //is progressing...
        $cvs = Cv::paginate(env('PAGINATION'));
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
            if (!Skill::where('name', $skill->name)->exists()) {
                $newSkill = new Skill();
                $newSkill->name = $skill->name;
                $newSkill->type = $skill->type;
                $newSkill->save();
            }
            $cv->skills()->attach(
                Skill::where('name', $skill->name)->first()->id,
                ['percent' => $skill->percent]);
        }

        $work_experiences = json_decode($request->work_experiences);
        foreach ($work_experiences as $work_experience) {
            if (!Company::where('name', $work_experience->company_name)->exists()) {
                $newCompany = new Company();
                $newCompany->name = $work_experience->company_name;
                $newCompany->address = '';
                $newCompany->save();
            }
            $companyId = Company::where('name', $work_experience->company_name)->first()->id;
            $data = array_merge((array)$work_experience, ['cv_id' => $cv->id, 'company_id' => $companyId]);
            $work_experience = WorkExperience::create($data);
            $work_experience->save();
        }

        $educations = json_decode($request->educations);
        foreach ($educations as $education) {
            if (!School::where('name', $education->school_name)->exists()) {
                $newSchool = new School();
                $newSchool->name = $education->school_name;
                $newSchool->address = '';
                $newSchool->save();
            }
            $schoolId = School::where('name', $education->school_name)->first()->id;
            $data = array_merge((array)$education, ['cv_id' => $cv->id, 'school_id' => $schoolId]);
            $education = Education::create($data);
            $education->save();
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

    public function showAllCv()
    {
        $cvs = Cv::paginate(env('PAGINATION'));
        return view('system_management.cvs.index', compact('cvs'));
    }
}

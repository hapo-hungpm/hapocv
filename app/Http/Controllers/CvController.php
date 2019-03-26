<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use App\Models\Cv;
use App\Models\Education;
use App\Models\Portfolio;
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

    public function store(StoreCvRequest $request)
    {
        //is progressing...

        $imageName = "defaultAvatar.jpg";
        $imageMiniName = "defaultAvatar.jpg";
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . 'jpg';
            $request->file('image')->storeAs('public/avatar', $imageName);
        }

        if ($request->hasFile('image_mini')) {
            $imageMiniName = uniqid() . '.' . 'jpg';
            $request->file('image_mini')->storeAs('public/avatar', $imageMiniName);
        }

        $data = array_merge($request->all(),
            [
                'user_id' => Auth::user()->id,
                'image' => $imageName,
                'image_mini' => $imageMiniName
            ]);
        $cv = Cv::create($data);
        $cv->save();

        $skills = $request->skills;
        foreach ($skills as $skill) {
            $skillId = Skill::firstOrCreate(['name' => $skill['name'], 'type' => $skill['type']])->id;
            $cv->skills()->attach(
                $skillId,
                ['percent' => $skill['percent']]);
        }

        $work_experiences = $request->work_experiences;
        foreach ($work_experiences as $work_experience) {
            $companyId = Company::firstOrCreate(['name' => $work_experience['company_name']])->id;
            $data = array_merge((array)$work_experience, ['cv_id' => $cv->id, 'company_id' => $companyId]);
            WorkExperience::create($data);
        }

        $educations = $request->educations;
        foreach ($educations as $education) {
            $schoolId = School::firstOrCreate(['name' => $education['school_name']])->id;
            $data = array_merge((array)$education, ['cv_id' => $cv->id, 'school_id' => $schoolId]);
            Education::create($data);
        }

        $portfolios = $request->portfolios;
        foreach ($portfolios as $portfolio) {
            $data = array_merge((array)$portfolio, ['cv_id' => $cv->id]);
            Portfolio::create($data);
        }

        $references = $request->references;
        foreach ($references as $reference) {
            if (gettype($reference['image_ref']) == 'object') {
                $imageRefName = uniqid() . '.' . 'jpg';
                $reference['image_ref']->storeAs('public/avatar', $imageRefName);
            }
            else
                $imageRefName = "defaultReferenceAvatar.jpg";
            $data = array_merge((array)$reference, ['cv_id' => $cv->id, 'image' => $imageRefName]);
            Reference::create($data);
        }

        return $cv->id;
    }


    public function show($id)
    {
        $cv = auth()->user()->cvs()->findOrFail($id);
        $skills =  $cv->skills;
        $educations = $cv->educations;
        $work_experiences = $cv->workExperiences;
        $portfolios = $cv->portfolios;
        $references = $cv->references;

        return view('cvs.show', compact('cv','skills', 'educations', 'work_experiences', 'portfolios', 'references'));
    }

    public function edit($id)
    {
        $cv = auth()->user()->cvs()->findOrFail($id);
        $skills =  $cv->skills;
        $educations = $cv->educations;
        $work_experiences = $cv->workExperiences;
        $portfolios = $cv->portfolios;
        $references = $cv->references;

        return view('cvs.edit', compact('cv','skills', 'educations', 'work_experiences', 'portfolios', 'references'));
    }

    public function update(Request $request, $id)
    {
        //is progressing...
        $cv = auth()->user()->cvs()->findOrFail($id);
        $imageName = $cv->image;
        $imageMiniName = $cv->image_mini;
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . 'jpg';
            $request->file('image')->storeAs('public/avatar', $imageName);
        }

        if ($request->hasFile('image_mini')) {
            $imageMiniName = uniqid() . '.' . 'jpg';
            $request->file('image_mini')->storeAs('public/avatar', $imageMiniName);
        }

        $data = array_merge($request->all(), ['image' => $imageName, 'image_mini' => $imageMiniName]);
        $cv->update($data);

        $data = [];
        $skills = $request->skills;
        foreach ($skills as $skill) {
            $skillId = Skill::firstOrCreate(['name' => $skill['name'], 'type' => $skill['type']])->id;
            $data[$skillId] = ['percent' => $skill['percent']];
        }
        $cv->skills()->sync($data);

        $cv->workExperiences()->delete();
        $work_experiences = $request->work_experiences;
        foreach ($work_experiences as $work_experience) {
            $companyId = Company::firstOrCreate(['name' => $work_experience['company_name']])->id;
            $data = array_merge((array)$work_experience, ['cv_id' => $cv->id, 'company_id' => $companyId]);
            WorkExperience::create($data);
        }
        $cv->educations()->delete();
        $educations = $request->educations;
        foreach ($educations as $education) {
            $schoolId = School::firstOrCreate(['name' => $education['school_name']])->id;
            $data = array_merge((array)$education, ['cv_id' => $cv->id, 'school_id' => $schoolId]);
            Education::create($data);
        }

        $cv->portfolios()->delete();
        $portfolios = $request->portfolios;
        foreach ($portfolios as $portfolio) {
            $data = array_merge((array)$portfolio, ['cv_id' => $cv->id]);
            Portfolio::create($data);
        }

        $cv->references()->whereIn('id',  $request->deleted_references)->delete();
        return explode('/', $request->deleted_references);
        $references = $request->references;
        foreach ($references as $reference) {
            if ($reference['id'] === 'undefined') {
                if (gettype($reference['image_ref']) == 'object') {
                    $imageRefName = uniqid() . '.' . 'jpg';
                    $reference['image_ref']->storeAs('public/avatar', $imageRefName);
                }
                else
                    $imageRefName = "defaultReferenceAvatar.jpg";
                $data = array_merge((array)$reference, ['cv_id' => $cv->id, 'image' => $imageRefName]);
                Reference::create($data);
            }
            else {
                $existedRef = $cv->references()->findOrFail($reference['id']);
                $imageRefName = $existedRef->image;
                if (gettype($reference['image_ref']) == 'object') {
                    $imageRefName = uniqid() . '.' . 'jpg';
                    $reference['image_ref']->storeAs('public/avatar', $imageRefName);
                }
                $data = array_merge((array)$reference, ['cv_id' => $cv->id, 'image' => $imageRefName]);
                $cv->references()->findOrFail($reference['id'])->update($data);
            }
        }

        return $request;
    }

    public function destroy($id)
    {
        //is progressing...
    }

    public function showAll()
    {
        $cvs = Cv::select(['id', 'title', 'user_id'])
            ->orderby('id', 'DESC')
            ->paginate(env('PAGINATION'));
        return view('system_management.cvs.index', compact('cvs'));
    }
}

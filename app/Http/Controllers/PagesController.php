<?php


namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Job;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactsCreative()
    {
        return view('page.contacts_creative');
    }

    public function contactsImage()
    {
        return view('page.contacts_image');
    }

    public function contactsMap()
    {
        return view('page.contacts_map');
    }

    public function contacts()
    {
        return view('page.contacts');
    }

    public function indexCreative()
    {
        return view('page.index_creative');
    }

    public function indexImage()
    {
        return view('page.index_image');
    }

    public function indexOnePage()
    {
        return view('page.index_onepage');
    }

    public function indexPersonal()
    {
        return view('page.index_personal');
    }

    public function indexSlider()
    {
        return view('page.index_slider');
    }

    public function indexVideo()
    {
        return view('page.index_video');
    }

    public function index()
    {
        return view('page.index');
    }

    public function resumeCreative()
    {
        return view('page.resume_creative');
    }

    public function resumeImage()
    {
        return view('page.resume_image');
    }

    public function resume()
    {
        return view('page.resume');
    }

    public function workSingleCreative()
    {
        return view('page.work_single_creative');
    }

    public function workSingleImage()
    {
        return view('page.work_single_image');
    }

    public function workSingle()
    {
        return view('page.work_single');
    }

    public function worksCreative()
    {
        return view('page.works_creative');
    }

    public function works()
    {
        return view('page.works');
    }


    public function perezIndex()
    {
        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }
        $user = auth()->user();

        $skill = Skill::where('user_id', $user->id)->first();
        $skills = Skill::where('user_id', $user->id)->get();
        $experience = Job::where('user_id',$user->id)->get();
        $education = Education::where('user_id',$user->id)->get();
        $projects = Project::where('user_id',$user->id)->get();
        return view('perezLight.index', compact('skills','experience','education','user','skill','projects'));
    }

    public function perezAbout()
    {

        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }
        $user = auth()->user();

        $skill_name = Skill::where('user_id', $user->id)->first();
        $job_count = Job::where('user_id',$user->id)->count();
        $job = Job::where('user_id',$user->id)->get();
        $education = Education::where('user_id',$user->id)->get();
        $experience = Job::all();
        $skills = Skill::where('user_id',$user->id)->get();
        return view('perezLight.about', compact('user', 'skill_name','job_count','experience','job','education','skills'));
    }




    public function perezBlog()
    {
        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }

        $user = auth()->user();
        $skills = Skill::where('user_id', $user->id)->get();
        return view('perezLight.blog',compact('skills'));
    }

    public function perezBlogDetail( $username, $id)
    {
        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }
        $user = User::where('username', $username)->first();
        if (!$user) {
            abort(404, 'User not found.');
        }
        $skills = Skill::where('id', $id)->where('user_id', $user->id)->first();
        if (!$skills) {
            abort(404, 'Blog post not found.');
        }
        return view('perezLight.blog-details', compact('user', 'skills'));
    }

    public function perezAllBlogDetail( )
    {
        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }
        $users = auth()->user();
        $user = User::where('id', $users->id)->first();

        $skills = Skill::where('user_id', $users->id)->first();
        if (!$skills) {
            abort(404, 'Blog post not found.');
        }
        return view('perezLight.blog-details',compact('user','skills') );
    }



    public function perezContact()
    {

        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }

        $user = auth()->user();
        $contact = Skill::where('user_id', $user->id)->get();
        return view('perezLight.contact', compact('user'));
    }

    public function perezProjects()
    {

        if (!auth()->check()) {
            return redirect()->route('admin.auth.login')->with('error', 'Please log in first.');
        }

        $user = auth()->user();
        $projects = Project::where('user_id', $user->id)->get();
        return view('perezLight.projects',compact('projects'));
    }

    public function perezProjectsDetail($username, $id)
    {
        $user = User::where('username', $username)->first();

        if (!$user) {
            abort(404, 'User not found.');
        }

        $project = Project::where('id', $id)->where('user_id', $user->id)->first();

        if (!$project) {
            abort(404, 'Project not found.');
        }

        return view('perezLight.project_details', compact('user', 'project'));
    }


}

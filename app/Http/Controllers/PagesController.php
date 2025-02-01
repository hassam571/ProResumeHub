<?php


namespace App\Http\Controllers;

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
}

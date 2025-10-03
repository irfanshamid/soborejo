<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;
use App\Models\Project;
use App\Models\Headline;

class ProjectController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $projectBg = Headline::first();
        $projectData = Project::get();
        return view('projects.index', compact(['projectData','projectBg']));
    }

    public function details($id)
    {
        $projectBg = Headline::first();
        $project = Project::whereId($id)->first();
        if (!$project) {
            abort(404);
        }

        return view('projects.details', compact(['project', 'projectBg']));
    }
}

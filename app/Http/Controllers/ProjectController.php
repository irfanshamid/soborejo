<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use App\Models\Project;
use App\Services\ThemeDataService;

class ProjectController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $projectBg = Headline::first();
        $projectData = Project::query()->orderBy('order')->get();

        return view('projects.index', compact(['projectData', 'projectBg']));
    }

    public function details(string $slug)
    {
        $projectBg = Headline::first();
        $project = Project::query()->where('slug', $slug)->first();

        if (! $project && ctype_digit($slug)) {
            $project = Project::query()->find($slug);
            if ($project?->slug) {
                return redirect()->route('projects.details', $project->slug, 301);
            }
        }

        if (! $project) {
            abort(404);
        }

        return view('projects.details', compact(['project', 'projectBg']));
    }
}

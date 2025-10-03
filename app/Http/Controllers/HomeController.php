<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;
use Illuminate\Support\Collection;
use App\Models\Headline;
use App\Models\CompanyOverview;
use App\Models\OurValue;
use App\Models\OurClient;
use App\Models\Project;
use App\Models\ScopeOfWork;
use App\Models\LegalDocument;
use App\Models\GeneralSetting;

class HomeController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $headline = Headline::first();
        $vision = CompanyOverview::where('title', 'vision')->first();
        $mission = CompanyOverview::where('title', 'mission')->first();
        $ourValue = CompanyOverview::where('title', 'our value')->first();
        $ourValueList = OurValue::get();
        $ourClientList = OurClient::get();
        $projectData = Project::limit(5)->get();
        $scopeOfWork = CompanyOverview::where('title', 'scope of work')->first();
        $scopeOfWorkList = ScopeOfWork::get();
        $legalDoc = LegalDocument::limit(8)->get();
        $generalSetting = GeneralSetting::first();

        return view('home.index', compact(
            'headline',
            'vision',
            'mission',
            'ourValue',
            'ourValueList',
            'ourClientList',
            'projectData',
            'scopeOfWork',
            'scopeOfWorkList',
            'legalDoc',
            'generalSetting',
        ));
    }

    public function homeTwo()
    {
        $counterData = $this->themeDataService->counterData();
        $serviceHome2Data = $this->themeDataService->serviceHome2Data();
        $testimonialData = $this->themeDataService->testimonialData();
        $marqueData = $this->themeDataService->marqueData();
        $projectData = $this->themeDataService->projectData();
        $faqs = $this->themeDataService->faqData();

        return view('home.index-2', compact(
            'counterData',
            'serviceHome2Data',
            'testimonialData',
            'marqueData',
            'projectData',
            'faqs',
        ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;

class AboutController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $featureData = $this->themeDataService->featureData();
        $marqueData = $this->themeDataService->marqueData();
        $counterData = $this->themeDataService->counterData();

        return view('about.index', compact('featureData', 'marqueData', 'counterData'));
    }
}

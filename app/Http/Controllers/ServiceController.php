<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;
use App\Models\LegalDocument;
use App\Models\Headline;

class ServiceController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $serviceBg = Headline::first();
        $serviceData = LegalDocument::get();
        return view('services.index', compact(['serviceBg', 'serviceData']));
    }

    public function details($id)
    {
        $serviceBg = Headline::first();
        $service = LegalDocument::whereId($id)->first();
        if (!$service) {
            abort(404);
        }

        return view('services.details', compact('serviceBg', 'service'));
    }
}

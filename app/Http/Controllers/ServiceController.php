<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use App\Models\LegalDocument;
use App\Services\ThemeDataService;

class ServiceController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $serviceBg = Headline::first();
        $serviceData = LegalDocument::query()->latest()->get();

        return view('services.index', compact(['serviceBg', 'serviceData']));
    }

    public function details(string $slug)
    {
        $serviceBg = Headline::first();
        $service = LegalDocument::query()->where('slug', $slug)->first();

        if (! $service && ctype_digit($slug)) {
            $service = LegalDocument::query()->find($slug);
            if ($service?->slug) {
                return redirect()->route('services.details', $service->slug, 301);
            }
        }

        if (! $service) {
            abort(404);
        }

        return view('services.details', compact('serviceBg', 'service'));
    }
}

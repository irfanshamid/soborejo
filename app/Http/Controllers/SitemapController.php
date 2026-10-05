<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\LegalDocument;
use App\Models\Project;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            ['loc' => route('home'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('about.index'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('services.index'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('projects.index'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('blogs.index'), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['loc' => route('contact.index'), 'changefreq' => 'monthly', 'priority' => '0.7'],
        ];

        foreach (Project::query()->whereNotNull('slug')->get(['slug', 'updated_at']) as $project) {
            $urls[] = [
                'loc' => route('projects.details', $project->slug),
                'lastmod' => optional($project->updated_at)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        foreach (LegalDocument::query()->whereNotNull('slug')->get(['slug', 'updated_at']) as $document) {
            $urls[] = [
                'loc' => route('services.details', $document->slug),
                'lastmod' => optional($document->updated_at)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        foreach (Blog::query()
            ->where('active', true)
            ->whereNotNull('slug')
            ->orderByDesc('date')
            ->orderByDesc('created_at')
            ->get(['slug', 'updated_at', 'date', 'created_at']) as $post) {
            $urls[] = [
                'loc' => route('blogs.details', $post->slug),
                'lastmod' => optional($post->updated_at)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.5',
            ];
        }

        return response($this->toXml($urls), 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    /**
     * @param  array<int, array{loc: string, changefreq: string, priority: string, lastmod?: string|null}>  $urls
     */
    private function toXml(array $urls): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($urls as $url) {
            $xml .= "    <url>\n";
            $xml .= '        <loc>'.e($url['loc'])."</loc>\n";

            if (! empty($url['lastmod'])) {
                $xml .= '        <lastmod>'.e($url['lastmod'])."</lastmod>\n";
            }

            $xml .= '        <changefreq>'.e($url['changefreq'])."</changefreq>\n";
            $xml .= '        <priority>'.e($url['priority'])."</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }
}

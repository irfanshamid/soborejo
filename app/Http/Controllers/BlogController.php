<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;
use App\Models\Headline;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $blogBg = Headline::first();
        $blogData = Blog::query()
            ->where('active', true)
            ->orderByDesc('date')
            ->orderByDesc('created_at')
            ->get();

        return view('blog.index', compact(['blogData', 'blogBg']));
    }

    public function details(string $slug)
    {
        $blogBg = Headline::first();
        $blogData = Blog::query()->where('slug', $slug)->first();

        if (! $blogData && ctype_digit($slug)) {
            $blogData = Blog::query()->find($slug);
            if ($blogData?->slug) {
                return redirect()->route('blogs.details', $blogData->slug, 301);
            }
        }

        if (! $blogData) {
            abort(404);
        }

        return view('blog.details', compact(['blogData', 'blogBg']));
    }

    // public function details($slug)
    // {
    //     $blogData = (array) Blog::get();

    //     // Find current post
    //     $post = collect($blogData)->firstWhere('id', $slug);

    //     if (!$post) {
    //         abort(404);
    //     }

    //     // Get all slugs as array
    //     $slugs = collect($blogData)->pluck('slug')->values();

    //     // Find current index
    //     $currentIndex = $slugs->search($slug);

    //     // Previous slug (loop to last if none)
    //     $prevSlug = $currentIndex > 0 ? $slugs[$currentIndex - 1] : $slugs->last();

    //     // Next slug (loop to first if none)
    //     $nextSlug = $currentIndex < $slugs->count() - 1 ? $slugs[$currentIndex + 1] : $slugs->first();

    //     // Load other data for view
    //     $recentPosts = Blog::get();

    //     return view('blog.details', compact('post', 'recentPosts', 'prevSlug', 'nextSlug'));
    // }

    // function blogByCategory($categoryName)
    // {
    //     $blogs = (array) $this->themeDataService->blogData();

    //     $blogData = collect($blogs)->filter(fn($blog) => strtolower($blog->category) === strtolower($categoryName))->values()->all();

    //     $blogCategories = $this->themeDataService->blogCategories();
    //     $blogTags = $this->themeDataService->blogTags();
    //     return view('blog.index', compact('blogData', 'blogCategories', 'blogTags'));
    // }

    // function blogByTab($tagName)
    // {
    //     $blogs = (array) $this->themeDataService->blogData();

    //     $blogData = collect($blogs)
    //         ->filter(function ($blog) use ($tagName) {
    //             return in_array($tagName, $blog->tags ?? []);
    //         })
    //         ->values()
    //         ->all();

    //     $blogCategories = $this->themeDataService->blogCategories();
    //     $blogTags = $this->themeDataService->blogTags();

    //     return view('blog.index', compact('blogData', 'blogCategories', 'blogTags'));
    // }

    // function blogSearch(Request $request)
    // {
    //     $keyword = $request->keyword;

    //     if (!$keyword) {
    //         return redirect()->back();
    //     }

    //     $blogs = (array) $this->themeDataService->blogData();

    //     $blogData = collect($blogs)
    //         ->filter(function ($blog) use ($keyword) {
    //             return str_contains(strtolower($blog->title), strtolower($keyword)) ||
    //                 str_contains(strtolower($blog->description), strtolower($keyword));
    //         })->values()->all();

    //     $blogCategories = $this->themeDataService->blogCategories();
    //     $blogTags = $this->themeDataService->blogTags();

    //     return view('blog.index', compact('blogData', 'blogCategories', 'blogTags', 'keyword'));
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ThemeDataService;

class BlogController extends Controller
{
    public function __construct(private ThemeDataService $themeDataService) {}

    public function index()
    {
        $blogData = $this->themeDataService->blogData();
        $blogCategories = $this->themeDataService->blogCategories();
        $blogTags = $this->themeDataService->blogTags();
        return view('blog.index', compact('blogData', 'blogCategories', 'blogTags'));
    }

    public function details($slug)
    {
        $blogData = (array) $this->themeDataService->blogData();

        // Find current post
        $post = collect($blogData)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        // Get all slugs as array
        $slugs = collect($blogData)->pluck('slug')->values();

        // Find current index
        $currentIndex = $slugs->search($slug);

        // Previous slug (loop to last if none)
        $prevSlug = $currentIndex > 0 ? $slugs[$currentIndex - 1] : $slugs->last();

        // Next slug (loop to first if none)
        $nextSlug = $currentIndex < $slugs->count() - 1 ? $slugs[$currentIndex + 1] : $slugs->first();

        // Load other data for view
        $blogCategories = $this->themeDataService->blogCategories();
        $blogTags = $this->themeDataService->blogTags();
        $recentPosts = $this->themeDataService->blogData();

        return view('blog.details', compact('post', 'recentPosts', 'blogCategories', 'blogTags', 'prevSlug', 'nextSlug'));
    }

    function blogByCategory($categoryName)
    {
        $blogs = (array) $this->themeDataService->blogData();

        $blogData = collect($blogs)->filter(fn($blog) => strtolower($blog->category) === strtolower($categoryName))->values()->all();

        $blogCategories = $this->themeDataService->blogCategories();
        $blogTags = $this->themeDataService->blogTags();
        return view('blog.index', compact('blogData', 'blogCategories', 'blogTags'));
    }

    function blogByTab($tagName)
    {
        $blogs = (array) $this->themeDataService->blogData();

        $blogData = collect($blogs)
            ->filter(function ($blog) use ($tagName) {
                return in_array($tagName, $blog->tags ?? []);
            })
            ->values()
            ->all();

        $blogCategories = $this->themeDataService->blogCategories();
        $blogTags = $this->themeDataService->blogTags();

        return view('blog.index', compact('blogData', 'blogCategories', 'blogTags'));
    }

    function blogSearch(Request $request)
    {
        $keyword = $request->keyword;

        if (!$keyword) {
            return redirect()->back();
        }

        $blogs = (array) $this->themeDataService->blogData();

        $blogData = collect($blogs)
            ->filter(function ($blog) use ($keyword) {
                return str_contains(strtolower($blog->title), strtolower($keyword)) ||
                    str_contains(strtolower($blog->description), strtolower($keyword));
            })->values()->all();

        $blogCategories = $this->themeDataService->blogCategories();
        $blogTags = $this->themeDataService->blogTags();

        return view('blog.index', compact('blogData', 'blogCategories', 'blogTags', 'keyword'));
    }
}

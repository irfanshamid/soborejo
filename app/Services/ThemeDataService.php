<?php

namespace App\Services;

use stdClass;
use Carbon\Carbon;

class ThemeDataService
{
    public function featureData()
    {
        $data = [
            [
                'icon' => 'assets/images/icon/feature-icon1_1.svg',
                'title' => 'Cement mixing',
                'slug' => 'cement-mixing',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing',
            ],
            [
                'icon' => 'assets/images/icon/feature-icon1_2.svg',
                'title' => 'Faster building',
                'slug' => 'faster-building',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing',
            ],
            [
                'icon' => 'assets/images/icon/feature-icon1_3.svg',
                'title' => 'Plumbing Installation',
                'slug' => 'plumbing-installation',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing',
            ],
            [
                'icon' => 'assets/images/icon/feature-icon1_4.svg',
                'title' => 'Building Renovation',
                'slug' => 'plumbing-installation',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing',
            ],
        ];

         // Convert the array to an object structure for easy access in Blade
        return $this->convertArrayToObjectRecursive($data);
    }

    public function marqueData()
    {
        $data = [
            'title' => 'Trusted by the world’s best', // The title for the section
            'marque_logos_left' => [
                'assets/images/marque/marque1_1.svg',
                'assets/images/marque/marque1_2.svg',
                'assets/images/marque/marque1_3.svg',
                'assets/images/marque/marque1_4.svg',
                'assets/images/marque/marque1_5.svg',
                'assets/images/marque/marque1_6.svg',
            ],
            'marque_logos_right' => [
                'assets/images/marque/marque1_7.svg',
                'assets/images/marque/marque1_8.svg',
                'assets/images/marque/marque1_9.svg',
                'assets/images/marque/marque1_10.svg',
                'assets/images/marque/marque1_11.svg',
            ],
        ];

        // Convert the array to an object structure for easy access in Blade
        return $this->convertArrayToObjectRecursive($data);
    }

    public function projectData()
    {
        $data = [
            [
                'image' => 'assets/images/project/project-thumb2_1.jpg',
                'bg_image' => 'assets/images/project/project-thumb2_1.jpg',
                'categories' => ['Building', 'Mapping'],
                'title' => 'Munber fielder Building',
                'slug' => 'munber-fielder-building',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'image' => 'assets/images/project/project-thumb1_1.jpg',
                'bg_image' => 'assets/images/project/project-thumb2_2.jpg',
                'categories' => ['Design', 'Architecture'],
                'title' => 'Modern Office Complex',
                'slug' => 'modern-office-complex', // <--- Added slug
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'image' => 'assets/images/project/project-thumb1_3.jpg',
                'bg_image' => 'assets/images/project/project-thumb2_3.jpg',
                'categories' => ['Renovation', 'Interior'],
                'title' => 'Historic Zone Rebuild',
                'slug' => 'historic-landmark-restoration', // <--- Added slug
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'image' => 'assets/images/project/project-thumb1_4.jpg',
                'bg_image' => 'assets/images/project/project-thumb2_4.jpg',
                'categories' => ['Landscape', 'Urban'],
                'title' => 'City Redevelopment Plan',
                'slug' => 'city-redevelopment-plan', // <--- Added slug
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
        ];

        // Convert the entire array structure to nested objects
        return $this->convertArrayToObjectRecursive($data);
    }

    public function projectSection2Data()
    {
        $data = [
            [
                'type' => 'top', // 'top' for the large card, 'normal' for smaller ones
                'background_image' => 'assets/images/project/project-thumb2_1.jpg',
                'categories' => ['Building', 'Mapping'],
                'title' => 'Munber Fielder Building',
                'slug' => 'munber-fielder-building',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            ],
            [
                'type' => 'normal',
                'background_image' => 'assets/images/project/project-thumb2_2.jpg',
                'categories' => ['Design', 'Architecture'],
                'title' => 'Modern Office Complex',
                'slug' => 'modern-office-complex',
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'type' => 'normal',
                'background_image' => 'assets/images/project/project-thumb2_3.jpg',
                'categories' => [
                    ['name' => 'Renovation'],
                    ['name' => 'Interior'],
                ],
                'title' => 'Historic Landmark',
                'slug' => 'historic-landmark-restoration',
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'type' => 'normal',
                'background_image' => 'assets/images/project/project-thumb2_4.jpg',
                'categories' => [
                    ['name' => 'Urban'],
                    ['name' => 'Landscape'],
                ],
                'title' => 'City Park Development',
                'slug' => 'city-park-development',
                'description' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
        ];

        return $this->convertArrayToObjectRecursive($data);
    }

    public function serviceMainData($limit = null)
    {
        $data = [
            [
                'icon' => 'assets/images/service/inner-pages-icon-1.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-3.png',
                'title' => 'Faster Building',
                'slug' => 'faster-building',
                'main_image' => 'assets/images/service/service-details-thumb-03.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'icon' => 'assets/images/service/inner-pages-icon-2.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-2.png',
                'title' => 'Cement Mixing',
                'slug' => 'cement-mixing',
                'main_image' => 'assets/images/service/service-details-thumb-04.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'icon' => 'assets/images/service/inner-pages-icon-3.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-3.png',
                'title' => 'Plumbing Installation',
                'slug' => 'plumbing-installation',
                'main_image' => 'assets/images/service/service-details-thumb-05.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'icon' => 'assets/images/service/inner-pages-icon-4.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-4.png',
                'title' => 'Electrical Wiring',
                'slug' => 'electrical-wiring',
                'main_image' => 'assets/images/service/service-details-thumb-03.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'icon' => 'assets/images/service/inner-pages-icon-5.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-5.png',
                'title' => 'Roofing & Waterproofing',
                'slug' => 'roofing-waterproofing',
                'main_image' => 'assets/images/service/service-details-thumb-04.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'icon' => 'assets/images/service/inner-pages-icon-6.png',
                'icon_white' => 'assets/images/service/inner-pages-icon-white-6.png',
                'title' => 'HVAC System Design',
                'slug' => 'hvac-system-design',
                'main_image' => 'assets/images/service/service-details-thumb-05.jpg',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
        ];

         // Convert the array to an object structure for easy access in Blade
        return $this->convertArrayToObjectRecursive($data);
    }

    public function serviceHome1Data()
    {
        $data = [
            [
                'icon' => 'assets/images/icon/service-icon1_1.svg',
                'title' => 'Faster building',
                'slug' => 'faster-building',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many ',
            ],
            [
                'icon' => 'assets/images/icon/service-icon1_2.svg',
                'title' => 'Cement mixing',
                'slug' => 'cement-mixing',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many ',
            ],
            [
                'icon' => 'assets/images/icon/service-icon1_3.svg',
                'title' => 'Plumbing Installation',
                'slug' => 'plumbing-installation',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many ',
            ],
        ];

        // Convert the entire array structure to nested objects
        return $this->convertArrayToObjectRecursive($data);
    }

    public function serviceHome2Data()
    {
        $data = [
            [
                'thumbnail_image' => 'assets/images/service/service-thumb1_1.jpg',
                'icon' => 'assets/images/icon/service-icon2_1.svg',
                'title' => 'Cement mixing',
                'slug' => 'cement-mixing',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content.',
                'arrow_icon' => 'assets/images/icon/arrowUp-white.svg',
            ],
            [
                'thumbnail_image' => 'assets/images/service/service-thumb1_2.jpg',
                'icon' => 'assets/images/icon/service-icon2_2.svg',
                'title' => 'Plumbing Installation',
                'slug' => 'plumbing-installation',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content.',
                'arrow_icon' => 'assets/images/icon/arrowUp-white.svg',
            ],
            [
                'thumbnail_image' => 'assets/images/service/service-thumb1_3.jpg',
                'icon' => 'assets/images/icon/service-icon2_3.svg',
                'title' => 'Electrical Wiring',
                'slug' => 'electrical-wiring',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content.',
                'arrow_icon' => 'assets/images/icon/arrowUp-white.svg',
            ],
        ];

        // Convert the entire array structure to nested objects
        return $this->convertArrayToObjectRecursive($data);
    }

    public function testimonialData()
    {
        $data = [
            [
                'image' => 'assets/images/testimonial/testimonial-thumb1_1.jpg',
                'icon' => 'assets/images/icon/testimonial-icon.svg',
                'quote' => 'We have been growing fast, and so have the diverse payment preferences of our. That’s speed which they can get things done. We are thrilled to partner with who has.',
                'rating' => 5,
                'name' => 'Jenny Wilson',
                'role' => 'Web Designer',
            ],
            [
                'image' => 'assets/images/testimonial/testimonial-thumb1_2.jpg',
                'icon' => 'assets/images/icon/testimonial-icon.svg',
                'quote' => 'Outstanding quality and incredible support! Our projects are always on time and within budget thanks to their dedication. Highly recommend!',
                'rating' => 4,
                'name' => 'Robert Fox',
                'role' => 'CEO, Tech Solutions',
            ],
            [
                'image' => 'assets/images/testimonial/testimonial-thumb1_1.jpg',
                'icon' => 'assets/images/icon/testimonial-icon.svg',
                'quote' => 'Their team delivered beyond our expectations. The attention to detail and proactive communication made the entire process seamless and enjoyable. A true partner!',
                'rating' => 5,
                'name' => 'Kathryn Murphy',
                'role' => 'Project Manager',
            ],
            [
                'image' => 'assets/images/testimonial/testimonial-thumb1_2.jpg',
                'icon' => 'assets/images/icon/testimonial-icon.svg',
                'quote' => 'Incredible results from a truly professional team. Their innovative approach to construction has significantly boosted our efficiency and overall output.',
                'rating' => 5,
                'name' => 'Eleanor Pena',
                'role' => 'Operations Director',
            ],
        ];

        // Convert the entire array structure to nested objects
        return $this->convertArrayToObjectRecursive($data);
    }

    public function counterData()
    {
        $data = [
            'text_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. MaIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing ny desktop publishing',
            'counters' => [
                [
                    'value_prefix' => '', // e.g., '$', '€', '#'
                    'number' => 455,
                    'value_suffix' => 'm+',
                    'label' => 'Revenue Generated',
                ],
                [
                    'value_prefix' => '',
                    'number' => 7,
                    'value_suffix' => '+',
                    'label' => 'Years of experience',
                ],
                [
                    'value_prefix' => '',
                    'number' => 700,
                    'value_suffix' => '+',
                    'label' => 'Building Constructed',
                ],
                [
                    'value_prefix' => '',
                    'number' => 400,
                    'value_suffix' => '+',
                    'label' => 'Customer Review',
                ],
            ],
        ];

        // Convert the array to an object structure for easy access in Blade
        return $this->convertArrayToObjectRecursive($data);
    }

    public function blogData()
    {
        $data = [
            [
                'preview_image' => 'assets/images/blog/blog-thumb2_1.jpg',
                'thumb_image' => 'assets/images/blog/blog-thumb1_1.jpg',
                'small_image' => 'assets/images/blog/blog-post-01.jpg',
                'author' => 'Admin',
                'category' => 'Construction Tips',
                'comments_count' => 5,
                'title' => '15 tips for better welding in big buildings outdoors',
                'slug' => '15-tips-for-better-welding-in-big-buildings-outdoors', // Dynamic slug
                'description' => 'Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any website is the first impression on visitors.Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have',
                'published_date' => 'October 19, 2024',
                'tags' => ['Welding', 'Building', 'Planning'],
            ],
            [
                'preview_image' => 'assets/images/blog/blog-thumb2_2.jpg',
                'thumb_image' => 'assets/images/blog/blog-thumb1_2.jpg',
                'small_image' => 'assets/images/blog/blog-post-02.jpg',
                'author' => 'Admin',
                'category' => 'Architecture',
                'comments_count' => 3,
                'title' => 'The future of sustainable architecture and design',
                'slug' => 'the-future-of-sustainable-architecture-and-design',
                'description' => 'Exploring innovative approaches to sustainable architecture, focusing on eco-friendly materials and energy-efficient designs that minimize environmental impact. We believe in building for tomorrow, today.',
                'published_date' => 'October 19, 2024',
                'tags' => ['Design', 'Architecture', 'Building'],
            ],
            [
                'preview_image' => 'assets/images/blog/blog-thumb2_3.jpg',
                'thumb_image' => 'assets/images/blog/blog-thumb1_3.jpg',
                'small_image' => 'assets/images/blog/blog-post-03.jpg',
                'author' => 'Guest Writer',
                'category' => 'Urban Planning',
                'comments_count' => 8,
                'title' => 'Urban development challenges in modern cities',
                'slug' => 'urban-development-challenges-in-modern-cities',
                'description' => 'Addressing the complexities of urban growth, including infrastructure, housing, and environmental concerns. We analyze strategies for creating resilient and livable cities for growing populations.',
                'published_date' => 'October 19, 2024',
                'tags' => ['Planning', 'Cities', 'Development', 'Design'],
            ],
        ];

        // Convert the entire array structure to nested objects
        return $this->convertArrayToObjectRecursive($data);
    }

    public function blogCategories()
    {
        $blogs = $this->blogData();
        $categories = [];

        foreach ($blogs as $blog) {
            $categories[] = $blog->category;
        }

        // Get unique category names
        $uniqueCategories = array_unique($categories);

        // Convert to objects with "name" property
        $categoryObjects = array_map(function ($cat) {
            return (object) ['name' => $cat];
        }, $uniqueCategories);

        return $categoryObjects;
    }

    public function blogTags(): array
    {
        $blogs = $this->blogData(); // returns stdClass with blogs as properties
        $allTags = [];

        foreach ($blogs as $blog) {
            if (!empty($blog->tags) && is_array($blog->tags)) {
                $allTags = array_merge($allTags, $blog->tags);
            }
        }

        return array_values(array_unique($allTags));
    }

    public function faqData()
    {
        $data = [
            [
                'id' => 1,
                'question' => 'What are the typical steps in a construction project?',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'id' => 2,
                'question' => 'How long does a typical construction project usually take?',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'id' => 3,
                'question' => 'What factors can affect a construction project\'s timeline and cost?',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
            [
                'id' => 4,
                'question' => 'Is it necessary to obtain permits for construction projects?',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
            ],
        ];

        // Convert the array to an object structure for easy access in Blade
        return $this->convertArrayToObjectRecursive($data);
    }

    protected function convertArrayToObjectRecursive(array $array)
    {
        $object = new stdClass();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                // Check if it's an associative array (keys are not sequential integers starting from 0)
                if (!empty($value) && array_keys($value) !== range(0, count($value) - 1)) {
                    $object->{$key} = $this->convertArrayToObjectRecursive($value);
                } else {
                    // It's an indexed array; convert its elements if they are associative arrays
                    $indexedArray = [];
                    foreach ($value as $item) {
                        $indexedArray[] = is_array($item) ? $this->convertArrayToObjectRecursive($item) : $item;
                    }
                    $object->{$key} = $indexedArray;
                }
            } else {
                $object->{$key} = $value;
            }
        }
        return $object;
    }
}

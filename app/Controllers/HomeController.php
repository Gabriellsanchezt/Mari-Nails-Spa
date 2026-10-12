<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Specialist;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index(Request $request): void
    {
        $gallery    = Gallery::all();
        $categories = Gallery::getCategories();
        $reviews    = Review::all();
        $specialist = Specialist::getInfo();
        $faqs       = Faq::all();

        $this->render('home/index', [
            'pageTitle'  => config('app.name') . ' | ' . config('app.tagline'),
            'gallery'    => $gallery,
            'categories' => $categories,
            'reviews'    => $reviews,
            'specialist' => $specialist,
            'faqs'       => $faqs,
        ]);
    }

    public function galleryJson(Request $request): void
    {
        $this->json([
            'status' => 'success',
            'data'   => Gallery::all(),
        ]);
    }
}

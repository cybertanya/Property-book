<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\HeaderContent;
use App\Models\StoryContent;
use App\Models\ServicesContent;
use App\Models\PricingContent;
use App\Models\FooterContent;
use App\Http\Controllers\HeaderContentController;
use App\Http\Controllers\StoryContentController;
use App\Http\Controllers\ServicesContentController;
use App\Http\Controllers\PricingContentController;
use App\Http\Controllers\FooterContentController;

Route::get('/', function () {

    $header_data = HeaderContent::first();
    $story_data = StoryContent::first();
    $services_data = ServicesContent::first();
    $pricing_data = PricingContent::first();
    $footer_data = FooterContent::first();

    return view('welcome', [
        'header_data' => $header_data,
        'story_data' => $story_data,
        'services_data' => $services_data,
        'pricing_data' => $pricing_data,
        'footer_data' => $footer_data
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/header_content', function() {
    $header_data = HeaderContent::first();
    return view('content.header_content',['header_data' => $header_data]);
})->middleware(['auth', 'verified'])->name('header_content');

Route::post('/update-header-content',[HeaderContentController::class, 'update'])->name('update-header-content');

Route::post('/update-story-content', [StoryContentController::class, 'update'])->name('update-story-content');

Route::post('/update-services-content', [ServicesContentController::class, 'update'])->name('update-services-content');

Route::post('/update-pricing-content', [PricingContentController::class, 'update'])->name('update-pricing-content');

Route::post('/update-footer-content', [FooterContentController::class, 'update'])->name('update-footer-content');

Route::get('/story_content', function() {
    $story_data = StoryContent::first();
    return view('content.story_content',['story_data'=>$story_data]);
})->middleware(['auth', 'verified'])->name('story_content');

Route::get('/services_content', function() {
    $services_data = ServicesContent::first();
    return view('content.services_content',['services_data'=>$services_data]);
})->middleware(['auth', 'verified'])->name('services_content');

Route::get('/pricing_content', function() {
    $pricing_data = PricingContent::first();
    return view('content.pricing_content',['pricing_data'=>$pricing_data]);
})->middleware(['auth', 'verified'])->name('pricing_content');

Route::get('/footer_content', function() {
    $footer_data = FooterContent::first();
    return view('content.footer_content',['footer_data'=>$footer_data]);
})->middleware(['auth', 'verified'])->name('footer_content');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

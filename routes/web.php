<?php

use App\Livewire\Guest\Article;
use App\Livewire\Guest\ArticleDetail;
use App\Livewire\Guest\Author;
use App\Livewire\Guest\AuthorDetail;
use App\Livewire\Guest\Category;
use App\Livewire\Guest\CategoryDetail;
use App\Livewire\Guest\Contact;
use App\Livewire\Guest\Home;
use App\Livewire\Guest\Profile;
use App\Livewire\Guest\SavedPost;
use App\Livewire\Guest\Tag;
use App\Livewire\Guest\TagDetail;
use App\Livewire\Guest\Term;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', Home::class)->name('home');
Route::get('/article', Article::class)->name('article');
Route::get('/article-detail', ArticleDetail::class)->name('article-detail');
Route::get('/author', Author::class)->name('author');
Route::get('/author-detail', AuthorDetail::class)->name('author.detail');
Route::get('/category', Category::class)->name('category');
Route::get('/category-detail', CategoryDetail::class)->name('category.detail');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/saved-post', SavedPost::class)->name('saved');
Route::get('/tag', Tag::class)->name('tag');
Route::get('/tag-detail', TagDetail::class)->name('tag.detail');
Route::get('/term-contidion', Term::class)->name('term');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

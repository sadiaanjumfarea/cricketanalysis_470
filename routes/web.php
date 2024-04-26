<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TeamController; //TeamController
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CricketerController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Authmanager::class, 'login'])->name('login');
Route::post('/login', [Authmanager::class, 'loginpost'])->name('login');
Route::get('/register', [Authmanager::class, 'register'])->name('register');
Route::post('/register', [Authmanager::class, 'registerpost'])->name('register');
Route::get('/dashboard', [Authmanager::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [Authmanager::class, 'dashboardpost'])->name('dashboard');
Route::get('/logout', [Authmanager::class, 'logout'])->name('logout');

Route::get('/team', [Authmanager::class, 'createTeam'])->name('team.create');
Route::post('/team', [Authmanager::class, 'storeTeam'])->name('team.store');
Route::get('/dashboard/team/create', [Authmanager::class, 'createTeam'])->name('team.create');
Route::get('/team/list', [Authmanager::class, 'listTeams'])->name('team.list');
Route::get('/', [Authmanager::class, 'index'])->name('home');
Route::get('/cricketers/{cricketer}/edit', [Authmanager::class, 'editCricketer'])->name('cricketers.edit');
Route::put('/cricketers/{cricketer}', [Authmanager::class, 'updateCricketer'])->name('cricketers.update');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/cricketers/ranking', [Authmanager::class, 'ranking'])->name('cricketers.ranking');
Route::get('/cricketers/by_innings', [Authmanager::class, 'showCricketersByInnings'])->name('cricketers.by.innings');
Route::get('/cricketers/by_runrate', [Authmanager::class, 'showCricketersByrunrate'])->name('cricketers.by.runrate');
Route::get('/female_players', [Authmanager::class, 'femalePlayers'])->name('female.players');

Route::get('/male_players', [Authmanager::class, 'malePlayers'])->name('male.players');
Route::get('/fixtures', [Authmanager::class, 'fixtures'])->name('fixtures');

Route::get('/login', [Authmanager::class, 'showLogin'])->name('login');
Route::post('/login', [Authmanager::class, 'login']);
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::delete('/cricketers/{id}', [CricketerController::class, 'destroy'])->name('cricketers.destroy');
Route::post('/admin/cricketers/delete', [AdminDashboardController::class, 'deleteCricketer'])->name('admin.cricket.delete');
Route::get('/cricketers/{cricketer}/edit', 'CricketerController@edit')->name('cricketers.edit');
Route::get('/admin/edit', [AdminDashboardController::class, 'edit'])->name('edit');
Route::get('/test', [AdminDashboardController::class, 'api_test']);
Route::get('/match', [AdminDashboardController::class, 'matchDetails'])->name('match');
Route::get('/fantasy', [Authmanager::class, 'fantasyp'])->name('fantasy');

Route::get('/comingmatch', [AdminDashboardController::class, 'comingmatch'])->name('comingmatch');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::delete('/cricketers/destroy', 'CricketerController@destroy')->name('cricketers.destroy');

Route::post('/admin/cricketer/store', [CricketerController::class, 'store'])->name('admin.cstore');

// Routes for proposing matches and bidding
Route::post('/match/propose', [TeamController::class, 'proposeMatch'])->name('match.propose');
Route::post('/match/{matchId}/bid', [TeamController::class, 'bidOnMatch'])->name('match.bid');
Route::get('/propose-match-and-bidding', [TeamController::class, 'showProposeMatchAndBidding'])->name('propose.match.bidding');
Route::get('/cricket_blogs', [Authmanager::class, 'blog'])->name('cricket.blogs');

Route::get('/all-about-cricket', [CricketerController::class, 'displayAllAboutCricket'])->name('all.about.cricket');
Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories');

Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories');


// Route for displaying the accessories page
//Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories');

// Route for selling accessories
Route::post('/accessories/sell', [AccessoriesController::class, 'sell'])->name('accessories.sell');

// Route for buying accessories
Route::get('/accessories/buy', [AccessoriesController::class, 'buy'])->name('accessories.buy');

Route::get('/accessories/buy', [AccessoriesController::class, 'showItemsForSale'])->name('accessories.buy');


Route::get('/items-for-sale', [AccessoriesController::class, 'showItemsForSale'])->name('accessories.buy');






Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/cricket_blogs', [BlogController::class, 'index'])->name('cricket.blogs');

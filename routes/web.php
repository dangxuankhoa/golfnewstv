<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $is_home = 1;
    return view('layout.index', compact('is_home'));
})->name('layout');

Route::get('/broadcastschedule', 'BroadcastSchedule@index')->name('broadcastschedule');

Route::get('/news', 'News@index')->name('news');

Route::get('/vod', 'VOD@index')->name('vod');
Route::get('/vod/results', 'VOD@results')->name('vod.results');

Route::get('/vod/bantin_360', 'VOD@bantin_360')->name('vod.bantin_360');
Route::get('/vod/bantin_360/watch/{id}', 'VOD@watch_bantin_360')->name('vod.bantin_360.watch');
Route::get('/vod/bantin_360/token_next/{code}', 'VOD@token_next_bantin_360')->name('vod.bantin_360.token_next');
Route::get('/vod/bantin_360/token_prev/{code}', 'VOD@token_prev_bantin_360')->name('vod.bantin_360.token_prev');

Route::get('/vod/chuyen_golf', 'VOD@chuyen_golf')->name('vod.chuyen_golf');
Route::get('/vod/chuyen_golf/watch/{id}', 'VOD@watch_chuyen_golf')->name('vod.chuyen_golf.watch');
Route::get('/vod/chuyen_golf/token_next/{code}', 'VOD@token_next_chuyen_golf')->name('vod.chuyen_golf.token_next');
Route::get('/vod/chuyen_golf/token_prev/{code}', 'VOD@token_prev_chuyen_golf')->name('vod.chuyen_golf.token_prev');

Route::get('/vod/gnnv', 'VOD@gnnv')->name('vod.gnnv');
Route::get('/vod/gnnv/watch/{id}', 'VOD@watch_gnnv')->name('vod.gnnv.watch');
Route::get('/vod/gnnv/token_next/{code}', 'VOD@token_next_gnnv')->name('vod.gnnv.token_next');
Route::get('/vod/gnnv/token_prev/{code}', 'VOD@token_prev_gnnv')->name('vod.gnnv.token_prev');

Route::get('/vod/rules_it_right', 'VOD@rules_it_right')->name('vod.rules_it_right');
Route::get('/vod/rules_it_right/watch/{id}', 'VOD@watch_rules_it_right')->name('vod.rules_it_right.watch');
Route::get('/vod/rules_it_right/token_next/{code}', 'VOD@token_next_rules_it_right')->name('vod.rules_it_right.token_next');
Route::get('/vod/rules_it_right/token_prev/{code}', 'VOD@token_prev_rules_it_right')->name('vod.rules_it_right.token_prev');

Route::get('/vod/oncourse', 'VOD@oncourse')->name('vod.oncourse');
Route::get('/vod/oncourse/watch/{id}', 'VOD@watch_oncourse')->name('vod.oncourse.watch');

Route::get('/vod/highlight', 'VOD@highlight')->name('vod.highlight');
Route::get('/vod/highlight/watch/{id}', 'VOD@watch_highlight')->name('vod.highlight.watch');
Route::get('/vod/highlight/token_next/{code}', 'VOD@token_next_highlight')->name('vod.highlight.token_next');
Route::get('/vod/highlight/token_prev/{code}', 'VOD@token_prev_highlight')->name('vod.highlight.token_prev');


Route::get('/livescore', 'LiveScore@index')->name('livescore');

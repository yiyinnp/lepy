<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompilerController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\IndexCompilerController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardForumController;

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
    return view('index', [
        "title" => "Menu Utama"
    ]);
});
Route::get('/login-email', [LoginController::class, 'index1'])->middleware('guest');
Route::post('/login-email', [LoginController::class, 'authenticateEmail']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/lupa-password', [ChangePasswordController::class, 'index'])->middleware('guest');
Route::post('/lupa-password', [ChangePasswordController::class, 'update']);

Route::get('/materi', [MaterialController::class, 'index'])->name('material')->middleware('auth.redirect');
Route::get('/materi-pengenalan-bahasa-pemrograman-python', [MaterialController::class, 'materi1'])->name('material.definition')->middleware('auth.redirect');
Route::get('/materi-pendeklarasian-variabel', [MaterialController::class, 'materi2'])->name('material.variable')->middleware('auth.redirect');
Route::get('/materi-pengenalan-tipe-data', [MaterialController::class, 'materi3'])->name('material.datatype')->middleware('auth.redirect');
Route::get('/materi-operator-dan-ekspresi', [MaterialController::class, 'materi4'])->name('material.operatorexpresion')->middleware('auth.redirect');
Route::get('/materi-struktur-berurutan-pemrograman-python', [MaterialController::class, 'materi5'])->name('material.sequential')->middleware('auth.redirect');
Route::get('/materi-percabangan-pemrograman-python', [MaterialController::class, 'materi6'])->name('material.branching')->middleware('auth.redirect');
Route::get('/materi-perulangan-pemrograman-python', [MaterialController::class, 'materi7'])->name('material.looping')->middleware('auth.redirect');

Route::get('/dashboard-materi', [MaterialController::class, 'index1'])->name('materialdashboard')->middleware('auth.redirect');
Route::get('/dashboard-materi-pengenalan-bahasa-pemrograman-python', [MaterialController::class, 'materi11'])->name('materialdashboard.definition')->middleware('auth.redirect');
Route::get('/dashboard-materi-pendeklarasian-variabel', [MaterialController::class, 'materi12'])->name('materialdashboard.variable')->middleware('auth.redirect');
Route::get('/dashboard-materi-pengenalan-tipe-data', [MaterialController::class, 'materi13'])->name('materialdashboard.datatype')->middleware('auth.redirect');
Route::get('/dashboard-materi-operator-dan-ekspresi', [MaterialController::class, 'materi14'])->name('materialdashboard.operatorexpresion')->middleware('auth.redirect');
Route::get('/dashboard-materi-struktur-berurutan-pemrograman-python', [MaterialController::class, 'materi15'])->name('materialdashboard.sequential')->middleware('auth.redirect');
Route::get('/dashboard-materi-percabangan-pemrograman-python', [MaterialController::class, 'materi16'])->name('materialdashboard.branching')->middleware('auth.redirect');
Route::get('/dashboard-materi-perulangan-pemrograman-python', [MaterialController::class, 'materi17'])->name('materialdashboard.looping')->middleware('auth.redirect');

Route::get('/info-pengembang', function () {
    return view('ingfo/index', [
        "active" => "Info Pengembang",
        "title" => "Info Pengembang"
    ]);
})->name('infopengembang')->middleware('auth.redirect');

Route::get('/profil', [ProfileController::class, 'editSiswa'])->name('profil.siswa')->middleware('auth.redirect');
Route::get('/dashboard-profil', [ProfileController::class, 'editDashboard'])->name('profil.dashboard')->middleware('auth.redirect');
Route::put('/profil/update', [ProfileController::class, 'update'])->name('profil.update')->middleware('auth.redirect');
Route::put('/dashboard-profil/update', [ProfileController::class, 'updateDashboard'])->name('profil.updatedashboard')->middleware('auth.redirect');

Route::get('/forums', [ForumController::class, 'index'])->name('forums.index')->middleware('auth.redirect');
Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show')->middleware('auth.redirect');

Route::post('/forums/{forum}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth.redirect');
Route::get('/forums/{forum}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit')->middleware('auth.redirect');
Route::put('/forums/{forum}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update')->middleware('auth.redirect');
Route::delete('/forums/{forum}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth.redirect');

Route::get('/code-compiler-variable-1', [IndexCompilerController::class, 'satu'])->name('compile.variable.1')->middleware('auth.redirect');
Route::get('/code-compiler-variable-2', [IndexCompilerController::class, 'dua'])->name('compile.variable.2')->middleware('auth.redirect');
Route::get('/code-compiler-variable-3', [IndexCompilerController::class, 'tiga'])->name('compile.variable.3')->middleware('auth.redirect');
Route::get('/code-compiler-variable-4', [IndexCompilerController::class, 'empat'])->name('compile.variable.4')->middleware('auth.redirect');
Route::get('/code-compiler-variable-5', [IndexCompilerController::class, 'lima'])->name('compile.variable.5')->middleware('auth.redirect');
Route::get('/code-compiler-tipe-data-1', [IndexCompilerController::class, 'enam'])->name('compile.tipedata.1')->middleware('auth.redirect');
Route::get('/code-compiler-tipe-data-2', [IndexCompilerController::class, 'tujuh'])->name('compile.tipedata.2')->middleware('auth.redirect');
Route::get('/code-compiler-berurutan-1', [IndexCompilerController::class, 'delapan'])->name('compile.sequential.1')->middleware('auth.redirect');
Route::get('/code-compiler-berurutan-2', [IndexCompilerController::class, 'sembilan'])->name('compile.sequential.2')->middleware('auth.redirect');
Route::get('/code-compiler-if-statement-1', [IndexCompilerController::class, 'sepuluh'])->name('compile.ifstatement.1')->middleware('auth.redirect');
Route::get('/code-compiler-if-statement-2', [IndexCompilerController::class, 'sebelas'])->name('compile.ifstatement.2')->middleware('auth.redirect');
Route::get('/code-compiler-if-else-statement-1', [IndexCompilerController::class, 'duabelas'])->name('compile.ifelsestatement.1')->middleware('auth.redirect');
Route::get('/code-compiler-if-else-statement-2', [IndexCompilerController::class, 'tigabelas'])->name('compile.ifelsestatement.2')->middleware('auth.redirect');
Route::get('/code-compiler-elif-statement-1', [IndexCompilerController::class, 'empatbelas'])->name('compile.elifstatement.1')->middleware('auth.redirect');
Route::get('/code-compiler-selif-statement-2', [IndexCompilerController::class, 'limabelas'])->name('compile.elifstatement.2')->middleware('auth.redirect');
Route::get('/code-compiler-perulangan-1', [IndexCompilerController::class, 'enambelas'])->name('compile.looping.1')->middleware('auth.redirect');
Route::get('/code-compiler-perulangan-2', [IndexCompilerController::class, 'tujuhbelas'])->name('compile.looping.2')->middleware('auth.redirect');
Route::get('/code-compiler-perulangan-3', [IndexCompilerController::class, 'delapanbelas'])->name('compile.looping.3')->middleware('auth.redirect');

Route::post('/compile', [CompilerController::class, 'compile'])->middleware('auth.redirect');

Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index')->middleware('auth.redirect');
Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit')->middleware('auth.redirect');
Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update')->middleware('auth.redirect');

Route::get('/forums-dashboard', [DashboardForumController::class, 'index'])->name('forumsdashboard.index')->middleware('auth.redirect');
Route::get('/forums-dashboard/create', [DashboardForumController::class, 'create'])->name('forumsdashboard.create')->middleware('auth.redirect');
Route::get('/forums-dashboard/{forum}', [DashboardForumController::class, 'show'])->name('forumsdashboard.show')->middleware('auth.redirect');
Route::post('/forums-dashboard', [DashboardForumController::class, 'store'])->name('forumsdashboard.store')->middleware('auth.redirect');
Route::get('/forums-dashboard/{forum}/edit', [DashboardForumController::class, 'edit'])->name('forumsdashboard.edit')->middleware('auth.redirect');
Route::put('/forums-dashboard/{forum}', [DashboardForumController::class, 'update'])->name('forumsdashboard.update')->middleware('auth.redirect');
Route::delete('/forums-dashboard/{forum}', [DashboardForumController::class, 'destroy'])->name('forumsdashboard.destroy')->middleware('auth.redirect');

Route::get('/answers', [AnswerController::class, 'index'])->name('answers.index')->middleware('auth.redirect');
Route::get('/answers/{answer}/edit', [AnswerController::class, 'edit'])->name('answers.edit')->middleware('auth.redirect');
Route::put('/answers/{answer}', [AnswerController::class, 'update'])->name('answers.update')->middleware('auth.redirect');

Route::get('/daftar-pengguna', [UserController::class, 'index'])->name('userlist.index')->middleware('auth.redirect');
Route::get('/daftar-pengguna/{user}/edit', [UserController::class, 'edit'])->name('userlist.edit')->middleware('auth.redirect');
Route::put('/daftar-pengguna/{user}', [UserController::class, 'update'])->name('userlist.update')->middleware('auth.redirect');
Route::delete('/daftar-pengguna/{user}', [UserController::class, 'destroy'])->name('userlist.destroy')->middleware('auth.redirect');

Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index')->middleware('auth.redirect');
Route::get('/dashboard-leaderboard', [LeaderboardController::class, 'index1'])->name('leaderboard.indexDasboard')->middleware('auth.redirect');
Route::post('/update-leaderboard', [LeaderboardController::class, 'updateLeaderboard'])->name('update-leaderboard')->middleware('auth.redirect');

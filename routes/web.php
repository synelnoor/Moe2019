<?php

//use App\Models\MenuItem;
use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use League\Glide\Responses\LaravelResponseFactory;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\Repositories\ProfileRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\Kalender;

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

// Route::get('/', function () {
//     //return redirect('front.home');
//  return view('front.home');
// });
Route::get('/','FrontController@home');
Route::get('/sambutan','FrontController@sambutan');
Route::get('/visimisi','FrontController@visimisi');
Route::get('/organisasi','FrontController@organisasi' );
Route::get('/pimpinan','FrontController@pimpinan' );
Route::get('/adminegara','FrontController@adminegara' );
Route::get('/hubinter','FrontController@hubinter' );
Route::get('/kontak','FrontController@kontak' );
Route::get('/kalender','FrontController@kalender' );
Route::get('/jurnal','FrontController@jurnal' );
Route::get('/buku','FrontController@buku' );
Route::get('/pdosen','FrontController@pdosen' );
Route::get('/jurnaldosen/{id}','FrontController@jurnaldosen' );
Route::get('/bukudosen/{id}','FrontController@bukudosen' );
Route::get('/artikeldetail/{id}','FrontController@artikeldetail' );






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function () {
//     return MenuItem::renderAsHtml();
// });

Route::get('/admin', function () {
    // if(Laratrust::hasRole(['administrator','superadministrator'])) {
        return redirect('dashboard');
    // } else {
    //     return redirect('home');
    // }
});

Route::get('edit-profile', function(ProfileRepository $profileRepository) {
    return view('profiles.edit')->with('profile', $profileRepository->findWhere(['user_id' => Auth::user()->id])->first());
});

Route::group(['middleware' => 'auth'], function () {
    // Route::get('endpoint', function(\Illuminate\Http\Request $request) {
    //     return $request->all();
    // });

    // Route::get('oauth-admin', function() {
    //     return view('oauth.index');
    // });

    // Route::get('dashboard', 'HomeController@index');
    Route::get('dashboard', function() {
        return view('dashboard');
    });

    Route::get('analytics', 'HomeController@index');

    // Route::get('menu-manager', function () {
    //     return view('menu::index');
    // });
    
    // handling edit profile non superadmin
    Route::post('users', 'UserController@store')->name('users.store');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::put('users/{users}', 'UserController@update')->name('users.update');
    Route::patch('users/{users}', 'UserController@update')->name('users.update');
    Route::get('users/{users}/edit', 'UserController@edit')->name('users.edit');
    Route::post('profiles', 'ProfileController@store')->name('profiles.store');
    Route::get('profiles/create', 'ProfileController@create')->name('profiles.create');
    Route::put('profiles/{profiles}', 'ProfileController@update')->name('profiles.update');
    Route::patch('profiles/{profiles}', 'ProfileController@update')->name('profiles.update');
    Route::get('profiles/{profiles}/edit', 'ProfileController@edit')->name('profiles.edit');
    Route::group(['middleware' => ['role:superadministrator']], function () {
        // Route::resource('users', 'UserController');
        Route::get('users', 'UserController@index')->name('users.index');
        // Route::post('users', 'UserController@store')->name('users.store');
        // Route::get('users/create', 'UserController@create')->name('users.create');
        // Route::put('users/{users}', 'UserController@update')->name('users.update');
        // Route::patch('users/{users}', 'UserController@update')->name('users.update');
        Route::delete('users/{users}', 'UserController@destroy')->name('users.destroy');
        Route::get('users/{users}', 'UserController@show')->name('users.show');

        // Route::resource('profiles', 'ProfileController');
        Route::get('profiles', 'ProfileController@index')->name('profiles.index');
        // Route::post('profiles', 'ProfileController@store')->name('profiles.store');
        // Route::get('profiles/create', 'ProfileController@create')->name('profiles.create');
        // Route::put('profiles/{profiles}', 'ProfileController@update')->name('profiles.update');
        // Route::patch('profiles/{profiles}', 'ProfileController@update')->name('profiles.update');
        Route::delete('profiles/{profiles}', 'ProfileController@destroy')->name('profiles.destroy');
        Route::get('profiles/{profiles}', 'ProfileController@show')->name('profiles.show');

        Route::resource('roles', 'RoleController');

        Route::resource('permissions', 'PermissionController');
    });

    Route::group(['middleware' => ['role:superadministrator|administrator']], function () {
        Route::resource('settings', 'SettingController');
    });
});

Route::get('/img/{path}', function(Filesystem $filesystem, $path) {
    $server = ServerFactory::create([
        'response' => new LaravelResponseFactory(app('request')),
        'source' => $filesystem->getDriver(),
        'cache' => $filesystem->getDriver(),
        'cache_path_prefix' => '.cache',
        'base_url' => 'img',
    ]);

    return $server->getImageResponse($path, request()->all());

})->where('path', '.*');

Route::get('admin/pages', ['as'=> 'admin.pages.index', 'uses' => 'Admin\PageController@index']);
Route::post('admin/pages', ['as'=> 'admin.pages.store', 'uses' => 'Admin\PageController@store']);
Route::get('admin/pages/create', ['as'=> 'admin.pages.create', 'uses' => 'Admin\PageController@create']);
Route::put('admin/pages/{pages}', ['as'=> 'admin.pages.update', 'uses' => 'Admin\PageController@update']);
Route::patch('admin/pages/{pages}', ['as'=> 'admin.pages.update', 'uses' => 'Admin\PageController@update']);
Route::delete('admin/pages/{pages}', ['as'=> 'admin.pages.destroy', 'uses' => 'Admin\PageController@destroy']);
Route::get('admin/pages/{pages}', ['as'=> 'admin.pages.show', 'uses' => 'Admin\PageController@show']);
Route::get('admin/pages/{pages}/edit', ['as'=> 'admin.pages.edit', 'uses' => 'Admin\PageController@edit']);
// Route::post('importPage', 'Admin\PageController@import');

Route::get('admin/posts', ['as'=> 'admin.posts.index', 'uses' => 'Admin\PostController@index']);
Route::post('admin/posts', ['as'=> 'admin.posts.store', 'uses' => 'Admin\PostController@store']);
Route::get('admin/posts/create', ['as'=> 'admin.posts.create', 'uses' => 'Admin\PostController@create']);
Route::put('admin/posts/{posts}', ['as'=> 'admin.posts.update', 'uses' => 'Admin\PostController@update']);
Route::patch('admin/posts/{posts}', ['as'=> 'admin.posts.update', 'uses' => 'Admin\PostController@update']);
Route::delete('admin/posts/{posts}', ['as'=> 'admin.posts.destroy', 'uses' => 'Admin\PostController@destroy']);
Route::get('admin/posts/{posts}', ['as'=> 'admin.posts.show', 'uses' => 'Admin\PostController@show']);
Route::get('admin/posts/{posts}/edit', ['as'=> 'admin.posts.edit', 'uses' => 'Admin\PostController@edit']);
// Route::post('importPost', 'Admin\PostController@import');

Route::get('admin/banners', ['as'=> 'admin.banners.index', 'uses' => 'Admin\BannerController@index']);
Route::post('admin/banners', ['as'=> 'admin.banners.store', 'uses' => 'Admin\BannerController@store']);
Route::get('admin/banners/create', ['as'=> 'admin.banners.create', 'uses' => 'Admin\BannerController@create']);
Route::put('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::patch('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::delete('admin/banners/{banners}', ['as'=> 'admin.banners.destroy', 'uses' => 'Admin\BannerController@destroy']);
Route::get('admin/banners/{banners}', ['as'=> 'admin.banners.show', 'uses' => 'Admin\BannerController@show']);
Route::get('admin/banners/{banners}/edit', ['as'=> 'admin.banners.edit', 'uses' => 'Admin\BannerController@edit']);
// Route::post('importBanner', 'Admin\BannerController@import');

Route::resource('artikels', 'ArtikelController');
// Route::post('importArtikel', 'ArtikelController@import');

Route::resource('beritas', 'BeritaController');
// Route::post('importBerita', 'BeritaController@import');

Route::resource('articles', 'ArticleController');
// Route::post('importArticle', 'ArticleController@import');

Route::resource('visiMisis', 'VisiMisiController');
// Route::post('importVisiMisi', 'VisiMisiController@import');

Route::resource('dosens', 'DosenController');
// Route::post('importDosen', 'DosenController@import');

Route::resource('sambutans', 'SambutanController');
// Route::post('importSambutan', 'SambutanController@import');

Route::resource('jurnals', 'JurnalController');
// Route::post('importJurnal', 'JurnalController@import');

Route::resource('bukus', 'BukuController');
// Route::post('importBuku', 'BukuController@import');

Route::resource('kalenders', 'KalenderController');
// Route::post('importKalender', 'KalenderController@import');

Route::resource('fakultas', 'FakultasController');
// Route::post('importFakultas', 'FakultasController@import');



Route::get('kalender/{id}', function ($id) {
    //$uri = Request::segments();
    
    $kalender= Kalender::where('id',$id)->get();
    //dd($kalender);
    $key = @$kalender[0];
    if(!empty($key))
    {
        $file= $kalender[0]['file'];
        $headers = array(
            'Content-Type: application/pdf',
            'Content-Disposition:attachment; filename="kalender.pdf"',
            'Content-Transfer-Encoding:binary',
            //'Content-Length:'.filesize($file),
        );
        return \Response::download($file);
    }
}); 


Route::resource('events', 'EventController');
// Route::post('importEvent', 'EventController@import');
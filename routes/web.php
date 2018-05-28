<?php

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

Route::get('/', 'ServersController@main')->name('main');

// Pages
Route::get('/logout', 'PagesController@logout')->name('logout');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/rules', 'PagesController@rules')->name('rules');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/support', 'PagesController@support')->name('support');
Route::get('/faq', 'PagesController@faq')->name('faq');

Route::middleware('auth')->group(function ()
{
// Profile
    Route::get('/profile', 'UserController@profile')->name('profile');

// Change Password
    Route::get('/password/edit', 'UserController@changePassword')->name('changePassword');
    Route::post('/password/edit', 'UserController@changePasswordPost')->name('changePassword.post');

//Banners
    Route::get('/banners', 'PagesController@banners')->name('banners');

// Add Server
    Route::get('/addServer', 'ServersController@add')->name('addServer');
    Route::post('/addServer', 'ServersController@addPost')->name('addServer.post');
    Route::get('/server/{id}/addWorld', 'ServersController@addWorld')->name('addWorld');
    Route::post('/server/{id}/addWorld', 'ServersController@addWorldPost')->name('addWorld.post');

// Rate server
    Route::get('/server/{id}/vote', 'ServersController@vote')->name('voteServer');
    Route::post('/server/{id}/vote', 'ServersController@votePost')->name('voteServer.post');


});

Route::prefix('admin')->group(function ()
{
//    Route::get('/', 'AdminController@main')->name('admin.main');
    Route::get('/', function () {
        return redirect('admin/dashboard/v2');
    });
    Route::get('/dashboard/v1', function () {
        return view('admin/dashboard-v1');
    });
    Route::get('/dashboard/v2', function () {
        return view('admin/dashboard-v2');
    });
    Route::get('/email/inbox', function () {
        return view('admin/email-inbox');
    });
    Route::get('/email/compose', function () {
        return view('admin/email-compose');
    });
    Route::get('/email/detail', function () {
        return view('admin/email-detail');
    });
    Route::get('/widget', function () {
        return view('admin/widget');
    });
    Route::get('/ui/general', function () {
        return view('admin/ui-general');
    });
    Route::get('/ui/typography', function () {
        return view('admin/ui-typography');
    });
    Route::get('/ui/tabs-accordions', function () {
        return view('admin/ui-tabs-accordions');
    });
    Route::get('/ui/unlimited-nav-tabs', function () {
        return view('admin/ui-unlimited-nav-tabs');
    });
    Route::get('/ui/modal-notification', function () {
        return view('admin/ui-modal-notification');
    });
    Route::get('/ui/widget-boxes', function () {
        return view('admin/ui-widget-boxes');
    });
    Route::get('/ui/media-object', function () {
        return view('admin/ui-media-object');
    });
    Route::get('/ui/buttons', function () {
        return view('admin/ui-buttons');
    });
    Route::get('/ui/icons', function () {
        return view('admin/ui-icons');
    });
    Route::get('/ui/simple-line-icons', function () {
        return view('admin/ui-simple-line-icons');
    });
    Route::get('/ui/ionicons', function () {
        return view('admin/ui-ionicons');
    });
    Route::get('/ui/tree-view', function () {
        return view('admin/ui-tree-view');
    });
    Route::get('/ui/language-bar-icon', function () {
        return view('admin/ui-language-bar-icon');
    });
    Route::get('/ui/social-buttons', function () {
        return view('admin/ui-social-buttons');
    });
    Route::get('/ui/intro-js', function () {
        return view('admin/ui-intro-js');
    });
    Route::get('/bootstrap-4', function () {
        return view('admin/bootstrap-4');
    });
    Route::get('/form/elements', function () {
        return view('admin/form-elements');
    });
    Route::get('/form/plugins', function () {
        return view('admin/form-plugins');
    });
    Route::get('/form/slider-switcher', function () {
        return view('admin/form-slider-switcher');
    });
    Route::get('/form/validation', function () {
        return view('admin/form-validation');
    });
    Route::get('/form/wizards', function () {
        return view('admin/form-wizards');
    });
    Route::get('/form/wizards-validation', function () {
        return view('admin/form-wizards-validation');
    });
    Route::get('/form/wysiwyg', function () {
        return view('admin/form-wysiwyg');
    });
    Route::get('/form/x-editable', function () {
        return view('admin/form-x-editable');
    });
    Route::get('/form/multiple-file-upload', function () {
        return view('admin/form-multiple-file-upload');
    });
    Route::get('/form/summernote', function () {
        return view('admin/form-summernote');
    });
    Route::get('/form/dropzone', function () {
        return view('admin/form-dropzone');
    });
    Route::get('/table/basic', function () {
        return view('admin/table-basic');
    });
    Route::get('/table/manage/default', function () {
        return view('admin/table-manage-default');
    });
    Route::get('/table/manage/autofill', function () {
        return view('admin/table-manage-autofill');
    });
    Route::get('/table/manage/buttons', function () {
        return view('admin/table-manage-buttons');
    });
    Route::get('/table/manage/colreorder', function () {
        return view('admin/table-manage-colreorder');
    });
    Route::get('/table/manage/fixed-column', function () {
        return view('admin/table-manage-fixed-column');
    });
    Route::get('/table/manage/fixed-header', function () {
        return view('admin/table-manage-fixed-header');
    });
    Route::get('/table/manage/keytable', function () {
        return view('admin/table-manage-keytable');
    });
    Route::get('/table/manage/responsive', function () {
        return view('admin/table-manage-responsive');
    });
    Route::get('/table/manage/rowreorder', function () {
        return view('admin/table-manage-rowreorder');
    });
    Route::get('/table/manage/scroller', function () {
        return view('admin/table-manage-scroller');
    });
    Route::get('/table/manage/select', function () {
        return view('admin/table-manage-select');
    });
    Route::get('/table/manage/combine', function () {
        return view('admin/table-manage-combine');
    });
    Route::get('/email-template/system', function () {
        return view('admin/email-template-system');
    });
    Route::get('/email-template/newsletter', function () {
        return view('admin/email-template-newsletter');
    });
    Route::get('/chart/flot', function () {
        return view('admin/chart-flot');
    });
    Route::get('/chart/morris', function () {
        return view('admin/chart-morris');
    });
    Route::get('/chart/js', function () {
        return view('admin/chart-js');
    });
    Route::get('/chart/d3', function () {
        return view('admin/chart-d3');
    });
    Route::get('/calendar', function () {
        return view('admin/calendar');
    });
    Route::get('/map/vector', function () {
        return view('admin/map-vector');
    });
    Route::get('/map/google', function () {
        return view('admin/map-google');
    });
    Route::get('/gallery/v1', function () {
        return view('admin/gallery-v1');
    });
    Route::get('/gallery/v2', function () {
        return view('admin/gallery-v2');
    });
    Route::get('/page-option/page-blank', function () {
        return view('admin/page-blank');
    });
    Route::get('/page-option/page-with-footer', function () {
        return view('admin/page-with-footer');
    });
    Route::get('/page-option/page-without-sidebar', function () {
        return view('admin/page-without-sidebar');
    });
    Route::get('/page-option/page-with-right-sidebar', function () {
        return view('admin/page-with-right-sidebar');
    });
    Route::get('/page-option/page-with-minified-sidebar', function () {
        return view('admin/page-with-minified-sidebar');
    });
    Route::get('/page-option/page-with-two-sidebar', function () {
        return view('admin/page-with-two-sidebar');
    });
    Route::get('/page-option/page-full-height', function () {
        return view('admin/page-full-height');
    });
    Route::get('/page-option/page-with-wide-sidebar', function () {
        return view('admin/page-with-wide-sidebar');
    });
    Route::get('/page-option/page-with-light-sidebar', function () {
        return view('admin/page-with-light-sidebar');
    });
    Route::get('/page-option/page-with-mega-menu', function () {
        return view('admin/page-with-mega-menu');
    });
    Route::get('/page-option/page-with-top-menu', function () {
        return view('admin/page-with-top-menu');
    });
    Route::get('/page-option/page-with-boxed-layout', function () {
        return view('admin/page-with-boxed-layout');
    });
    Route::get('/page-option/page-with-mixed-menu', function () {
        return view('admin/page-with-mixed-menu');
    });
    Route::get('/page-option/boxed-layout-with-mixed-menu', function () {
        return view('admin/page-boxed-layout-with-mixed-menu');
    });
    Route::get('/page-option/page-with-transparent-sidebar', function () {
        return view('admin/page-with-transparent-sidebar');
    });
    Route::get('/extra/timeline', function () {
        return view('admin/extra-timeline');
    });
    Route::get('/extra/coming-soon', function () {
        return view('admin/extra-coming-soon');
    });
    Route::get('/extra/search-result', function () {
        return view('admin/extra-search-result');
    });
    Route::get('/extra/invoice', function () {
        return view('admin/extra-invoice');
    });
    Route::get('/extra/error-page', function () {
        return view('admin/extra-error-page');
    });
    Route::get('/extra/profile', function () {
        return view('admin/extra-profile');
    });
    Route::get('/login/v1', function () {
        return view('admin/login-v1');
    });
    Route::get('/login/v2', function () {
        return view('admin/login-v2');
    });
    Route::get('/login/v3', function () {
        return view('admin/login-v3');
    });
    Route::get('/register/v3', function () {
        return view('admin/register-v3');
    });
    Route::get('/helper/css', function () {
        return view('admin/helper-css');
    });
});

//Servers
Route::get('/server/{id}', 'ServersController@server')->name('serverPage');
Route::post('/server/{id}/addComment', 'ServersController@addComment')->name('serverAddComment');

// Statistic
Route::get('/server/{id}/statistic', 'ServersController@serverStat')->name('serverStat');

// Games
Route::get('/aion',  'ServersController@aion')->name('aion');
Route::get('/mu', 'ServersController@mu')->name('mu');
Route::get('/rf', 'ServersController@rf')->name('rf');
Route::get('/wow', 'ServersController@wow')->name('wow');
Route::get('/perfect', 'ServersController@perfect')->name('perfect');
Route::get('/jade', 'ServersController@jade')->name('jade');
Route::get('/lineage', 'ServersController@lineage')->name('lineage');
Route::get('/other', 'ServersController@other')->name('other');

// 404
Route::get('404', 'ErrorHandlerController@errorCode404')->name('404');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

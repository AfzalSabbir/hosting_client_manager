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

Route::get('/', function () {
	//return view('welcome');
	return redirect()->route('admin.home');
});

Auth::routes();

/**
 * Redirect after auth of user
 */
Route::get('/home', 'Frontend\HomeController@index')->name('home');




/**
 * Errors
 */
Route::group(['prefix' => 'errors'], function(){
	Route::get('/401', function() { return view('errors.401'); })->name('errors.401');
	Route::get('/404', function() { return view('errors.404'); })->name('errors.404');
	Route::get('/500', function() { return view('errors.500'); })->name('errors.500');
});



/**
 * Admin Section Routes
 */
Route::group(['prefix' => 'admin'], function(){

	
	/**
	 * Admin authentication routes
	*/
	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
	Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/reset','Auth\Admin\ResetPasswordController@reset');
	Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::get('/change-password', 'Backend\HomeController@chnagePasswordForm')->name('admin.password.form');
	Route::post('/change-password', 'Backend\HomeController@chnagePassword')->name('admin.password.change');


	/**
	 * Admin Dashboard
	*/
	Route::get('/', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/dashboard', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/chart', 'Backend\HomeController@chart')->name('admin.chart');
	// Route::get('/form', 'Backend\HomeController@form')->name('admin.form');
	// Route::get('/table', 'Backend\HomeController@table')->name('admin.table');
	
	
	/**
	 * Admin routes
	*/
	Route::group(['prefix' => 'all-admin'], function(){
		Route::get('/', 'Backend\AdminController@index')->name('admin.all_admin.index');
		Route::get('/add', 'Backend\AdminController@create')->name('admin.all_admin.add');
		Route::post('/add', 'Backend\AdminController@store')->name('admin.all_admin.store');
		Route::get('/edit/{id}', 'Backend\AdminController@edit')->name('admin.all_admin.edit');
		Route::post('/edit/{slug}', 'Backend\AdminController@update')->name('admin.all_admin.update');
		Route::get('/delete/{slug}', 'Backend\AdminController@delete')->name('admin.all_admin.delete');
	});


	/**
	 * Setting routes
	*/
	Route::group(['prefix' => 'setting'], function(){
		Route::get('/', 'Backend\SettingController@index')->name('admin.setting.index');
		Route::post('/', 'Backend\SettingController@store')->name('admin.setting.store');
	});


	/**
	 * Menu routes
	*/
	Route::group(['prefix' => 'menu'], function(){
		Route::get('/', 'Backend\MenuController@index')->name('admin.menu.index');
		Route::get('/add', 'Backend\MenuController@create')->name('admin.menu.create');
		Route::post('/add', 'Backend\MenuController@store')->name('admin.menu.store');
		Route::get('/edit/{id}', 'Backend\MenuController@edit')->name('admin.menu.edit');
		Route::post('/edit/{id}', 'Backend\MenuController@update')->name('admin.menu.update');
		Route::get('/delete/{id}', 'Backend\MenuController@delete')->name('admin.menu.delete');

		Route::get('/sort', 'Backend\MenuController@sort')->name('admin.menu.sort');
		Route::post('/sort', 'Backend\MenuController@sort_update')->name('admin.menu.sort_update');
	});


	/**
	 * Role routes
	*/
	Route::group(['prefix' => 'role'], function(){
		Route::get('/', 'Backend\RoleController@index')->name('admin.role.index');
		Route::get('/assign/{role}', 'Backend\RoleController@create')->name('admin.role.assign');
		Route::get('/assign/{role}/{admin_id}', 'Backend\RoleController@userCreate')->name('admin.role.user_assign');
		Route::post('/assign', 'Backend\RoleController@store')->name('admin.role.store');
	});


	// Admin Access Information
	Route::get('/log', 'Backend\AdminAccessInfoController@index')->name('admin.log.index');
	
	
	/**
	 * Unit routes
	*/
	Route::group(['prefix' => 'unit'], function(){
		Route::get('/', 'Backend\UnitController@index')->name('admin.unit.index');
		Route::get('/view/{id}', 'Backend\UnitController@show')->name('admin.unit.show');
		Route::post('/add', 'Backend\UnitController@store')->name('admin.unit.store');
		Route::post('/edit/{id}', 'Backend\UnitController@update')->name('admin.unit.update');
		Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('admin.unit.delete');
	});
	
	
	/**
	 * Category routes
	*/
	Route::group(['prefix' => 'category'], function(){
		Route::get('/', 'Backend\CategoryController@index')->name('admin.category.index');
		Route::get('/add', 'Backend\CategoryController@create')->name('admin.category.create');
		Route::post('/add', 'Backend\CategoryController@store')->name('admin.category.store');
		Route::get('/edit/{slug}', 'Backend\CategoryController@edit')->name('admin.category.edit');
		Route::post('/edit/{slug}', 'Backend\CategoryController@update')->name('admin.category.update');
		Route::get('/delete/{slug}', 'Backend\CategoryController@delete')->name('admin.category.delete');
	});


    /**
     * SubCategory Routes
     */
    Route::group(['prefix'=>'subcategory'], function () {
    	Route::get('/', 'Backend\SubcategoryController@index')->name('admin.subcategory.index');
    	Route::get('/add', 'Backend\SubcategoryController@create')->name('admin.subcategory.create');
    	Route::post('/add', 'Backend\SubcategoryController@store')->name('admin.subcategory.store');
    	Route::get('/edit/{slug}', 'Backend\SubcategoryController@edit')->name('admin.subcategory.edit');
    	Route::post('/edit/{slug}', 'Backend\SubcategoryController@update')->name('admin.subcategory.update');
    	Route::get('/delete/{slug}', 'Backend\SubcategoryController@delete')->name('admin.subcategory.delete');
    });


    /**
     * Brand routes
     */
    Route::group(['prefix' => 'brand'], function(){
    	Route::get('/', 'Backend\BrandController@index')->name('admin.brand.index');
    	Route::get('/add', 'Backend\BrandController@create')->name('admin.brand.create');
    	Route::post('/add', 'Backend\BrandController@store')->name('admin.brand.store');
    	Route::get('/edit/{slug}', 'Backend\BrandController@edit')->name('admin.brand.edit');
    	Route::post('/edit/{slug}', 'Backend\BrandController@update')->name('admin.brand.update');
    	Route::get('/delete/{slug}', 'Backend\BrandController@delete')->name('admin.brand.delete');
    });


	/**
     * Database Backup routes
    */
	Route::group(['prefix' => 'backup'], function(){
		Route::get('/', 'Backend\BackupController@index')->name('admin.backup.index');
		Route::get('/new', 'Backend\BackupController@newBackup')->name('admin.backup.new');
		Route::get('/delete/{file}', 'Backend\BackupController@deleteBakup')->name('admin.backup.delete');
	});


	/**
    * SMS Routes
    **/
    Route::group(['prefix' => 'sms'], function(){
        Route::get('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.send');
        Route::post('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.get_user');
        Route::post('/submit-send-sms', 'Backend\SMSController@submitSendSMS')->name('admin.sms.submit_send_sms');
        Route::get('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.custom');
        Route::post('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.submit_custom_sms');
        Route::get('/report', 'Backend\SMSController@smsReport')->name('admin.sms.report');
    });


    /**
     * Language
    **/
    Route::get('/language', 'Backend\LanguageController@language')->name('admin.language.index');
    Route::post('/language/insert', 'Backend\LanguageController@insert')->name('admin.language.insert');
    Route::post('/language/create', 'Backend\LanguageController@create')->name('admin.language.create');


    /**
     * Root
    **/
    Route::get('/root', 'Backend\RootController@index')->name('admin.root.index');
    Route::post('/root/create', 'Backend\RootController@create')->name('admin.root.create');


	/**
	* Checking
	**/
	Route::group(['prefix' => 'checking'], function(){
		Route::get('/', 'Backend\CheckingController@index')->name('admin.checking.index');
		Route::get('/add', 'Backend\CheckingController@add')->name('admin.checking.add');
		Route::post('/add', 'Backend\CheckingController@store')->name('admin.checking.store');
		Route::get('/edit/{id}', 'Backend\CheckingController@edit')->name('admin.checking.edit');
		Route::post('/edit/{id}', 'Backend\CheckingController@update')->name('admin.checking.update');
		Route::get('/delete/{id}', 'Backend\CheckingController@delete')->name('admin.checking.delete');
	});


	/**
	* Payment
	**/
	Route::group(['prefix' => 'payment'], function(){
		Route::get('/', 'Backend\PaymentController@index')->name('admin.payment.index');
		Route::post('/', 'Backend\PaymentController@index')->name('admin.payment.index');
		Route::get('/add', 'Backend\PaymentController@add')->name('admin.payment.add');
		Route::get('/add/{id}', 'Backend\PaymentController@add_id')->name('admin.payment.add_id');
		Route::post('/add', 'Backend\PaymentController@store')->name('admin.payment.store');
		Route::get('/view/{id}', 'Backend\PaymentController@view')->name('admin.payment.view');
		Route::post('/date_view', 'Backend\PaymentController@date_view')->name('admin.payment.date_view');
		Route::get('/edit/{id}', 'Backend\PaymentController@add_id')->name('admin.payment.edit');
		Route::post('/edit/{id}', 'Backend\PaymentController@update')->name('admin.payment.update');
		Route::get('/delete/{id}', 'Backend\PaymentController@delete')->name('admin.payment.delete');
	});


	/**
	* Client
	**/
	Route::group(['prefix' => 'client'], function(){
		Route::get('/', 'Backend\ClientController@index')->name('admin.client.index');
		Route::get('/add', 'Backend\ClientController@add')->name('admin.client.add');
		Route::post('/add', 'Backend\ClientController@store')->name('admin.client.store');
		Route::get('/view/{id}', 'Backend\ClientController@view')->name('admin.client.view');
		Route::get('/edit/{id}', 'Backend\ClientController@edit')->name('admin.client.edit');
		Route::post('/edit/{id}', 'Backend\ClientController@update')->name('admin.client.update');
		Route::get('/delete/{id}', 'Backend\ClientController@delete')->name('admin.client.delete');
		Route::get('/send', 'Backend\ClientController@send')->name('admin.client.send');
	});


	/**
	* RenewalDomain
	**/
	Route::group(['prefix' => 'renewal_domain'], function(){
		Route::get('/', 'Backend\RenewalDomainController@index')->name('admin.renewal_domain.index');
		Route::get('/add', 'Backend\RenewalDomainController@add')->name('admin.renewal_domain.add');
		Route::post('/add', 'Backend\RenewalDomainController@store')->name('admin.renewal_domain.store');
		Route::get('/check', 'Backend\RenewalDomainController@check')->name('admin.renewal_domain.check');
		Route::get('/add/{id}', 'Backend\RenewalDomainController@add_id')->name('admin.renewal_domain.add_id');
		Route::get('/view/{id}', 'Backend\RenewalDomainController@view')->name('admin.renewal_domain.view');
		Route::get('/edit/{id}', 'Backend\RenewalDomainController@edit')->name('admin.renewal_domain.edit');
		Route::post('/edit/{id}', 'Backend\RenewalDomainController@update')->name('admin.renewal_domain.update');
		Route::get('/delete/{id}', 'Backend\RenewalDomainController@delete')->name('admin.renewal_domain.delete');
	});


	/**
	* ServiceCharge
	**/
	Route::group(['prefix' => 'service_charge'], function(){
		Route::get('/', 'Backend\ServiceChargeController@index')->name('admin.service_charge.index');
		Route::get('/add', 'Backend\ServiceChargeController@add')->name('admin.service_charge.add');
		Route::post('/add', 'Backend\ServiceChargeController@store')->name('admin.service_charge.store');
		Route::get('/check', 'Backend\ServiceChargeController@check')->name('admin.service_charge.check');
		Route::get('/add/{id}', 'Backend\ServiceChargeController@add_id')->name('admin.service_charge.add_id');
		Route::get('/view/{id}', 'Backend\ServiceChargeController@view')->name('admin.service_charge.view');
		Route::get('/edit/{id}', 'Backend\ServiceChargeController@edit')->name('admin.service_charge.edit');
		Route::post('/edit/{id}', 'Backend\ServiceChargeController@update')->name('admin.service_charge.update');
		Route::get('/delete/{id}', 'Backend\ServiceChargeController@delete')->name('admin.service_charge.delete');
	});


	/**
	* GeneralIncome
	**/
	Route::group(['prefix' => 'general_income'], function(){
		Route::get('/', 'Backend\GeneralIncomeController@index')->name('admin.general_income.index');
		Route::get('/add', 'Backend\GeneralIncomeController@add')->name('admin.general_income.add');
		Route::post('/add', 'Backend\GeneralIncomeController@store')->name('admin.general_income.store');
		Route::post('/add_source', 'Backend\GeneralIncomeController@add_source')->name('admin.general_income.add_source');
		Route::get('/edit/{id}', 'Backend\GeneralIncomeController@edit')->name('admin.general_income.edit');
		Route::post('/edit/{id}', 'Backend\GeneralIncomeController@update')->name('admin.general_income.update');
		Route::get('/delete/{id}', 'Backend\GeneralIncomeController@delete')->name('admin.general_income.delete');
	});


	/**
	* Cost
	**/
	Route::group(['prefix' => 'cost'], function(){
		Route::get('/', 'Backend\CostController@index')->name('admin.cost.index');
		Route::get('/add', 'Backend\CostController@add')->name('admin.cost.add');
		Route::post('/add', 'Backend\CostController@store')->name('admin.cost.store');
		Route::post('/add_source', 'Backend\CostController@add_source')->name('admin.cost.add_source');
		Route::get('/edit/{id}', 'Backend\CostController@edit')->name('admin.cost.edit');
		Route::post('/edit/{id}', 'Backend\CostController@update')->name('admin.cost.update');
		Route::get('/delete/{id}', 'Backend\CostController@delete')->name('admin.cost.delete');
	});


	/**
	* BalanceSheet
	**/
	Route::group(['prefix' => 'balance_sheet'], function(){
		Route::get('/balance_sheet', 'Backend\BalanceSheetController@index')->name('admin.balance_sheet.index');
		Route::post('/balance_sheet', 'Backend\BalanceSheetController@index')->name('admin.balance_sheet.index');
	});


	/**
	* Domain
	**/
	Route::group(['prefix' => 'domain'], function(){
		Route::get('/', 'Backend\DomainController@index')->name('admin.domain.index');
		Route::get('/add', 'Backend\DomainController@add')->name('admin.domain.add');
		Route::post('/add', 'Backend\DomainController@store')->name('admin.domain.store');
		Route::get('/edit/{id}', 'Backend\DomainController@edit')->name('admin.domain.edit');
		Route::get('/database/{id}', 'Backend\DomainController@view')->name('admin.domain.view');
		Route::post('/edit/{id}', 'Backend\DomainController@update')->name('admin.domain.update');
		Route::get('/delete/{id}', 'Backend\DomainController@delete')->name('admin.domain.delete');
	});
	

	/**
	* Database
	**/
	Route::group(['prefix' => 'database'], function(){
		Route::get('/', 'Backend\DatabaseController@index')->name('admin.database.index');
		Route::get('/add', 'Backend\DatabaseController@add')->name('admin.database.add');
		Route::post('/add', 'Backend\DatabaseController@store')->name('admin.database.store');
		Route::get('/edit/{id}', 'Backend\DatabaseController@edit')->name('admin.database.edit');
		Route::post('/edit/{id}', 'Backend\DatabaseController@update')->name('admin.database.update');
		Route::get('/delete/{id}', 'Backend\DatabaseController@delete')->name('admin.database.delete');
	});




    
});


Route::get('language/{locale}', function ($lang) {
	Session::put('locale', $lang);
	return redirect()->back();
})->name('language');
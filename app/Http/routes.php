<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//首頁
Route::get('/', function () {
    return view('index');
});

//關於日友
Route::get('/AboutSF/CompanyProfile', function () {
    return view('AboutSF.CompanyProfile');
});
Route::get('/AboutSF/ServiceAndArea', function () {
    return view('AboutSF.ServiceAndArea');
});
Route::get('/AboutSF/Structure', function () {
    return view('AboutSF.Structure');
});
Route::get('/AboutSF/ManagingTeam', function () {
    return view('AboutSF.ManagingTeam');
});
Route::get('/AboutSF/Organization', function () {
    return view('AboutSF.Organization');
});
Route::get('/AboutSF/Shareholding', function () {
    return view('AboutSF.Shareholding');
});
Route::get('/AboutSF/IIC', function () {
    return view('AboutSF.IIC');
});

//最新消息
Route::get('/News/NewsCenter', function () {
    return view('News.NewsCenter');
});
Route::get('/News/ImportantNews', function () {
    return view('News.ImportantNews');
});
Route::get('/News/WebsiteLinks', function () {
    return view('News.WebsiteLinks');
});
Route::get('/News/latestNews', function () {
    return view('News.latestNews');
});
Route::get('/News/latestNews','NewsController@index');
Route::get('/News/Detail/{id}','NewsController@detail');
//公司治理
Route::get('/CorporateGovernance/GovernancePreface', function () {
    return view('CorporateGovernance.GovernancePreface');
});
Route::get('/CorporateGovernance/Regulations', function () {
    return view('CorporateGovernance.Regulations');
});
Route::get('/CorporateGovernance/InternalAuditing', function () {
    return view('CorporateGovernance.InternalAuditing');
});
Route::get('/CorporateGovernance/BoardofDirectors', function () {
    return view('CorporateGovernance.BoardofDirectors');
});
Route::get('/CorporateGovernance/Diversification', function () {
    return view('CorporateGovernance.Diversification');
});

//投資人專區
Route::get('/Investor/ExchangeLink', function () {
    return view('Investor.ExchangeLink');
});
Route::get('/Investor/DividendPolicy', function () {
    return view('Investor.DividendPolicy');
});
Route::get('/Investor/InvestmentCentre', function () {
    return view('Investor.InvestmentCentre');
});
Route::get('/Investor/IFSM','InvestorController@shareholders');
Route::get('/Investor/MonthlyRevenue','InvestorController@revenue');
Route::get('/Investor/FinancialInformation','InvestorController@finance');

//企業社會責任
Route::get('/CorporateSocialResponsibility/Preface', function () {
    return view('CorporateSocialResponsibility.Preface');
});
Route::get('/CorporateSocialResponsibility/Policy', function () {
    return view('CorporateSocialResponsibility.Policy');
});
Route::get('/CorporateSocialResponsibility/ResultsAndplans', function () {
    return view('CorporateSocialResponsibility.ResultsAndplans');
});
Route::get('/CorporateSocialResponsibility/CSRReport','CorporateSocialResponsibilityController@csr');
Route::get('/CorporateSocialResponsibility/VanellusLiterature','CorporateSocialResponsibilityController@index');
//利害關係人
Route::get('/Stakeholder/MaterialIssues', function () {
    return view('Stakeholder.MaterialIssues');
});
Route::get('/Stakeholder/EmployeeBenefits', function () {
    return view('Stakeholder.EmployeeBenefits');
});
Route::get('/Stakeholder/SMP', function () {
    return view('Stakeholder.SMP');
});
Route::get('/Stakeholder/GrievanceMachinery', function () {
    return view('Stakeholder.GrievanceMachinery');
});
Route::get('/Stakeholder/UBGM', function () {
    return view('Stakeholder.UBGM');
});
//環境保護
Route::get('/Environmentalprotection/Energysaving', function () {
    return view('Environmentalprotection.Energysaving');
});
Route::get('/Environmentalprotection/EnvironmentMonitoring','EnvironmentalprotectionController@Monitoring');
Route::get('/Environmentalprotection/EnvironmentalUnit','EnvironmentalprotectionController@alUnit');



Route::get('/Admin', 'LoginController@Admin');

Route::get('/Admin/Logout','LoginController@logout');

    Route::get('/Admin/Investor/AdminIFSM', 'InvestorController@AdminShareholdersIndex');
    Route::post('/Admin/Investor/AdminIFSM','InvestorController@AdminShareholdersCreate');
    Route::post('/Admin/Investor/AdminIFSM/edit','InvestorController@AdminShareholdersEdit');
    Route::post('/Admin/Investor/AdminIFSM/delete','InvestorController@AdminShareholdersDelete');
    

    Route::get('/Admin/Investor/AdminMonthlyRevenue', 'InvestorController@AdminRevenueIndex');
    Route::post('/Admin/Investor/AdminMonthlyRevenue','InvestorController@AdminRevenueCreate');
    Route::post('/Admin/Investor/AdminMonthlyRevenue/edit','InvestorController@AdminRevenueEdit');
    Route::post('/Admin/Investor/AdminMonthlyRevenue/delete','InvestorController@AdminRevenueDelete');


    Route::get('/Admin/Investor/AdminFinancialInformation', 'InvestorController@AdminFinanceIndex');
    Route::post('/Admin/Investor/AdminFinancialInformation','InvestorController@AdminFinanceCreate');
    Route::post('/Admin/Investor/AdminFinancialInformation/edit','InvestorController@AdminFinanceEdit');
    Route::post('/Admin/Investor/AdminFinancialInformation/delete','InvestorController@AdminFinanceDelete');


    Route::get('/Admin/CorporateSocialResponsibility/CSRReport', 'CorporateSocialResponsibilityController@AdminCsrIndex');
    Route::post('/Admin/CorporateSocialResponsibility/CSRReport','CorporateSocialResponsibilityController@AdminCsrCreate');
    Route::post('/Admin/CorporateSocialResponsibility/CSRReport/delete','CorporateSocialResponsibilityController@AdminCsrDelete');

    Route::get('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature', 'CorporateSocialResponsibilityController@AdminPotatoIndex');
    Route::post('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature','CorporateSocialResponsibilityController@AdminPotatoCreate');
    Route::post('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature/delete','CorporateSocialResponsibilityController@AdminPotatoDelete');

    Route::get('/Admin/News/AdminNews', 'NewsController@AdminNewsIndex');
    Route::post('/Admin/News/AdminNews','NewsController@AdminNewsCreate');
    Route::post('/Admin/News/AdminNews/edit','NewsController@AdminNewsEdit');
    Route::post('/Admin/News/AdminNews/delete','NewsController@AdminNewsDelete');

    Route::get('/Admin/Environmentalprotection/AdminEnvUnit', 'EnvironmentalprotectionController@AdminAlUnitIndex');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit', 'EnvironmentalprotectionController@AdminAlUnitCreate');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit/edit','EnvironmentalprotectionController@AdminAlUnitEdit');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit/delete','EnvironmentalprotectionController@AdminAlUnitDelete');

    Route::get('/Admin/Environmentalprotection/AdminEnvMonitoring', 'EnvironmentalprotectionController@AdminMonitoringIndex');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring', 'EnvironmentalprotectionController@AdminMonitoringCreate');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring/edit','EnvironmentalprotectionController@AdminMonitoringEdit');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring/delete','EnvironmentalprotectionController@AdminMonitoringDelete');
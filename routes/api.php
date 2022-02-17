<?php

use App\Http\Controllers\BusinessLineController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CivilStatuController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\ConceptTypeController;
use App\Http\Controllers\ConstitutionTypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\CovenantController;
use App\Http\Controllers\CovenantTypeController;
use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\EmergencyContactController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\HealthProviderController;
use App\Http\Controllers\IdentificationTypeController;
use App\Http\Controllers\KinkshipController;
use App\Http\Controllers\OccupationalRiskManagerController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PensionFundController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PeriodicityTypeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvisionController;
use App\Http\Controllers\ResponsabilityTypeController;
use App\Http\Controllers\SalaryTypeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StrataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacationController;
use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:api'])->group(function () {
    // });

    Route::apiResource('user', UserController::class);
    Route::apiResource('covenant', CovenantController::class);
    Route::apiResource('covenantType', CovenantTypeController::class);
    Route::apiResource('periodicityType', PeriodicityTypeController::class);
    Route::apiResource('provider', ProviderController::class);
    Route::apiResource('businessLine', BusinessLineController::class);
    Route::apiResource('position', PositionController::class);
    Route::apiResource('contractType', ContractTypeController::class);
    Route::apiResource('salaryType', SalaryTypeController::class);
    Route::apiResource('headQuarter', HeadquarterController::class);
    Route::apiResource('identificationType', IdentificationTypeController::class);
    Route::apiResource('period', PeriodController::class);
    Route::apiResource('setting', SettingController::class);
    Route::apiResource('conceptType', ConceptTypeController::class);
    Route::apiResource('concept', ConceptController::class);
    Route::apiResource('payroll', PayrollController::class);
    Route::prefix('payroll')->group( function(){
        Route::get('user/{user}',[PayrollController::class,'userPayroll']);
    });
    Route::get('consultaPayroll', [PayrollController::class, 'consultDatePeriod']);
    Route::get('consultaCovenant', [CovenantController::class, 'consultCovenant']);
    //cargar conceptos, devengados y deducciones
    Route::post('payrollConcept/{payroll_id}', [PayrollController::class, 'asignarConcepto']);
    //eliminar conceptos
    Route::delete('payrollDeleteConcept/{payroll_id}', [PayrollController::class, 'eliminarConceptoPayroll']);
    //asignar un convenio a un usuario y eliminar convenio
    Route::post('user/asignarConvenio/{user_id}', [UserController::class, 'asignarConvenio']);
    Route::delete('user/eliminarConvenio/{user_id}', [UserController::class, 'eliminarConvenio']);
    Route::get('consultDeduccion', [PayrollController::class, 'consultDeduccion']);
    Route::get('checkLogin', function (){
        if(Auth::guard('api')->check()) return response()->json(['isLogined'=>true]);
        return response()->json(['isLogined'=>false]);
    });
    Route::apiResource('emergencyContact', EmergencyContactController::class);
    Route::apiResource('contact', ContactController::class);
    Route::prefix('contact')->group(function(){
        Route::get('provider/{provider_id}',[ContactController::class,'providerContact']);
    });

    Route::apiResource('healthProvider', HealthProviderController::class);
    Route::apiResource('pensionFund', PensionFundController::class);
    Route::apiResource('city', CityController::class);
    Route::apiResource('province', ProvinceController::class);
    Route::apiResource('gender', GenderController::class);
    Route::apiResource('civilStatu', CivilStatuController::class);
    Route::apiResource('strata', StrataController::class);
    Route::apiResource('educationLevel', EducationLevelController::class);
    Route::apiResource('constitutionType', ConstitutionTypeController::class);
    Route::apiResource('responsabilityType', ResponsabilityTypeController::class);
    Route::apiResource('kinship', KinkshipController::class);
    Route::apiResource('vacation', VacationController::class);
    Route::post('vacationsCalc/{payroll_id}', [VacationController::class, 'vacationCalc']);
    Route::post('calcDays', [VacationController::class, 'calcDays']);
    Route::apiResource('occupationalRiskManager', OccupationalRiskManagerController::class);
    Route::apiResource('provision', ProvisionController::class);
    Route::get('usersColletion',function () {
        return UsersResource::collection(User::all());
    });




<?php

use App\Http\Controllers\BusinessLineController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\ConceptTypeController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\CovenantController;
use App\Http\Controllers\CovenantTypeController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\IdentificationTypeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PeriodicityTypeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SalaryTypeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware(['auth:api'])->group(function () {
    
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
    //asignar un convenio a un usuario
    Route::post('user/asignarConvenio/{user_id}', [UserController::class, 'asignarConvenio']);
    Route::get('consultDeduccion', [PayrollController::class, 'consultDeduccion']);
});




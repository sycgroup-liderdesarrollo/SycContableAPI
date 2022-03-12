<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'last_name' => $this->last_name,
            'second_last_name' => $this->second_last_name,
            'identification_number'=> $this->identification_number,
            'admission_date' => $this->admission_date,
            'out_date' => $this->out_date,
            'base_salary' => $this->base_salary,
            'email' => $this->email,
            'address' => $this->address,
            'neighborhood' => $this->neighborhood,
            'birthday' => $this->birthday,
            'children' => $this->children,
            'phone' => $this->phone,
            'position' => new PositionResource($this->position),
            'contractType' => new ContractTypeResource($this->contractType),
            'salaryType' => new SalaryTypeResource($this->salaryType),
            'headquarter' => new HeadquarterResource($this->headquarter),
            'identificationType' => new IdentificationTypeResource($this->identificationType),
            'gender' => new GenderResource($this->gender),
            'healthProvider' => new HealthProviderResource($this->healthProvider),
            'pensionFund' => new PensionFundResource($this->pensionFund),
            'civilStatus' => new CivilStatusResource($this->civilStatus),
            'work_city' => new CitiesResource($this->workCity),
            'residenceCity' => new CitiesResource($this->residenceCity),
            'expeditionPlace' => new CitiesResource($this->expeditionPlace),
            'strata' => new StrataResource($this->strata),
            'educationLevel' => new EducationLevelResource($this->educationLevel),
            'emergencyContact' => new EmergencyContactResource($this->emergencyContact),
            'occupationalRiskManager' => new OcupationalRiskManagerResource($this->occupationalRiskManager),
            'active' => $this->active,
            'image' => $this->image
        ];;
    }
}

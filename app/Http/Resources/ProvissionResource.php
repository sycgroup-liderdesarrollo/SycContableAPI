<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvissionResource extends JsonResource
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
            'period' => new PeriodResource($this->period),
            'pension_contribution' => $this->pension_contribution,
            'occupational_risk_contributions' => $this->occupational_risk_contributions,
            'health_contribution' => $this->health_contribution,
            'compensation_funds' => $this->compensation_funds,
            'layoffs' => $this->layoffs,
            'Interest_on_severance_pay' => $this->Interest_on_severance_pay,
            'vacation_provision'  => $this->vacation_provision,
            'wage_premium' => $this->wage_premium,
            'total_provisions' => $this->total_provisions,
            'total_payroll' => $this->total_payroll
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'father_name' => $this->father_name,
            'mother_name' => $this->mother_name,
            'course_grade' => $this->course_grade,
            'section' => $this->section,
            'carnet' => $this->carnet,
            'date_admission' => $this->date_admission,
            'created_at' => $this->created_at
        ];
    }
}

<?php

namespace App\Http\Resources\Course;

use App\Http\Resources\Lesson\LessonCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'slug' => $this->slug ?? '',
            'isPremium' => $this->is_premium,
            'status' => $this->status,
            'description' => $this->description,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'lessons' => $this->whenLoaded('lessons', fn() => new LessonCollection($this->lessons)),
        ];
    }
}

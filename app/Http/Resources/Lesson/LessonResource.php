<?php

namespace App\Http\Resources\Lesson;

use App\Http\Resources\Course\CourseResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
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
            'courseId' => $this->whenLoaded('course', fn() => $this->course->id),
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'status' => $this->status,
            'courses' => $this->whenLoaded('course', fn() => new CourseResource($this->course)),
            'isPremium' => $this->is_premium,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}

<?php

namespace App\Traits;

use App\Models\Note;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasNotes
{
    /**
     * @return MorphMany
     */
    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function addNote(string $note)
    {
        return $this->notes()->create([
            'content' => $note,
            'user_id' => currentUser()->id
        ]);
    }
}
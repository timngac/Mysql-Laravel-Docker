<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(mixed $validated)
 */
class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'color',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function noteTags(): HasMany
    {
        return $this->hasMany(NoteTag::class);
    }

    /**
     * @return HasMany
     */
    public function itemTags(): HasMany
    {
        return $this->hasMany(ItemTag::class);
    }

    /**
     * @return BelongsToMany
     */
    public function notes(): BelongsToMany
    {
        return $this->belongsToMany(Note::class, 'note_tags');
    }

    /**
     * @return int
     */
    public function countNote(): int
    {
        return $this->belongsToMany(Note::class, 'note_tags')->count();
    }

    /**
     * @return BelongsToMany
     */
    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_tags');
    }

    /**
     * @return int
     */
    public function countItem(): int
    {
        return $this->belongsToMany(Item::class, 'item_tags')->count();
    }
}

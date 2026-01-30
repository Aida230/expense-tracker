<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseRecurrence extends Model
{
    protected $fillable = [
        'category_id',
        'amount',
        'frequency',
        'interval',
        'start_date',
        'end_date',
        'day_of_week',
        'day_of_month',
        'note',
        'active',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'last_generated_on' => 'date',
        'amount' => 'decimal:2',
        'active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'expense_recurrence_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'detail',
    'gender',
    'email',
    'address',
    'building',
    'first_name',
    'last_name',
    'category_id',
    'tell',
     ];

    public function category(){ //追記
        return $this->belongsTo('App\Models\Category');
    }

     public function getCategoryId()
    {
        return $this->category_id ?? ''; // カテゴリが存在しない場合は空文字を返す
    }

    public function scopeGenderSearch($queryBuilder, $gender)
    {
        if ($gender !== 'all') {
            $queryBuilder->where('gender', $gender);
        }
    }

    public function scopeCategorySearch($queryBuilder, $category_id)
    {
        if (!empty($category_id)) {
            $queryBuilder->where('category_id', $category_id);
        }
    }

    public function scopeDateSearch($queryBuilder, $date)
    {
        if (!empty($date)) {
            $queryBuilder->whereDate('created_at', $date);
        }
    }

    public function scopeKeywordSearch($queryBuilder, $keyword)
    {
        if (!empty($keyword)) {
            $queryBuilder->where(function ($q) use ($keyword) {
            $q->where('first_name', 'like', '%' . $keyword . '%')
            ->orWhere('last_name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Item extends Model
{
    use HasFactory;
    /**
 * 为数组 / JSON 序列化准备日期。
 *
 * @param  \DateTimeInterface  $date
 * @return string
 */
protected function serializeDate(DateTimeInterface $date)
{
    return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
}
}
<?php

namespace App\Models;

use Config;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * @var string
     */
    protected $table = 'settings';

    /**
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * @param $key
     */
    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();
        if (!$entry) {
            return;
        }
        return $entry->value;
    }

    /**
     * @param $key
     * @param null $value
     * @return bool
     */
    public static function set($key, $value = null)
{
    $setting = new self();
    $entry = $setting->where('key', $key)->firstOrFail();
    $entry->value = $value;
    $entry->saveOrFail();
    \Illuminate\Support\Facades\Config::set('key', $value);
    if (\Illuminate\Support\Facades\Config::get($key) == $value) {
        return true;
    }
    return false;
}

}
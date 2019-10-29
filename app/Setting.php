<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['logo','alt_logo','footer_logo','alt_footer_logo','title','phone','main_text','address','copy_right','facebook', 'twitter', 'instagram', 'youtube'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['logo','alt_logo','footer_logo','alt_footer_logo','limit_block_products','title','phone','main_text','address','copy_right','facebook', 'twitter', 'instagram', 'youtube','custom_js','android_link','ios_link','zalo_link', 'tawk_to_widget_code', 'fb_widget_code', 'feature1_heading', 'feature1_subheading', 'feature2_heading', 'feature2_subheading', 'feature3_heading', 'feature3_subheading', 'feature4_heading', 'feature4_subheading', 'banner_image', 'meta_keyword', 'meta_description', 'meta_title', 'new_product_heading', 'new_product_subheading', 'sale_product_heading', 'sale_product_subheading'];
}

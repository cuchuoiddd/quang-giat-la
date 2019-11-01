<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSettingsAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('zalo_link')->nullable()->after('ios_link');
            $table->text('tawk_to_widget_code')->nullable()->after('zalo_link');
            $table->text('fb_widget_code')->nullable()->after('tawk_to_widget_code');
            $table->text('feature1_heading')->nullable()->after('fb_widget_code');
            $table->text('feature1_subheading')->nullable()->after('feature1_heading');
            $table->text('feature2_heading')->nullable()->after('feature1_subheading');
            $table->text('feature2_subheading')->nullable()->after('feature2_heading');
            $table->text('feature3_heading')->nullable()->after('feature2_subheading');
            $table->text('feature3_subheading')->nullable()->after('feature3_heading');
            $table->text('feature4_heading')->nullable()->after('feature3_subheading');
            $table->text('feature4_subheading')->nullable()->after('feature4_heading');
            $table->text('banner_image')->nullable()->after('feature4_subheading');
            $table->text('meta_keyword')->nullable()->after('banner_image');
            $table->text('meta_description')->nullable()->after('meta_keyword');
            $table->text('meta_title')->nullable()->after('meta_description');
            $table->text('new_product_heading')->nullable()->after('meta_title');
            $table->text('new_product_subheading')->nullable()->after('new_product_heading');
            $table->text('sale_product_heading')->nullable()->after('new_product_subheading');
            $table->text('sale_product_subheading')->nullable()->after('sale_product_heading');
            $table->text('limit_block_products')->nullable()->after('alt_footer_logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}

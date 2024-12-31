<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('website_title');
            $table->string('logo_image');
            $table->string('copyrights');


            // // $table->string('aboutus_label');
            // $table->string('aboutus_link');

            // // $table->string('contact_label');
            // $table->string('contact_link');

            // // $table->string('whyus_label');
            // $table->string('whyus_link');

            // // $table->string('ourworks_label');
            // $table->string('ourworks_link');

            // // $table->string('kitchens_front_page_label');
            // $table->string('kitchens_front_page_link');

            // // $table->string('furnitures_front_page_label');
            // $table->string('furnitures_front_page_link');

            $table->string('social_twitter_link');
            $table->string('social_tiktok_link');
            $table->string('social_facebook_link');
            $table->string('social_insta_link');
            $table->string('social_linkedin_link');
            $table->string('social_youtube_link');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

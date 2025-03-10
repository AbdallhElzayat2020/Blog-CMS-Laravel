<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $language = new Language();
        $language->name = 'English';
        $language->lang = 'en';
        $language->slug = 'en';
        $language->status = 'active';
        $language->default = 'yes';
        $language->save();
    }
}

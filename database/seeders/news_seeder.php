<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class news_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'خبر جديد',
            'body' => 'تفاصيل الخبر',
            'photo' => 'news1.jpg',
        ]);

        News::create([
            'title' => 'خبر جديد ثان',
            'body' => 'تفاصيل الخبر',
            'photo' => 'news1.jpg',
        ]);
    }
}

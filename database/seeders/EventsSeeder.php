<?php

namespace Database\Seeders;

use App\Models\NextEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'title' => 'ندوة حول التقنية الحديثة',
                'description' => 'ندوة متميزة عن أحدث التقنيات في مجال البرمجة وتكنولوجيا المعلومات.',
                'photo' => 'path_to_image/photo1.jpg',
                'video' => 'path_to_video/video1.mp4',
                'end_date' => '2025-02-15',
            ],
            [
                'title' => 'مؤتمر التعليم عن بعد',
                'description' => 'مؤتمر يتناول أحدث الأساليب في التعليم عن بعد وكيفية تكييف المناهج الدراسية.',
                'photo' => 'path_to_image/photo2.jpg',
                'video' => 'path_to_video/video2.mp4',
                'end_date' => '2025-03-10',
            ],
            [
                'title' => 'ورشة عمل في تصميم الجرافيك',
                'description' => 'ورشة عمل تطبيقية لتعليم تصميم الجرافيك باستخدام أدوات احترافية.',
                'photo' => 'path_to_image/photo3.jpg',
                'video' => 'path_to_video/video3.mp4',
                'end_date' => '2025-04-05',
            ],
            [
                'title' => 'فريق رياضي للطلاب الجدد',
                'description' => 'منافسات رياضية ودعوة للطلاب الجدد للانضمام إلى الفرق الرياضية الجامعية.',
                'photo' => 'path_to_image/photo4.jpg',
                'video' => 'path_to_video/video4.mp4',
                'end_date' => '2025-05-20',
            ]
        ];

        foreach ($events as $event) {
            NextEvent::create($event);
        }
    }
}

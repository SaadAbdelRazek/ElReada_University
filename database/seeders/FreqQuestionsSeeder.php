<?php

namespace Database\Seeders;

use App\Models\FreqQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreqQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['question' => 'ما هي متطلبات التسجيل؟', 'answer' => 'يجب أن يكون لديك بريد إلكتروني صالح ورقم هاتف لتتمكن من التسجيل.'],
            ['question' => 'كيف يمكنني تغيير كلمة المرور؟', 'answer' => 'يمكنك تغيير كلمة المرور من خلال صفحة الإعدادات بعد تسجيل الدخول.'],
            ['question' => 'هل هناك رسوم للاشتراك؟', 'answer' => 'لا، التسجيل مجاني تمامًا لجميع المستخدمين.'],
            ['question' => 'ما هي طرق الدفع المقبولة؟', 'answer' => 'نقبل الدفع عبر البطاقات الائتمانية والتحويلات البنكية.'],
            ['question' => 'كيف يمكنني التواصل مع الدعم الفني؟', 'answer' => 'يمكنك التواصل معنا عبر البريد الإلكتروني أو الدردشة المباشرة على الموقع.'],
        ];

        foreach ($questions as $q) {
            FreqQuestion::create($q);
        }
    }
}

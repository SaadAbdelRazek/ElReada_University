<?php

namespace Database\Seeders;

use App\Models\PrevEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class old_events_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrevEvent::create([
            'title' => 'حدث هام',
            'body' => 'سيتم إقامة مؤتمر دولي حول التكنولوجيا الحديثة والابتكار في المستقبل.',
            'photo' => 'event1.jpg',
        ]);

        PrevEvent::create([
            'title' => 'معرض الفن الحديث',
            'body' => 'معرض يضم أحدث الأعمال الفنية لفنانين محليين وعالميين.',
            'photo' => 'event2.jpg',
        ]);
    }
}

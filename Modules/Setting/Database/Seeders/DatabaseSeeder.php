<?php
namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const AWARD_TYPES  = [
        'asignacion_directa' => 'Asignación directa',
        'invitacion_restringida' => 'Invitación restringida',
        'licitacion' => 'Licitación'
    ];
    public function run() {
        foreach(self::AWARD_TYPES as $key=> $var) {
            DB::table('award_type')->insert([
                'text_key' =>$key,
                'name' =>$var
            ]);
        }

    }
}

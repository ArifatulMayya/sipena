<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengampuData=[
            ['nip' =>'198203092006041002','kode_mk'=>'PAIK6102'],
            ['nip' =>'198903032015042002','kode_mk'=>'PAIK6102'],
            ['nip' =>'16982412710003','kode_mk'=>'PAIK6101'],
            ['nip' =>'16982412710003','kode_mk'=>'UUW00005'],
            ['nip' =>'16982412710003','kode_mk'=>'UUW00007'],
            ['nip' =>'197907202003121002','kode_mk'=>'PAIK6105'],
            ['nip' =>'197108111997021004','kode_mk'=>'PAIK6105'],
            ['nip' =>'198106202015041002','kode_mk'=>'PAIK6103'],
            ['nip' =>'198511252018032001','kode_mk'=>'PAIK6103'],
            ['nip' =>'197905242009121003','kode_mk'=>'PAIK6104'],
            ['nip' =>'197108111997021004','kode_mk'=>'PAIK6104'],
            ['nip' =>'16982412710003','kode_mk'=>'UUW00003'],
            ['nip' =>'197404011999031002','kode_mk'=>'PAIK6202'],
            ['nip' =>'196511071992031003','kode_mk'=>'PAIK6202'],
            ['nip' =>'198806142022102001','kode_mk'=>'PAIK6603'],
            ['nip' =>'197907202003121002','kode_mk'=>'PAIK6603'],
            ['nip' =>'198104202005012001','kode_mk'=>'PAIK6204'],
            ['nip' =>'197007051997021001','kode_mk'=>'PAIK6204'],
            ['nip' =>'198106202015041002','kode_mk'=>'PAIK6203'],
            ['nip' =>'198511252018032001','kode_mk'=>'PAIK6203'],
            ['nip' =>'16982412710003','kode_mk'=>'UUW00004'],
            ['nip' =>'198012272015041002','kode_mk'=>'PAIK6402'],
            ['nip' =>'198803222020121010','kode_mk'=>'PAIK6402'],
            ['nip' =>'16982412710003','kode_mk'=>'PAIK6201'],
            ['nip' =>'197007051997021001','kode_mk'=>'UUW00006'],
            ['nip' =>'16982412710003','kode_mk'=>'UUW00011'],
            ['nip' =>'198009142006041002','kode_mk'=>'PAIK6301'],
            ['nip' =>'197308291998922001','kode_mk'=>'PAIK6303'],
            ['nip' =>'198302032006041002','kode_mk'=>'PAIK6303'],
            ['nip' =>'199204252023072001','kode_mk'=>'PAIK6306'],
            ['nip' =>'196511071992031003','kode_mk'=>'PAIK6302'],
            ['nip' =>'199602212023072001','kode_mk'=>'PAIK6304'],
            ['nip' =>'197601102009122002','kode_mk'=>'PAIK6305'],
            ['nip' =>'197404011999031002','kode_mk'=>'UUW00008'],
            ['nip' =>'197108111997021004','kode_mk'=>'PAIK6404'],['nip' =>'197805162003121001','kode_mk'=>'PAIK6404'],
            ['nip' =>'198903032015042002','kode_mk'=>'PAIK6401'], ['nip' =>'198009142006041002','kode_mk'=>'PAIK6401'],
            ['nip' =>'199603032024061003','kode_mk'=>'PAIK6406'],
            ['nip' =>'197308291998922001','kode_mk'=>'PAIK6403'],
            ['nip' =>'197404011999031002','kode_mk'=>'PAIK6405'],
            ['nip' =>'199603032024061003','kode_mk'=>'PAIK6601'], 
            ['nip' =>'199112092024061001','kode_mk'=>'PAIK6501'],
            ['nip' =>'199602212023072001','kode_mk'=>'PAIK6702'],
            ['nip' =>'198104202005012001','kode_mk'=>'PAIK6505'],
            ['nip' =>'197902122008121002','kode_mk'=>'PAIK6503'],
            ['nip' =>'198806142022102001','kode_mk'=>'PAIK6506'],
            ['nip' =>'197404011999031002','kode_mk'=>'PAIK6504'],
            ['nip' =>'199112092024061001','kode_mk'=>'PAIK6502'],
            ['nip' =>'199603032024061003','kode_mk'=>'PAIK6604'],
            ['nip' =>'198803222020121010','kode_mk'=>'PAIK6605'],
            ['nip' =>'198010212005011003','kode_mk'=>'PAIK6602'],
            ['nip' =>'197902122008121002','kode_mk'=>'PAIK6801'],
            ['nip' =>'197805162003121001','kode_mk'=>'PAIK6802'],
            ['nip' =>'198106202015041002','kode_mk'=>'PAIK6813']
        ];
    
        foreach ($pengampuData as $data) {
            DB::table('pengampu')->insert([
                'nip'=>$data['nip'],
                'kode_mk' => $data['kode_mk'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
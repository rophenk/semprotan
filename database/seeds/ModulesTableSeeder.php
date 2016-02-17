<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan data tabel Instansi
        DB::table('modules')->delete();
    
        //
        DB:: table('modules') -> insert([
        'id' => '1',
		'uuid' => 'd53eb3e2-bc86-4113-8a7e-e5e1ef11d43b',
		'name' => 'lahan',
		'title' => 'LAHAN &amp; MUSIM TANAM',
		'icon' => 'md-filter-hdr',
		'color' => 'bgm-lime',
		]);

		DB:: table('modules') -> insert([
		'id' => '2',
		'uuid' => '3852d82d-79cd-43c9-bb79-3f3037e56baf',
		'name' => 'benih',
		'title' => 'BENIH &amp; PUPUK',
		'icon' => 'md-grain',
		'color' => 'bgm-amber',
		]);

		DB:: table('modules') -> insert([
		'id' => '3',
		'uuid' => 'd8ae83cb-ce85-45e1-abea-6bb5d8d9cc8e',
		'name' => 'budidaya',
		'title' => 'BUDIDAYA',
		'icon' => 'md-nature-people',
		'color' => 'bgm-pink',
		]);

		DB:: table('modules') -> insert([
		'id' => '4',
		'uuid' => '8dbe8abd-4df8-43be-ad97-c6b84c35727a',
		'name' => 'harga',
		'title' => 'HARGA PASAR',
		'icon' => 'md-local-shipping',
		'color' => 'bgm-red',
		]);

		DB:: table('modules') -> insert([
		'id' => '5',
		'uuid' => 'bb8ab1ad-cd83-44e3-86d0-2a2b201c3d98',
		'name' => 'pembiayaan',
		'title' => 'PEMBIAYAAN',
		'icon' => 'md-account-balance',
		'color' => 'bgm-purple',
		]);
    }
}

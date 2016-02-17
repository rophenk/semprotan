<?php

use Illuminate\Database\Seeder;

class ModulesContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan data tabel Instansi
        DB::table('modules_content')->delete();

        DB:: table('modules_content') -> insert([
        'modules_id' => '1',
		'modules_uuid' => 'd53eb3e2-bc86-4113-8a7e-e5e1ef11d43b',
		'address' => 'http://katam.litbang.pertanian.go.id',
		'title' => 'Kalender Tanam Terpadu',
		]);

		DB:: table('modules_content') -> insert([
		'modules_id' => '2',
		'modules_uuid' => '3852d82d-79cd-43c9-bb79-3f3037e56baf',
		'address' => 'http://bibit.ditjennak.pertanian.go.id',
		'title' => 'Direktorat Pembibitan Ternak',
		]);

		DB:: table('modules_content') -> insert([
		'modules_id' => '2',
		'modules_uuid' => '3852d82d-79cd-43c9-bb79-3f3037e56baf',
		'address' => 'http://betcipelang.info',
		'title' => 'Balai Embrio Ternak Cipelang',
		]);

		DB:: table('modules_content') -> insert([
		'modules_id' => '4',
		'modules_uuid' => '8dbe8abd-4df8-43be-ad97-c6b84c35727a',
		'address' => 'http://aplikasi.pertanian.go.id/smshargaprov',
		'title' => 'Informasi Harga Komoditas Pertanian Provinsi',
		]);

    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->where('nombre','geografia')->update(['imagen'=>'geo.png']);
        DB::table('categoria')->where('nombre','cine')->update(['imagen'=>'oscar.png']);
        DB::table('categoria')->where('nombre','musica')->update(['imagen'=>'music.png']);
        DB::table('categoria')->where('nombre','historia')->update(['imagen'=>'libro.png']);
        DB::table('categoria')->where('nombre','deportes')->update(['imagen'=>'depo.png']);
    }
}

<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (json_decode(env('PAGES', '[]')) as $pageName => $pagePath) {
            \App\Page::firstOrCreate(['name' => $pageName],['content' => "<h1>{$pageName}</h1>"]);
        }
    }
}

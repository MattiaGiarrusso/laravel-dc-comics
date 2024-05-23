<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comic');

        foreach($comicsArray as $comicBook) {

            $newComic = new Comic();
            $newComic->title = $comicBook['title'];
            $newComic->description = $comicBook['description'];
            $newComic->thumb = $comicBook['thumb'];
            $newComic->price = $comicBook['price'];
            $newComic->series = $comicBook['series'];
            $newComic->sale_date = $comicBook['sale_date'];
            $newComic->type = $comicBook['type'];    
            $newComic->save();
        }
    }
}

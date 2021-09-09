<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comics');

        foreach($array_comic as $comic) {
            $newComic = new Comic();
            $newComic->title =$comic['title'];
            $newComic->img =$comic['thumb'];
            $newComic->description =$comic['description'];
            $newComic->price =$comic['price'];
            $newComic->series =$comic['series'];
            $newComic->type =$comic['type'];
            $newComic->sale_date =$comic['sale_date'];

            $newComic->save();


        }
    }
}

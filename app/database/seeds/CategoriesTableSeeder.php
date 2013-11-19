<?php

class CategoriesTableSeeder extends Seeder {

    public function run() {

        DB::table('categories')->truncate();

        DB::table('categories')->insert(array(
            array(
                'name'       => "PHP",
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'       => "C#",
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        ));
    }
}

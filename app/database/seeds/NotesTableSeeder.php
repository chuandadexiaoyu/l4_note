<?php

class NotesTableSeeder extends Seeder {

    public function run() {

        DB::table('notes')->truncate();

        DB::table('notes')->insert(array(
            array(
                'title'       => "Hello PHP",
                'content'     => "PHP Content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lacus eu purus accumsan pharetra. Cras odio diam, consectetur ut faucibus eget, rhoncus sit amet arcu. Phasellus quis luctus orci, quis molestie velit. Duis accumsan, orci nec suscipit gravida, dolor ipsum pretium ligula, tempus suscipit sem metus vitae quam. Nullam orci sem, laoreet nec neque ut, sollicitudin placerat nisl. Aenean venenatis nec lacus id rutrum. Nulla sagittis sollicitudin felis in tincidunt. Integer eu nulla condimentum, porttitor elit vitae, interdum est.

Vivamus ut lectus eget tortor aliquam mollis. Curabitur eget euismod lacus. Integer quam arcu, dictum eu faucibus in, tempus ut nibh. Maecenas id tortor ac arcu porta cursus eu quis lorem. Proin non tortor et felis mollis molestie. Nulla quis nibh sed leo vehicula varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse urna arcu, suscipit nec gravida eget, ultricies vel diam. Quisque ullamcorper justo quis magna vestibulum, in pretium est scelerisque. Quisque ut odio euismod, eleifend turpis et, bibendum sem. Quisque venenatis ipsum nec suscipit feugiat. Mauris non ultricies ligula. Nam ac viverra purus. Duis sed nisi purus. ",
                'category_id' => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            ),
            array(
                'name'        => "Hello C#",
                'content'     => "C# Content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id turpis quis mi ultricies condimentum in et metus. Nunc at erat bibendum, hendrerit leo sed, rutrum enim. Nulla elementum pulvinar magna. Phasellus pellentesque leo vel dolor aliquet pellentesque. Cras sit amet feugiat felis. Aenean vel sollicitudin magna, non dapibus dolor. Nunc eget lobortis mauris, vitae interdum augue. Pellentesque magna neque, congue nec sodales vitae, pellentesque quis eros. Morbi dignissim, nisl et blandit imperdiet, nibh magna volutpat velit, eget cursus sem eros nec urna. Cras suscipit nisl neque, vel vestibulum justo posuere sit amet. Donec non lorem eu est tincidunt mollis. Nullam condimentum pellentesque odio ac consequat. Nulla convallis tortor et tellus cursus molestie. ",
                'category_id' => 2,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
            )
        ));
    }
}

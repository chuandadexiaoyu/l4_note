<?php

class NotesTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('notes')->insert(array(
            array(
                'title'      => 'Note',
                'content'    => 'Lorem Lipsum sit amet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'title'      => 'Note PHP',
                'content'    => '<h2>PHP sample</h2><br><br><pre class="prettyprint linenums prettyprinted">echo "Hello World";</pre>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'title'      => 'Note HTML',
                'content'    => '<h2>PHP sample</h2><br><br><pre class="prettyprint linenums prettyprinted"><html>
                <head></head>
                <body>
                <div>
                <p>Div example</p
                </div>
                </body>
                </html></pre>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'title'      => 'Note CSS',
                'content'    => '<h2>CSS sample</h2><br><br><pre class="prettyprint linenums prettyprinted">#wrapper{
                width: 100px;
                height: 200px;
                border: 2px solid gray;
                }</pre>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'title'      => 'Note Javasript',
                'content'    => '<h2>Javasript sample</h2><br><br><pre class="prettyprint linenums prettyprinted">alert("Hello Javascript")</pre>',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        ));

        $this->command->info('notes table data seeded');
    }
}

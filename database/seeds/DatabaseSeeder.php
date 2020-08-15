<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PaperSeeder::class);
        $this->call(WriterSeeder::class);
        $this->call(ReaderSeeder::class);
        $this->call(NovelSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PostSectionSeeder::class);
        $this->call(PostTagSeeder::class);
        $this->call(BookmarkSeeder::class);
        $this->call(AccesslogSeeder::class);
        $this->call(PostSubstringSeeder::class);
        $this->call(PostPaperSeeder::class);
        $this->call(NovelPaperSeeder::class);
    }
}

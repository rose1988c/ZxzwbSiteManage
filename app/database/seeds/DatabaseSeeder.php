<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Eloquent::unguard();

        $this->command->info('===== Seeder Database ====');
        
        $this->call('NewsTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PhotoGalleriesTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
        
        $this->command->info('==== Finish, everythings done! Enjoy ====');
    }
}
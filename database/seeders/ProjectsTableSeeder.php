<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_project = new Project();
            $new_project->name = $faker->name;
            $new_project->slug = Project::generateSlug($new_project->name);

            $start_date = $faker->dateTimeBetween('-2 years','now');
            $end_date = $faker->dateTimeBetween($start_date,'+1 years');

            $new_project->start_date = date_format($start_date,'Y-m-d');
            $new_project->end_date = date_format($end_date,'Y-m-d');

            $new_project->description = $faker->text(100);
            $new_project->status = $faker->randomElement(['In corso','Completato','Sospeso']);
            $new_project->is_group_project = $faker->boolean(50);

            // dump($new_project);
            $new_project->save();
        }
    }
}

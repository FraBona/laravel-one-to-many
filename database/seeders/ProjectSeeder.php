<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {   
        $types = Type::all();
        $ids = $types->pluck('id');
        for($i = 0; $i < 50; $i++){
            $new_project = new Project;

            $new_project->title = $faker->sentence(10);
            $new_project->content = $faker->text(200);
            $new_project->slug = Str::slug($new_project->title,'_');
            $new_project->type_id = $faker->optional()->randomElement($ids);

            $new_project->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $typeIds = Type::all()->pluck("id");

        $projects = [
            [
              "name" => "Boolzapp",
              "type_id" => 3,
              "short_description" => "Ricreata l'applicazione whatsapp",
              "description" => "Ricreato il layout delll'applicazione whatsapp e resa responsive.",
              "image" => "#"
            ],
            [
                "name" => "Vite Yu-Gi-Oh",
                "type_id" => 2,
                "short_description" => "Usata api",
                "description" => "Usata api per mostrare le carte yu-gi-oh",
                "image" => "#"
            ],
            [
                "name" => "Boolflix",
                "type_id" => 3,
                "short_description" => "Usato api",
                "description" => "Usata api per mostrare i film con tutti i suoi dati.",
                "image" => "#"
            ],
            [
                "name" => "laravel-template",
                "type_id" => 2,
                "short_description" => "template",
                "description" => "Creata template",
                "image" => "#"
            ],
            ];


            foreach ($projects as $project) {
                $newProject = new Project();
                $newProject->name = $project['name'];
                $newProject->type_id = $project['type_id'];
                $newProject->short_description = $project['short_description'];
                $newProject->description = $project['description'];
                $newProject->image = $project['image'];
                $newProject->save();
            };
    }
};
<?php

use Illuminate\Database\Seeder;
use \App\Badge;

class CreateBadgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Badge::create([
            'title'           => 'Hello World!',
            'description'     => 'Heeft zich geregistreerd op de amoHUB',
            'img_path'        => 'helloworld.png',
            'priority'        => 1
        ]);

        Badge::create([
            'title'           => 'Forum rookie',
            'description'     => 'Heeft 50 punten behaald door activiteiten op het forum.',
            'img_path'        => 'forum_Rookie.png',
            'priority'        => 1
        ]);

        Badge::create([
            'title'           => 'Forum veteran',
            'description'     => 'Heeft 150 punten behaald door activiteiten op het forum.',
            'img_path'        => 'forum_Veteran.png',
            'priority'        => 1
        ]);

        Badge::create([
            'title'           => 'Forum elite',
            'description'     => 'Heeft 300 punten behaald door activiteiten op het forum.',
            'img_path'        => 'forum_Elite.png',
            'priority'        => 1
        ]);

        Badge::create([
            'title'           => 'Hello World!',
            'description'     => 'Heeft zich geregistreerd op de amoHUB',
            'img_path'        => 'helloworld.png',
            'priority'        => 1
        ]);

        Badge::create([
            'title'         => 'Open Dag Assistant',
            'description'   => 'Is minimaal één keer aanwezig geweest tijdens de opleiding bij een open dag of een andere belangrijke bijdrage geleverd aan de open dag.',
            'img_path'      => 'open_Dag_Assistent.png',
            'priority'        => 18
        ]);

        Badge::create([
            'title'         => 'Open Source Contributor',
            'description'   => 'Heeft een aanzienlijke bijdrage geleverd aan een van de open source projecten van het Radius College.',
            'img_path'      => 'open_Source_Contributer.png',
            'priority'        => 19
        ]);

        Badge::create([
            'title'          => 'Help a youngling out!',
            'description'    => 'Heeft uitgebreid advies gegeven aan een eerdere jaars met betrekking tot code.',
            'img_path'       => 'Help_A_Youngling_Out.png',
            'priority'        => 20
        ]);

        Badge::create([
            'title'          => 'Now you be the teacher!',
            'description'    => 'Heeft tijdens het WEL leren of op een ander moment een les voorbereid en gegeven.',
            'img_path'       => 'now_You_Be_The_Teacher.png',
            'priority'        => 21
        ]);

        Badge::create([
            'title'          => 'Can you see me?!?',
            'description'    => 'Heeft een portfoliowebsite gemaakt die online staat waar informatie over hemzelf opstaat inclusief een portfolio gedeelte',
            'img_path'       => 'can_You_See_Me.png',
            'priority'        => 22
        ]);

        Badge::create([
           'title'          => 'Overachiever!!',
            'description'   => 'Heeft in de opleiding een 9 of hoger behaald.',
            'img_path'      => 'overachiever.png',
            'priority'      => 23
        ]);

        Badge::create([
            'title'           => 'Always there!',
            'description'     => 'Heeft in een periode een aanwezigheid behaald van 100%',
            'img_path'        => 'always_There.png',
            'priority'        => 24
        ]);

        Badge::create([
            'title'           => 'Fashionably on time!',
            'description'     => 'Heeft in een periode 0 te laat meldingen ontvangen',
            'img_path'        => 'fashionably_On_Time.png',
            'priority'        => 25
        ]);

        Badge::create([
            'title'           => 'C# rookie',
            'description'     => 'Heeft de eerstejaars toets C# met een voldoende behaald',
            'img_path'        => 'c_Sharp_Rookie.png',
            'priority'        => 26
        ]);

        Badge::create([
            'title'           => 'The Front End journey begins! ',
            'description'     => 'Heeft de eerstejaars toets HTML/CSS met een voldoende behaald',
            'img_path'        => 'The_Front_End_Journey_Begins.png',
            'priority'        => 27
        ]);
    }
}

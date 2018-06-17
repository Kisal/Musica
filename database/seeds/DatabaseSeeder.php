<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('singers')->insert([
            'name' => 'Sonata Artica',
            'music_style' => 'Metal',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Metallica',
            'music_style' => 'Metal',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Love of Lesbian',
            'music_style' => 'Indie',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'The Rolling Stones',
            'music_style' => 'Rock',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Sabaton',
            'music_style' => 'Metal',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'The Black Keys',
            'music_style' => 'Rock',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Calvin Harris',
            'music_style' => 'Dance',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Katy Perry',
            'music_style' => 'Pop',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('singers')->insert([
            'name' => 'Madonna',
            'music_style' => 'Pop',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => '1999',
            'description' => '1999 (o cómo generar incendios de nieve con una lupa enfocando a la luna) es el sexto álbum de estudio del grupo español de música indie Love of Lesbian, grabado con la productora Music Bus, subsidiaria de Warner Music, y publicado en 2009. Las catorce canciones de este álbum forman la historia de una relación amorosa en sus distintas etapas.',
            'year' => '2009',
            'singer_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'La noche eterna. Los días no vivido',
            'description' => 'La noche eterna. Los días no vividos es el séptimo álbum de estudio de este grupo catalán. Se trata de un álbum doble formado por 18 temas del que en abril de 2012 se adelantaron tres: "Wio", "Los seres únicos" y "El hambre invisible" alcanzando los primeros puestos de ventas en plataformas como iTunes.',
            'year' => '2012',
            'singer_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'The Last Stand',
            'description' => 'The Last Stand es el octavo álbum de la banda sueca de Power metal Sabaton, lanzado el 19 de agosto de 2016 por Nuclear Blast Records.',
            'year' => '2016',
            'singer_id' => 5,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'Out of Our Heads',
            'description' => 'Out Of Our Heads es el tercer álbum de estudio de The Rolling Stones en el Reino Unido y su cuarto en los Estados Unidos, publicado en 1965 a través de sus distribuidores originales, Decca Records y London Records respectivamente, pero con diferencias significativas en ambos territorios.',
            'year' => '1965',
            'singer_id' => 4,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'Like a Prayer',
            'description' => 'Like a Prayer es el cuarto álbum de estudio de la cantante estadounidense Madonna, publicado el 21 de marzo de 1989 por Sire Records. ',
            'year' => '1989',
            'singer_id' => 9,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'Master of Puppets',
            'description' => 'Master of Puppets es el tercer álbum de estudio de la banda de thrash metal estadounidense Metallica.',
            'year' => '1986',
            'singer_id' => 2,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'Ecliptica',
            'description' => 'Ecliptica es el álbum debut de la banda finlandesa de power metal, Sonata Arctica. Fue lanzado el 9 de septiembre de 1999.',
            'year' => '1999',
            'singer_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('discs')->insert([
            'name' => 'El Camino',
            'description' => 'El Camino es el séptimo álbum de estudio de la banda estadounidense de rock The Black Keys.',
            'year' => '2011',
            'singer_id' => 6,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Ciudade;
use App\Arbitro;
use App\Estadio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // tabla ciudades

    private function seedCiudades(){
        DB::table('ciudades')->delete();
        foreach($this->arrayCiudades as $ciudad){
            $c = new Ciudade;
            $c->nomCiudad = $ciudad['nomCiudad'];
            $c->save();
        }
    }

    // tabla arbitros

    private function seedArbitros(){
        DB::table('arbitros')->delete();
        foreach($this->arrayArbitros as $arbitro){
            $c = new Arbitro;
            $c->nomArbitro = $arbitro['nomArbitro'];
            $c->apeArbitro = $arbitro['nomArbitro'];
            $c->ciuArbitro = $arbitro['ciuArbitro'];
            $c->foto = $arbitro['foto'];
            $c->save();
        }
    }

    // tabla estadios

    private function seedEstadios(){
        DB::table('estadios')->delete();
        foreach($this->arrayEstadios as $estadio){
            $c = new Estadio;
            $c->nomEstadio = $estadio['nomEstadio'];
            $c->capacidad = $estadio['capacidad'];
            $c->ciudad = $estadio['ciudad'];
            $c->foto = $estadio['foto'];
            $c->save();
        }
    }

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // self::seedCiudades();
        // self::seedArbitros();
        self::seedEstadios();
        $this->command->info('Tabla actualizada');
    }

    private $arrayCiudades = array(
        array(
            'nomCiudad' => 'Madrid'
        ),
        array(
            'nomCiudad' => 'Barcelona'
        ),
        array(
            'nomCiudad' => 'Sevilla'
        ),
        array(
            'nomCiudad' => 'Zaragoza'
        ),        
        array(
            'nomCiudad' => 'Valencia'
        ),
        array(
            'nomCiudad' => 'Granada'
        ),
        array(
            'nomCiudad' => 'Salamanca'
        ),
        array(
            'nomCiudad' => 'Valladolid'
        ),
        array(
            'nomCiudad' => 'La Coruña'
        ),
        array(
            'nomCiudad' => 'Bilbao'
        ),
        array(
            'nomCiudad' => 'Las Palmas'
        ),
        array(
            'nomCiudad' => 'Tarragona'
        ),
        array(
            'nomCiudad' => 'Burgos'
        ),
        array(
            'nomCiudad' => 'Albacete'
        ),
        array(
            'nomCiudad' => 'Toledo'
        ),
        array(
            'nomCiudad' => 'Mallorca'
        ),
        array(
            'nomCiudad' => 'Cádiz'
        ),
        array(
            'nomCiudad' => 'Pamplona'
        ),
        array(
            'nomCiudad' => 'Cáceres'
        ),
        array(
            'nomCiudad' => 'León'
        ),
        array(
            'nomCiudad' => 'San Sebastian'
        ),
        array(
            'nomCiudad' => 'Girona'
        ),
        array(
            'nomCiudad' => 'Teruel'
        ),
        array(
            'nomCiudad' => 'Segovia'
        ),
        array(
            'nomCiudad' => 'Zamora'
        ),
        array(
            'nomCiudad' => 'Santander'
        ),
        array(
            'nomCiudad' => 'Gijon'
        ),
        array(
            'nomCiudad' => 'Segovia'
        ),
        array(
            'nomCiudad' => 'Alicante'
        ),
        array(
            'nomCiudad' => 'Murcia'
        )
        );

    private $arrayArbitros = array(
        array(
            'nomArbitro' => 'Antonio Miguel',
            'apeArbitro' => 'Mateu Lahoz',
            'ciuArbitro' => 1,
            'foto' => 'https://s2.eestatic.com/2019/02/06/elbernabeu/futbol/Futbol_374225149_114093530_1024x576.jpg'
        ),
        array(
            'nomArbitro' => 'Jesús',
            'apeArbitro' => 'Gil Manzano',
            'ciuArbitro' => 2,
            'foto' => 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2017/09/25/15063321700344.jpg'
        ),
        array(
            'nomArbitro' => 'Cesar',
            'apeArbitro' => 'Soto Grado',
            'ciuArbitro' => 3,
            'foto' => 'https://media.gettyimages.com/photos/referee-cesar-soto-grado-during-the-la-liga-santander-match-between-picture-id1179072761'
        ),
        array(
            'nomArbitro' => 'José Luis',
            'apeArbitro' => 'Munuera',
            'ciuArbitro' => 5,
            'foto' => 'https://media.gettyimages.com/photos/referee-cesar-soto-grado-during-the-la-liga-santander-match-between-picture-id1179072761'
        ),
        array(
            'nomArbitro' => 'Mario Melero',
            'apeArbitro' => 'López',
            'ciuArbitro' => 21,
            'foto' => 'https://media.gettyimages.com/photos/spanish-referee-mario-melero-lopez-reacts-during-during-the-la-liga-picture-id1139497978?s=612x612'
        )
    );

    private $arrayEstadios = array(
        array(
            'nomEstadio' => 'Estadio San Mames',
            'capacidad' => '53289',
            'ciudad' => 10,
            'foto' => 'https://ep01.epimg.net/ccaa/imagenes/2017/05/24/paisvasco/1495637918_537484_1495638328_noticia_normal.jpg'
        ),
        array(
            'nomEstadio' => 'Wanda Metropolitano',
            'capacidad' => '68456',
            'ciudad' => 1,
            'foto' => 'https://ep01.epimg.net/elpais/imagenes/2018/03/27/album/1522148242_351443_1522148772_noticia_normal.jpg'
        ),
        array(
            'nomEstadio' => 'Camp Nou',
            'capacidad' => '99354',
            'ciudad' => 2,
            'foto' => 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2019/12/10/15759879333527.jpg'
        ),
        array(
            'nomEstadio' => 'Santiago Bernabéu',
            'capacidad' => '81044',
            'ciudad' => 1,
            'foto' => 'https://www.republica.com/wp-content/uploads/2018/06/bernabeu2.jpg'
        ),
        array(
            'nomEstadio' => 'Reale Arena',
            'capacidad' => '39500',
            'ciudad' => 21,
            'foto' => 'https://www.mundodeportivo.com/r/GODO/MD/p5/Futbol/Imagenes/2018/12/05/Recortada/img_jiunanue_20181123-120500_imagenes_md_colaboradores_jiunanue_1123-un-md-114_4_5_3109224289-kd4-U453377461082DXC-980x554@MundoDeportivo-Web.jpg'
        ),
        array(
            'nomEstadio' => 'Ramón Sanchez Pizjuan',
            'capacidad' => '43883',
            'ciudad' => 3,
            'foto' => 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2019/02/26/15511859133283.jpg'
        ),
        array(
            'nomEstadio' => 'Camp de Mestalla ',
            'capacidad' => '55000',
            'ciudad' => 5,
            'foto' => 'https://imatges.vilaweb.cat/nacional/wp-content/uploads/2019/04/20140908_04_reformas_mestalla_gradas_2014_023_0-16200132.jpg'
        ),
        array(
            'nomEstadio' => 'Estadio de la Cerámica',
            'capacidad' => '23500',
            'ciudad' => 12,
            'foto' => 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2018/10/19/15399609812619.jpg'
        )
    );

    }



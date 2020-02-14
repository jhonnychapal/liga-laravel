<?php

use Illuminate\Database\Seeder;
use App\Ciudade;
use App\Arbitro;
use App\Estadio;
use App\Liga;
use App\Paise;
Use App\Entrenadores;
use App\Posiciones;
use App\Clubes;
use App\Partidos;
use App\Jugadores;

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

    // tabla ligas

    private function seedLigas(){
        DB::table('ligas')->delete();
        foreach($this->arrayLigas as $liga){
            $c = new Liga;
            $c->pais = $liga['pais'];
            $c->año = $liga['año'];
            $c->save();
        }
    }

    // tabla paises

    private function seedPaises(){
        DB::table('paises')->delete();
        foreach($this->arrayPaises as $pais){
            $c = new Paise;
            $c->nomPais = $pais['nomPais'];
            $c->save();
        }
    }

    // tabla entrenadores

    private function seedEntrenadores(){
        DB::table('entrenadores')->delete();
        foreach($this->arrayEntrenadores as $entrenador){
            $c = new Entrenadores;
            $c->nomEntrenador = $entrenador['nomEntrenador'];
            $c->apeEntrenador = $entrenador['apeEntrenador'];
            $c->paisEntrenador = $entrenador['paisEntrenador'];
            $c->foto = $entrenador['foto'];
            $c->save();
        }
    }

    // tabla posiciones

    private function seedPosiciones(){
        DB::table('posiciones')->delete();
        foreach($this->arrayPosiciones as $posicion){
            $c = new Posiciones;
            $c->nomPosicion = $posicion['nomPosicion'];
            $c->save();
        }
    }

    // tabla clubes

    private function seedClubes(){
        DB::table('clubes')->delete();
        foreach($this->arrayClubes as $club){
            $c = new Clubes;
            $c->nomClub = $club['nomClub'];
            $c->entrenador = $club['entrenador'];
            $c->estadio = $club['estadio'];
            $c->liga = $club['liga'];
            $c->escudo = $club['escudo'];
            $c->save();
        }
    }

    // tabla partidos

    private function seedPartidos(){
        DB::table('partidos')->delete();
        foreach($this->arrayPartidos as $partido){
            $c = new Partidos;
            $c->eqLocal = $partido['eqLocal'];
            $c->eqVisitante = $partido['eqVisitante'];
            $c->estadio = $partido['estadio'];
            $c->fecha = $partido['fecha'];
            $c->liga = $partido['liga'];
            $c->golesLocal = $partido['golesLocal'];
            $c->golesVisitante = $partido['golesVisitante'];
            $c->arbitro = $partido['arbitro'];
            $c->save();
        }
    }

    // tabla jugadores

    private function seedJugadores(){
        DB::table('jugadores')->delete();
        foreach($this->arrayJugadores as $jugador){
            $c = new Jugadores;
            $c->nomJugador = $jugador['nomJugador'];
            $c->apeJugador = $jugador['apeJugador'];
            $c->club = $jugador['club'];
            $c->posicion = $jugador['posicion'];
            $c->pais = $jugador['pais'];
            $c->foto = $jugador['foto'];
            $c->save();
        }
    }

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // self::seedCiudades();
        // self::seedArbitros();
        // self::seedEstadios();
        // self::seedLigas();
        // self::seedPaises();
        // self::seedEntrenadores();
        // self::seedPosiciones();
        // self::seedClubes();
        // self::seedPartidos();
        self::seedJugadores();
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

    private $arrayLigas = array(
        array(
            'pais' => 'España',
            'año' => '2020'
        )
    );

    private $arrayPaises = array(
        array(
            'nomPais' => 'España'
        ),
        array(
            'nomPais' => 'Argentina'
        ),
        array(
            'nomPais' => 'Francia'
        ),
        array(
            'nomPais' => 'Eslovenia'
        ),        
        array(
            'nomPais' => 'Uruguay'
        ),
        array(
            'nomPais' => 'Colombia'
        ),
        array(
            'nomPais' => 'Montenegro'
        ),
        array(
            'nomPais' => 'Croacia'
        ),
        array(
            'nomPais' => 'Inglaterra'
        ),
        array(
            'nomPais' => 'Ghana'
        ),
        array(
            'nomPais' => 'México'
        ),
        array(
            'nomPais' => 'Portugal'
        ),
        array(
            'nomPais' => 'Brasil'
        ),
        array(
            'nomPais' => 'Alemania'
        ),
        array(
            'nomPais' => 'Camerún'
        ),
        array(
            'nomPais' => 'Suiza'
        ),
        array(
            'nomPais' => 'Chile'
        ),
        array(
            'nomPais' => 'Países Bajos'
        ),
        array(
            'nomPais' => 'Bélgica'
        ),
        array(
            'nomPais' => 'Gales'
        ),
        array(
            'nomPais' => 'Noruega'
        ),
        array(
            'nomPais' => 'Suecia'
        ),
        array(
            'nomPais' => 'Reública Checa'
        ),
        array(
            'nomPais' => 'Canadá'
        ),
        array(
            'nomPais' => 'Serbia'
        ),
        array(
            'nomPais' => 'Rusia'
        )
    );

    private $arrayEntrenadores = array(
        array(
            'nomEntrenador' => 'Gaizka',
            'apeEntrenador' => 'Garitano',
            'paisEntrenador' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/man41948/256x278/man41948_t174_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'Diego',
            'apeEntrenador' => 'Simeone',
            'paisEntrenador' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/man37905/256x278/man37905_t175_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'Enrique',
            'apeEntrenador' => 'Setién',
            'paisEntrenador' => 1,
            'foto' => 'https://www.bdfutbol.com/i/l/693c.jpg'
        ),
        array(
            'nomEntrenador' => 'Zinedine',
            'apeEntrenador' => 'Zidane',
            'paisEntrenador' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/man44585/256x278/man44585_t186_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'Imanol',
            'apeEntrenador' => 'Alguacil',
            'paisEntrenador' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/man44987/256x278/man44987_t188_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'Julen',
            'apeEntrenador' => 'Lopetegui',
            'paisEntrenador' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/man42344/256x278/man42344_t179_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'Albert',
            'apeEntrenador' => 'Celades',
            'paisEntrenador' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/man44793/256x278/man44793_t191_2019_1_001_000.png'
        ),
        array(
            'nomEntrenador' => 'José',
            'apeEntrenador' => 'Calleja',
            'paisEntrenador' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/man49108/256x278/man49108_t449_2019_1_001_000.png'
        ),
    );

    private $arrayPosiciones = array(
        array(
            'nomPosicion' => 'Portero'
        ),
        array(
            'nomPosicion' => 'Defensa'
        ),
        array(
            'nomPosicion' => 'Centrocampista'
        ),
        array(
            'nomPosicion' => 'Delantero'
        )
    );

    private $arrayClubes = array(
        array(
            'nomClub' => 'ATHLETIC CLUB BILBAO',
            'entrenador' => 1,
            'estadio' => 1,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/athletic.png'
        ),
        array(
            'nomClub' => 'ATLÉTICO DE MADRID',
            'entrenador' => 2,
            'estadio' => 2,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/atletico.png'
        ),
        array(
            'nomClub' => 'FC BARCELONA',
            'entrenador' => 3,
            'estadio' => 3,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/atletico.png'
        ),
        array(
            'nomClub' => 'REAL MADRID',
            'entrenador' => 4,
            'estadio' => 4,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/real-madrid.png'
        ),
        array(
            'nomClub' => 'REAL SOCIEDAD',
            'entrenador' => 5,
            'estadio' => 5,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/real-sociedad.png'
        ),
        array(
            'nomClub' => 'SEVILLA FC',
            'entrenador' => 6,
            'estadio' => 6,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/sevilla.png'
        ),
        array(
            'nomClub' => 'VALENCIA FC',
            'entrenador' => 7,
            'estadio' => 7,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/valencia.png'
        ),
        array(
            'nomClub' => 'VILLARREAL CF',
            'entrenador' => 8,
            'estadio' => 8,
            'liga' => 1,
            'escudo' => 'https://assets.laliga.com/assets/2019/06/07/small/villarreal.png'
        )
    );

    private $arrayPartidos = array(
        array(
            'eqLocal' => 1,
            'eqVisitante' => 2,
            'estadio' => 1,
            'fecha' => '2020/02/02',
            'liga' => 1,
            'golesLocal' => 2,
            'golesVisitante' => 1,
            'arbitro' => 1
        ),
        array(
            'eqLocal' => 3,
            'eqVisitante' => 4,
            'estadio' => 3,
            'fecha' => '2020/02/02',
            'liga' => 1,
            'golesLocal' => 2,
            'golesVisitante' => 0,
            'arbitro' => 2
        ),
        array(
            'eqLocal' => 5,
            'eqVisitante' => 6,
            'estadio' => 5,
            'fecha' => '2020/02/02',
            'liga' => 1,
            'golesLocal' => 1,
            'golesVisitante' => 3,
            'arbitro' => 3
        ),
        array(
            'eqLocal' => 7,
            'eqVisitante' => 8,
            'estadio' => 7,
            'fecha' => '2020/02/02',
            'liga' => 1,
            'golesLocal' => 2,
            'golesVisitante' => 2,
            'arbitro' => 4
        )

    );

    private $arrayJugadores = array(

        // Jugadores Athletic Club Bilbao

        array(
            'nomJugador' => 'Unai',
            'apeJugador' => 'Simon',
            'club' => 1,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p212769/256x278/p212769_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Iago',
            'apeJugador' => 'Herrerin',
            'club' => 1,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p89292/256x278/p89292_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ander',
            'apeJugador' => 'Capa Rodriguez',
            'club' => 1,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p140266/256x278/p140266_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Mikel',
            'apeJugador' => 'Balenziaga Oruesagasti',
            'club' => 1,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p56680/256x278/p56680_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Yeray',
            'apeJugador' => 'Álvarez López',
            'club' => 1,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p197319/256x278/p197319_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Óscar',
            'apeJugador' => 'de Marcos Arana',
            'club' => 1,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p59062/256x278/p59062_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Unai',
            'apeJugador' => 'Núñez Gestoso',
            'club' => 1,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p242830/256x278/p242830_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Mikel',
            'apeJugador' => 'San José Domínguez',
            'club' => 1,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p42995/256x278/p42995_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Beñat',
            'apeJugador' => 'Etxebarria Urkiaga',
            'club' => 1,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p38394/256x278/p38394_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Unai',
            'apeJugador' => 'López',
            'club' => 1,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p183462/256x278/p183462_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Raúl',
            'apeJugador' => 'García Escudero',
            'club' => 1,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p18498/256x278/p18498_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Dani',
            'apeJugador' => 'García Carrillo',
            'club' => 1,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p140264/256x278/p140264_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Iñaki',
            'apeJugador' => 'Williams Arthuer',
            'club' => 1,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p197334/256x278/p197334_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Iker',
            'apeJugador' => 'Muniain Goñi',
            'club' => 1,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p76012/256x278/p76012_t174_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Aritz',
            'apeJugador' => 'Aduriz Zubeldia',
            'club' => 1,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t174/p14464/256x278/p14464_t174_2019_1_001_000.png',
        ),

        // Jugadores Atletico de Madrid

        array(
            'nomJugador' => 'Antonio',
            'apeJugador' => 'Adán',
            'club' => 2,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p59981/256x278/p59981_t175_2019_1_001_000.png',
        ),

        array(
            'nomJugador' => 'Jan',
            'apeJugador' => 'Oblak',
            'club' => 2,
            'posicion' => 1,
            'pais' => 4,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p81352/256x278/p81352_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'José María',
            'apeJugador' => 'Giménez',
            'club' => 2,
            'posicion' => 2,
            'pais' => 5,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p151883/256x278/p151883_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Santiago',
            'apeJugador' => 'Arias Naranjo',
            'club' => 2,
            'posicion' => 2,
            'pais' => 6,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p102383/256x278/p102383_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Stefan',
            'apeJugador' => 'Savić',
            'club' => 2,
            'posicion' => 2,
            'pais' => 7,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p65807/256x278/p65807_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sime',
            'apeJugador' => 'Vrsaljko',
            'club' => 2,
            'posicion' => 2,
            'pais' => 8,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p68353/256x278/p68353_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Kieran',
            'apeJugador' => 'Trippier',
            'club' => 2,
            'posicion' => 2,
            'pais' => 9,
            'foto' => '//assets.laliga.com/squad/2019/t175/p77794/256x278/p77794_t175_2019_1_001_000.png'
        ),
        array(
            'nomJugador' => 'Thomas Teye',
            'apeJugador' => 'Partey',
            'club' => 2,
            'posicion' => 3,
            'pais' => 10,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p167199/256x278/p167199_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jorge',
            'apeJugador' => 'Resurección Merodio',
            'club' => 3,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p77390/256x278/p77390_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Saúl',
            'apeJugador' => 'Ñíguez Esclápez',
            'club' => 2,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p89335/256x278/p89335_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Marcos',
            'apeJugador' => 'Llorente',
            'club' => 2,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p192364/256x278/p192364_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Héctor',
            'apeJugador' => 'Herrera',
            'club' => 2,
            'posicion' => 3,
            'pais' => 11,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p102578/256x278/p102578_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Joao',
            'apeJugador' => 'Felix',
            'club' => 2,
            'posicion' => 4,
            'pais' => 12,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p428399/256x278/p428399_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Álvaro',
            'apeJugador' => 'Morata',
            'club' => 2,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p88482/256x278/p88482_t175_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Diego',
            'apeJugador' => 'Costa',
            'club' => 2,
            'posicion' => 4,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t175/p18507/256x278/p18507_t175_2019_1_001_000.png',
        ),

        // Jugadores FC Barcelona

        array(
            'nomJugador' => 'Marc-André',
            'apeJugador' => 'Ter Stegen',
            'club' => 3,
            'posicion' => 1,
            'pais' => 14,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p77318/256x278/p77318_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Norberto',
            'apeJugador' => 'Murara Neto',
            'club' => 3,
            'posicion' => 1,
            'pais' => 13,
            'foto' => 'foto:https://assets.laliga.com/squad/2019/t178/p69752/256x278/p69752_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Gerard',
            'apeJugador' => 'Piqué Bernabeu',
            'club' => 3,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p18221/256x278/p18221_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Clement Nicolas',
            'apeJugador' => 'Laurent Lenglet',
            'club' => 3,
            'posicion' => 2,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p171101/256x278/p171101_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jordi',
            'apeJugador' => 'Alba Ramos',
            'club' => 3,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p52356/256x278/p52356_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Samuel',
            'apeJugador' => 'Umtiti',
            'club' => 3,
            'posicion' => 2,
            'pais' => 15,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p88580/256x278/p88580_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Nélson',
            'apeJugador' => 'Cabral Semedo',
            'club' => 3,
            'posicion' => 2,
            'pais' => 12,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p200402/256x278/p200402_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ivan',
            'apeJugador' => 'Rakitic',
            'club' => 3,
            'posicion' => 3,
            'pais' => 16,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p34703/256x278/p34703_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sergio',
            'apeJugador' => 'Busquets Burgos',
            'club' => 3,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p54104/256x278/p54104_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Antoine',
            'apeJugador' => 'Griezman',
            'club' => 3,
            'posicion' => 3,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p76650/256x278/p76650_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Arturo',
            'apeJugador' => 'Vidal',
            'club' => 3,
            'posicion' => 4,
            'pais' => 17,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p42565/256x278/p42565_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Frenkie',
            'apeJugador' => 'De Jong',
            'club' => 3,
            'posicion' => 4,
            'pais' => 18,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p209712/256x278/p209712_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Luis Alberto',
            'apeJugador' => 'Suárez Díaz',
            'club' => 3,
            'posicion' => 4,
            'pais' => 5,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p39336/256x278/p39336_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Lionel Andrés',
            'apeJugador' => 'Messi Cuccittini',
            'club' => 3,
            'posicion' => 4,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p19054/256x278/p19054_t178_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ousmane',
            'apeJugador' => 'Dembélé',
            'club' => 3,
            'posicion' => 4,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t178/p219438/256x278/p219438_t178_2019_1_001_000.png',
        ),

        // Jugadores Real Madrid

        array(
            'nomJugador' => 'Thibaut',
            'apeJugador' => 'Courtois',
            'club' => 4,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p60772/256x278/p60772_t186_2019_1_001_000.pngs',
        ),
        array(
            'nomJugador' => 'Alphonse',
            'apeJugador' => 'Areola',
            'club' => 4,
            'posicion' => 1,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p84182/256x278/p84182_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Daniel',
            'apeJugador' => 'Carvajal Ramos',
            'club' => 4,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p88483/256x278/p88483_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sergio',
            'apeJugador' => 'Ramos García',
            'club' => 4,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p17861/256x278/p17861_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Marcelo',
            'apeJugador' => 'Vieira da Silva',
            'club' => 4,
            'posicion' => 2,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p39563/256x278/p39563_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'José Ignacio ',
            'apeJugador' => 'Fernández Iglesias',
            'club' => 4,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p88477/256x278/p88477_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Raphaël',
            'apeJugador' => 'Varane',
            'club' => 4,
            'posicion' => 2,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p90152/256x278/p90152_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Toni',
            'apeJugador' => 'Kroos',
            'club' => 4,
            'posicion' => 3,
            'pais' => 14,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p44989/256x278/p44989_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Luca',
            'apeJugador' => 'Modric',
            'club' => 4,
            'posicion' => 3,
            'pais' => 8,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p37055/256x278/p37055_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Carlos Henrique',
            'apeJugador' => 'Casemiro',
            'club' => 4,
            'posicion' => 3,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p61256/256x278/p61256_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Federico',
            'apeJugador' => 'Valverde',
            'club' => 4,
            'posicion' => 4,
            'pais' => 5,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p223255/256x278/p223255_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'James David',
            'apeJugador' => 'Rodríguez Rubio',
            'club' => 4,
            'posicion' => 3,
            'pais' => 6,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p60025/256x278/p60025_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Karim',
            'apeJugador' => 'Benzema',
            'club' => 4,
            'posicion' => 4,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p19927/256x278/p19927_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Eden',
            'apeJugador' => 'Hazard',
            'club' => 4,
            'posicion' => 4,
            'pais' => 19,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p42786/256x278/p42786_t186_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Gareth Frank',
            'apeJugador' => 'Bale',
            'club' => 4,
            'posicion' => 4,
            'pais' => 20,
            'foto' => 'https://assets.laliga.com/squad/2019/t186/p36903/256x278/p36903_t186_2019_1_001_000.png',
        ),

        // Jugadores Real Sociedad

        array(
            'nomJugador' => 'Miguel Ángel',
            'apeJugador' => 'Moyà Rumbo',
            'club' => 5,
            'posicion' => 1,
            'pais' => 1,
            'foto' => '',
        ),
        array(
            'nomJugador' => 'Alejandro',
            'apeJugador' => 'Remiro Gargallo',
            'club' => 5,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p197316/256x278/p197316_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Joseba',
            'apeJugador' => 'Zaldúa Bengoechea',
            'club' => 5,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p98821/256x278/p98821_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Diego Javier',
            'apeJugador' => 'Llorente Ríos',
            'club' => 5,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p149915/256x278/p149915_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Aritz',
            'apeJugador' => 'Elustondo',
            'club' => 5,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p200957/256x278/p200957_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Aihen',
            'apeJugador' => 'Muñoz',
            'club' => 5,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'ttps://assets.laliga.com/squad/2019/t188/p472145/256x278/p472145_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Nacho',
            'apeJugador' => 'Monreal',
            'club' => 5,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p38411/256x278/p38411_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Asier',
            'apeJugador' => 'Illarramendi Andonegi',
            'club' => 5,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p84086/256x278/p84086_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Igor',
            'apeJugador' => 'Zubeldia',
            'club' => 5,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p216475/256x278/p216475_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'David',
            'apeJugador' => 'Zurutuza Veillet',
            'club' => 5,
            'posicion' => 3,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p54371/256x278/p54371_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Martin',
            'apeJugador' => 'Odegaard',
            'club' => 5,
            'posicion' => 3,
            'pais' => 21,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p184029/256x278/p184029_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Mikel',
            'apeJugador' => 'Merino Zazón',
            'club' => 5,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p195384/256x278/p195384_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Willian José',
            'apeJugador' => 'Da Silva',
            'club' => 5,
            'posicion' => 4,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p73314/256x278/p73314_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Mikel',
            'apeJugador' => 'Oyarzabal',
            'club' => 5,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p219000/256x278/p219000_t188_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Alexander',
            'apeJugador' => 'Isak',
            'club' => 5,
            'posicion' => 4,
            'pais' => 22,
            'foto' => 'https://assets.laliga.com/squad/2019/t188/p219168/256x278/p219168_t188_2019_1_001_000.png',
        ),

        // Jugadores

        array(
            'nomJugador' => 'Tomás',
            'apeJugador' => 'Vaclík',
            'club' => 6,
            'posicion' => 1,
            'pais' => 23,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p51945/256x278/p51945_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Yassine',
            'apeJugador' => 'Bounou',
            'club' => 6,
            'posicion' => 1,
            'pais' => 24,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p120026/256x278/p120026_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sergio',
            'apeJugador' => 'Reguilón Rodríguez',
            'club' => 6,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p199249/256x278/p199249_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Daniel Filipe',
            'apeJugador' => 'Martins Carriço',
            'club' => 6,
            'posicion' => 2,
            'pais' => 12,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p46479/256x278/p46479_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jules',
            'apeJugador' => 'Koundé',
            'club' => 6,
            'posicion' => 2,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p220325/256x278/p220325_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sergio',
            'apeJugador' => 'Escudero Palomo',
            'club' => 6,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p62991/256x278/p62991_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Sergi',
            'apeJugador' => 'Gómez Solà',
            'club' => 6,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p86151/256x278/p86151_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Rony',
            'apeJugador' => 'López',
            'club' => 6,
            'posicion' => 3,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p109653/256x278/p109653_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Franco',
            'apeJugador' => 'Vázquez',
            'club' => 6,
            'posicion' => 3,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p100731/256x278/p100731_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ever',
            'apeJugador' => 'Maximiliano Banega',
            'club' => 6,
            'posicion' => 3,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p49309/256x278/p49309_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Nemanja',
            'apeJugador' => 'Gudelj',
            'club' => 6,
            'posicion' => 3,
            'pais' => 25,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p72154/256x278/p72154_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Óliver',
            'apeJugador' => 'Torres Muñoz',
            'club' => 6,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p115860/256x278/p115860_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Lucas',
            'apeJugador' => 'Ocampos',
            'club' => 6,
            'posicion' => 4,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p121117/256x278/p121117_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Manuel',
            'apeJugador' => 'Agudo Duran',
            'club' => 6,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p86173/256x278/p86173_t179_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jesús',
            'apeJugador' => 'Navas González',
            'club' => 6,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t179/p17740/256x278/p17740_t179_2019_1_001_000.png',
        ),

        // Jugadores Valencia CF

        array(
            'nomJugador' => 'Jaume',
            'apeJugador' => 'Domenech Sánchez',
            'club' => 7,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p116732/256x278/p116732_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jasper',
            'apeJugador' => 'Cillesen',
            'club' => 7,
            'posicion' => 1,
            'pais' => 18,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p72162/256x278/p72162_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ezequiel',
            'apeJugador' => 'Garay',
            'club' => 7,
            'posicion' => 2,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p28525/256x278/p28525_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Gabriel',
            'apeJugador' => 'Paulista',
            'club' => 7,
            'posicion' => 2,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p158074/256x278/p158074_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Jaume Vicent',
            'apeJugador' => 'Costa Jordá',
            'club' => 7,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p58792/256x278/p58792_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Eliaquim Hans',
            'apeJugador' => 'Mangala',
            'club' => 7,
            'posicion' => 2,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p57112/256x278/p57112_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Thierry',
            'apeJugador' => 'Correia',
            'club' => 7,
            'posicion' => 2,
            'pais' => 12,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p222629/256x278/p222629_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Geoffrey',
            'apeJugador' => 'Kondogbia',
            'club' => 7,
            'posicion' => 3,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p88754/256x278/p88754_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Gonçalo',
            'apeJugador' => 'Guedes',
            'club' => 7,
            'posicion' => 3,
            'pais' => 12,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p181284/256x278/p181284_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Daniel',
            'apeJugador' => 'Parejo Muñoz',
            'club' => 7,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p51952/256x278/p51952_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Carlos',
            'apeJugador' => 'Soler Barragán',
            'club' => 7,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p224860/256x278/p224860_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Francis',
            'apeJugador' => 'Coquelin',
            'club' => 7,
            'posicion' => 3,
            'pais' => 3,
            'foto' => 'ttps://assets.laliga.com/squad/2019/t191/p56864/256x278/p56864_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Kevin',
            'apeJugador' => 'Gameiro',
            'club' => 7,
            'posicion' => 4,
            'pais' => 3,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p42779/256x278/p42779_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Denís',
            'apeJugador' => 'Chérysev',
            'club' => 7,
            'posicion' => 4,
            'pais' => 26,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p88489/256x278/p88489_t191_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Rodrigo',
            'apeJugador' => 'Moreno Machado',
            'club' => 7,
            'posicion' => 4,
            'pais' => 13,
            'foto' => 'https://assets.laliga.com/squad/2019/t191/p80954/256x278/p80954_t191_2019_1_001_000.png',
        ),

        // Jugadores Villarreal CF

        array(
            'nomJugador' => 'Sergio',
            'apeJugador' => 'Asenjo Andrés',
            'club' => 8,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p48772/256x278/p48772_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Andrés',
            'apeJugador' => 'Fernández Moreno',
            'club' => 8,
            'posicion' => 1,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p51792/256x278/p51792_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Mario Gaspar',
            'apeJugador' => 'Pérez Martinez',
            'club' => 8,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p76610/256x278/p76610_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Raul',
            'apeJugador' => 'Albiol',
            'club' => 8,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p18003/256x278/p18003_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Francisco',
            'apeJugador' => 'Torres',
            'club' => 8,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p244954/256x278/p244954_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Ramiro José',
            'apeJugador' => 'Funes Mori',
            'club' => 8,
            'posicion' => 2,
            'pais' => 2,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p121221/256x278/p121221_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Alberto',
            'apeJugador' => 'Moreno Pérez',
            'club' => 8,
            'posicion' => 2,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p100059/256x278/p100059_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Santiago',
            'apeJugador' => 'Cazorla González',
            'club' => 8,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p19524/256x278/p19524_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Vicente',
            'apeJugador' => 'Iborra',
            'club' => 8,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p54513/256x278/p54513_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Manuel',
            'apeJugador' => 'Trigueros Muñoz',
            'club' => 8,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p98961/256x278/p98961_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Manuel',
            'apeJugador' => 'Morlanes Ariño',
            'club' => 8,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p227164/256x278/p227164_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Bruno',
            'apeJugador' => 'Soriano Llidó',
            'club' => 8,
            'posicion' => 3,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p39817/256x278/p39817_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Carlos Arturo',
            'apeJugador' => 'Bacca Ahumada',
            'club' => 8,
            'posicion' => 4,
            'pais' => 6,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p111274/256x278/p111274_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Moisés Gómez',
            'apeJugador' => 'Bordonado',
            'club' => 8,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p109243/256x278/p109243_t449_2019_1_001_000.png',
        ),
        array(
            'nomJugador' => 'Javier',
            'apeJugador' => 'Ontiveros Parra',
            'club' => 8,
            'posicion' => 4,
            'pais' => 1,
            'foto' => 'https://assets.laliga.com/squad/2019/t449/p219855/256x278/p219855_t449_2019_1_001_000.png',
        )

    );
}



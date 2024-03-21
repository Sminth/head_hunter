<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Off78TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('off78')->delete();
        
        \DB::table('off78')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'test',
                'description' => '<p>test</p>',
                'salaire' => NULL,
                'adresse' => 'Abidan, Plateau',
                'idsecteur' => 3,
                'identreprise' => 2,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 01:55:06',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-21 01:55:08',
                'updated_at' => '2024-03-21 01:56:50',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Administrateur Système',
            'description' => '<p style="margin-bottom: 10px; font-size: 17px; color: rgb(112, 112, 112); line-height: 1.8; font-family: &quot;IBM Plex Sans&quot;, sans-serif;">Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p><ol style="padding-left: 0px; margin-bottom: 0px; font-family: &quot;IBM Plex Sans&quot;, sans-serif; font-size: 17px;"><li style="list-style: none; margin-bottom: 5px;"><span style="background-color: rgb(255, 255, 0);"><span class="bx bx-check" style="font-weight: 600; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; top: 2px; position: relative; font-size: 20px; font-family: boxicons !important;"></span>&nbsp;Expérience professionnelle</span></li><li style="color: rgb(112, 112, 112); list-style: none; margin-bottom: 5px;"><span class="bx bx-check" style="font-weight: 600; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; top: 2px; position: relative; font-size: 20px; font-family: boxicons !important;"></span>&nbsp;<b>Compétences</b> (compétences douces et/ou techniques)</li><li style="color: rgb(112, 112, 112); list-style: none; margin-bottom: 5px;"><span class="bx bx-check" style="font-weight: 600; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; top: 2px; position: relative; font-size: 20px; font-family: boxicons !important;"></span>&nbsp;Qualités et attributs personnels.</li><li style="color: rgb(112, 112, 112); list-style: none; margin-bottom: 5px;"><span class="bx bx-check" style="font-weight: 600; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; top: 2px; position: relative; font-size: 20px; font-family: boxicons !important;"></span>&nbsp;Soutenir le déploiement de logiciels en production.</li><li style="color: rgb(112, 112, 112); list-style: none; margin-bottom: 5px;"><span class="bx bx-check" style="font-weight: 600; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; top: 2px; position: relative; font-size: 20px; font-family: boxicons !important;"></span>&nbsp;Guider et encadrer les ingénieurs juniors. Servir de chef d\'équipe si nécessaire.</li></ol>',
                'salaire' => NULL,
                'adresse' => 'Abidan, Plateau',
                'idsecteur' => 7,
                'identreprise' => 3,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 01:55:06',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-21 02:16:18',
                'updated_at' => '2024-03-21 02:16:18',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Urgentiste',
                'description' => '<p>un urgentiste ayant les capacités&nbsp;</p><ol><li>être élégant</li><li>avoir une belle taille&nbsp;</li><li>travailler sous pression&nbsp;</li></ol>',
                'salaire' => '1500000',
                'adresse' => 'Abidjan, Côte d\'Ivoire',
                'idsecteur' => 5,
                'identreprise' => 4,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 01:55:06',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-21 02:21:31',
                'updated_at' => '2024-03-21 02:21:31',
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Juriste de droit des femmes',
            'description' => '<ol><li>Etre <span style="background-color: rgb(255, 255, 0);">Rigoureux</span></li><li><b><u>Etre à l\'heure</u></b></li></ol>',
                'salaire' => NULL,
                'adresse' => 'Abidjan, Côte d\'Ivoire',
                'idsecteur' => 6,
                'identreprise' => 5,
                'type' => 'CDI',
                'date_cloture' => '2024-03-21 01:55:06',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-21 17:44:33',
                'updated_at' => '2024-03-21 17:44:33',
            ),
        ));
        
        
    }
}
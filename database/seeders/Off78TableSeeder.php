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
            1 => 
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
            2 => 
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
            3 => 
            array (
                'id' => 5,
                'libelle' => 'Ingénieur en Robotique',
            'description' => '<p><span style="color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;">Concevoir, développer et améliorer des systèmes robotiques pour des applications industrielles ou domestiques. Participer à la recherche et au développement de nouvelles technologies robotiques</span><br></p>',
                'salaire' => '3000000',
                'adresse' => '22BP3033',
                'idsecteur' => 10,
                'identreprise' => 1,
                'type' => 'CDI',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => '2851030-HN3f.jpg',
                'status' => 'publier',
                'created_at' => '2024-03-22 00:24:27',
                'updated_at' => '2024-03-22 00:24:27',
            ),
            4 => 
            array (
                'id' => 6,
                'libelle' => 'Développeur Web Full Stack',
                'description' => '<p>Concevoir, développer et tester des applications web et des logiciels en utilisant des technologies front-end et back-end. Collaborer avec une équipe pour la conception et l\'optimisation des solutions informatique<br></p>',
                'salaire' => '50 000',
                'adresse' => '22BP3033',
                'idsecteur' => 7,
                'identreprise' => 2,
                'type' => 'CDI',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:30:16',
                'updated_at' => '2024-03-22 00:30:16',
            ),
            5 => 
            array (
                'id' => 7,
                'libelle' => 'Contrôleur de gestion Entreprise',
                'description' => '<p>Suivre et analyser les indicateurs de performance de l’entreprise. Participer à l’élaboration du budget et des prévisions financières<br></p>',
                'salaire' => '340 000',
                'adresse' => '123 Rue des Innovations, Cocody, Abidjan',
                'idsecteur' => 3,
                'identreprise' => 4,
                'type' => 'CDI',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:36:32',
                'updated_at' => '2024-03-22 00:36:32',
            ),
            6 => 
            array (
                'id' => 8,
                'libelle' => 'Chef de Projet Marketing',
                'description' => '<p>Gérer et coordonner les campagnes marketing pour les clients de l\'agence. Élaborer des stratégies marketing, superviser la création de contenu et analyser les performances des campagnes.<br></p>',
                'salaire' => '400 000',
                'adresse' => '225RRTCI 23',
                'idsecteur' => 9,
                'identreprise' => 3,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:39:14',
                'updated_at' => '2024-03-22 00:39:14',
            ),
            7 => 
            array (
                'id' => 9,
                'libelle' => 'Technicien en installation domotique',
                'description' => '<p>&nbsp;Installer et configurer des systèmes domotiques dans les résidences et les bâtiments commerciaux. Assurer la maintenance et le support technique des équipements domotiques.<br></p>',
                'salaire' => '500 000',
                'adresse' => '45HU45JKJ RUE DU JARDIN',
                'idsecteur' => 8,
                'identreprise' => 1,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:41:33',
                'updated_at' => '2024-03-22 00:41:33',
            ),
            8 => 
            array (
                'id' => 10,
                'libelle' => 'Technicien en installation domotique',
                'description' => '<p>Installer et configurer des systèmes domotiques dans les résidences et les bâtiments commerciaux. Assurer la maintenance et le support technique des équipements domotiques.<br></p>',
                'salaire' => '400 000',
                'adresse' => '234ERGDE5 TOUR DUVIGNON',
                'idsecteur' => 8,
                'identreprise' => 1,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:49:47',
                'updated_at' => '2024-03-22 00:49:47',
            ),
            9 => 
            array (
                'id' => 11,
                'libelle' => 'Avocat en droit des affaires',
                'description' => '<p>Fournir des conseils juridiques aux entreprises sur des questions liées au droit des affaires. Représenter les clients devant les tribunaux et négocier des accords juridiques.<br></p>',
                'salaire' => '100 000',
                'adresse' => '5453IEENN2 BOULEVARD DAVIGNON',
                'idsecteur' => 6,
                'identreprise' => 5,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 00:54:25',
                'updated_at' => '2024-03-22 00:54:25',
            ),
            10 => 
            array (
                'id' => 12,
                'libelle' => 'Enseignant de mathématiques',
                'description' => '<p>Enseigner les mathématiques à des élèves du secondaire, préparer et dispenser des cours, évaluer les performances des élèves et les accompagner dans leur apprentissage.<br></p>',
                'salaire' => '100 000',
                'adresse' => '22BP3033',
                'idsecteur' => 4,
                'identreprise' => 5,
                'type' => 'CDI',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 01:02:19',
                'updated_at' => '2024-03-22 01:02:19',
            ),
            11 => 
            array (
                'id' => 13,
                'libelle' => 'Auditeur financier',
                'description' => '<p>&nbsp;Examiner et évaluer les états financiers des entreprises pour s\'assurer de leur exactitude et de leur conformité aux normes comptables. Fournir des recommandations pour améliorer les pratiques comptables.<br></p>',
                'salaire' => '50 000',
                'adresse' => '22BP3033',
                'idsecteur' => 3,
                'identreprise' => 4,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 01:07:59',
                'updated_at' => '2024-03-22 01:07:59',
            ),
            12 => 
            array (
                'id' => 14,
                'libelle' => 'Chef d\'équipe logistique',
            'description' => '<p><span style="color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;"> Superviser et coordonner les opérations logistiques, y compris la réception, le stockage et la distribution des marchandises. Gérer une équipe de travailleurs de la logistique.</span><br></p>',
                'salaire' => '50 000',
                'adresse' => '45HU45JKJ RUE DU JARDIN',
                'idsecteur' => 9,
                'identreprise' => 1,
                'type' => 'CDD',
                'date_cloture' => '2024-03-21 23:31:17',
                'image' => NULL,
                'status' => 'publier',
                'created_at' => '2024-03-22 01:31:59',
                'updated_at' => '2024-03-22 01:31:59',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('partners')->select(["*"])->exists()) {
            DB::table('partners')->insert([
                [
                    "id" => 1, "name" => "Gallice", "description" => "GALLICE est née en 2007 de l’association de professionnels ayant forgé leur expérience au sein de services de l’Etat. Ces hommes, aux origines et aux compétences complémentaires, sont le cœur de notre équipe. 
                Ils en sont aussi la légitimité. 
                Autour de ces experts et de ceux qui les ont rejoints depuis, 
                GALLICE accompagne les entreprises dans leur gestion des risques. 
                Basée à Dublin, GALLICE Developments est dédiée à la protection des personnes, 
                des biens, de l’information et, au sens large, du patrimoine et des intérêts de l’entreprise, 
                notamment dans les zones à risque.",
                    "image" => "/storage/gallice_logo.png",
                    "link" => "https://www.gallice-international.com/"
                ],
                [
                    "id" => 2, "name" => "D.S.O.A", "description" => "Créée en 1996, D.S.O.A. est en permanence à la recherche de nouveaux matériels adaptés aux missions I.E.D. et E.O.D, 
            et au traitement des domaines de la Sûreté et de la Sécurité.
            A la pointe de la technologie, attentive aux demandes et besoins de ses clients, D.S.O.A. sélectionne les meilleurs matériels, 
            choisis pour leurs qualités et performances. 
            Les produits proposés par D.S.O.A. sont référencés auprès d’utilisateurs confrontés aux exigences du terrain. 
            Afin d’étendre son domaine de compétence D.S.O.A. a rejoint le Groupe VISIOM en 2012. 
            Fort de son expérience au travers d'un personnel spécialisé, 
            D.S.O.A. fournit une assistance technique de qualité et un conseil objectif dans le choix de matériels spécifiques pour répondre à la demande de ses clients.",
                    "image" => "/storage/D.S.O.A_logo.png",
                    "link" => "http://dsoa.fr/"
                ],
                [
                    "id" => 3, "name" => "GPX", "description" => "Une société du groupe VISIOM Totalement indépendants de tous fabriquants et financièrement épaulé par notre Groupe notre ambition est de devenir un interlocuteur à l’écoute de vos problématiques d’approvisionnement. 
        Plus de 25 années d’expérience à votre service. 
        Une connaissance approfondie des équipements en service dans le monde",
                    "image" => "/storage/gpx_logo.png",
                    "link" => "https://www.gpx.fr/accueil.html"
                ],
                [
                    "id" => 4, "name" => "VISIOM", "description" => "Visiom est une PME française dont le Capital détenu par le personnel est de 100% . 
        C'est une société spécialiste des technologies avancées appliquées à la sûreté. 
        Visiom est reconnu comme le leader des solutions technologiques globales. 
        Elle détient une expertise concrétisée par une expérience mature. 
        Visiom a pour vocation d’être le partenaire pérenne de nos clients",
                    "image" => "/storage/visiom_logo.png",
                    "link" => "https://www.visiom.com/"
                ],
                ["id" => 5, "name" => "Lppicongo", "description" => "organisation à but non lucratif créée par des citoyens de la République démocratique du Congo basés aux États-Unis et en RDC. 
    L'objectif du LPPI est de protéger les vastes tourbières de la République Démocratique du Congo (RDC) et les droits fonciers des populations locales.", "image" => "/storage/LPPI-logo-small.jpg", "link" => "https://lppicongo.org/"]
            ]);
        }
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903101934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // Ressources
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Blé", "corn")');
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Viande", "fish")');
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Bois", "wood")');
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Minéraux", "stone")');
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Tissu", "silk")');
        $this->addSql('INSERT INTO ressources (name, pictogramme) VALUES ("Or", "coin")');
        
        // Cantons
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Barentin", 
        "https://upload.wikimedia.org/wikipedia/commons/4/42/Blason_Barentin.svg?uselang=fr",
        "Situé dans la vallée de la seine, Barentin est un canton en plein essor. Au coeur de la verdoyante Austreberthe, ses ressources naturelles font d\'elle un grand point stratégique.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Bois-Guillaume", 
        "https://upload.wikimedia.org/wikipedia/commons/7/78/Blason_ville_fr_Bois-Guillaume_%28Seine-Maritime%29.svg",
        "Dès l\'antiquité, Bois-guillaume jouissait de ressources simples mais en abondances. Situé sur deux axes stratégiques, il mène facilement à Dieppe et Amiens (Oise)",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Bolbec", 
        "https://upload.wikimedia.org/wikipedia/commons/2/22/Blason_ville_fr_Bolbec_%28Seine-Maritime%29.svg",
        "Canton aussi vieux que la capitale départementale Rouen, Bolbec se distingue par ses nombreux moulins qui jalonnaient la rivière du même nom.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canteleu", 
        "https://upload.wikimedia.org/wikipedia/commons/5/56/Blason_Canteleu.svg",
        "Défriché de toutes natures par les religieux passés, Canteleu sert à présent de refuges grâces à ses falaises creuses situées aux bords de la Seine.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Caudebec-lès-Elbeuf", 
        "https://upload.wikimedia.org/wikipedia/commons/b/b3/Blason_Caudebec-l%C3%A8s-Elbeuf.svg",
        "Grâce à son placement entre Rouen et Paris, le canton de Caudebec-lès-Elbeuf permet des déplacements rapides entre grandes villes.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Darnetal", 
        "https://upload.wikimedia.org/wikipedia/commons/1/16/Blason_Darn%C3%A9tal.svg",
        "Ce jeune canton naquit sur les bords du Robec, le berceau de Rouen. Son point fort ne réside pas sur ses ressources mais bien sur sa proximité avec la capitale départementale.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Dieppe-1", 
        "https://upload.wikimedia.org/wikipedia/commons/6/6f/Blason_Dieppe.svg",
        "De la Cité de Limes romaine au fief de Caude Côte lors de la révolution française, Dieppe est riche de par son histoire mais aussi de par ses trésors.",
        null,
        2)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Dieppe-2", 
        "https://upload.wikimedia.org/wikipedia/commons/6/6f/Blason_Dieppe.svg",
        "De la Cité de Limes romaine au fief de Caude Côte lors de la révolution française, Dieppe est riche de par son histoire mais aussi de par ses trésors.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Elbeuf", 
        "https://upload.wikimedia.org/wikipedia/commons/f/f1/Blason_ville_fr_Elbeuf_%28Seine-Maritime%29.svg",
        "L\'industrie drapière a marqué l\'histoire de ce Canton. Avec le temps, il a sû se réinventer en travaillant des matériaux nouveaux et compétitifs.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Eu", 
        "https://upload.wikimedia.org/wikipedia/commons/4/43/Blason_ville_fr_Eu_%28Seine-Maritime%29.svg",
        "Eu fût créée par Richard, petit fils de Rolon, dans le but de protéger la Normandie. Ses ressources naturelles lui permettent de se développer facilement.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Fécamp", 
        "https://upload.wikimedia.org/wikipedia/commons/4/4f/Blason_F%C3%A9camp.svg",
        "Ville d\'art et d\'histoire, Fécamp et son canton sont situés sur les côtés de la Manche. Riche de ses terres et de la mer, Fécamp prolifère à travers les âges.",
        null,
        2)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Gournay-en-Bray", 
        "https://upload.wikimedia.org/wikipedia/commons/f/fc/Blason_Gournay-en-bray.svg",
        "Gournay-en-Bray, canton frontière des anciens rois de France, son environnement boisé offrait une ligne de défense naturelle.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Le Grand-Quevilly", 
        "https://upload.wikimedia.org/wikipedia/commons/0/0a/Blason_ville_fr_Le_Grand-Quevilly_%28Seine-Maritime%29.svg",
        "Ce petit canton proche de la capitale départementale, offre des solutions logistiques intéressantes.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-1", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre premier du nom, baptisé par Napoléon Bonaparte, possède le meilleur emplacement géographique, lui accordant protection et ressource.",
        null,
        2)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-2", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre second du nom, est l\'avant-garde de la cité. Davantage ancrée dans les terres, elle sert de bastion pour la garnison.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-3", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre troisième du nom, contrôle aisément les entrées maritimes avec une vue parfaite sur l\'embouchure de la seine.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-4", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre quatrième du nom, petite enclave de la cité, est le point névralgique de la pointe de la seine maritime. Luxe et puissance y réside.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-5", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre cinquième du nom, voisine du centre, elle baigne dans la lumière depuis sa création.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Canton du Havre-6", 
        "https://upload.wikimedia.org/wikipedia/commons/c/ce/Blason_ville_fr_Le_Havre_%28Seine-Maritime%29.svg",
        "Le Havre sixième du nom, est la définition parfaite de son nom. Si Napoléon l\'a nommée le Havre de paix, c\'est bien pour sa côte et son accès à la mer.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Luneray", 
        "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Blason_Luneray.svg/1200px-Blason_Luneray.svg.png",
        "Ancienne cité, Luneray, connue auparavant sous le nom de Luneraco, prospère de ses terres fertiles.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Le Mesnil-Esnard", 
        "",
        "Le Mesnil-Esnard a longtemps été dirigé par l\'Eglise. C\'est aujourd\'hui ses richesses agricoles qui font d\'elle un puissant canton idéalement placé.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Mont-Saint-Aignan", 
        "https://upload.wikimedia.org/wikipedia/commons/4/43/Blason_ville_fr_Mont-Saint-Aignan_%28Seine-Maritime%29.svg",
        "Depuis l\'antiquité, Mont-Saint-Aignan est le berceau d\'une culture agricole. De plus, au fil des siècles, elle a sû s\'adapté à ses époques et évoluer technologiquement.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Neufchâtel-en-Bray", 
        "https://upload.wikimedia.org/wikipedia/commons/f/f0/Blason_Neufch%C3%A2tel-en-Bray.svg",
        "Réputé pour sa gastronomie et ses paysages valonnés, Neufchâtel-en-Bray offre un gigantesque territoire riche.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Notre-Dame-de-Bondeville", 
        "https://upload.wikimedia.org/wikipedia/commons/0/09/Blason_Notre-Dame-de-Bondeville.svg",
        "Territoire écrasé par ses voisons, Notre-Dame-de-Bondeville est tout de même un point central du département, offrant ressources et accessibilité.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Notre-Dame-de-Gravenchon", 
        "https://upload.wikimedia.org/wikipedia/commons/c/c9/Blason_Notre_Dame_de_Gravenchon.svg",
        "Bordant la Seine, Notre-Dame-de-Gravenchon s\'est démarqué des autres de par sa simplicité. La simplicité est la réussite absolue",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Octeville-sur-Mer", 
        "https://upload.wikimedia.org/wikipedia/commons/a/ad/Blason_Octeville-sur-Mer.svg",
        "Pour protéger la grande ville qu\'est Le Havre, Octeville-sur-Mer est un autre grand canton servant d\'avant garde.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Le Petit-Quevilly", 
        "https://upload.wikimedia.org/wikipedia/commons/0/0a/Blason_ville_fr_Le_Grand-Quevilly_%28Seine-Maritime%29.svg",
        "Ce minuscule canton, possède une variété de ressources importante. Un allié très intéressant, surtout par rapport à sa disposition géographique.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Rouen-1", 
        "https://upload.wikimedia.org/wikipedia/commons/0/03/Blason_Rouen_76.svg",
        "Rouen, ville aux cent clochets et capitale de la Seine-Maritime, elle est le symbole de la puissance, et est l\'image d\'une cité médiévale imposante.",
        null,
        3)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Rouen-2", 
        "https://upload.wikimedia.org/wikipedia/commons/0/03/Blason_Rouen_76.svg",
        "Rouen deuxième du nom, se rapproche de ses voisins travaillant la terre. Un aubène pour la capitale.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Rouen-3", 
        "https://upload.wikimedia.org/wikipedia/commons/0/03/Blason_Rouen_76.svg",
        "Rouen troisième du nom, borde la Seine. La capitale accède au commerce maritime et ainsi aux ressources de luxe.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Saint-Étienne-du-Rouvray", 
        "https://upload.wikimedia.org/wikipedia/commons/e/e8/Blason_Saint-%C3%A9tienne-du-Rouvray.svg",
        "Canton situé au sud du département, permet un saut rapide vers son voisin l\'Eure, ses ressources ne sont pas les plus imposantes, mais a sû se faire des alliés proches pour contrer ses lacunes.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Saint-Romain-de-Colbosc", 
        "https://upload.wikimedia.org/wikipedia/commons/6/64/Blason_ville_fr_Saint-Romain-de-Colbosc_%28Seine-Maritime%29.svg",
        "Saint-Romain-de-Colbosc, le Grand Est du Havre, n\'offre que peu de ressource mais une imposante superficie permettant à la ville Napoléonienne de coloniser rapidement le voisinage.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Saint-Valery-en-Caux", 
        "https://upload.wikimedia.org/wikipedia/commons/e/e4/Blason_ville_fr_Saint-Valery-en-Caux_%28Seine-Maritime%29.svg",
        "Il est l\'un des plus grand canton de son département, possède un accès à la mer et est situé entre deux puissances. Saint-Valéry-en-Caux est l\'allié parfait.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Sotteville-lès-Rouen", 
        "https://upload.wikimedia.org/wikipedia/commons/9/91/Blason_Sotteville-l%C3%A8s-Rouen.svg",
        "Sotteville-lès-Rouen, petit Canton au sud de la capitale, a marqué l\'histoire de la région grâce à son développement fulgurant de l\'industrie textile.",
        null,
        1)');
        $this->addSql('INSERT INTO cantons (name, blazon, description, owner_id, power) VALUES 
        ("Yvetot", 
        "https://upload.wikimedia.org/wikipedia/commons/5/5d/Blason_ville_fr_Yvetot_%28Seine-Maritime%29.svg",
        "Yvetot, centre de la Seine-Maritime, est riche, très riche, grâce à son placement entre toutes les puissances. Ses accès sont directs la place comme bastion de haute importance.",
        null,
        2)');

        // Ressource
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 1)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 3, 1)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 4, 1)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 4, 2)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 5, 2)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 3, 3)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 1, 3)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 3, 3)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 1, 4)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 1, 4)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 5)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 5)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 2, 6)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 1, 6)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 7)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 2, 7)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 7)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 8)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 2, 8)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 8)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 9)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 1, 9)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 2, 10)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 1, 10)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 11)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 2, 11)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 11)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 12)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 3, 12)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 1, 13)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 2, 13)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 14)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 2, 14)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 14)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 15)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 15)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 4, 16)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 1, 17)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 2, 17)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 2, 18)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 19)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 4, 20)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 1, 20)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 6, 21)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 2, 22)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 1, 22)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 22)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 6, 23)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 4, 23)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 4, 24)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 1, 24)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 2, 24)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 2, 25)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 3, 25)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 3, 26)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 1, 27)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 2, 27)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 27)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 28)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 3, 28)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 2, 28)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 4, 29)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 2, 29)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 1, 29)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 4, 30)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 1, 30)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 2, 30)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 2, 31)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 1, 31)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (1, 2, 32)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 1, 32)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (2, 3, 33)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (3, 2, 33)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (4, 2, 34)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (5, 2, 35)');
        $this->addSql('INSERT INTO ressource (ressourceType, quantity, canton_id) VALUES (6, 2, 35)');


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cantons');
        $this->addSql('DROP TABLE players');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE ressources');

        $this->addSql('CREATE TABLE players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE ressource (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantity INTEGER NOT NULL, ressourceType INTEGER DEFAULT NULL, canton_id INTEGER NOT NULL, CONSTRAINT ressourceTypeToRessourcedId FOREIGN KEY (ressourceType) REFERENCES Ressources (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT cantonIdToCantonsId FOREIGN KEY (canton_id) REFERENCES cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE cantons (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, owner_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, blazon VARCHAR(1000) NOT NULL, description VARCHAR(1000) NOT NULL, power INTEGER NOT NULL DEFAULT 1, CONSTRAINT ownerIdToCantonsId FOREIGN KEY (owner_id) REFERENCES Cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE ressources (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) NOT NULL COLLATE BINARY, pictogramme VARCHAR(50) NOT NULL COLLATE BINARY)');

    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903095432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, cantons INTEGER NOT NULL, CONSTRAINT cantonsToCantonId FOREIGN KEY (cantons) REFERENCES Cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE ressource (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantity INTEGER NOT NULL, ressourceType INTEGER DEFAULT NULL, canton_id INTEGER NOT NULL, CONSTRAINT ressourceTypeToRessourcedId FOREIGN KEY (ressourceType) REFERENCES Ressources (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT cantonIdToCantonsId FOREIGN KEY (canton_id) REFERENCES cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE cantons (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, owner_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, blazon VARCHAR(1000) NOT NULL, description VARCHAR(1000) NOT NULL, power INTEGER NOT NULL DEFAULT 1, CONSTRAINT ownerIdToCantonsId FOREIGN KEY (owner_id) REFERENCES Cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE ressources (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) NOT NULL COLLATE BINARY, pictogramme VARCHAR(50) NOT NULL COLLATE BINARY)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE players');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE cantons');
        $this->addSql('DROP TABLE ressources');
    }
}

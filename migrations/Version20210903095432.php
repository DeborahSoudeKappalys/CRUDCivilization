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
        $this->addSql('CREATE TABLE players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE ressource (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantity INTEGER NOT NULL, ressourceType INTEGER DEFAULT NULL, canton_id INTEGER NOT NULL, CONSTRAINT ressourceTypeToRessourcedId FOREIGN KEY (ressourceType) REFERENCES Ressources (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT cantonIdToCantonsId FOREIGN KEY (canton_id) REFERENCES cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE cantons (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, owner_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, blazon VARCHAR(1000) NOT NULL, description VARCHAR(1000) NOT NULL, power INTEGER NOT NULL DEFAULT 1, CONSTRAINT ownerIdToCantonsId FOREIGN KEY (owner_id) REFERENCES Cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE TABLE ressources (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) NOT NULL COLLATE BINARY, pictogramme VARCHAR(50) NOT NULL COLLATE BINARY)');

        $this->addSql('CREATE TEMPORARY TABLE __temp__cantons AS SELECT id, owner_id, name, blazon, description, power FROM cantons');
        $this->addSql('DROP TABLE cantons');
        $this->addSql('CREATE TABLE cantons (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, owner_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, blazon VARCHAR(1000) NOT NULL COLLATE BINARY, description VARCHAR(1000) NOT NULL COLLATE BINARY, power INTEGER NOT NULL, CONSTRAINT FK_573C41AC7E3C61F9 FOREIGN KEY (owner_id) REFERENCES players (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO cantons (id, owner_id, name, blazon, description, power) SELECT id, owner_id, name, blazon, description, power FROM __temp__cantons');
        $this->addSql('DROP TABLE __temp__cantons');
        $this->addSql('CREATE INDEX IDX_573C41AC7E3C61F9 ON cantons (owner_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__players AS SELECT id, name, title, color FROM players');
        $this->addSql('DROP TABLE players');
        $this->addSql('CREATE TABLE players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, county_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, title VARCHAR(255) NOT NULL COLLATE BINARY, color VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_264E43A685E73F45 FOREIGN KEY (county_id) REFERENCES cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO players (id, name, title, color) SELECT id, name, title, color FROM __temp__players');
        $this->addSql('DROP TABLE __temp__players');
        $this->addSql('CREATE INDEX IDX_264E43A685E73F45 ON players (county_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ressource AS SELECT id, quantity, ressourceType, canton_id FROM ressource');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('CREATE TABLE ressource (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, canton_id INTEGER NOT NULL, quantity INTEGER NOT NULL, ressourceType INTEGER DEFAULT NULL, CONSTRAINT FK_939F4544D1142C7D FOREIGN KEY (ressourceType) REFERENCES ressources (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_939F45448D070D0B FOREIGN KEY (canton_id) REFERENCES cantons (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO ressource (id, quantity, ressourceType, canton_id) SELECT id, quantity, ressourceType, canton_id FROM __temp__ressource');
        $this->addSql('DROP TABLE __temp__ressource');
        $this->addSql('CREATE INDEX IDX_939F4544D1142C7D ON ressource (ressourceType)');
        $this->addSql('CREATE INDEX IDX_939F45448D070D0B ON ressource (canton_id)');
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

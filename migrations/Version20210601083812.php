<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210601083812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nni VARCHAR(180) NOT NULL, roles JSON NOT NULL, nom VARCHAR(64) DEFAULT NULL, email VARCHAR(128) DEFAULT NULL, gardian_hierrchie VARCHAR(96) DEFAULT NULL, orga_edf VARCHAR(256) DEFAULT NULL, id_unite_orga VARCHAR(16) DEFAULT NULL, connexion DATE DEFAULT NULL, id_orga INT DEFAULT NULL, groupement INT DEFAULT NULL, equipe VARCHAR(50) DEFAULT NULL, fixe VARCHAR(32) DEFAULT NULL, mobile VARCHAR(32) DEFAULT NULL, adresse VARCHAR(64) DEFAULT NULL, code_postal VARCHAR(16) DEFAULT NULL, ville VARCHAR(32) DEFAULT NULL, referent VARCHAR(128) DEFAULT NULL, bit INT NOT NULL, patronyme VARCHAR(32) DEFAULT NULL, prenom VARCHAR(32) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D6497218A0ED (nni), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
    }
}

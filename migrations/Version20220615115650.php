<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615115650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE reduction reduction NUMERIC(5, 2) DEFAULT NULL, CHANGE numero_siret numero_siret VARCHAR(255) DEFAULT NULL, CHANGE nom_entreprise nom_entreprise VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE commande CHANGE total total NUMERIC(19, 4) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE reduction reduction NUMERIC(5, 2) DEFAULT \'NULL\', CHANGE numero_siret numero_siret VARCHAR(255) DEFAULT \'NULL\', CHANGE nom_entreprise nom_entreprise VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE commande CHANGE total total NUMERIC(19, 4) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}

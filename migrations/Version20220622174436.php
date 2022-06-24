<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220622174436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE b_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE b (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE a ADD b_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE a ADD CONSTRAINT FK_E8B7BE43296BFCB6 FOREIGN KEY (b_id) REFERENCES b (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E8B7BE43296BFCB6 ON a (b_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE a DROP CONSTRAINT FK_E8B7BE43296BFCB6');
        $this->addSql('DROP SEQUENCE b_id_seq CASCADE');
        $this->addSql('DROP TABLE b');
        $this->addSql('DROP INDEX UNIQ_E8B7BE43296BFCB6');
        $this->addSql('ALTER TABLE a DROP b_id');
    }
}

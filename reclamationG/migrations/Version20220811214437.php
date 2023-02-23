<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811214437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_idu');
        $this->addSql('ALTER TABLE reclamation CHANGE idu idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499B902AD FOREIGN KEY (idu) REFERENCES user (idu)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499B902AD');
        $this->addSql('ALTER TABLE reclamation CHANGE idu idu INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_idu FOREIGN KEY (idu) REFERENCES user (idu) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}

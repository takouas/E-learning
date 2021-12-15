<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211010184125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, id_cours INT NOT NULL, question VARCHAR(255) NOT NULL, INDEX IDX_B6F7494E134FCDAC (id_cours), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reponse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E399863F80');
        $this->addSql('DROP INDEX fk_717e22e399863f80 ON etudiant');
        $this->addSql('CREATE INDEX IDX_717E22E35200282E ON etudiant (formation_id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E399863F80 FOREIGN KEY (formation_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E35200282E');
        $this->addSql('DROP INDEX idx_717e22e35200282e ON etudiant');
        $this->addSql('CREATE INDEX FK_717E22E399863F80 ON etudiant (formation_id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E35200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200305171216 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appelAPublication ADD categorie_id INT DEFAULT NULL, CHANGE idAppelAPublication idAppelAPublication INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE appelAPublication ADD CONSTRAINT FK_91402479BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_91402479BCF5E72D ON appelAPublication (categorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appelAPublication DROP FOREIGN KEY FK_91402479BCF5E72D');
        $this->addSql('DROP INDEX IDX_91402479BCF5E72D ON appelAPublication');
        $this->addSql('ALTER TABLE appelAPublication DROP categorie_id, CHANGE idAppelAPublication idAppelAPublication INT NOT NULL');
    }
}

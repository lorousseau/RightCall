<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306144011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appelAPublication_categorie (appelapublications_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_B182B5B1366452 (appelapublications_id), INDEX IDX_B182B5B1BCF5E72D (categorie_id), PRIMARY KEY(appelapublications_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appelAPublication_categorie ADD CONSTRAINT FK_B182B5B1366452 FOREIGN KEY (appelapublications_id) REFERENCES appelAPublication (idappelapublication)');
        $this->addSql('ALTER TABLE appelAPublication_categorie ADD CONSTRAINT FK_B182B5B1BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('DROP TABLE Appelapublication_categories');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Appelapublication_categories (appelapublication_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_1B1CF35FBCF5E72D (categorie_id), INDEX IDX_1B1CF35FFFF4700E (appelapublication_id), PRIMARY KEY(appelapublication_id, categorie_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE Appelapublication_categories ADD CONSTRAINT FK_1B1CF35FBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE Appelapublication_categories ADD CONSTRAINT FK_1B1CF35FFFF4700E FOREIGN KEY (appelapublication_id) REFERENCES appelAPublication (idAppelAPublication)');
        $this->addSql('DROP TABLE appelAPublication_categorie');
    }
}

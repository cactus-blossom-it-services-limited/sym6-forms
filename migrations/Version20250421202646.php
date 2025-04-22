<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250421202646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Imagine a New Cross Student!';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_cross_student ADD total_brain_cells VARCHAR(40) NOT NULL');
        $this->addSql('ALTER TABLE new_cross_student ADD average_mark VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE new_cross_student DROP total_brain_cells');
        $this->addSql('ALTER TABLE new_cross_student DROP average_mark');
    }
}

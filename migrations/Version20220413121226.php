<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413121226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'La table des Suites_Room';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, hotel_name_id INT DEFAULT NULL, room_name VARCHAR(255) DEFAULT NULL, created_at DATE DEFAULT NULL, update_at DATE DEFAULT NULL, status TINYINT(1) DEFAULT NULL, price NUMERIC(2, 0) DEFAULT NULL, room_price NUMERIC(6, 2) DEFAULT NULL, INDEX IDX_729F519BA25D82FF (hotel_name_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BA25D82FF FOREIGN KEY (hotel_name_id) REFERENCES hotel (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE room');
    }
}

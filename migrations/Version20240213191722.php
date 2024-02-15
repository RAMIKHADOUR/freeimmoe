<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240213191722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorys (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medias (id INT AUTO_INCREMENT NOT NULL, propertys_id INT DEFAULT NULL, photo1 VARBINARY(255) DEFAULT NULL, photo2 VARBINARY(255) DEFAULT NULL, photo3 VARBINARY(255) DEFAULT NULL, photo4 VARBINARY(255) DEFAULT NULL, photo5 VARBINARY(255) DEFAULT NULL, video1 VARBINARY(255) DEFAULT NULL, video2 VARBINARY(255) DEFAULT NULL, video3 VARBINARY(255) DEFAULT NULL, video4 VARBINARY(255) DEFAULT NULL, video5 VARBINARY(255) DEFAULT NULL, virtuel1 VARBINARY(255) DEFAULT NULL, virtuel2 VARBINARY(255) DEFAULT NULL, property VARBINARY(255) DEFAULT NULL, INDEX IDX_12D2AF814E998165 (propertys_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE propertys (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, categorys_id INT DEFAULT NULL, typeprops_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, prix DOUBLE PRECISION NOT NULL, chambres INT NOT NULL, salle_bains INT NOT NULL, etages INT NOT NULL, numero_etage INT NOT NULL, adresse VARCHAR(100) NOT NULL, ville VARCHAR(50) NOT NULL, code_postale INT NOT NULL, region VARCHAR(100) NOT NULL, internet TINYINT(1) DEFAULT NULL, balcon TINYINT(1) DEFAULT NULL, garage TINYINT(1) DEFAULT NULL, gym TINYINT(1) DEFAULT NULL, piscine TINYINT(1) DEFAULT NULL, camera TINYINT(1) DEFAULT NULL, image VARBINARY(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7AEEC2C4A76ED395 (user_id), INDEX IDX_7AEEC2C4A96778EC (categorys_id), INDEX IDX_7AEEC2C4E164F63 (typeprops_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_property (id INT AUTO_INCREMENT NOT NULL, type_property VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel_portable VARCHAR(50) NOT NULL, tele_fixe VARCHAR(50) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medias ADD CONSTRAINT FK_12D2AF814E998165 FOREIGN KEY (propertys_id) REFERENCES propertys (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C4A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C4A96778EC FOREIGN KEY (categorys_id) REFERENCES categorys (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C4E164F63 FOREIGN KEY (typeprops_id) REFERENCES type_property (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medias DROP FOREIGN KEY FK_12D2AF814E998165');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C4A76ED395');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C4A96778EC');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C4E164F63');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE categorys');
        $this->addSql('DROP TABLE medias');
        $this->addSql('DROP TABLE propertys');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE type_property');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

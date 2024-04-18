<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240415131541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE poisson_ablede_heckel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nomscien VARCHAR(255) NOT NULL, descipteur VARCHAR(255) NOT NULL, anneedesc VARCHAR(255) NOT NULL, statutiucn VARCHAR(255) NOT NULL, famille VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, introduction VARCHAR(700) NOT NULL, legenre VARCHAR(700) NOT NULL, type VARCHAR(255) NOT NULL, taillemoy VARCHAR(255) NOT NULL, taillemax VARCHAR(255) NOT NULL, mimetisme VARCHAR(255) NOT NULL, longevite VARCHAR(255) NOT NULL, motif VARCHAR(255) NOT NULL, forme VARCHAR(255) NOT NULL, commentreconnaitre VARCHAR(255) NOT NULL, difference_met_f VARCHAR(700) NOT NULL, regime VARCHAR(255) NOT NULL, sociabilite VARCHAR(255) NOT NULL, territorialite VARCHAR(255) NOT NULL, modedevie VARCHAR(255) NOT NULL, modeetcomportement VARCHAR(700) NOT NULL, modederepro VARCHAR(700) NOT NULL, especemigra VARCHAR(255) NOT NULL, polygamme VARCHAR(255) NOT NULL, especeinoffensive VARCHAR(700) NOT NULL, origine VARCHAR(500) NOT NULL, pays VARCHAR(500) NOT NULL, iles VARCHAR(500) NOT NULL, paysinvasif VARCHAR(500) NOT NULL, bassins VARCHAR(255) NOT NULL, rivieres VARCHAR(255) NOT NULL, lac VARCHAR(255) NOT NULL, presencegeo VARCHAR(700) NOT NULL, etatdesstock VARCHAR(700) NOT NULL, temperature VARCHAR(255) NOT NULL, profondeur VARCHAR(255) NOT NULL, phacidite VARCHAR(255) NOT NULL, ghdurete VARCHAR(255) NOT NULL, courant VARCHAR(255) NOT NULL, presentationbio VARCHAR(700) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE poisson_abledeheckel');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE poisson_abledeheckel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nomscien VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, descipteur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, anneedesc VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, statutiucn VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, famille VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, genre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, introduction VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, legenre VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taillemoy VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taillemax VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, mimetisme VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, longevite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, motif VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, forme VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, commentreconnaitre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, difference_met_f VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, regime VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, sociabilite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, territorialite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modedevie VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modeetcomportement VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modederepro VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, especemigra VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, polygamme VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, especeinoffensive VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, origine VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, pays VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, iles VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, paysinvasif VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, bassins VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, rivieres VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, lac VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, presencegeo VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, etatdesstock VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, temperature VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, profondeur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, phacidite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ghdurete VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, courant VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, presentationbio VARCHAR(700) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE poisson_ablede_heckel');
    }
}

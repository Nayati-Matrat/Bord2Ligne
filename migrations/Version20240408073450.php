<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240408073450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE poisson_abledeheckel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE poisson_abledeheckel (id INT NOT NULL, nom VARCHAR(255) NOT NULL, nomscientifique VARCHAR(255) NOT NULL, descripteur VARCHAR(255) NOT NULL, anneedescription VARCHAR(255) NOT NULL, statut_iucn VARCHAR(255) NOT NULL, famille VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, introduction VARCHAR(255) NOT NULL, taillemoyenne VARCHAR(255) NOT NULL, taillemax VARCHAR(255) NOT NULL, longevite VARCHAR(255) NOT NULL, forme VARCHAR(255) NOT NULL, comment_reconnaitre_la VARCHAR(255) NOT NULL, regime VARCHAR(255) NOT NULL, sociabilite VARCHAR(255) NOT NULL, territorialite VARCHAR(255) NOT NULL, modedevie VARCHAR(255) NOT NULL, modedevieetcomportement VARCHAR(255) NOT NULL, modedereproduction VARCHAR(255) NOT NULL, especemigratrice VARCHAR(255) NOT NULL, especeinnofensive VARCHAR(255) NOT NULL, origine VARCHAR(500) NOT NULL, pays VARCHAR(500) NOT NULL, bassins VARCHAR(255) NOT NULL, rivieres VARCHAR(255) NOT NULL, presencegeographiqueetetatdespopulations VARCHAR(500) NOT NULL, temperature VARCHAR(255) NOT NULL, phacidite VARCHAR(255) NOT NULL, ghdurete VARCHAR(255) NOT NULL, courant VARCHAR(255) NOT NULL, presencedubiotope VARCHAR(500) NOT NULL, type VARCHAR(255) NOT NULL, legenre VARCHAR(700) NOT NULL, mimetisme VARCHAR(255) NOT NULL, motif VARCHAR(255) NOT NULL, polygamme VARCHAR(255) NOT NULL, iles VARCHAR(255) NOT NULL, paysinvasif VARCHAR(255) NOT NULL, lac VARCHAR(255) NOT NULL, profondeur VARCHAR(255) NOT NULL, etatdesstocksetpechesdurable VARCHAR(300) NOT NULL, differenceentremaleetfemelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE poisson_abledeheckel_id_seq CASCADE');
        $this->addSql('DROP TABLE poisson_abledeheckel');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

import mariadb
import sys

# Informations de connexion à la base de données
config = {
    'host': 'localhost',    # Adresse du serveur MariaDB
    'user': 'root',    # Nom d'utilisateur
    'password': 'Wamp65',    # Mot de passe
    'database': 'bord2ligne'    # Nom de la base de données
}

try:
    # Connexion à la base de données
    conn = mariadb.connect(**config)

    # Création d'un curseur pour exécuter des requêtes SQL
    cursor = conn.cursor()

    # Exécution de la requête SQL pour récupérer toutes les colonnes de la table "poisson_alosefeinte"
    cursor.execute("SELECT * FROM poisson_alosefeinte")

    # Récupération de tous les résultats
    rows = cursor.fetchall()

    # Affichage des résultats
    for row in rows:
        print(row)

except mariadb.Error as e:
    print(f"Erreur de connexion à la base de données: {e}")
    sys.exit(1)

finally:
    # Fermeture du curseur et de la connexion
    if 'cursor' in locals():
        cursor.close()
    if 'conn' in locals():
        conn.close()

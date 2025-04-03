<?php 

// Définition de la classe DatabaseConnection
class DatabaseConnection {
    
    // Propriété privée pour stocker l'instance de la connexion à la base de données
    private ?\PDO $database = null;
    
    // Méthode pour récupérer la connexion à la base de données (Singleton)
    public function getConnection(): PDO
    {
        // Si la connexion n'est pas encore établie, on la crée
        if ($this->database == null) {
            
            // Définition des paramètres de connexion à la base de données
            $host = 'localhost';            // Hôte de la base de données (serveur local)
            $dbname = 'BatiExperts';          // Nom de la base de données
            $username = 'root';             // Utilisateur de la base de données / L'utilisateur root peut effectuer toutes les actions sans avoir à définir des permissions spécifiques.
            $password = '';                 // Mot de passe de l'utilisateur
            $charset = 'utf8mb4';           // Encodage des caractères (UTF-8)

            // Construction de la chaîne DSN (Data Source Name) pour la connexion PDO
            $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
            
            // Options pour la connexion PDO
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs avec des exceptions
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Récupération des résultats sous forme de tableau associatif
            ];
            
            // Bloc try-catch pour tenter de se connecter à la base de données
            try {
                // On instancie la connexion PDO et on la stocke dans la propriété $database
                $this->database = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                // En cas d'erreur de connexion, on affiche un message d'erreur et on arrête l'exécution
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }
        
        // Si la connexion existe déjà, on la retourne
        return $this->database;
    }

}


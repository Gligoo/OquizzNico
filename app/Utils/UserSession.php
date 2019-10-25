<?php
namespace App\Utils;
use App\User;
class UserSession
{
    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';
    /**
     * Méthode permettant de connecter un utilisateur
     *
     * @param User $user
     */
    public static function connect(User $user)
    {
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
    }
    /**
     * Méthode permettant de déconnecter un utilisateur
     *
     * @throws \LogicException if the user is not connected
     */
    public static function disconnect()
    {
        if (! self::isConnected()) {
            throw new LogicException('Not connected users can\'t logout');
        }
        unset($_SESSION[self::SESSION_INDEX_NAME]);
    }
    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     *
     * @return bool
     */
    public static function isConnected() : bool
    {
        return ! empty($_SESSION[self::SESSION_INDEX_NAME]);
    }
    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     *
     * @return User
     */
    public static function getUser() : ?User
    {
        $user = null;
        if (self::isConnected()) {
            $user = $_SESSION[self::SESSION_INDEX_NAME];
        }
        return $user;
    }
}

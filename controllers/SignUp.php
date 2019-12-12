<?php
class SignUp extends Controller
{



    public static function addUserDB(User $user)
    {

        $sql = "INSERT INTO user (firstname, lastname, username, email, password, user_type) VALUES(:firstname, :lastname, :username, :email, :password, :user_type)";
        $conn = Database::newDB();

        $statement = $conn->prepare($sql);
        $statement->bindValue(':firstname', $user::getFirstname());
        $statement->bindValue(':lastname', $user::getLastname());
        $statement->bindValue(':username', $user::getUsername());
        $statement->bindValue(':email', $user::getEmail());
        $statement->bindValue(':password', $user::getPassword());
        $statement->bindValue(':user_type', $user::getUserType());
        $statement->execute();
        $statement->closeCursor();
    }

    private static function checkPassword($firstPass, $secondPass)
    {
        if ($firstPass === $secondPass) {
            return true;
        } else {
            return false;
        }
    }
}

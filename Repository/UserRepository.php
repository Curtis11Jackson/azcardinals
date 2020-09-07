<?php

class UserRepository
{
  private $_db;

  public function __construct($db)
  {
    $this ->setDb($db);
  }

  //SETTER
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  public function add(User $user)
  {
    //Reques to add User to Database
    $request = $this->_db->prepare("INSERT INTO users(name_user, email_user, password_user, team_user) 
    VALUES (:name, :email, :password, :team)");
    //Execute with tableau 
    $request->execute(array(
      'name' => $user->name_user(),
      'email' => $user->email_user(),
      'password' => $user->password_user(),
      'team' => $user->team_user(),
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $user->hydrate(array(
      'id_user' => $this->_db->lastInsertId()
    ));
  }

  public function get($id)
{
    if (is_int($id)) {
        //SELECT
        $req = $this->_db->query("SELECT * FROM user
    WHERE id_user = $id");
        // Get with a tableau
        $donnees = $req->fetch();
        // Obj return from DB
        return new User($donnees);
    }
}
}
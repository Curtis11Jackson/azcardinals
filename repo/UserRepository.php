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
        $req = $this->_db->query("SELECT * FROM users
    WHERE id_user = $id");
        // Get with a tableau
        $donnees = $req->fetch();
        // Obj return from DB
        return new User($donnees);
    }
}

public function delete($id)
{
    // execute une requete DELETE pour supprimer un user avec son id
    $this->_db->exec("DELETE FROM users WHERE id_user=" .$id);

}

public function update(User $user)
{
    //prepare une requete UPDATE de animal par rapport à son ID
    $q = $this->_db->prepare("UPDATE users SET name_user = :name,
    email_user = :email, password_user = :password, team_user = :team 
    WHERE id_user =".$user->id_user());
    //execute la requette avec un tableau d'association
    $q->execute(array(
        'name' => $user->name_user(),
        'email' => $user->email_user(),
        'password' => $user->password_user(),
        'team' => $user->team_user(),
        ));
}

public function getNameById($id)
{
    $tabloDonnees = [];

    $req = $this->_db->query("SELECT * FROM users WHERE id_user =".$id);
    //  array of results 
    while ($donnees = $req->fetch()) {
      array_push($tabloDonnees, $donnees);
    }
    // return
    return $tabloDonnees;
}
}
<?php

class User
{
    //Attributs
    private $_id_user;
    private $_name_user;
    private $_email_user;
    private $_password_user;
    private $_team_user;

    //CONSTRUCTEUR
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    //Fonction hydratation (pour donner des valeurs aux attributs)
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
        
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTER
    public function id_user()
    {
        return $this->_id_user;
    }
 
    public function name_user()
    {
        return $this->_name_user;
    }

    public function email_user()
    {
        return $this->_email_user;
    }

    public function password_user()
    {
        return $this->_password_user;
    }

    public function team_user()
    {
        return $this->_team_user;
    }

    //SETTER
    public function setId_user($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_user = $id;
        }
    }

    public function setName_user($name)
    {
        if (is_string($name)) {
            $this->_name_user = $name;
        }
    }

    public function setEmail_user($email)
    {
        if (is_string($email)) {
            $this->_email_user = $email;
        }
    }

    public function setPassword_user($password)
    {
        if (is_string($password)) {
            $this->_password_user = $password;
        }
    }

    public function setTeam_user($team)
    {
        if (is_string($team)) {
            $this->_team_user = $team;
        }
    }

}

?>

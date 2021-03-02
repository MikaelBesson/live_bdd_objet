<?php


class user
{
    private $username;
    private $password;


    /**
     * user constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password){
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function __toString(): String {
        return $this->getUsername() . " : " . $this->getPassword() . "<br>";
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        if(strlen($password) > 0){
            $password = password_hash($password, PASSWORD_BCRYPT);
        }
        $this->password = $password;
    }


}
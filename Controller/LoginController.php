<?php


class LoginController
{
    private $name;
    private $password;
    private $nameErr;
    private $passwordErr;


    public function nameErr()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST["name"])) {
                $this->nameErr = "<div>A man needs a name</div>";
            } else {
                if (!is_string($_POST["name"])) {
                    $this->nameErr = "<div>I know...&quot;what is in a name&quot; but this? Hit me with a real name.</div>";
                } else {
                    $_SESSION["name"] = $this->name;
                }
            }
        }
    }
    public function passErr()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST["password"])) {
                $this->passwordErr = "<div>So you're really dumb enough to think you can enter without a password?</div>";
            } else {
                $_SESSION["password"] = $this->password;
            }
        }
    }
}
<?php
class User {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function register($email, $password): bool {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedPassword);
        return $stmt->execute();
    }

    public function login($email, $password): bool {
        $stmt = $this->mysqli->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();
            return password_verify($password, $hashedPassword);
        }
        return false;
    }

    public function getIdByEmail($email) {
        $stmt = $this->mysqli->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        return $id ?? null;
    }
}
?>

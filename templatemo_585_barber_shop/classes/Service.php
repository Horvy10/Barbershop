<?php
class Service {
    private $db;

    public function __construct(mysqli $db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM services");
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($name, $description, $price) {
        $stmt = $this->db->prepare("INSERT INTO services (name, description, price) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $name, $description, $price);
        return $stmt->execute();
    }

    public function update($id, $name, $description, $price) {
        $stmt = $this->db->prepare("UPDATE services SET name=?, description=?, price=? WHERE id=?");
        $stmt->bind_param("ssdi", $name, $description, $price, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM services WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>

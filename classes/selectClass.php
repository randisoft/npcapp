<?php 

class Select extends Database {

    public function readState() {
        $stmt = $this->connect()->prepare("SELECT * FROM states ORDER BY name ASC" );
        $stmt->execute();
        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        return($data);
    }

    public function readLga() {
        $stmt = $this->connect()->prepare("SELECT * FROM lga ORDER BY name ASC" );
        $stmt->execute();
        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        return($data);
    }

    public function readWard() {
        $stmt = $this->connect()->prepare("SELECT * FROM wards ORDER BY name ASC" );
        $stmt->execute();
        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        return($data);
    }

    public function readCitizens() {
        $stmt = $this->connect()->prepare("SELECT * FROM citizens ORDER BY fullname ASC" );
        $stmt->execute();
        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        
        return($data);
    }

    public function citizenRowCount() {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) FROM citizens" );
        $stmt->execute();
        
        $data = $stmt->fetchColumn();        
        
        return($data);
    }

    public function stateRowCount() {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) FROM states" );
        $stmt->execute();
        
        $data = $stmt->fetchColumn();        
        
        return($data);
    }

    public function lgaRowCount() {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) FROM lga" );
        $stmt->execute();
        
        $data = $stmt->fetchColumn();        
        
        return($data);
    }

    public function wardRowCount() {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) FROM wards" );
        $stmt->execute();
        
        $data = $stmt->fetchColumn();        
        
        return($data);
    }
}
<?php
/**
 * ContentSection Model
 * Handles database operations for content sections
 */

class ContentSection {
    private $conn;
    private $table = 'content_sections';
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    /**
     * Get sections by page ID
     */
    public function getByPageId($pageId) {
        $query = "SELECT * FROM " . $this->table . " WHERE page_id = :page_id ORDER BY section_order ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':page_id', $pageId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    /**
     * Get section by ID
     */
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    /**
     * Create new section
     */
    public function create($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (page_id, section_type, heading, subheading, body, metadata, image_url, css_classes, animation_class, section_order) 
                  VALUES (:page_id, :section_type, :heading, :subheading, :body, :metadata, :image_url, :css_classes, :animation_class, :section_order)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':page_id', $data['page_id']);
        $stmt->bindParam(':section_type', $data['section_type']);
        $stmt->bindParam(':heading', $data['heading']);
        $stmt->bindParam(':subheading', $data['subheading']);
        $stmt->bindParam(':body', $data['body']);
        $stmt->bindParam(':metadata', $data['metadata']);
        $stmt->bindParam(':image_url', $data['image_url']);
        $stmt->bindParam(':css_classes', $data['css_classes']);
        $stmt->bindParam(':animation_class', $data['animation_class']);
        $stmt->bindParam(':section_order', $data['section_order']);
        
        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }
    
    /**
     * Update section
     */
    public function update($id, $data) {
        $query = "UPDATE " . $this->table . " 
                  SET section_type = :section_type, heading = :heading, subheading = :subheading, 
                      body = :body, metadata = :metadata, image_url = :image_url, 
                      css_classes = :css_classes, animation_class = :animation_class, 
                      section_order = :section_order 
                  WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':section_type', $data['section_type']);
        $stmt->bindParam(':heading', $data['heading']);
        $stmt->bindParam(':subheading', $data['subheading']);
        $stmt->bindParam(':body', $data['body']);
        $stmt->bindParam(':metadata', $data['metadata']);
        $stmt->bindParam(':image_url', $data['image_url']);
        $stmt->bindParam(':css_classes', $data['css_classes']);
        $stmt->bindParam(':animation_class', $data['animation_class']);
        $stmt->bindParam(':section_order', $data['section_order']);
        
        return $stmt->execute();
    }
    
    /**
     * Delete section
     */
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

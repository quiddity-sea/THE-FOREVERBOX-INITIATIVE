<?php
/**
 * Page Model
 * Handles database operations for pages
 */

class Page {
    private $conn;
    private $table = 'pages';
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    /**
     * Get page by slug
     */
    public function getBySlug($slug) {
        $query = "SELECT * FROM " . $this->table . " WHERE slug = :slug AND is_active = 1 LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    /**
     * Get all active pages ordered by display_order
     */
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " WHERE is_active = 1 ORDER BY display_order ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    /**
     * Get page sections
     */
    public function getSections($pageId) {
        $query = "SELECT * FROM content_sections WHERE page_id = :page_id AND is_active = 1 ORDER BY section_order ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':page_id', $pageId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    /**
     * Create a new page
     */
    public function create($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (slug, title, subtitle, color_primary, color_secondary, content, hero_image, display_order) 
                  VALUES (:slug, :title, :subtitle, :color_primary, :color_secondary, :content, :hero_image, :display_order)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':slug', $data['slug']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':subtitle', $data['subtitle']);
        $stmt->bindParam(':color_primary', $data['color_primary']);
        $stmt->bindParam(':color_secondary', $data['color_secondary']);
        $stmt->bindParam(':content', $data['content']);
        $stmt->bindParam(':hero_image', $data['hero_image']);
        $stmt->bindParam(':display_order', $data['display_order']);
        
        return $stmt->execute();
    }
    
    /**
     * Update page
     */
    public function update($id, $data) {
        $query = "UPDATE " . $this->table . " 
                  SET title = :title, subtitle = :subtitle, color_primary = :color_primary, 
                      color_secondary = :color_secondary, content = :content, hero_image = :hero_image,
                      display_order = :display_order 
                  WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':subtitle', $data['subtitle']);
        $stmt->bindParam(':color_primary', $data['color_primary']);
        $stmt->bindParam(':color_secondary', $data['color_secondary']);
        $stmt->bindParam(':content', $data['content']);
        $stmt->bindParam(':hero_image', $data['hero_image']);
        $stmt->bindParam(':display_order', $data['display_order']);
        
        return $stmt->execute();
    }
    
    /**
     * Delete page
     */
    public function delete($id) {
        $query = "UPDATE " . $this->table . " SET is_active = 0 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

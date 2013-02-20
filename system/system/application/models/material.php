<?
class Material extends Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function Material()
    {
        // Call the Model constructor
        parent::Model();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('material', 10);
        return $query->result();
    }

    
}
?>
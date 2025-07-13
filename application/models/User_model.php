<?php
class User_model extends CI_Model
{
    public function register($data)
    {
        return $this->db->insert('user', $data);
    }

    public function get_by_email($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }
    public function count_all()
    {
        return $this->db->count_all('user');
    }

    public function get_all_user() {
        return $this->db->get('user')->result();
    }

    public function get_user($id) {
        return $this->db->get_where('user', ['id' => $id])->row();
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function get_all_instructors() {
    return $this->db->get_where('user', ['role' => 'instructor'])->result();
}
    public function get_all (){
        return $this->db->get('user')->result(); 
    }

}


    

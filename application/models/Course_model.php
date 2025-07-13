<?php
class Course_model extends CI_Model {
    public function create($data) {
        return $this->db->insert('courses', $data);
    }
    public function get_all_with_instructors() {
        return $this->db->select('courses.*, users.name as instructor_name')
            ->join('users', 'courses.instructor_id = users.id')
            ->get('courses')->result();
    }
    public function get_by_instructor($instr_id) {
        return $this->db->where('instructor_id', $instr_id)->get('courses')->result();
    }
    public function get($id) {
        return $this->db->where('id', $id)->get('courses')->row();
    }
    public function update($id, $data) {
        return $this->db->where('id', $id)->update('courses', $data);
    }
    public function delete($id) {
        return $this->db->where('id', $id)->delete('courses');
    }
    public function count_all() {
        return $this->db->count_all('courses');
    }


    public function get_all_courses() {
        return $this->db->get('courses')->result();
    }

    public function get_course($id) {
        return $this->db->get_where('courses', ['id' => $id])->row();
    }

    public function insert_course($data) {
        return $this->db->insert('courses', $data);
    }

    public function update_course($id, $data) {
        return $this->db->update('courses', $data, ['id' => $id]);
    }

    public function delete_course($id) {
        return $this->db->delete('courses', ['id' => $id]);
    }

    public function get_all() {
        return $this->db->get('courses')->result();
    }
}



?>
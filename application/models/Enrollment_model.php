<?php
class Enrollment_model extends CI_Model {

// Ambil hanya user dengan role 'instruktur'
public function get_instructors() {
    return $this->db->get_where('user', ['role' => 'instruktur'])->result();
}

// Ambil hanya kursus yang memiliki instruktur (dan join ke user)
public function get_courses_with_instructors() {
    return $this->db->select('c.*')
                    ->from('courses c')
                    ->join('user u', 'u.id = c.instructor_id')
                    ->where('u.role', 'instruktur')
                    ->get()
                    ->result();
}



    public function get($id) {
        return $this->db->get_where('enrollments', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('enrollments', $data);
    }

    public function update($id, $data) {
        return $this->db->update('enrollments', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('enrollments', ['id' => $id]);
    }

    public function get_users() {
        return $this->db->get('user')->result();
    }

    public function get_courses() {
        return $this->db->get('courses')->result();
    }
 public function get_all() {
    return $this->db->select('e.*, u.name as instructor_name, c.title as course_title')
                    ->from('enrollments e')
                    ->join('user u', 'u.id = e.user_id')
                    ->join('courses c', 'c.id = e.course_id')
                    ->get()
                    ->result();
}

    public function count_all() {
        return $this->db->count_all('enrollments');
    }
}
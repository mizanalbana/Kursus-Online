<?php
class Materials_model extends CI_Model {

    public function get_all() {
        return $this->db->select('m.*, c.title as course_title')
                        ->from('materials m')
                        ->join('courses c', 'c.id = m.course_id')
                        ->get()
                        ->result();
    }

    public function get($id) {
        return $this->db->get_where('materials', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('materials', $data);
    }

    public function update($id, $data) {
        return $this->db->update('materials', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('materials', ['id' => $id]);
    }

    public function get_by_course($course_id) {
        return $this->db->get_where('materials', ['course_id' => $course_id])->result();
    }
    public function get_by_instructor($instructor_id) {
        return $this->db->select('m.*, c.title as course_title')
                        ->from('materials m')
                        ->join('courses c', 'c.id = m.course_id')
                        ->where('c.instructor_id', $instructor_id)
                        ->get()
                        ->result();
    }   
    public function get_by_student($student_id) {
        return $this->db->select('m.*, c.title as course_title')
                        ->from('materials m')
                        ->join('courses c', 'c.id = m.course_id')
                        ->join('enrollments e', 'e.course_id = c.id')
                        ->where('e.user_id', $student_id)
                        ->get()
                        ->result();
    }
}

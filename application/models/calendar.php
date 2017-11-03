<?php
class Calendar extends CI_Model{

	public function add_event($data)
	{
		$query="INSERT INTO calendar (title,start,eend,description,created_at,updated_at) VALUES (?,?,?,?,NOW(),NOW())";
		$values=[$data['title'],$data['start'],$data['eend'],$data['description']];
		$this->db->query($query,$values);
	}
	public function get_all()
	{
		$query="SELECT * FROM calendar";
		return $this->db->query($query)->result_array();
	}
	public function get_one($id)
	{
		$query="SELECT * FROM calendar
		WHERE calendar.id= ?";
		$values= [$id];
		return $this->db->query($query,$values)->row_array();
	}
	public function update($data)
	{
      $query="UPDATE  calendar
       SET title = ? , start = ? , eend= ? , description = ? , updated_at =NOW()
       WHERE id= ?";
       $values=[$data['title'],$data['start'],$data['eend'],$data['description'],$data['id']];
       return $this->db->query($query,$values);
	}
	public function is_user($post)
    {
        $query="SELECT * FROM users WHERE  user_name=? AND password=?";
        $result=$this->db->query($query,array($post['user_name'],$post['password']))->result_array();
            if (!empty($result))
        {
            return $result;

        }
        else
        {
            return false;
        }
    }
}

?>

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CRUD extends CI_Model
    {
        function insert($table, $data)
        {
            return $this->db->insert($table, $data); 
        }
        function get_article_publish()
		{
			$sql  	= "SELECT * FROM posts WHERE STATUS = 'Publish'";
			$db 	= $this->db->query($sql);
			return $db->result();
		}

	function get_article_draft()
		{
			$sql  	= "SELECT * FROM posts WHERE STATUS = 'Draft'";
			$db 	= $this->db->query($sql);
			return $db->result();
		}

	function get_article_trash()
		{
			$sql  	= "SELECT * FROM posts WHERE STATUS = 'Trash'";
			$db 	= $this->db->query($sql);
			return $db->result();
		}

	function get_article_preview()
		{
			$sql  	= "SELECT * FROM posts WHERE STATUS = 'Publish'";
			$db 	= $this->db->query($sql);
			return $db->result();
		}

	function get_edit_article($id)
		{
			$query 	= "SELECT * FROM posts WHERE Id ='$id'";
			$db 	= $this->db->query($query);
			return $db->result();
		}

        function update($table, $data, $where)
        {
            return $this->db->update($table, $data, $where);
        }

        function delete($table, $where)
        {
            return $this->db->delete($table, $where);
        }

        function truncate($table)
        {
            return $this->db->truncate($table);
        }

        function insert_batch($table, $data)
        {
            return $this->db->insert_batch($table, $data);
        }

        function loadPost()
    {
        return $this->db->get('post')->result();
    }
    }
<?php

class User extends CI_Model
{
    /**
     * function ambil satu user
     * @param  [type] $username [description]
     * @return [type]           [description]
     */
    public function ambilSatuUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user')->result();
    }

    /**
     * ambil data user
     * @return [type] [description]
     */
    public function ambilUser()
    {
        return $this->db->get('user')->result();
    }

    /**
     * hapus user
     * @param  [type] $username [description]
     * @return [type]           [description]
     */
    public function deleteUser($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }

    /**
     * function untuk login user
     * @param  [type] $username [description]
     * @return [type]           [description]
     */
    public function loginUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user')->result();
    }

    /**
     * simpan user
     * @param  [type] $user [description]
     * @return [type]       [description]
     */
    public function simpanUser($user)
    {
        $this->db->insert('user', $user);
    }

    /**
     * update user
     * @param  [type] $username [description]
     * @param  [type] $user     [description]
     * @return [type]           [description]
     */
    public function updateUser($username, $user)
    {
        $this->db->where('username', $username);
        $this->db->update('user', $user);
    }

    public function ambilCountUser()
    {
        return $this->db->count_all_results('user');
    }

}

<?php
class Buku_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        return $this->db->get()->result();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('buku', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('buku', ['id' => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where('buku', ['id'=>$id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->update('buku', $data, ['id'=>$id]);
    }
}
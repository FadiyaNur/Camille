<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelProduk extends CI_Model
{
    //manajemen daftar produk
    public function getDaftar_product()
    {
        return $this->db->get('daftar_product');
    }

    public function daftarproductWhere($where)
    {
        return $this->db->get_where('daftar_product', $where);
    }

    public function simpandaftar_product($data = null)
    {
        $this->db->insert('daftar_product', $data);
    }

    public function updateProduct($data = null, $where = null)
    {
        $this->db->update('daftar_product', $data, $where);
    }

    public function hapusProduct($where = null)
    {
        $this->db->delete('daftar_product', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('daftar_product');
        return $this->db->get()->row($field);
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function ubah_produk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_produk($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
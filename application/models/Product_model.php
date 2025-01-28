<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_products($kategori = false)
    {
        if ($kategori) {
            $this->db->where('category_id', 1);
        }
        return $this->db->get('products')->result();
    }

    public function best_deal_product()
    {
        $data = $this->db->where('is_available', 1)
            ->order_by('current_discount', 'DESC')
            ->limit(1)
            ->get('products')
            ->row();

        return $data;
    }

    public function is_product_exist($id, $sku)
    {
        return ($this->db->where(array('id' => $id, 'sku' => $sku))->get('products')->num_rows() > 0) ? TRUE : FALSE;
    }

    public function product_data($id)
    {
        $data = $this->db->query("
            SELECT p.*, pc.name as category_name
            FROM products p
            JOIN product_category pc
                ON pc.id = p.category_id
            WHERE p.id = '$id'
        ")->row();

        return $data;
    }

    public function related_products($current, $category)
    {
        return $this->db->where(array('id !=' => $current, 'category_id' => $category))->limit(4)->get('products')->result();
    }

    public function create_order(array $data)
    {
        $this->db->insert('orders', $data);

        return $this->db->insert_id();
    }

    public function create_order_items($data)
    {
        return $this->db->insert_batch('order_items', $data);
    }

    public function get_total_products($type)
    {
        if ($type == 'product') {
            $this->db->where('category_id', 1);
        } else {
            $this->db->where('category_id', 2);
        }
        return $this->db->get('products')->num_rows();
    }

    public function get_data_product($limit, $start, $type)
    {
        if ($type == 'product') {
            $this->db->where('category_id', 1);
        } else {
            $this->db->where('category_id', 2);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get('products'); // Ganti 'my_table' dengan nama tabel Anda
        return $query->result();
    }
}

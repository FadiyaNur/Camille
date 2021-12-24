<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Daftarproduct extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen product

    public function index()
    {
        $data['judul'] = "Daftar Product";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['daftar_product'] = $this->ModelProduk->getDaftar_Product()->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('daftarproduct/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'daftar_product'  => $this->input->post('daftar_product')
            ];

            $this->ModelProduk->simpandaftar_product($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah</div>');
            redirect('daftarproduct/index');
        }
    }

    public function tambah_produk()
    {
        $data['judul'] = 'Tambah Produk'; 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['daftar_product'] = $this->ModelProduk->getDaftar_Product()->result_array();
        
        $Nama_product   = $this->input->post('Nama_product');
        $Harga          = $this->input->post('Harga');
        $stok           = $this->input->post('stok');
        $tahun_produksi = $this->input->post('tahun_produksi');
        $image          = $_FILES['image']['name'];
        if ($image =''){}else{
            $config ['upload_path'] = 'assets/img/upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')){
                echo "Gambar Gagal diupload";
            }else{
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'Nama_product'      => $Nama_product,
            'Harga'             => $Harga,
            'stok'              => $stok,
            'tahun_produksi'    => $tahun_produksi,
            'image'             => $image
        );

        $this->ModelProduk->tambah_produk($data, 'daftar_product');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Produk Berhasil ditambah</div>');
        redirect('daftarproduct/index');
    }

     public function hapusProduct()
    {
        $where  = ['id' => $this->uri->segment(3)];
        $this->ModelProduk->hapusProduct($where);
        redirect('daftarproduct/index', 'refresh');
    }

    public function ubahProduct($id)
    {
        $where = array('id' => $id);
        $data['judul'] = 'Edit Data Produk'; 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['daftar_product'] = $this->ModelProduk->ubah_produk($where, 'daftar_product')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftarproduct/ubah_product', $data);
        $this->load->view('templates/footer', $data);
    }

    public function update_produk()
    {
        $id                 = $this->input->post('id');
        $Nama_product       = $this->input->post('Nama_product');
        $Harga              = $this->input->post('Harga');
        $stok               = $this->input->post('stok');
        $tahun_produksi     = $this->input->post('tahun_produksi');
        $image              = $_FILES['image']['name'];
        if ($image =''){}else{
            $config ['upload_path'] = 'assets/img/upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')){
                echo "Gambar Gagal diupload";
            }else{
                $image = $this->upload->data('file_name');
            }
        }
        
        $data = array(
            'Nama_product'      => $Nama_product,
            'Harga'             => $Harga,
            'stok'              => $stok,
            'tahun_produksi'    => $tahun_produksi,
            'image'             => $image
        );

        $where = array(
            'id' => $id
        );

        $this->ModelProduk->update_produk($where, $data, 'daftar_product');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Produk Berhasil diubah</div>');
        redirect('daftarproduct/index');
    }
}
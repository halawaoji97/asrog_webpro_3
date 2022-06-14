<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  // public function laporan_booking()
  // {
  //   $data['judul'] = 'Laporan Data Buku';
  //   $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
  //   $data['buku'] = $this->ModelBuku->getBuku()->result_array();
  //   $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
  //   $this->load->view('templates/header', $data);
  //   $this->load->view('templates/sidebar', $data);
  //   $this->load->view('templates/topbar', $data);
  //   $this->load->view('buku/laporan_buku', $data);
  //   $this->load->view('templates/footer');
  // }

  public function cetak_laporan_bukti_booking()
  {
    $data['judul'] = 'Laporan Bukti Booking';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('booking/laporan_print_bukti_booking', $data);
  }

  public function laporan_bukti_booking_pdf()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = "Cetak Bukti Booking";

    $root = $_SERVER['DOCUMENT_ROOT'];
    include $root = '/xampp/htdocs/asrog_webpro_2/application/third_party/dompdf/autoload.inc.php';
    $dompdf = new Dompdf\Dompdf();

    $this->load->view('booking/bukti-pdf', $data);

    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape

    $html = $this->output->get_output();
  }

  public function export_excel_bukti_booking()
  {
    $data = array('title' => 'Laporan Bukti Booking', 'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array());
    $this->load->view('booking/export_excel_bukti_booking', $data);
  }

  public function cetak_laporan_member()
  {
    $data['judul'] = 'Laporan Data Member';
    $data['user'] = $this->user_model->get_data_user()->result_array();
    $this->load->view('member/laporan_print_member', $data);
  }

  public function laporan_member_pdf()
  {
    $data['user'] = $this->user_model->get_data_user()->result_array();
    $data['judul'] = "Cetak Data Member";

    $root = $_SERVER['DOCUMENT_ROOT'];
    include $root = '/xampp/htdocs/asrog_webpro_2/application/third_party/dompdf/autoload.inc.php';
    $dompdf = new Dompdf\Dompdf();

    $this->load->view('member/member-pdf', $data);

    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape

    $html = $this->output->get_output();
  }

  public function export_excel_member()
  {
    $data = array('title' => 'Laporan Data Member', 'user' => $this->user_model->get_data_user()->result_array());
    $this->load->view('member/export_excel_member', $data);
  }

  //   public function laporan_pinjam()
  //   {
  //     $data['judul'] = 'Laporan Data Peminjaman';
  //     $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
  //     $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
  //     $this->load->view('templates/header', $data);
  //     $this->load->view('templates/sidebar');
  //     $this->load->view('templates/topbar', $data);
  //     $this->load->view('pinjam/laporan-pinjam', $data);
  //     $this->load->view('templates/footer');
  //   }

  //   public function cetak_laporan_pinjam()
  //   {
  //     $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
  //     $this->load->view('pinjam/laporan-print-pinjam', $data);
  //   }

  //   public function laporan_pinjam_pdf()
  //   { {
  //       $this->load->library('dompdf_gen');

  //       $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,
  //  buku b,user u where d.id_buku=b.id and p.id_user=u.id
  //  and p.no_pinjam=d.no_pinjam")->result_array();

  //       $this->load->view('pinjam/laporan-pdf-pinjam', $data);

  //       $paper_size = 'A4'; // ukuran kertas
  //       $orientation = 'landscape'; //tipe format kertas potrait atau landscape
  //       $html = $this->output->get_output();

  //       $this->dompdf->set_paper($paper_size, $orientation);
  //       //Convert to PDF
  //       $this->dompdf->load_html($html);
  //       $this->dompdf->render();
  //       $this->dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
  //       // nama file pdf yang di hasilkan
  //     }
  //   }

  //   public function export_excel_pinjam()
  //   {
  //     $data = array(
  //       'title' => 'Laporan Data Peminjaman Buku',
  //       'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array()
  //     );
  //     $this->load->view('pinjam/export-excel-pinjam', $data);
  //   }
}

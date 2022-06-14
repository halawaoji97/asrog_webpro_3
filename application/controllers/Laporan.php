<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function cetak_laporan_booking()
  {
    $data['judul'] = 'Laporan Data Booking';
    $data['transaksi'] = $this->db->get('transaksi')->result_array();
    $this->load->view('booking/laporan_print_booking', $data);
  }

  public function laporan_booking_pdf()
  {
    $data['transaksi'] = $this->db->get('transaksi')->result_array();
    $data['judul'] = "Cetak Data Booking Terbaru";

    $root = $_SERVER['DOCUMENT_ROOT'];
    include $root = '/xampp/htdocs/asrog_webpro_3/application/third_party/dompdf/autoload.inc.php';
    $dompdf = new Dompdf\Dompdf();

    $this->load->view('booking/laporan_booking_pdf', $data);

    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape

    $html = $this->output->get_output();
  }

  public function export_excel_booking()
  {
    $data = array('title' => 'Laporan Data Booking Terbaru', 'transaksi' => $this->db->get('transaksi')->result_array());
    $this->load->view('booking/export_excel_booking', $data);
  }

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
    include $root = '/xampp/htdocs/asrog_webpro_3/application/third_party/dompdf/autoload.inc.php';
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
    include $root = '/xampp/htdocs/asrog_webpro_3/application/third_party/dompdf/autoload.inc.php';
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

  public function cetak_laporan_kost()
  {
    $data['judul'] = 'Laporan Data Kost';
    $data['kost'] = $this->kost_model->get_data_kost()->result_array();
    $this->load->view('kost/laporan_print_kost', $data);
  }

  public function laporan_kost_pdf()
  {
    $data['kost'] = $this->kost_model->get_data_kost()->result_array();
    $data['judul'] = "Cetak Data Kost";

    $root = $_SERVER['DOCUMENT_ROOT'];
    include $root = '/xampp/htdocs/asrog_webpro_3/application/third_party/dompdf/autoload.inc.php';
    $dompdf = new Dompdf\Dompdf();

    $this->load->view('kost/laporan_kost_pdf', $data);

    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape

    $html = $this->output->get_output();
  }

  public function export_excel_kost()
  {
    $data = array('title' => 'Laporan Data Kost', 'kost' => $this->kost_model->get_data_kost()->result_array());
    $this->load->view('kost/export_excel_kost', $data);
  }
}

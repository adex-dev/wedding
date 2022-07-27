<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
  }
  public function index()
  {
    $cek = $this->db->select('username,nama')->where('username', $this->uri->segment(2))->get('tamu');
    if ($cek->num_rows() > 0) {
      $data['detail'] = $cek->row();
    } else {
      $data['detail'] = 'none';
    }
    $this->load->view('welcome_message', $data);
  }
  public function home()
  {
    if ($this->session->userdata('username')) {
    }else{
      redirect('');
    }
    $this->load->view('home');
  }
  public function tambahtamu()
  {
    $data['isidata'] = $this->db->order_by('id','DESC')->get('tamu')->result();
    $this->load->view('tambahtamu',$data);
  }
  public function getdata()
  {
    if ($this->input->post()) {
      $username = base64_decode($this->input->post('isi', true));
      $nama = $this->input->post('nama', true);
      $sesion = ['username' => $username, 'nama' => $nama];
      $this->session->set_userdata($sesion);
      $output = '.';
      echo json_encode($output);
    }
  }
  public function insertkehadiran()
  {
    if ($this->input->post()) {
      $username = $this->session->userdata('username');
      $status = $this->input->post('rsp', true);
      $this->db->insert('tb_hadir', ['username' => $username, 'status' => $status]);
      if ($status == 'ya') {
        $msg = ['ya' => '.'];
      } else if ($status == 'tidak') {
        $msg = ['tidak' => '.'];
      }
      echo json_encode($msg);
    }
  }
  public function isibukutamu()
  {
    if ($this->input->post()) {
      $username = $this->session->userdata('username');
      $nama = $this->input->post('nama', true);
      $catatan = $this->input->post('catatan', true);
      $tgl = date('Y-m-d G:i:s');
      $sukses = $this->db->insert('tb_book', ['username' => $username, 'nama' => $nama, 'catatan' => $catatan, 'add_on' => $tgl]);
      if ($sukses) {
        $msg = ['ya' => '.'];
      }
      echo json_encode($msg);
    }
  }
  public function tbtamu()
  {
    if ($this->input->post()) {
      $username = $this->input->post('username', true);
      $nama = $this->input->post('nampang', true);
      $tgl = date('Y-m-d');
      $cek = $this->db->select('id')->order_by('id','DESC')->get('tamu')->row()->id;
      $a = $cek + 1;
      $sukses = $this->db->insert('tamu', ['username' => $username.$a, 'nama' => $nama,'tdate' => $tgl]);
      if ($sukses) {
        $msg ='.';
      }
      echo json_encode($msg);
    }
  }
  public function getbukucatatan()
  { 
    $output = '';
    foreach ($this->db->order_by('add_on', 'DESC')->get('tb_book')->result() as $value) {
      $output .= '<div class="card mb-2">
      <div class="card-header  text-start" style="background: none;">
        <span class="text-start textundangan2">' . $value->nama . '</span>
      </div>
      <div class="card-body text-start">
        <p>' . $value->catatan . '</p>
      </div>
    </div>';
    }
    echo json_encode($output);
  }
  public function viewmodalweb (){ 
    if ($this->input->is_ajax_request() == true) {
      $msg = ['sukses' => $this->load->view('modal/viewmodal', '', true)];
    }
    echo json_encode($msg);
   }
}

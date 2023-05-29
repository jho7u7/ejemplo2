<?php
/**
 *
 */
class Productos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function nosotros(){
    $this->load->view('header');
    $this->load->view('productos/nosotros');
    $this->load->view('footer');
  }

  public function promociones(){
    $this->load->view('header');
    $this->load->view('productos/promociones');
    $this->load->view('footer');
  }

  public function descuentos(){
    $this->load->view('header');
    $this->load->view('productos/descuentos');
    $this->load->view('footer');
  }

  public function clientes(){
    $this->load->view('header');
    $this->load->view('productos/clientes');
    $this->load->view('footer');
  }

  public function contactos(){
    $this->load->view('header');
    $this->load->view('productos/contactos');
    $this->load->view('footer');
  }
}

 ?>

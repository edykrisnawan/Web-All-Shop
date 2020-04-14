<?php
defined('BASEPATH') OR exit ('No direct script acess allowed');
class User extends CI_Controller{
    function __construct()
    { 
        parent :: __construct();
        $this->load->model('M_latihan');
    }
    
    function index(){
        $data['title']="Beranda Web Pariwisata";
        $data['description']='edy wisnawa';
        $data['meta']="Ini HTML";
        $this->load->view('front_end/template',$data);
    }

    function login(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['login']='front_end/login';
      $this->load->view('front_end/login');
   }

    function beranda(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['beranda']='front_end/beranda';
        $this->load->view('front_end/beranda');
     }

    function infowisata(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['infowisata']='front_end/infowisata';
        $data['gambar']=$this->M_latihan->get_gambar();
        $this->load->view('front_end/infowisata');
     }

     function wisatapaket(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['wisatapaket']='front_end/wisatapaket';
        $data['gambar']=$this->M_latihan->get_gambarpaket();
        $this->load->view('front_end/wisatapaket');
     }

     function organisasi(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['organisasi']='front_end/organisasi';
        $this->load->view('front_end/organisasi');
     }

     function contact(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['contact']='front_end/contact';
        $this->load->view('front_end/contact');
     }

    function gwk(){
        $data['title']="Latihan HTML";
        $data['meta']="Ini HTML";
        $data['gwk']='front_end/page/gwk';
        $data['wstalam']=$this->M_latihan->get_infowstalam();
        $this->load->view('front_end/page/gwk',$data);
     }

     function bedugul(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['bedugul']='front_end/page/bedugul';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/bedugul',$data);
   }

   function lovina(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['lovina']='front_end/page/lovina';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/lovina',$data);
   }

   function sukawati(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['sukawati']='front_end/page/sukawati';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/sukawati',$data);
   }
   
   function ubud(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['ubud']='front_end/page/ubud';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/ubud',$data);
   }

   function uluwatu(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['uluwatu']='front_end/page/uluwatu';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/uluwatu',$data);
   }

   function tampaksiring(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['tampaksiring']='front_end/page/tampaksiring';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/tampaksiring',$data);
   }

   function tanjungbenoa(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['tanjungbenoa']='front_end/page/tanjungbenoa';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/tanjungbenoa',$data);
   }

   function telagawaja(){
      $data['title']="Latihan HTML";
      $data['meta']="Ini HTML";
      $data['telagawaja']='front_end/page/telagawaja';
      $data['wstalam']=$this->M_latihan->get_infowstalam();
      $this->load->view('front_end/page/telagawaja',$data);
   }

}
?>
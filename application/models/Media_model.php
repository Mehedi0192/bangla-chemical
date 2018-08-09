<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_MOdel {


  function save_news_events($news_events_image,$news_events_image_two,$news_events_image_three)
   {
     $news_events_data['news_events_image']=$news_events_image;
     $news_events_data['news_events_image_two']=$news_events_image_two;
     $news_events_data['news_events_image_three']=$news_events_image_three;
     $news_events_data['news_events_title']=$this->input->post('news_events_title', true);
     $news_events_data['news_events_type']=$this->input->post('news_events_type', true);
     $news_events_data['news_events_desc']=$this->input->post('news_events_desc', true);
     $news_events_data['news_events_date']=$this->input->post('news_events_date', true);
     $this->db->insert('tbl_news_events', $news_events_data);
   }


   function select_all_news_events()
   {
      $result=$this->db->select('*')->from('tbl_news_events')
                            ->get()
                            ->result();
                            return $result;
   }
   function count_news_events()
   {
     $result=$this->db->select('*')->from('tbl_news_events')
                           ->where('news_events_type', 'news')
                           ->get()
                           ->num_rows();
                           return $result;
   }

   function select_all_news($start,$limit)
   {
      $result=$this->db->select('*')->from('tbl_news_events')
                            ->limit($limit, $start)
                            ->where('news_events_type', 'news')
                            ->get()
                            ->result();
                            return $result;
   }

    function select_all_events()
   {
      $result=$this->db->select('*')->from('tbl_news_events')
                            ->where('news_events_type', 'events')
                            ->get()
                            ->result();
                            return $result;
   }

   function select_all_news_events_by_limit()
   {
    $result=$this->db->select('*')->from('tbl_news_events')
                          ->order_by('id', 'desc')
                          ->limit(3)
                          ->get()
                          ->result();
                          return $result;
   }

    function news_events_info_by_id($news_events_id)
    {
       $result= $this->db->select('*')->from('tbl_news_events')
                          ->where('id', $news_events_id)
                          ->get()
                          ->row();
                          return $result;

    }

    function update_news_events($news_events_image)
  {
    $data=array();
    
    $news_events_id=$this->input->post('id',true);

    $data['news_events_title']=$this->input->post('news_events_title',true);
    $data['news_events_desc']=$this->input->post('news_events_desc',true);
    $data['news_events_image']=$news_events_image;
    $data['news_events_date']=$this->input->post('news_events_date',true);

    $this->db->where('id', $news_events_id)
             ->update('tbl_news_events', $data);
  }

  function delete_news_events($delete_news_events_id)
    {
      $this->db->where('id', $delete_news_events_id)
                ->delete('tbl_news_events');
    }



}
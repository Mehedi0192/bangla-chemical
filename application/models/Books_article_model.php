<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_article_model extends CI_MOdel {


  function save_books($books_image)
   {
     $books_data['books_image']=$books_image;
     $books_data['books_title']=$this->input->post('books_title', true);
     $books_data['books_desc']=$this->input->post('books_desc', true);
     //echo "<pre>";
     //print_r($books_data);
     $this->db->insert('tbl_books', $books_data);
   }


   function select_all_books_info()
   {
      $result=$this->db->select('*')->from('tbl_books')
                            ->get()
                            ->result();
                            return $result;
   }

    function books_details_info_by_id($books_id)
   {
      $result=$this->db->select('*')->from('tbl_books')
                            ->where('books_id', $books_id)
                            ->get()
                            ->row();
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

  function delete_books($delete_books_id)
    {
      $this->db->where('books_id', $delete_books_id)
                ->delete('tbl_books');
    }


    function save_column_article()
    {
      $data['column_article_title']=$this->input->post('column_article_title', true);
      $data['column_article_desc']=$this->input->post('column_article_desc', true);
      $data['column_article_source']=$this->input->post('column_article_source', true);
      $data['column_article_media_link']=$this->input->post('column_article_media_link', true);
      $data['column_article_date']=$this->input->post('column_article_date', true);

      $this->db->insert('tbl_column_article', $data);
    }

     function select_all_column_article_info_count()
     {
        $result=$this->db->select('*')->from('tbl_column_article')
                            ->get()
                            ->num_rows();
                            return $result;
     }

     function select_all_column_article_info($start, $limit)
     {
        $result=$this->db->select('*')->from('tbl_column_article')
          ->limit($limit, $start)
                            ->get()
                            ->result();
                            return $result;
     }

     function column_article_info_by_id($column_article_id)
     {
       $result=$this->db->select('*')->from('tbl_column_article')
                            ->where('column_article_id', $column_article_id)
                            ->get()
                            ->row();
                            return $result;
     }


  function delete_column_article($delete_column_article_id)
    {
      $this->db->where('column_article_id', $delete_column_article_id)
                ->delete('tbl_column_article');
    }

    function save_works_affiliation()
  {
    $data['works_affiliation_title']=$this->input->post('works_affiliation_title', TRUE);
    $data['works_affiliation_url']=$this->input->post('works_affiliation_url', TRUE);
    $this->db->insert('tbl_works_affiliation', $data);
  }

  function select_all_works_affiliation_info()
  {
    $result=$this->db->select('*')->from('tbl_works_affiliation')
                          ->get()
                          ->result();
                          return $result;
  }

    function delete_works_affiliation($works_affiliation_id)
  {
    $this->db->where('works_affiliation_id', $works_affiliation_id)
             ->delete('tbl_works_affiliation');
  }




}
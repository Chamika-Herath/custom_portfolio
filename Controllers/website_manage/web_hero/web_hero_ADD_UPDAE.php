<?php
class Web_hero_ADD_UPDAE{

      private $id;
      private $ast = 1;
      private $sdt;
      private $hero_title;
      private $hero_description;
      private $hero_img_path;
      private $main_user_login_id;
      private $sql_update_query;

      
    public function __construct($get_main_user_login_id){
        $this->main_user_login_id = $get_main_user_login_id;
        $this->sdt = date("Y-m-d H:i:s");
    }

    public function get_data($get_hero_title, $get_hero_description, $get_hero_img_path){
        $this->hero_title       = $get_hero_title;
        $this->hero_description = $get_hero_description;
        $this->hero_img_path    = $get_hero_img_path;

        $this->sql_update_query =
        ", hero_title        ='" . $this->hero_title  . "'
         , hero_description  ='" . $this->hero_description . "'
         , hero_img_path     ='" . $this->hero_img_path."'";

    }

    public function set_hero_title($get_hero_title){
        $this->hero_title = $get_hero_title;
        $this->sql_update_query .= ", hero_title='" . $this->hero_title . "'";
    }

    public function set_hero_description($get_hero_description){
        $this->hero_description = $get_hero_description;
        $this->sql_update_query .= ", hero_description='" . $this->hero_description . "'";
    }

    public function set_hero_img_path($get_hero_img_path){
        $this->hero_img_path = $get_hero_img_path;
        $this->sql_update_query .= ", hero_img_path='" . $this->hero_img_path . "'";
    }

    public function get_id(){
        return $this->id;
    }

    public function set_id($get_id){
        $this->id = $get_id;
    }

    private $error_msg;
    public function get_error_msg(){
        return $this->error_msg;
    }

    public function process_new_record(){
        $data_base_obj = new DataBase();
        $get_sql_query = "INSERT INTO web_hero
                                (ast,sdt,hero_title,hero_description,hero_img_path,main_user_login_id)
                                 VALUES (
                                         '" . $this->ast . "',
                                         '" . $this->sdt . "',
                                         '" . $this->hero_title . "',
                                         '" . $this->hero_description . "',
                                         '" . $this->hero_img_path . "',
                                         '" . $this->main_user_login_id . "')";
        $data_base_obj->get_result($get_sql_query); 
        $this->error_msg = $data_base_obj->get_error();
        $this->id = $data_base_obj->get_id(); 
        
        return $data_base_obj->get_error_state_boolean();   
    }
    

     public function process_update(){
        $data_base_obj = new DataBase();
        $get_sql_query = "UPDATE web_hero SET ast='" . $this->ast . "', sdt='" . $this->sdt . "' " . $this->sql_update_query . " WHERE id='" . $this->id . "' AND main_user_login_id='" . $this->main_user_login_id . "'";
        $data_base_obj->get_result($get_sql_query);
        $this->error_msg = $data_base_obj->get_error();
        return $data_base_obj->get_error_state_boolean();
    }



    }
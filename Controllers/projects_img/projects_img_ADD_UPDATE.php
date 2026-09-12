<?php
class projects_img_ADD_UPDATE{
    private $id;
    private $ast = "1";
    private $sdt;
    
    private $img_url;
    private $dis;
    private $projects_id;
    
    private $main_user_login_id;
    private $sql_update_query;

    public function __construct($get_main_user_login_id){
        $this->main_user_login_id = $get_main_user_login_id;
        $this->sdt = date("Y-m-d H:i:s");
    }

    public function get_data($get_img_url, $get_dis, $get_projects_id){
        $this->img_url = $get_img_url;
        $this->dis = $get_dis;
        $this->projects_id = $get_projects_id;

        $this->sql_update_query = 
            ", img_url='" . $this->img_url . "',
            dis='" . $this->dis . "',
            projects_id='" . $this->projects_id . "'";
    }

    public function set_img_url($get_img_url){
        $this->img_url = $get_img_url;
        $this->sql_update_query .= ", img_url='" . $this->img_url . "'";
    }

    public function set_dis($get_dis){
        $this->dis = $get_dis;
        $this->sql_update_query .= ", dis='" . $this->dis . "'";
    }
    
    public function set_projects_id($get_projects_id){
        $this->projects_id = $get_projects_id;
        $this->sql_update_query .= ", projects_id='" . $this->projects_id . "'";
    }

    public function get_id(){ return $this->id; }
    public function set_id($get_id){ $this->id = $get_id; }
    
    public function get_ast(){ return $this->ast; }
    public function set_ast($get_ast){ 
        $this->ast = $get_ast; 
        $this->sql_update_query .= ", ast='" . $this->ast . "'";
    }

    private $error_msg;
    public function get_error_msg(){
        return $this->error_msg;
    }

    public function process_new_record(){
        $data_base_obj = new DataBase();
        $get_sql_query = "INSERT INTO projects_img 
                                (img_url, 
                                dis, 
                                projects_id, 
                                ast, 
                                sdt, 
                                main_user_login_id) 
                    VALUES (
                    '" . $this->img_url . "',
                     '" . $this->dis . "',
                      '" . $this->projects_id . "',
                       '" . $this->ast . "',
                        '" . $this->sdt . "',
                           '" . $this->main_user_login_id . "')";

        $data_base_obj->get_result($get_sql_query); 
        $this->error_msg = $data_base_obj->get_error();
        $this->id = $data_base_obj->get_id(); 
        
        return $data_base_obj->get_error_state_boolean();   
    }

    public function process_update(){
        $data_base_obj = new DataBase();
        // Since get_data only affects specific fields, ast and sdt are updated here
        $get_sql_query = "UPDATE projects_img SET ast='" . $this->ast . "', sdt='" . $this->sdt . "' " . $this->sql_update_query . " WHERE id='" . $this->id . "' AND main_user_login_id='" . $this->main_user_login_id . "'";
        $data_base_obj->get_result($get_sql_query);
        $this->error_msg = $data_base_obj->get_error();
        return $data_base_obj->get_error_state_boolean();
    }
}

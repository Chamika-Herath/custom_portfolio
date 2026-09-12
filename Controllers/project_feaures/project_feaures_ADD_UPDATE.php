<?php
class project_feaures_ADD_UPDATE{
    private $id;
    private $ast = "1";
    private $sdt;
    
    private $feature_name;
    private $feature_dis;
    private $feture_img;
    private $projects_id;
    
    private $main_user_login_id;
    private $sql_update_query;

    public function __construct($get_main_user_login_id){
        $this->main_user_login_id = $get_main_user_login_id;
        $this->sdt = date("Y-m-d H:i:s");
    }

    public function get_data($get_feature_name, $get_feature_dis, $get_feture_img, $get_projects_id){
        $this->feature_name = $get_feature_name;
        $this->feature_dis = $get_feature_dis;
        $this->feture_img = $get_feture_img;
        $this->projects_id = $get_projects_id;

        $this->sql_update_query = 
            ", feature_name='" . $this->feature_name . "',
            feature_dis='" . $this->feature_dis . "',
            feture_img='" . $this->feture_img . "',
            projects_id='" . $this->projects_id . "'";
    }

    public function set_feature_name($get_feature_name){
        $this->feature_name = $get_feature_name;
        $this->sql_update_query .= ", feature_name='" . $this->feature_name . "'";
    }

    public function set_feature_dis($get_feature_dis){
        $this->feature_dis = $get_feature_dis;
        $this->sql_update_query .= ", feature_dis='" . $this->feature_dis . "'";
    }
    
    public function set_feture_img($get_feture_img){
        $this->feture_img = $get_feture_img;
        $this->sql_update_query .= ", feture_img='" . $this->feture_img . "'";
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
        $get_sql_query = "INSERT INTO project_feaures 
                                (feature_name, 
                                feature_dis, 
                                feture_img, 
                                projects_id, 
                                ast, 
                                sdt, 
                                main_user_login_id) 
                    VALUES (
                    '" . $this->feature_name . "',
                     '" . $this->feature_dis . "',
                      '" . $this->feture_img . "',
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
        $get_sql_query = "UPDATE project_feaures SET ast='" . $this->ast . "', sdt='" . $this->sdt . "' " . $this->sql_update_query . " WHERE id='" . $this->id . "' AND main_user_login_id='" . $this->main_user_login_id . "'";
        $data_base_obj->get_result($get_sql_query);
        $this->error_msg = $data_base_obj->get_error();
        return $data_base_obj->get_error_state_boolean();
    }
}

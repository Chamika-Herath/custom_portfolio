<?php
class project_feaures_SINGLE_DATA{
    private $id;
    private $ast;
    private $sdt;
    
    private $feature_name;
    private $feature_dis;
    private $feture_img;
    private $projects_id;
    
    private $main_user_login_id;
    private $state_of_data = false;

    public function __construct($id)
    {
        $this->id = $id;

        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT * FROM project_feaures WHERE id='" . $this->id . "'";

        $data_base_obj->get_result($get_sql_query);

        if ($data_base_obj->get_row_count() > 0) {
            $this->state_of_data = true;
            while ($get_row = $data_base_obj->get_fetch_assoc()) {
                $this->id = $get_row["id"];
                $this->ast = $get_row["ast"];
                $this->sdt = $get_row["sdt"];
                
                $this->feature_name = $get_row["feature_name"];
                $this->feature_dis = $get_row["feature_dis"];
                $this->feture_img = $get_row["feture_img"];
                $this->projects_id = $get_row["projects_id"];
                
                $this->main_user_login_id = $get_row["main_user_login_id"];
            }
        }
    }

    public function get_id() { return $this->id; }
    public function get_ast() { return $this->ast; }
    public function get_sdt() { return $this->sdt; }
    
    public function get_feature_name() { return $this->feature_name; }
    public function get_feature_dis() { return $this->feature_dis; }
    public function get_feture_img() { return $this->feture_img; }
    public function get_projects_id() { return $this->projects_id; }
    
    public function get_main_user_login_id() { return $this->main_user_login_id; }

    public function get_state_of_data()
    {
        return $this->state_of_data;
    }
}

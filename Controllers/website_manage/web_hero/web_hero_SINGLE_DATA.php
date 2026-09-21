<?php
class web_hero_SINGLE_DATA{
      private $id;
      private $ast;
      private $sdt;
      private $hero_title;
      private $hero_description;
      private $hero_img_path;
      private $main_user_login_id;

      private $state_of_data = false;

    public function __construct($id)
    {
        $this->id = $id;

        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT * FROM web_hero WHERE id='" . $this->id . "'";

        $result = $data_base_obj->get_result($get_sql_query);

        if ($result && $result->num_rows > 0) {
            $this->state_of_data = true;
            while ($get_row = $result->fetch_assoc()) {
                $this->id                = $get_row["id"];
                $this->ast               = $get_row["ast"];
                $this->sdt               = $get_row["sdt"];
                $this->hero_title        = $get_row["hero_title"];
                $this->hero_description  = $get_row["hero_description"];
                $this->hero_img_path     = $get_row["hero_img_path"];
                 }
        }
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_ast()
    {
        return $this->ast;
    }

    public function get_sdt()
    {
        return $this->sdt;
    }

    public function get_hero_title ()
    {
        return $this->hero_title ;
    }

    public function get_hero_description()
    {
        return $this->hero_description;
    }

    public function get_hero_img_path ()
    {
        return $this->hero_img_path ;
    }




}  
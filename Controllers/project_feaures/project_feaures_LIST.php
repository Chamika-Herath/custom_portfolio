<?php
class project_feaures_LIST{
    private $sql_seach_data = "";
    private $sql_process_data = "*";
    private $pagination_data_result;
    private $ast = "1";
    private $projects_id_filter = "";

    public function get_all_data()
    {
        $this->sql_process_data = "*";
        return $this;
    }

    public function get_count_report()
    {
        $this->sql_process_data = " count(id) ";
        return $this;
    }

    public function set_data_limits($start_point, $per_page_data_count)
    {
        $this->pagination_data_result = " ORDER BY id DESC LIMIT " . $start_point . ", " . $per_page_data_count . " ";
        return $this;
    }

    public function remove_list()
    {
        $this->ast = "0";
        return $this;
    }

    public function filter_by_project($projects_id)
    {
        $this->projects_id_filter = " AND projects_id='" . $projects_id . "'";
        return $this;
    }

    public function search_contact($get_like_heading)
    {
        $this->sql_seach_data .= " AND (feature_name LIKE '%" . $get_like_heading . "%' OR feature_dis LIKE '%" . $get_like_heading . "%')";
        return $this;
    }

    public function get_result()
    {
        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT " . $this->sql_process_data . "
                          FROM project_feaures
                          WHERE ast='" . $this->ast . "'" . $this->projects_id_filter . $this->sql_seach_data . $this->pagination_data_result;

        return $data_base_obj->get_result($get_sql_query);
    }
}

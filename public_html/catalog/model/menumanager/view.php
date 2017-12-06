<?php
class ModelMenumanagerView extends Model {
    public function createMenu($menu_id){

        $menu_id = intval($menu_id);

        // Èíôîðìàöèÿ î ìåíþ
        $sql_menu = "SELECT * FROM ".DB_PREFIX."menu WHERE id='".$menu_id."' LIMIT 1";
        $query_menu = $this->db->query($sql_menu);


        if($query_menu and $query_menu->num_rows>0) {
            $row = $query_menu->row;
            // Âûáîðêà ïóíêòîâ ìåíþ
            $sql = "SELECT * FROM ".DB_PREFIX."menu_item WHERE menu_id='".$menu_id."' and parent_id=0 ORDER BY sort";
            $query = $this->db->query($sql);

            $menu = '';
            // $menu .= "<div class='".$row['class']."'>\n";
            // $menu .= "  <div class='".$row['class']."2'>\n";
            // $menu .= "      <div class='".$row['class']."3'>\n";
            $menu .= "          <nav id='menu-".$menu_id."'>\n";
            $menu .= "          <ul>\n";


            // 1 ÓÐÎÂÅÍÜ
            foreach ($query->rows as $result) {

                if($result['status']==0) continue;

                $query2 = $this->db->query("SELECT * FROM ".DB_PREFIX."menu_item WHERE parent_id='".$result['id']."' ORDER BY sort");



                if($result['source_type']=='out'){

                    $href = "http://".$result['href'];

                } else if($result['source_type']=='main'){

                    $href = HTTP_SERVER;

                } else if($result['source_type']=='category'){

                    $sql_seo = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result['source_type']."_id=".$result['href']."'");
                    $rs = $sql_seo->row;


                    if($rs){
                        $seo_url_first_level = $rs['keyword'];

                        $href = HTTP_SERVER.$seo_url_first_level;
                    } else {
                        $href = HTTP_SERVER."index.php?route=product/category&path=".$result['href'];
                    }

                } else if($result['source_type']=='product'){

                    $sql_seo = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result['source_type']."_id=".$result['href']."'");
                    $rs = $sql_seo->row;



                    if($rs){
                        $seo_url_first_level = $rs['keyword'];
                        $href = HTTP_SERVER.$seo_url_first_level;
                    } else {
                        $href = HTTP_SERVER."index.php?route=product/product&product_id=".$result['href'];
                    }

                } else if($result['source_type']=='information'){
                    $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result['href'];

                    $sql_seo = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result['source_type']."_id=".$result['href']."'");
                    $rs = $sql_seo->row;



                    if($rs){
                        $seo_url_first_level = $rs['keyword'];
                        $href = HTTP_SERVER.$seo_url_first_level;
                    } else {
                        $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result['href'];
                    }
                }


                $title = "";
                if($result['title']!=''){
                    $title.="title='".$result['title']."'";
                }

                $class = '';
                if($result['class']!=''){
                    $class.="class='".$result['class']."'";
                }

                $user_code = '';
                if($result['user_code']!=''){
                    $user_code.=$result['user_code'];
                }

                $target = '';
                if($result['target']!=''){
                    $target.="target='".$result['target']."'";
                }

                $menu .= "              <li ".$class.">\n";
                $menu .= "                  <a ".$user_code." ".$title." href='".$href."' ".$target.">".$result['link_text']."</a>\n";

                if($query2->num_rows>0){

                $menu .= "                  <div class='dop_menu'>\n";
                $menu .= "                      <div class='dop_menu2'>\n";
                $menu .= "                          <div class='dop_menu3'>\n";
                $menu .= "                              <ul>\n";


                // 2 ÓÐÎÂÅÍÜ
                foreach ($query2->rows as $result2) {

                    if($result2['status']==0) continue;

                    $title = "";
                    if($result2['title']!=''){
                        $title.="title='".$result2['title']."'";
                    }

                    $class = '';
                    if($result2['class']!=''){
                        $class.="class='".$result2['class']."'";
                    }

                    $user_code = '';
                    if($result2['user_code']!=''){
                        $user_code.=$result2['user_code'];
                    }

                    $target = '';
                    if($result2['target']!=''){
                        $target.="target='".$result2['target']."'";
                    }



                    if($result2['source_type']=='out'){

                        $href = "http://".$result2['href'];

                    } else if($result2['source_type']=='main'){

                        $href = HTTP_SERVER;

                    } else if($result2['source_type']=='category'){

                        $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result2['source_type']."_id=".$result2['href']."'");
                        $rs = $sql->row;


                        if($rs){
                            $seo_url_second_level = $rs['keyword'];
                            $href = HTTP_SERVER.$seo_url_second_level;

                        } else {
                            if($result['source_type']=='category'){
                                $href = HTTP_SERVER."index.php?route=product/category&path=".$result['href']."_".$result2['href'];
                            } else {
                                $href = HTTP_SERVER."index.php?route=product/category&path=".$result2['href'];
                            }

                        }

                    } else if($result2['source_type']=='product'){

                        $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result2['source_type']."_id=".$result2['href']."'");
                        $rs = $sql->row;


                        if($rs){
                            $seo_url_second_level = $rs['keyword'];
                            $href = HTTP_SERVER.$seo_url_second_level;

                        } else {
                            if($result['source_type']=='product'){
                                $href = HTTP_SERVER."index.php?route=product/product&product_id=".$result['href']."_".$result2['href'];
                            } else {
                                $href = HTTP_SERVER."index.php?route=product/product&product_id=".$result2['href'];
                            }

                        }

                    } else if($result2['source_type']=='information'){
                        $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result2['source_type']."_id=".$result2['href']."'");
                        $rs = $sql->row;


                        if($rs){
                            $seo_url_second_level = $rs['keyword'];
                            $href = HTTP_SERVER.$seo_url_second_level;

                        } else {
                            if($result['source_type']=='information'){
                                $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result['href']."_".$result2['href'];
                            } else {
                                $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result2['href'];
                            }

                        }
                    }

                    $menu .= "                                  <li ".$class.">\n";
                    $menu .= "                                      <a ".$user_code." ".$title." href='".$href."' ".$target.">".$result2['link_text']."</a>\n";

                    $query3 = $this->db->query("SELECT * FROM ".DB_PREFIX."menu_item WHERE parent_id='".$result2['id']."' ORDER BY sort");


                    if($query3->num_rows>0){
                        $menu .= "                                      <div class='dop_menu'>\n";
                        $menu .= "                                          <div class='dop_menu2'>\n";
                        $menu .= "                                              <div class='dop_menu3'>\n";
                        $menu .= "                                                  <ul>\n";


                        // 3 ÓÐÎÂÅÍÜ
                        foreach ($query3->rows as $result3) {

                            if($result3['status']==0) continue;

                            $title = "";
                            if($result3['title']!=''){
                                $title.="title='".$result3['title']."'";
                            }

                            $class = '';
                            if($result3['class']!=''){
                                $class.="class='".$result3['class']."'";
                            }

                            $user_code = '';
                            if($result3['user_code']!=''){
                                $user_code.=$result3['user_code'];
                            }

                            $target = '';
                            if($result3['target']!=''){
                                $target.="target='".$result3['target']."'";
                            }


                            if($result3['source_type']=='out'){

                                $href = "http://".$result3['href'];

                            } else if($result3['source_type']=='main'){

                                $href = HTTP_SERVER;

                            } else if($result3['source_type']=='category'){

                                $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result3['source_type']."_id=".$result3['href']."'");
                                $rs = $sql->row;


                                if($rs){
                                    $seo_url_third_level = $rs['keyword'];

                                    $href = HTTP_SERVER.$seo_url_third_level;


                                } else {
                                    if($result['source_type']=='category' and $result2['source_type']=='category'){
                                        $href = HTTP_SERVER."index.php?route=product/category&path=".$result['href']."_".$result2['href']."_".$result3['href'];
                                    } else {
                                        $href = HTTP_SERVER."index.php?route=product/category&path=".$result3['href'];
                                    }

                                }

                            } else if($result3['source_type']=='product'){

                                $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result3['source_type']."_id=".$result3['href']."'");
                                $rs = $sql->row;


                                if($rs){
                                    $seo_url_third_level = $rs['keyword'];
                                    $href = HTTP_SERVER.$seo_url_third_level;

                                } else {
                                    if($result['source_type']=='product' and $result2['source_type']=='product'){
                                        $href = HTTP_SERVER."index.php?route=product/product&product_id=".$result['href']."_".$result2['href']."_".$result3['href'];
                                    } else {
                                        $href = HTTP_SERVER."index.php?route=product/product&product_id=".$result3['href'];
                                    }

                                }

                            } else if($result3['source_type']=='information'){
                                $sql = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query='".$result3['source_type']."_id=".$result3['href']."'");
                                $rs = $sql->row;


                                if($rs){
                                    $seo_url_third_level = $rs['keyword'];
                                    $href = HTTP_SERVER.$seo_url_third_level;

                                } else {
                                    if($result['source_type']=='information' and $result2['source_type']=='information'){
                                        $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result['href']."_".$result2['href']."_".$result3['href'];
                                    } else {
                                        $href = HTTP_SERVER."index.php?route=information/information&information_id=".$result3['href'];
                                    }

                                }
                            }

                            $menu .= "                                                      <li ".$class.">\n";
                            $menu .= "                                                          <a ".$user_code." ".$title." href='".$href."' ".$target.">".$result3['link_text']."</a>\n";
                            $menu .= "                                                      </li>\n";

                        }
                        $menu .= "                                                  </ul>\n";
                        $menu .= "                                              </div>\n";
                        $menu .= "                                          </div>\n";
                        $menu .= "                                      </div>\n";
                        $menu .= "                                  </li>\n";

                    }  else {
                        $menu .= "                                  </li>\n";
                    }

                }
                $menu .= "                              </ul>\n";
                $menu .= "                          </div>\n";
                $menu .= "                      </div>\n";
                $menu .= "                  </div>\n";
                $menu .= "              </li>\n";

                } else {
                    $menu .= "              </li>\n";
                }


            }

            $menu .= "          </ul>\n";
            $menu .= "          </nav>\n";
            // $menu .= "      </div>\n";
            // $menu .= "  </div>\n";
            // $menu .= "</div>\n";


            return $menu;
        } else {
            return false;
        }


	}
}
?>
<?php

/* default/template/product/product.twig */
class __TwigTemplate_4374947bcba2302c61c45a2f9676c7cadf95515e09d35592a8c69afaf888eea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        <div itemscope=\"\" itemtype=\"http://schema.org/Product\">
          ";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "          ";
        } else {
            // line 22
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 23
            echo "          ";
        }
        // line 24
        echo "          <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 25
            echo "            <ul class=\"thumbnails\">
              ";
            // line 26
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 27
                echo "              <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" itemprop=\"logo\" /></a></li>
              ";
            }
            // line 29
            echo "              ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 30
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 31
                    echo "              <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "              ";
            }
            // line 34
            echo "            </ul>
            ";
        }
        // line 36
        echo "            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
              ";
        // line 38
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 39
            echo "              <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
              ";
        }
        // line 41
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 42
            echo "              <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
              ";
        }
        // line 44
        echo "            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-description\" itemprop=\"description\">";
        // line 46
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
              ";
        // line 47
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 48
            echo "              <div class=\"tab-pane\" id=\"tab-specification\">
                <table class=\"table table-bordered\">
                  ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 51
                echo "                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>";
                // line 53
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 58
                    echo "                  <tr>
                    <td>";
                    // line 59
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                    <td>";
                    // line 60
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </table>
              </div>
              ";
        }
        // line 68
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 69
            echo "              <div class=\"tab-pane\" id=\"tab-review\">
                <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 72
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                  ";
            // line 73
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 74
                echo "                  <div class=\"form-group required\">
                    <div class=\"col-sm-12\">
                      <label class=\"control-label\" for=\"input-name\">";
                // line 76
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                      <input type=\"text\" name=\"name\" value=\"";
                // line 77
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <div class=\"col-sm-12\">
                      <label class=\"control-label\" for=\"input-review\">";
                // line 82
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                      <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                      <div class=\"help-block\">";
                // line 84
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <div class=\"col-sm-12\">
                      <label class=\"control-label\">";
                // line 89
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                      &nbsp;&nbsp;&nbsp; ";
                // line 90
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"1\" />
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"2\" />
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"3\" />
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"4\" />
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"5\" />
                      &nbsp;";
                // line 100
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                  </div>
                  ";
                // line 102
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                  <div class=\"buttons clearfix\">
                    <div class=\"pull-right\">
                      <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 105
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                    </div>
                  </div>
                  ";
            } else {
                // line 109
                echo "                  ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                  ";
            }
            // line 111
            echo "                </form>
              </div>
              ";
        }
        // line 113
        echo "</div>
          </div>
          ";
        // line 115
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 116
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 117
            echo "          ";
        } else {
            // line 118
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 119
            echo "          ";
        }
        // line 120
        echo "          <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            <div class=\"btn-group\">
              <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 122
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 123
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
            <div itemprop=\"name\">
              <h1>";
        // line 126
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            </div>
            <ul class=\"list-unstyled\">
              ";
        // line 129
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 130
            echo "              <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" title=\"manufacturer\" itemprop=\"manufacturer\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
              ";
        }
        // line 132
        echo "              <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
              ";
        // line 133
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 134
            echo "              <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
              ";
        }
        // line 136
        echo "              <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
            </ul>
            ";
        // line 138
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 139
            echo "            <div itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
              <meta itemprop=\"availability\" content=\"";
            // line 140
            echo (isset($context["meta_stock"]) ? $context["meta_stock"] : null);
            echo "\">
              <ul class=\"list-unstyled\">
                ";
            // line 142
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 143
                echo "                <li>
                  <h2>";
                // line 144
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
                  <meta itemprop=\"price\" content=\"";
                // line 145
                echo (isset($context["metaprice"]) ? $context["metaprice"] : null);
                echo "\">
                </li>
                ";
            } else {
                // line 148
                echo "                <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
                <li>
                  <h2>";
                // line 150
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
                  <meta itemprop=\"price\" content=\"";
                // line 151
                echo (isset($context["metaspecial"]) ? $context["metaspecial"] : null);
                echo "\">
                </li>
                ";
            }
            // line 154
            echo "                ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 155
                echo "                <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
                ";
            }
            // line 157
            echo "                ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 158
                echo "                <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
                ";
            }
            // line 160
            echo "                ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 161
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 165
                    echo "                <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                ";
            }
            // line 168
            echo "              </ul>
              <meta itemprop=\"priceCurrency\" content=\"RUB\">
            </div>
            ";
        }
        // line 172
        echo "            <div id=\"product\"> ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 173
            echo "              <hr>
              <h3>";
            // line 174
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 176
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 177
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 178
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <select name=\"option[";
                    // line 179
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                  <option value=\"\">";
                    // line 180
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                  ";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "                  <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                  ";
                        // line 183
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 184
                            echo "                  (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                  ";
                        }
                        // line 185
                        echo " </option>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "                </select>
              </div>
              ";
                }
                // line 190
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 191
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 192
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <div id=\"input-option";
                    // line 193
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 194
                        echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"option[";
                        // line 196
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                      ";
                        // line 197
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 198
                        echo "                      ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 199
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 200
                            echo "                      (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                      ";
                        }
                        // line 201
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo " </div>
              </div>
              ";
                }
                // line 206
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 207
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 208
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <div id=\"input-option";
                    // line 209
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 210
                        echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"option[";
                        // line 212
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                      ";
                        // line 213
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 214
                        echo "                      ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 215
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 216
                            echo "                      (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                      ";
                        }
                        // line 217
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo " </div>
              </div>
              ";
                }
                // line 222
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 223
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <input type=\"text\" name=\"option[";
                    // line 225
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
              </div>
              ";
                }
                // line 228
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 229
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 230
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <textarea name=\"option[";
                    // line 231
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
              </div>
              ";
                }
                // line 234
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 235
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 236
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <button type=\"button\" id=\"button-upload";
                    // line 237
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                <input type=\"hidden\" name=\"option[";
                    // line 238
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
              </div>
              ";
                }
                // line 241
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 242
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 243
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"option[";
                    // line 245
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 251
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 252
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 253
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <div class=\"input-group datetime\">
                  <input type=\"text\" name=\"option[";
                    // line 255
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 261
                echo "              ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 262
                    echo "              <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 263
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                <div class=\"input-group time\">
                  <input type=\"text\" name=\"option[";
                    // line 265
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 271
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "              ";
        }
        // line 273
        echo "              ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 274
            echo "              <hr>
              <h3>";
            // line 275
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 278
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
                echo "                  <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
              ";
        }
        // line 286
        echo "              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 287
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                <input type=\"text\" name=\"quantity\" value=\"";
        // line 288
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 289
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
                <br />
                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 291
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
              </div>
              ";
        // line 293
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 294
            echo "              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
              ";
        }
        // line 295
        echo "</div>
            ";
        // line 296
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 297
            echo "            <div class=\"rating\">

                <div itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
                  <meta itemprop=\"ratingValue\" content=\"";
            // line 300
            echo (isset($context["rating"]) ? $context["rating"] : null);
            echo "\">
                  <meta itemprop=\"bestRating\" content=\"5\">
                  <meta itemprop=\"ratingCount\" content=\"";
            // line 302
            echo (isset($context["reviews_count"]) ? $context["reviews_count"] : null);
            echo "\">
                </div>
              <p>";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 305
                echo "                ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 306
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
              <hr>
              <!-- AddThis Button BEGIN -->
              <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 309
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
              <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
              <!-- AddThis Button END -->
            </div>
            ";
        }
        // line 313
        echo " </div>
        </div>
      </div>
      ";
        // line 316
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 317
            echo "      <h3>";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 318
            $context["i"] = 0;
            // line 319
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 320
                echo "        ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 321
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 322
                    echo "        ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 323
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 324
                    echo "        ";
                } else {
                    // line 325
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 326
                    echo "        ";
                }
                // line 327
                echo "        <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 329
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 331
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
              <p>";
                // line 332
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
              ";
                // line 333
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 334
                    echo "
                <div class=\"rating\"> ";
                    // line 335
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 336
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 337
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 338
                    echo "                </div>

              ";
                }
                // line 341
                echo "              ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 342
                    echo "              <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 343
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 344
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 345
                    echo "                ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 346
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 348
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 349
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 350
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 354
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 355
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 356
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 357
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 358
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 359
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 361
                echo "        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 362
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 364
        echo "        ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 365
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 367
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 368
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 369
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 371
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 372
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\t// if (json['success']) {
\t\t\t// \t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t// \t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t// \t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t// \t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t// }
      if (json['success']) {
        \$('#korzin .modal-body').html('<div class=\"row\"><div class=\"korzin_image col-sm-4\"><a href=\"'+json['link']+'\"><img src=\"' + json['image'] + '\" title=\"'+json['name']+'\" alt=\"'+json['name']+'\"/></a></div><div class=\"info col-sm-8\"><div class=\"alert alert-success\">Товар успешно добавлен в корзину</div><div class=\"totals\"><div>В корзине <b>'+json['totals']+'</b> товара(ов)</div><div>Итого <span class=\"price_korzin\">'+json['prices']+'</span></div></div></div>');
        \$('#korzin').modal('show');
        \$('#korzin .modal-title').html(json['name']);
        \$('#cart-total').html(json['total']);
        \$('#button-cart').addClass('buy').removeClass('loader');
      }
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 456
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 461
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 467
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 534
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 538
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 576
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1467 => 576,  1426 => 538,  1419 => 534,  1349 => 467,  1340 => 461,  1332 => 456,  1245 => 372,  1240 => 371,  1231 => 369,  1224 => 368,  1214 => 367,  1210 => 366,  1205 => 365,  1202 => 364,  1193 => 362,  1190 => 361,  1186 => 359,  1184 => 358,  1181 => 357,  1179 => 356,  1176 => 355,  1174 => 354,  1165 => 350,  1159 => 349,  1151 => 348,  1147 => 346,  1135 => 345,  1128 => 344,  1122 => 343,  1119 => 342,  1116 => 341,  1111 => 338,  1105 => 337,  1098 => 336,  1094 => 335,  1091 => 334,  1089 => 333,  1085 => 332,  1079 => 331,  1068 => 329,  1062 => 327,  1059 => 326,  1056 => 325,  1053 => 324,  1050 => 323,  1047 => 322,  1044 => 321,  1041 => 320,  1036 => 319,  1034 => 318,  1029 => 317,  1027 => 316,  1022 => 313,  1014 => 309,  1000 => 306,  993 => 305,  989 => 304,  984 => 302,  979 => 300,  974 => 297,  972 => 296,  969 => 295,  963 => 294,  961 => 293,  954 => 291,  949 => 289,  945 => 288,  941 => 287,  938 => 286,  932 => 282,  921 => 280,  917 => 279,  913 => 278,  907 => 275,  904 => 274,  901 => 273,  898 => 272,  892 => 271,  879 => 265,  872 => 263,  865 => 262,  862 => 261,  849 => 255,  842 => 253,  835 => 252,  832 => 251,  819 => 245,  812 => 243,  805 => 242,  802 => 241,  794 => 238,  786 => 237,  782 => 236,  775 => 235,  772 => 234,  760 => 231,  754 => 230,  747 => 229,  744 => 228,  732 => 225,  726 => 224,  719 => 223,  716 => 222,  711 => 219,  703 => 217,  696 => 216,  694 => 215,  689 => 214,  673 => 213,  667 => 212,  663 => 210,  657 => 209,  653 => 208,  646 => 207,  643 => 206,  638 => 203,  630 => 201,  623 => 200,  621 => 199,  616 => 198,  600 => 197,  594 => 196,  590 => 194,  584 => 193,  580 => 192,  573 => 191,  570 => 190,  565 => 187,  558 => 185,  551 => 184,  549 => 183,  542 => 182,  538 => 181,  534 => 180,  528 => 179,  522 => 178,  515 => 177,  512 => 176,  508 => 175,  504 => 174,  501 => 173,  498 => 172,  492 => 168,  489 => 167,  478 => 165,  474 => 164,  469 => 161,  466 => 160,  458 => 158,  455 => 157,  447 => 155,  444 => 154,  438 => 151,  434 => 150,  428 => 148,  422 => 145,  418 => 144,  415 => 143,  413 => 142,  408 => 140,  405 => 139,  403 => 138,  395 => 136,  387 => 134,  385 => 133,  378 => 132,  368 => 130,  366 => 129,  360 => 126,  352 => 123,  346 => 122,  340 => 120,  337 => 119,  334 => 118,  331 => 117,  328 => 116,  326 => 115,  322 => 113,  317 => 111,  311 => 109,  302 => 105,  296 => 102,  291 => 100,  278 => 90,  274 => 89,  266 => 84,  261 => 82,  253 => 77,  249 => 76,  245 => 74,  243 => 73,  239 => 72,  234 => 69,  231 => 68,  226 => 65,  219 => 63,  210 => 60,  206 => 59,  203 => 58,  199 => 57,  192 => 53,  188 => 51,  184 => 50,  180 => 48,  178 => 47,  174 => 46,  170 => 44,  164 => 42,  161 => 41,  155 => 39,  153 => 38,  149 => 37,  146 => 36,  142 => 34,  139 => 33,  122 => 31,  117 => 30,  114 => 29,  100 => 27,  98 => 26,  95 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         <div itemscope="" itemtype="http://schema.org/Product">*/
/*           {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*           {% else %}*/
/*           {% set class = 'col-sm-8' %}*/
/*           {% endif %}*/
/*           <div class="{{ class }}"> {% if thumb or images %}*/
/*             <ul class="thumbnails">*/
/*               {% if thumb %}*/
/*               <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="logo" /></a></li>*/
/*               {% endif %}*/
/*               {% if images %}*/
/*               {% for image in images %}*/
/*               <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*               {% endfor %}*/
/*               {% endif %}*/
/*             </ul>*/
/*             {% endif %}*/
/*             <ul class="nav nav-tabs">*/
/*               <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*               {% if attribute_groups %}*/
/*               <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*               <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*               {% endif %}*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*               <div class="tab-pane active" id="tab-description" itemprop="description">{{ description }}</div>*/
/*               {% if attribute_groups %}*/
/*               <div class="tab-pane" id="tab-specification">*/
/*                 <table class="table table-bordered">*/
/*                   {% for attribute_group in attribute_groups %}*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for attribute in attribute_group.attribute %}*/
/*                   <tr>*/
/*                     <td>{{ attribute.name }}</td>*/
/*                     <td>{{ attribute.text }}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   {% endfor %}*/
/*                 </table>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*               <div class="tab-pane" id="tab-review">*/
/*                 <form class="form-horizontal" id="form-review">*/
/*                   <div id="review"></div>*/
/*                   <h2>{{ text_write }}</h2>*/
/*                   {% if review_guest %}*/
/*                   <div class="form-group required">*/
/*                     <div class="col-sm-12">*/
/*                       <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                       <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <div class="col-sm-12">*/
/*                       <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                       <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                       <div class="help-block">{{ text_note }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <div class="col-sm-12">*/
/*                       <label class="control-label">{{ entry_rating }}</label>*/
/*                       &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                       <input type="radio" name="rating" value="1" />*/
/*                       &nbsp;*/
/*                       <input type="radio" name="rating" value="2" />*/
/*                       &nbsp;*/
/*                       <input type="radio" name="rating" value="3" />*/
/*                       &nbsp;*/
/*                       <input type="radio" name="rating" value="4" />*/
/*                       &nbsp;*/
/*                       <input type="radio" name="rating" value="5" />*/
/*                       &nbsp;{{ entry_good }}</div>*/
/*                   </div>*/
/*                   {{ captcha }}*/
/*                   <div class="buttons clearfix">*/
/*                     <div class="pull-right">*/
/*                       <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                     </div>*/
/*                   </div>*/
/*                   {% else %}*/
/*                   {{ text_login }}*/
/*                   {% endif %}*/
/*                 </form>*/
/*               </div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*           {% else %}*/
/*           {% set class = 'col-sm-4' %}*/
/*           {% endif %}*/
/*           <div class="{{ class }}">*/
/*             <div class="btn-group">*/
/*               <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*             </div>*/
/*             <div itemprop="name">*/
/*               <h1>{{ heading_title }}</h1>*/
/*             </div>*/
/*             <ul class="list-unstyled">*/
/*               {% if manufacturer %}*/
/*               <li>{{ text_manufacturer }} <a href="{{ manufacturers }}" title="manufacturer" itemprop="manufacturer">{{ manufacturer }}</a></li>*/
/*               {% endif %}*/
/*               <li>{{ text_model }} <span itemprop="model">{{ model }}</span></li>*/
/*               {% if reward %}*/
/*               <li>{{ text_reward }} {{ reward }}</li>*/
/*               {% endif %}*/
/*               <li>{{ text_stock }} {{ stock }}</li>*/
/*             </ul>*/
/*             {% if price %}*/
/*             <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*               <meta itemprop="availability" content="{{ meta_stock }}">*/
/*               <ul class="list-unstyled">*/
/*                 {% if not special %}*/
/*                 <li>*/
/*                   <h2>{{ price }}</h2>*/
/*                   <meta itemprop="price" content="{{ metaprice }}">*/
/*                 </li>*/
/*                 {% else %}*/
/*                 <li><span style="text-decoration: line-through;">{{ price }}</span></li>*/
/*                 <li>*/
/*                   <h2>{{ special }}</h2>*/
/*                   <meta itemprop="price" content="{{ metaspecial }}">*/
/*                 </li>*/
/*                 {% endif %}*/
/*                 {% if tax %}*/
/*                 <li>{{ text_tax }} {{ tax }}</li>*/
/*                 {% endif %}*/
/*                 {% if points %}*/
/*                 <li>{{ text_points }} {{ points }}</li>*/
/*                 {% endif %}*/
/*                 {% if discounts %}*/
/*                 <li>*/
/*                   <hr>*/
/*                 </li>*/
/*                 {% for discount in discounts %}*/
/*                 <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*               </ul>*/
/*               <meta itemprop="priceCurrency" content="RUB">*/
/*             </div>*/
/*             {% endif %}*/
/*             <div id="product"> {% if options %}*/
/*               <hr>*/
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %}*/
/*               {% if option.type == 'select' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for option_value in option.product_option_value %}*/
/*                   <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                   {% if option_value.price %}*/
/*                   ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                   {% endif %} </option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'radio' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label">{{ option.name }}</label>*/
/*                 <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                   <div class="radio">*/
/*                     <label>*/
/*                       <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                       {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                       ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'checkbox' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label">{{ option.name }}</label>*/
/*                 <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                       {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                       ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'text' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'textarea' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'file' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label">{{ option.name }}</label>*/
/*                 <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                 <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'date' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <div class="input-group date">*/
/*                   <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'datetime' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <div class="input-group datetime">*/
/*                   <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if option.type == 'time' %}*/
/*               <div class="form-group{% if option.required %} required {% endif %}">*/
/*                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                 <div class="input-group time">*/
/*                   <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               {% endif %}*/
/*               {% if recurrings %}*/
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %}*/
/*                   <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*               {% endif %}*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                 <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*                 <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                 <br />*/
/*                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*               </div>*/
/*               {% if minimum > 1 %}*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*               {% endif %}</div>*/
/*             {% if review_status %}*/
/*             <div class="rating">*/
/* */
/*                 <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">*/
/*                   <meta itemprop="ratingValue" content="{{ rating }}">*/
/*                   <meta itemprop="bestRating" content="5">*/
/*                   <meta itemprop="ratingCount" content="{{ reviews_count }}">*/
/*                 </div>*/
/*               <p>{% for i in 1..5 %}*/
/*                 {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                 {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*               <hr>*/
/*               <!-- AddThis Button BEGIN -->*/
/*               <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*               <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*               <!-- AddThis Button END -->*/
/*             </div>*/
/*             {% endif %} </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if products %}*/
/*       <h3>{{ text_related }}</h3>*/
/*       <div class="row"> {% set i = 0 %}*/
/*         {% for product in products %}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-xs-8 col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-xs-6 col-md-4' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-6 col-sm-3' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="product-thumb transition">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div class="caption">*/
/*               <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*               <p>{{ product.description }}</p>*/
/*               {% if product.rating %}*/
/* */
/*                 <div class="rating"> {% for j in 1..5 %}*/
/*                   {% if product.rating < j %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/* */
/*               {% endif %}*/
/*               {% if product.price %}*/
/*               <p class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                 {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*               {% endif %} </div>*/
/*             <div class="button-group">*/
/*               <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> <i class="fa fa-shopping-cart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*         <div class="clearfix visible-md visible-sm"></div>*/
/*         {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% elseif (i + 1) % 4 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% endif %}*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %} </div>*/
/*         {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* 			// if (json['success']) {*/
/* 			// 	$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 			// 	$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 			// 	$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			// 	$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			// }*/
/*       if (json['success']) {*/
/*         $('#korzin .modal-body').html('<div class="row"><div class="korzin_image col-sm-4"><a href="'+json['link']+'"><img src="' + json['image'] + '" title="'+json['name']+'" alt="'+json['name']+'"/></a></div><div class="info col-sm-8"><div class="alert alert-success">Товар успешно добавлен в корзину</div><div class="totals"><div>В корзине <b>'+json['totals']+'</b> товара(ов)</div><div>Итого <span class="price_korzin">'+json['prices']+'</span></div></div></div>');*/
/*         $('#korzin').modal('show');*/
/*         $('#korzin .modal-title').html(json['name']);*/
/*         $('#cart-total').html(json['total']);*/
/*         $('#button-cart').addClass('buy').removeClass('loader');*/
/*       }*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */

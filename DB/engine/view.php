<?php
/*****************************************************************************
 *         In the name of God the Most Beneficent the Most Merciful          *
 *___________________________________________________________________________*
 *   This program is free software: you can redistribute it and/or modify    *
 *   it under the terms of the GNU General Public License as published by    *
 *   the Free Software Foundation, either version 3 of the License, or       *
 *   (at your option) any later version.                                     *
 *___________________________________________________________________________*
 *   This program is distributed in the hope that it will be useful,         *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *   GNU General Public License for more details.                            *
 *___________________________________________________________________________*
 *   You should have received a copy of the GNU General Public License       *
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *___________________________________________________________________________*
 *                       Created by AliReza Ghadimi                          *
 *****************************************************************************/
namespace engine;

/**
 * Class view
 * @package engine
 */
class view{
    /**
     * @var bool|string
     * Should to set it in extends class
     * This file will display in normal return of filesDisplay() function
     */
    protected $own_tpl = false;

    /**
     * @var null|\Smarty
     * Smart Class variable
     * License: GNU LESSER GENERAL PUBLIC LICENSE
     *              Version 3, 29 June 2007
     *  Copyright (C) 2007 Free Software Foundation, Inc. <http://fsf.org/>
     *  Everyone is permitted to copy and distribute verbatim copies
     *  of this license document, but changing it is not allowed.
     */
    protected $smarty   = null;

    /**
     * @var database|null
     */
    protected $db       = null;

    /**
     * @var null|string
     */
    protected $input    = null;

    /**
     * @var int
     * send http status code
     */
    protected $status_code = 200;

    /**
     * @param string $input
     * Set up Smarty class variable
     */
    public function __construct($input){
        http_response_code($this->status_code);
        header("status-code:404 NotFound");
        include_once "DB/smarty/Smarty.class.php";
        $this->smarty = new \Smarty();
        $this->db     = new database();
        $this->input  = $input;
        $this->Main($input);
        if(!headers_sent()){
            http_response_code($this->status_code);
        }
    }

    /**
     * @param $input
     */
    public function Main($input){}
    /**
     * Manage assign_* method
     * Show template when script running was finished.
     */
    public function __destruct(){
        $functions = get_class_methods($this);
        foreach($functions as $function){
            if(substr($function,0,7) === "assign_"){
                $return = $this->$function();
                foreach($return as $key=>$val){
                    $this->smarty->assign($key,$val);
                }
            }
        }
        $files = $this->filesDisplay();
        foreach ($files as $file) {
            if($file !== false){
                $this->smarty->display("DB/style/".$file);
            }
        }
    }

    /**
     * @return array
     *  return files name that they're displaying in __destruct()
     * Path:./DB/style/
     */
    public function filesDisplay(){
        return [
            "header.tpl",
            $this->own_tpl,
            "footer.tpl"
        ];
    }

    /**
     * @return array
     */
    public function assign_config(){
        return [
            "title"         => title,
            "description"   => description,
            "keyword"       => keyword,
            "main_url"      => main_url,
            "style_url"     => main_url."DB/style/"
        ];
    }

    /**
     * @return array
     */
    public function assign_side_menu(){
        return [
            "side_menu" => $GLOBALS["side_menu"]
        ];
    }

    /**
     * @param $name
     * @param $array
     */
    public function add_side_menu($name,$array){
        $GLOBALS["side_menu"][$name] = $array;
    }
}
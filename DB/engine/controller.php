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
namespace Engine;
/**
 * Class controller
 * @package engine
 * This is a original controller class, all controller class should to extends from this class.
 */
class controller {
    /**
     * @var null|string
     * extends class should give full input(the url that after main url) from this string.
     */
    protected $url      =   null;
    /**
     * @var array
     * each part of full url explode by $partExploder string is this array member.
     */
    protected $part     =   array();
    /**
     * @var string
     * Full input explode by this string and save each one as member in $part array.
     * extends class can change this value.
     */
    protected $partExploder = "/";
    /**
     * @var null|string
     */
    protected $input        = null;

    /**
     * @param $url
     */
    public function __construct($url){
        $this->url      = $url;
        $this->part     = explode($this->partExploder,$url);
        $this->input    = substr($url,strlen($this->part[0])+1,(strlen($url)-strlen($this->part[0])-1));
        spl_autoload_register(array($this,"classLoader"),true,true);
        $this->Main($url,$this->part,$this->part[0],$this->input);
    }

    /**
     * @param $url
     *      full variable after main url
     * @param $part
     *      $url explode by $partExploder variable
     * @param $class
     *      class name (first part of $url)
     * @param $input
     *      all variable after $class
     * you can change this function in your extends class.
     * for example you can include index file and another work.
     */
    public function Main($url,$part,$class,$input){
        if(class_exists($class)){
            new $class($input);
        }else{
            new \notfound($input);
        }
    }

    /**
     * @param $class_name
     * @return bool
     * normal class loader
     */
    public function classLoader($class_name){
        if(substr($class_name,0,6) === "modul\\"){
            $file = "DB/modul/".substr($class_name,6,strlen($class_name)).".php";
            if (file_exists($file)) {
                require_once($file);
                return true;
            }
        }
        if(substr($class_name,0,5) === "view\\"){
            $file = "DB/view/".substr($class_name,5,strlen($class_name)).".php";
            if (file_exists($file)) {
                require_once($file);
                return true;
            }
        }
        if(substr($class_name,0,7) === "engine\\"){
            $file = "DB/engine/".substr($class_name,7,strlen($class_name)).".php";
            if (file_exists($file)) {
                require_once($file);
                return true;
            }
        }
        $file = "pages/".$class_name.".php";
        if (file_exists($file)) {
            require_once($file);
            return true;
        }
        return false;
    }
}
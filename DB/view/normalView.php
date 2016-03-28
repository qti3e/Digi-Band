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
namespace view;
use engine\view;

/**
 * Class normalView
 * @package view
 */
class normalView extends view{
    /**
     * @var string
     */
    public $own_tpl = "normalView.tpl";

    /**
     * @return array
     */
    public function assign_content(){
        $content = "";
        $functions = get_class_methods($this);
        foreach($functions as $function){
            if(substr($function,0,8) === "content_"){
                ob_start();
                $this->$function();
                $_content = ob_get_contents();
                ob_end_clean();
                $content .= $_content;
            }
        }
        return [
            "content" => $content
        ];
    }
}
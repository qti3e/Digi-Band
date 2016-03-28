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
namespace modul;
class htmlTag{
    /**
     * @var string|null
     */
    private $tag        = null;
    /**
     * @var bool
     * OC tags are type of html tags.
     * Like:
     *  <a>...</a>
     *  <b>...</b>
     */
    private $ocTag      = false;//<link />
    /**
     * @var array
     * Like:
     *  class
     *  style
     */
    public $properties = array();
    /**
     * @var null
     * Enable in OC tags
     */
    private $ocText     = null;

    /**
     * @param string $name
     * @return $this
     */
    public function setTag($name){
        $this->tag = $name;
        return $this;
    }

    /**
     * Enable OC Tag
     * @param bool|true $ocTag
     * @return $this
     */
    public function ocTag($ocTag = true){
        $this->ocTag = $ocTag;
        return $this;
    }

    /**
     * @param string $name
     * @param string|array $value
     * @return $this
     */
    public function setProperty($name,$value){
        $this->properties[$name] = $value;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function unsetProperty($name){
        unset($this->properties[$name]);
        return $this;
    }

    /**
     * @param string|object $value
     * @return $this
     */
    public function in($value){
        if(is_string($value)){
            $this->ocText = $value;
            return $this;
        }
        ob_start();
        $value();
        $content = ob_get_contents();
        ob_end_clean();
        $this->ocText = $content;
        return $this;
    }

    /**
     * @param $function
     * @return $this
     */
    public function doing($function){
        ob_start();
        $function($this);
        ob_end_clean();
        return $this;
    }
    
    public function __destruct(){
        $properties = "";
        foreach ($this->properties as $name => $value){
            $properties .= " $name=\"";
            if(is_string($value)){
                $properties .= $value;
            }else{
                foreach($value as $vName => $vValue){
                    $properties .= "$vName:$vValue;";
                }
            }
            $properties .= "\" ";
        }
        //<link />
        if(!$this->ocTag){
            echo "<".$this->tag.$properties."/>";
        }/*<a>...</a>|<b>...</b>*/else{
            echo "<".$this->tag.$properties.">".$this->ocText."</".$this->tag.">";
        }
    }
}
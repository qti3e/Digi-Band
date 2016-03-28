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
 * Class database
 * @package engine
 */
class database{
    /**
     * @type null|\PDO
     */
    private $obj        = null;

    /**
     * Create the PDO connection at the first
     */
    public function __construct(){
        try {
            $this->obj = new \PDO(
                "mysql:dbname=".config_database_data.
                ";host=".config_database_host,
                config_database_user,
                config_database_pass
                ,array(
                \PDO::MYSQL_ATTR_INIT_COMMAND =>
                    "SET NAMES '".config_database_char."'"
            ));
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * @param $query
     * @return \PDOStatement
     */
    public function query($query){
        return $this->obj->query($query);
    }

    /**
     * @param $table
     * @param string $key
     * @param string $plus
     * @return array
     */
    public function get_table($table,$key = "id",$plus = ""){
        $result = array();
        $q      = $this->query("SELECT * FROM $table ".$plus);
        $data   = $q->fetchAll();
        foreach($data as $row){
            $re = $row;
            $result[$row[$key]] = $re;
        }
        return $result;
    }
}
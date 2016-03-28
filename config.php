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

define("title","Digi Band");
define("description","Template Engine Based Framework");
define("keyword", "Programming,PHP,Digi Band,Framework");

define("main_url","http://main.own/Digi Band/");

define("dataBaseConfig","one");
define("controller","normalController");
define("install_path","P:/Digi Band/");
define("default_page","index");
global $side_menu;
$side_menu =[
    "Dashboard"=> [
        "dashboard",
        "icon-dashboard"
    ]
];
include "DB/database/".dataBaseConfig.".php";
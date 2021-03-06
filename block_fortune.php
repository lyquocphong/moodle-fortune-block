<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Fortune block
 *
 * @package    block_fortune
 * @author     Ly Quoc Phong <lyquocphong@gmail.com>
 * @copyright  2020 Ly Quoc Phong
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_fortune extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_fortune');
    }
    
    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
     
        $this->content         =  new stdClass;
        $this->content->text   =  $this->config->text;
        $this->content->footer = 'This is footer';
     
        return $this->content;
    }

    public function specialization() {
        if (isset($this->config)) {
            if (empty($this->config->title)) {
                $this->title = get_string('defaulttitle', 'block_fortune');            
            } else {
                $this->title = $this->config->title;
            }
     
            if (empty($this->config->text)) {
                $this->config->text = get_string('defaulttext', 'block_fortune');
            }    
        }
    }
}

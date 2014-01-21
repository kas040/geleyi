<?php/** Define class Modules Manager List* Make sure you skip down to the end of this file, as there are a few* lines of code that are very important.*/!defined('ABSPATH') and exit;if (class_exists('aaModulesManger') != true) {    class aaModulesManger    {        /*                * Some required plugin information                */        const VERSION = '1.0';        /*                * Store some helpers config                *                 */        public $cfg = array();        /*                * Required __construct() function that initalizes the AA-Team Framework                */        public function __construct($cfg)        {            $this->cfg = $cfg;        }        public function printListInterface()        {        	global $psp;        	            $html   = array();            $html[] = '<table class="psp-table" id="' . ($this->cfg['default']['alias']) . '-module-manager" style="border-collapse: collapse;border-spacing: 0;">';            $html[] = '<thead>						<tr>							<th width="10">' . __('Icon', $psp->localizationName) . '</th>							<th width="10">' . __('Version', $psp->localizationName) . '</th>							<th width="350" align="left">' . __('Name', $psp->localizationName) . '</th>							<th align="left">' . __('About', $psp->localizationName) . '</th>						</tr>					</thead>';            $html[] = '<tbody>';            $cc     = 0;            foreach ($this->cfg['modules'] as $key => $value) {                $icon = '';                if (is_file($value["folder_path"] . $value[$key]['menu']['icon'])) {                    $icon = $value["folder_uri"] . $value[$key]['menu']['icon'];                }                $html[] = '<tr class="' . ($cc % 2 ? 'odd' : 'even') . '">					<td align="center">' . (trim($icon) != "" ? '<img src="' . ($icon) . '" width="16" height="16" />' : '') . '</td>					<td align="center">' . ($value[$key]['version']) . '</td>					<td>';                // activate / deactivate plugin button                if ($value['status'] == true) {                    if (!in_array($key, $this->cfg['core-modules'])) {                        $html[] = '<a href="#deactivate" class="deactivate" rel="' . ($key) . '">Deactivate</a>';                    } else {                        $html[] = "<i>" . __("Core Modules, can't be deactivate!", $psp->localizationName) . "</i>";                    }                } else {                    $html[] = '<a href="#activate" class="activate" rel="' . ($key) . '">' . __('Activate', $psp->localizationName) . '</a>';                }                $html[] = "&nbsp; | &nbsp;" . $value[$key]['menu']['title'];                $html[] = '</td>					<td>' . ($value[$key]['desciption']) . '</td>				</tr>';                $cc++;            }            $html[] = '</tbody>';            $html[] = '</table>';            return implode("\n", $html);        }    }}// Initalize the your aaModulesManger$aaModulesManger = new aaModulesManger($this->cfg, $module);
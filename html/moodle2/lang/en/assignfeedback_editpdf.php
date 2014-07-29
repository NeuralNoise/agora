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
 * Strings for component 'assignfeedback_editpdf', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Add to quicklist';
$string['annotationcolour'] = 'Annotation colour';
$string['black'] = 'Black';
$string['blue'] = 'Blue';
$string['cannotopenpdf'] = 'Cannot open the PDF. The file may be corrupt, or in an unsupported format.';
$string['clear'] = 'Clear';
$string['colourpicker'] = 'Colour picker';
$string['command'] = 'Command:';
$string['comment'] = 'Comments';
$string['commentcolour'] = 'Comment colour';
$string['commentcontextmenu'] = 'Comment context menu';
$string['couldnotsavepage'] = 'Could not save page {$a}';
$string['currentstamp'] = 'Stamp';
$string['deleteannotation'] = 'Delete annotation';
$string['deletecomment'] = 'Delete comment';
$string['deletefeedback'] = 'Delete feedback PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Download feedback PDF';
$string['editpdf'] = 'Annotate PDF';
$string['editpdf_help'] = 'Annotate students submissions directly in the browser and produce an edited downloadable PDF.';
$string['enabled'] = 'Annotate PDF';
$string['enabled_help'] = 'If enabled, the teacher will be able to create annotated PDF files when marking the assignments. This allows the teacher to add comments, drawing and stamps directly on top of the students work. The annotating is done in the browser and no extra software is required.';
$string['errorgenerateimage'] = 'Error generating image with ghostscript, debugging info: {$a}';
$string['filter'] = 'Filter comments...';
$string['generatefeedback'] = 'Generate feedback PDF';
$string['generatingpdf'] = 'Generating the PDF...';
$string['gotopage'] = 'Go to page';
$string['green'] = 'Green';
$string['gspath'] = 'Ghostscript path';
$string['gspath_help'] = 'On most Linux installs, this can be left as \'/usr/bin/gs\'. On Windows it will be something like \'c:gsbingswin32c.exe\' (make sure there are no spaces in the path - if necessary copy the files \'gswin32c.exe\' and \'gsdll32.dll\' to a new folder without a space in the path)';
$string['highlight'] = 'Highlight';
$string['jsrequired'] = 'JavaScript is required to annotate a PDF. Please enable JavaScript in your browser to use this feature.';
$string['launcheditor'] = 'Launch PDF editor...';
$string['line'] = 'Line';
$string['loadingeditor'] = 'Loading PDF editor';
$string['navigatenext'] = 'Next page';
$string['navigateprevious'] = 'Previous page';
$string['output'] = 'Output:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Page {$a}';
$string['pagexofy'] = 'Page {$a->page} of {$a->total}';
$string['pen'] = 'Pen';
$string['pluginname'] = 'Annotate PDF';
$string['rectangle'] = 'Rectangle';
$string['red'] = 'Red';
$string['result'] = 'Result:';
$string['searchcomments'] = 'Search comments';
$string['select'] = 'Select';
$string['stamp'] = 'Stamp';
$string['stamppicker'] = 'Stamp picker';
$string['stamps'] = 'Stamps';
$string['stampsdesc'] = 'Stamps must be image files (recommended size: 40x40). These images can be used with the stamp tool to annotate the PDF.';
$string['test_doesnotexist'] = 'The ghostscript path points to a non-existent file';
$string['test_empty'] = 'The ghostscript path is empty - please enter the correct path';
$string['testgs'] = 'Test ghostscript path';
$string['test_isdir'] = 'The ghostscript path points to a folder, please include the ghostscript program in the path you specify';
$string['test_notestfile'] = 'The test PDF is missing';
$string['test_notexecutable'] = 'The ghostscript points to a file that is not executable';
$string['test_ok'] = 'The ghostscript path appears to be OK - please check you can see the message in the image below';
$string['tool'] = 'Tool';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['unsavedchanges'] = 'Unsaved changes';
$string['viewfeedbackonline'] = 'View annotated PDF...';
$string['white'] = 'White';
$string['yellow'] = 'Yellow';
$string['zlibnotavailable'] = 'Php extension "zlib" is not available. The annotate PDF feature relies on this php extension and will be disabled until zlib is installed and enabled.';

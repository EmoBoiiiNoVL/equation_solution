<?php

require_once __DIR__ . '/../../config.php';

/**
 * @global moodle_database $DB
 * @global moodle_page $PAGE
 * @global renderer_base $OUTPUT
 */

$PAGE->set_url('/blocks/equation_solution/history.php');
$PAGE->set_context(context_system::instance());

$records = $DB->get_records('block_equation_solution');
$table = new html_table();
$table->head = [
    '#',
    'a',
    'b',
    'c',
    'x1',
    'x2',
];
$table->data = $records;

echo $OUTPUT->header();
echo $OUTPUT->heading('История');


echo html_writer::table($table);
echo $OUTPUT->footer();




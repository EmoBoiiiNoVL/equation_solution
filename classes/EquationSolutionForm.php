<?php
declare(strict_types = 1);
namespace block_equation_solution;
require_once("$CFG->libdir/formslib.php");

class EquationSolutionForm extends \moodleform
{
    public function definition()
    {
        $mform = $this->_form;

        $mform->addElement('text', 'a', get_string('variable_a', 'block_equation_solution'));
        $mform->setType('a', PARAM_INT);

        $mform->addElement('text', 'b', get_string('variable_b', 'block_equation_solution'));
        $mform->setType('b', PARAM_INT);

        $mform->addElement('text', 'c', get_string('variable_c','block_equation_solution'));
        $mform->setType('c', PARAM_INT);

        $this->add_action_buttons();
    }
}
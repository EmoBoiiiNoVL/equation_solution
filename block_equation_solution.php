<?php
declare(strict_types = 1);

use block_equation_solution\EqRoot;

class block_equation_solution extends block_base
{
    public function init() {
        $this->title = get_string('pluginname', 'block_equation_solution');
    }

    public function get_content() {

        $form = new \block_equation_solution\EquationSolutionForm();

        $result = '';
        if($data = $form->get_data()){
            $result = EqRoot::eq_root($data);
        }

        $form->render();
        $this->content =  new stdClass;
        $this->content->text = $form->render();
        $this->content->footer = implode(",", (array)$result);

        return $this->content;
    }


    public function applicable_formats() {
        return [
            'admin' => false,
            'site-index' => true,
            'course-view' => true,
            'mod' => false,
            'my' => true,
        ];
    }

    public function definition()
    {
        $mform = $this->_form;

        $mform->addElement('text', 'a', get_string('variable_a'));
        $mform->setType('a', PARAM_INT);

        $mform->addElement('text', 'b', get_string('variable_b'));
        $mform->setType('b', PARAM_INT);

        $mform->addElement('text', 'c', get_string('variable_c'));
        $mform->setType('c', PARAM_INT);

        $mform->addElement('button', 'send', get_string('find_x'));
    }

    function eq_roots($a, $b, $c)
    {
        if (isset($_GET['send'])) {
            $a = $_POST['variable_a'];
            $b = $_POST['variable_b'];
            $c = $_POST['variable_c'];
        }

        $d = $b * $b - 4 * $a * $c;
        echo $d;

        if ($d < 0) {
            echo "Решения нет!";
        } elseif ($d == 0) {
            echo "x = ";
            echo($b * (-1) / 2 * $a);
        } else {
            echo "x1 = ";
            echo(((-1) * $b + sqrt($d)) / (2 * $a));
            echo "<br>";
            echo "x2 = ";
            echo(((-1) * $b - sqrt($d)) / (2 * $a));
        }
    }


}
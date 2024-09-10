<?php
namespace Dnonov\BackgroundRemover\Services;

class System {
    static public function executeCommand() {
        $descriptorspec = array(0 => array("pipe", "r"), 1 => array("pipe", "w"));
        $pathToRemoveBackground = base_path() . "/vendor/dnonov/background-remover/src/RemoveBackground/venv";

        $fullCommand = $pathToRemoveBackground . "/venv/bin/python " . $pathToRemoveBackground . "/remove_background.py";
            // base_path() . "/remove_background/venv/bin/python "
            // . base_path() . "/remove_background/remove_background.py "
            // . base_path() . "/remove_background/input3.JPG";

        $process = proc_open($fullCommand, $descriptorspec, $pipes);
        $stdOutput = stream_get_contents($pipes[1]);

        fclose($pipes[1]);
        return $stdOutput;
    }
}

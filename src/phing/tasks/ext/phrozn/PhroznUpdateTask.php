<?php
require_once "phing/Task.php";
require_once "phing/Project.php";

class PhroznUpdateTask extends Task
{
    private $src = null;
    private $dst = null;

    public function setSrc($str)
    {
        $this->src = $str;
    }

    public function setDst($str)
    {
        $this->dst = $str;
    }

    public function init() {
      // nothing to do here
    }

    public function main() {
        $this->log("Run Phrozn Update task source directory: \"{$this->src}\" destination directory:> \"{$this->dst}\"");
        $output = array();

        exec("which phrozn", $output);
        if (!count($output)) {
            $this->log("Unable to locate \"phrozn\" command. Please install it.", Project::MSG_ERR);
            return -1;
        }

        $output = array();
        exec("phrozn up {$this->src} {$this->dst}", $output);

        foreach ($output as $out) {
            $this->log($out);
        }
    }
}

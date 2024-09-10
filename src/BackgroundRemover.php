<?php

namespace Dnonov\BackgroundRemover;

use Dnonov\BackgroundRemover\Services\System;

class BackgroundRemover {
    public function remove($inputPath, $outputPath) {
        return System::executeCommand();
    }
}

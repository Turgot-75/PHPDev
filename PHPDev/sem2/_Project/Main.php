<?php

class MainApplication {
    public function run() {
        echo "Hello, welcome to the Main Application!";
    }
}

class Main {
    const ENTRYPOINT = 1;
    const EXITPOINT = 2;
}
enum EntryPoint: int {
    case ENTRYPOINT = 1;
    case EXITPOINT = 2;
}



$app = new MainApplication();
$app->run();

?>
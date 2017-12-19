<?php
/**
 * Created by 胡祥能 on 2017/12/19.
 *  email：huxiangneng@jiuletech.com
 */

interface Logger
{
    public function log(string $message);
}

class Application
{
    private $logger;

    public function getLogger(): Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$app = new Application();
$app->setLogger(new class implements Logger {
    public function log(string $message)
    {
        // TODO: Implement log() method.
        echo $message;
    }
});
var_dump($app->getLogger());
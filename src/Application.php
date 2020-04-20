<?php
namespace m2i\customFramework;


class Application
{

    /**
     * @var string
     */
    private string $appName;

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return Application
     */
    public function setAppName(string $appName): Application
    {
        $this->appName = $appName;

        return $this;
    }



}
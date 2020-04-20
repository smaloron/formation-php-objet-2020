<?php
namespace m2i\customFramework;


class Application
{

    /**
     * @var string
     */
    private string $appName;

    private string $path;

    /**
     * Application constructor.
     * @param string $appName
     */
    public function __construct(string $appName = "")
    {
        $this->appName = $appName;

        $this->path = $_SERVER["PATH_INFO"];
    }


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


    public function run(){

        //Analyse du chemin de façon à obtenir un nom de contrôleur
        //et un nom de méthode
        $parts = explode("/", $this->path);

        $controllerName = "m2i\\customFramework\\" .ucfirst($parts[1])."Controller";
        $methodName = $parts[2]. "Action";

        //Liste des arguments
        if(count($parts) > 3){
            $params = array_slice($parts,3);
        } else {
            $params = [];
        }

        //Dispatch

        //Instanciation du contrôleur
        $controllerInstance = new $controllerName();

        //Exécution de la méthode
        $controllerInstance->$methodName(...$params);


    }

}
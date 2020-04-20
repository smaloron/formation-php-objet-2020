<?php


namespace m2i\customFramework;


class View
{

    /**
     * @var string
     */
    private string $template;

    /**
     * @var array
     */
    private array $data = [];


    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return View
     */
    public function setTemplate(string $template): View
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return View
     */
    public function setData(array $data): View
    {
        $this->data = $data;

        return $this;
    }


    public function render(){
        require $this->template;
    }


}
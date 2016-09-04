<?php
namespace Radic\BladeExtensions\Seven\Directives;

abstract class Directive
{
    protected $pattern;

    protected $replace;

    protected $name;

    public function handle($value)
    {
        return preg_replace($this->getProcessedPattern(), $this->replace, $value);
    }

    protected function getProcessedPattern()
    {
        return str_replace('NAME', $this->name, $this->pattern);
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Set the pattern value
     *
     * @param string $pattern
     *
     * @return Directive
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * Set the replace value
     *
     * @param string $replace
     *
     * @return Directive
     */
    public function setReplace($replace)
    {
        $this->replace = $replace;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name value
     *
     * @param string $name
     *
     * @return Directive
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

<?php

namespace nochso\SamiTheme;

class MinifyHtmlNode extends \Twig_Node
{
    public function __construct(array $nodes = array(), array $attributes = array(), $lineno = 0, $tag = null)
    {
        parent::__construct($nodes, $attributes, $lineno, $tag); // TODO: Change the autogenerated stub
    }

    public function compile(\Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'))
            ->write("echo \WyriHaximus\HtmlCompress\Factory::constructSmallest()->compress(ob_get_clean());\n");
    }
}

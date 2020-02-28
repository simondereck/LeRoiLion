<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_374f5c61f29959b4d2da77eedb5a5de9ada058c97f244793aaa88bfe39a4fe3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56918129cfb12c1068f2e0998071cc00d37f92883c592822fbfa00bed63201ab = $this->env->getExtension("native_profiler");
        $__internal_56918129cfb12c1068f2e0998071cc00d37f92883c592822fbfa00bed63201ab->enter($__internal_56918129cfb12c1068f2e0998071cc00d37f92883c592822fbfa00bed63201ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56918129cfb12c1068f2e0998071cc00d37f92883c592822fbfa00bed63201ab->leave($__internal_56918129cfb12c1068f2e0998071cc00d37f92883c592822fbfa00bed63201ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a90aa82085f9497dcb65ed2dac4b3477b4f6672e8cba8dceab3586599a8dc15 = $this->env->getExtension("native_profiler");
        $__internal_0a90aa82085f9497dcb65ed2dac4b3477b4f6672e8cba8dceab3586599a8dc15->enter($__internal_0a90aa82085f9497dcb65ed2dac4b3477b4f6672e8cba8dceab3586599a8dc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a90aa82085f9497dcb65ed2dac4b3477b4f6672e8cba8dceab3586599a8dc15->leave($__internal_0a90aa82085f9497dcb65ed2dac4b3477b4f6672e8cba8dceab3586599a8dc15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f829404d4b50b54b6080d2e8bb4fe8f6f57f8fe9f942ba9c9c66240a23bacf8 = $this->env->getExtension("native_profiler");
        $__internal_3f829404d4b50b54b6080d2e8bb4fe8f6f57f8fe9f942ba9c9c66240a23bacf8->enter($__internal_3f829404d4b50b54b6080d2e8bb4fe8f6f57f8fe9f942ba9c9c66240a23bacf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f829404d4b50b54b6080d2e8bb4fe8f6f57f8fe9f942ba9c9c66240a23bacf8->leave($__internal_3f829404d4b50b54b6080d2e8bb4fe8f6f57f8fe9f942ba9c9c66240a23bacf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a7ba27362dbf0bafaf769b6c137529708f3f322b1246a0bb70a89a131639431 = $this->env->getExtension("native_profiler");
        $__internal_2a7ba27362dbf0bafaf769b6c137529708f3f322b1246a0bb70a89a131639431->enter($__internal_2a7ba27362dbf0bafaf769b6c137529708f3f322b1246a0bb70a89a131639431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a7ba27362dbf0bafaf769b6c137529708f3f322b1246a0bb70a89a131639431->leave($__internal_2a7ba27362dbf0bafaf769b6c137529708f3f322b1246a0bb70a89a131639431_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

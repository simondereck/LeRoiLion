<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ffd9e1183b4df7a55fd737885ae368c0182b0894482cb59b47d1ee7d9c0df48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b33dd660e917092d4bd6f8a6c944206e0a1ea4b7e5a31acd44ef90db8df4786 = $this->env->getExtension("native_profiler");
        $__internal_9b33dd660e917092d4bd6f8a6c944206e0a1ea4b7e5a31acd44ef90db8df4786->enter($__internal_9b33dd660e917092d4bd6f8a6c944206e0a1ea4b7e5a31acd44ef90db8df4786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b33dd660e917092d4bd6f8a6c944206e0a1ea4b7e5a31acd44ef90db8df4786->leave($__internal_9b33dd660e917092d4bd6f8a6c944206e0a1ea4b7e5a31acd44ef90db8df4786_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0558971fbdbe7b2b9ea16e410f4f1a87117ade527659a0a766bcaa7e7ed6ad71 = $this->env->getExtension("native_profiler");
        $__internal_0558971fbdbe7b2b9ea16e410f4f1a87117ade527659a0a766bcaa7e7ed6ad71->enter($__internal_0558971fbdbe7b2b9ea16e410f4f1a87117ade527659a0a766bcaa7e7ed6ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0558971fbdbe7b2b9ea16e410f4f1a87117ade527659a0a766bcaa7e7ed6ad71->leave($__internal_0558971fbdbe7b2b9ea16e410f4f1a87117ade527659a0a766bcaa7e7ed6ad71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a35a939e058da2ef176464b3729d35136f6460795319f87783cbd238485d821 = $this->env->getExtension("native_profiler");
        $__internal_9a35a939e058da2ef176464b3729d35136f6460795319f87783cbd238485d821->enter($__internal_9a35a939e058da2ef176464b3729d35136f6460795319f87783cbd238485d821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a35a939e058da2ef176464b3729d35136f6460795319f87783cbd238485d821->leave($__internal_9a35a939e058da2ef176464b3729d35136f6460795319f87783cbd238485d821_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2169d8e3804c1f5285d696e4fa8cf315b341bcb68a82ae33dedfbdf94ed31660 = $this->env->getExtension("native_profiler");
        $__internal_2169d8e3804c1f5285d696e4fa8cf315b341bcb68a82ae33dedfbdf94ed31660->enter($__internal_2169d8e3804c1f5285d696e4fa8cf315b341bcb68a82ae33dedfbdf94ed31660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2169d8e3804c1f5285d696e4fa8cf315b341bcb68a82ae33dedfbdf94ed31660->leave($__internal_2169d8e3804c1f5285d696e4fa8cf315b341bcb68a82ae33dedfbdf94ed31660_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

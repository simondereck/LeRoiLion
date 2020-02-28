<?php

/* base.html.twig */
class __TwigTemplate_5e1cbcb2387dd421ebebecc62319744ba62f76ebcdffe703965155f66b0bf1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc5818be4953e355e05919e8a752c005f066cd91188dccd4a57e5f38119903b = $this->env->getExtension("native_profiler");
        $__internal_5fc5818be4953e355e05919e8a752c005f066cd91188dccd4a57e5f38119903b->enter($__internal_5fc5818be4953e355e05919e8a752c005f066cd91188dccd4a57e5f38119903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5fc5818be4953e355e05919e8a752c005f066cd91188dccd4a57e5f38119903b->leave($__internal_5fc5818be4953e355e05919e8a752c005f066cd91188dccd4a57e5f38119903b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1aaa9f24e7865ebc48c16a494c5218d0b7cbef9123339cd0d2fde63e9cd265c = $this->env->getExtension("native_profiler");
        $__internal_b1aaa9f24e7865ebc48c16a494c5218d0b7cbef9123339cd0d2fde63e9cd265c->enter($__internal_b1aaa9f24e7865ebc48c16a494c5218d0b7cbef9123339cd0d2fde63e9cd265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1aaa9f24e7865ebc48c16a494c5218d0b7cbef9123339cd0d2fde63e9cd265c->leave($__internal_b1aaa9f24e7865ebc48c16a494c5218d0b7cbef9123339cd0d2fde63e9cd265c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1a3630744ba622f9d916d7703685609fcad31a7dd251e901d94611abdde11d2 = $this->env->getExtension("native_profiler");
        $__internal_a1a3630744ba622f9d916d7703685609fcad31a7dd251e901d94611abdde11d2->enter($__internal_a1a3630744ba622f9d916d7703685609fcad31a7dd251e901d94611abdde11d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1a3630744ba622f9d916d7703685609fcad31a7dd251e901d94611abdde11d2->leave($__internal_a1a3630744ba622f9d916d7703685609fcad31a7dd251e901d94611abdde11d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34023c0ea0cebc39bd0d8136e03a2f9d346d4dfe87b31726f7dd89d6c3600fab = $this->env->getExtension("native_profiler");
        $__internal_34023c0ea0cebc39bd0d8136e03a2f9d346d4dfe87b31726f7dd89d6c3600fab->enter($__internal_34023c0ea0cebc39bd0d8136e03a2f9d346d4dfe87b31726f7dd89d6c3600fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34023c0ea0cebc39bd0d8136e03a2f9d346d4dfe87b31726f7dd89d6c3600fab->leave($__internal_34023c0ea0cebc39bd0d8136e03a2f9d346d4dfe87b31726f7dd89d6c3600fab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb5f3844eaafcce110f12f5cc519c31ed280801ff82182f843e5b8b401ffe546 = $this->env->getExtension("native_profiler");
        $__internal_bb5f3844eaafcce110f12f5cc519c31ed280801ff82182f843e5b8b401ffe546->enter($__internal_bb5f3844eaafcce110f12f5cc519c31ed280801ff82182f843e5b8b401ffe546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb5f3844eaafcce110f12f5cc519c31ed280801ff82182f843e5b8b401ffe546->leave($__internal_bb5f3844eaafcce110f12f5cc519c31ed280801ff82182f843e5b8b401ffe546_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

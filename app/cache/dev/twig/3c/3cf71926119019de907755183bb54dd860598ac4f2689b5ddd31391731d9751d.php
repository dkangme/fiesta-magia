<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7ca189c99e8f9530a539fab35c52f1c49cc1b7bfe05e27d5e5cedf45f87b85fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ba8b82cbe60d2d9d13444f788a921ebdfaa583857a70cf99b563ac4baf95770 = $this->env->getExtension("native_profiler");
        $__internal_6ba8b82cbe60d2d9d13444f788a921ebdfaa583857a70cf99b563ac4baf95770->enter($__internal_6ba8b82cbe60d2d9d13444f788a921ebdfaa583857a70cf99b563ac4baf95770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6ba8b82cbe60d2d9d13444f788a921ebdfaa583857a70cf99b563ac4baf95770->leave($__internal_6ba8b82cbe60d2d9d13444f788a921ebdfaa583857a70cf99b563ac4baf95770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

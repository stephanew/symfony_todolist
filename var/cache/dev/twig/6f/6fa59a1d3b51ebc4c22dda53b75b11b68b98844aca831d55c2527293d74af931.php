<?php

/* data/show.html.twig */
class __TwigTemplate_dda8bc102fb3333ec8f8c50eb110338b021fd50eaf4397de08746f70f321d2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "data/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Content</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td style=\"text-align:center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datum"] ?? $this->getContext($context, "datum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td style=\"text-align:center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datum"] ?? $this->getContext($context, "datum")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createtime</th>
                <td style=\"text-align:center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datum"] ?? $this->getContext($context, "datum")), "createTime", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatetime</th>
                <td style=\"text-align:center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datum"] ?? $this->getContext($context, "datum")), "updateTime", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            <button><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_index");
        echo "\" style=\"text-decoration:none\">Back to the list</a></button>
        </li>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            <button><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_edit", array("id" => $this->getAttribute(($context["datum"] ?? $this->getContext($context, "datum")), "id", array()))), "html", null, true);
        echo "\" style=\"text-decoration:none\">Edit</a></button>
        </li>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Content</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td style=\"text-align:center\">{{ datum.id }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td style=\"text-align:center\">{{ datum.content }}</td>
            </tr>
            <tr>
                <th>Createtime</th>
                <td style=\"text-align:center\">{{ datum.createTime }}</td>
            </tr>
            <tr>
                <th>Updatetime</th>
                <td style=\"text-align:center\">{{ datum.updateTime }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            <button><a href=\"{{ path('data_index') }}\" style=\"text-decoration:none\">Back to the list</a></button>
        </li>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            <button><a href=\"{{ path('data_edit', { 'id': datum.id }) }}\" style=\"text-decoration:none\">Edit</a></button>
        </li>
        <li style=\"float:left;display:inline;margin:0px 5px;\">
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "data/show.html.twig", "/Users/stephanew/Workspace/symfony_proj/todolist/app/Resources/views/data/show.html.twig");
    }
}

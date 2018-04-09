<?php

/* data/index.html.twig */
class __TwigTemplate_0516585c8731b12539e12e71f4ebe38807a6dd10d2008d8776e2bc67795918ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "data/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/index.html.twig"));

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
        echo "    <h1>Todo list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>RemindTime</th>
                <th>RemindStatus</th>
                <th>Createtime</th>
                <th>Updatetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["datum"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_show", array("id" => $this->getAttribute($context["datum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "sendTime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "sendStatus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "createTime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["datum"], "updateTime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <button><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_show", array("id" => $this->getAttribute($context["datum"], "id", array()))), "html", null, true);
            echo "\" style=\"text-decoration:none\">show</a></button>
                        </li>
                        <li>
                            <button><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_edit", array("id" => $this->getAttribute($context["datum"], "id", array()))), "html", null, true);
            echo "\" style=\"text-decoration:none\">edit</a></button>
                        </li>
                        <li>
                            <button><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mail_new", array("content_id" => $this->getAttribute($context["datum"], "id", array()))), "html", null, true);
            echo "\" style=\"text-decoration:none\">set remind</a></button>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <button><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_new");
        echo "\" style=\"text-decoration:none\">Create a new datum</a></button>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  127 => 43,  114 => 36,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Todo list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>RemindTime</th>
                <th>RemindStatus</th>
                <th>Createtime</th>
                <th>Updatetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for datum in datas %}
            <tr>
                <td><a href=\"{{ path('data_show', { 'id': datum.id }) }}\">{{ datum.id }}</a></td>
                <td>{{ datum.content }}</td>
                <td>{{ datum.sendTime }}</td>
                <td>{{ datum.sendStatus }}</td>
                <td>{{ datum.createTime }}</td>
                <td>{{ datum.updateTime }}</td>
                <td>
                    <ul>
                        <li>
                            <button><a href=\"{{ path('data_show', { 'id': datum.id }) }}\" style=\"text-decoration:none\">show</a></button>
                        </li>
                        <li>
                            <button><a href=\"{{ path('data_edit', { 'id': datum.id }) }}\" style=\"text-decoration:none\">edit</a></button>
                        </li>
                        <li>
                            <button><a href=\"{{ path('mail_new', { 'content_id': datum.id }) }}\" style=\"text-decoration:none\">set remind</a></button>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <button><a href=\"{{ path('data_new') }}\" style=\"text-decoration:none\">Create a new datum</a></button>
        </li>
    </ul>
{% endblock %}
", "data/index.html.twig", "/Users/stephanew/Workspace/symfony_proj/todolist/app/Resources/views/data/index.html.twig");
    }
}

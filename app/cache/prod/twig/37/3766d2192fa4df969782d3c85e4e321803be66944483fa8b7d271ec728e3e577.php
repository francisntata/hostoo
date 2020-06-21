<?php

/* ordonnance/new.html.twig */
class __TwigTemplate_1c95c66b5cc9bb81c8b272196d429f668c04ac765628adaee5b4346c81a83843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/new.html.twig"));

        // line 1
        echo "
    <h4>Ordonnance creation</h4>

    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_new", ["id" => ($context["id"] ?? $this->getContext($context, "id"))]), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'widget');
        echo "


     ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posologie", []), 'row');
        echo "
     <ul class=\"list-unstyled\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posologie", []));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 13
            echo "        <li><div class=\"form-inline\">
                <div class=\"col-sm-3\">
                ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "produit", []), 'widget', ["attr" => ["class" => "mypro"]]);
            echo "
                </div><div class=\"col-sm-3\">
                    ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "qte", []), 'widget');
            echo "
                </div><div class=\"col-sm-3\">
                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "posologie", []), 'widget');
            echo "
                </div>

            ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "conduite", []), 'widget', ["attr" => ["class" => "col-sm-3"]]);
            echo "
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "     </ul>
        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\"/>
    </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  74 => 22,  68 => 19,  63 => 17,  58 => 15,  54 => 13,  50 => 12,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <h4>Ordonnance creation</h4>

    <form action=\"{{ path('ordonnance_med_new',{'id':id }) }}\" method=\"post\" class=\"form-horizontal\">
        {{ form_label(form.dateordo) }}
        {{ form_errors(form.dateordo) }}
        {{ form_widget(form.dateordo) }}


     {{ form_row(form.posologie) }}
     <ul class=\"list-unstyled\">
    {% for tag in form.posologie %}
        <li><div class=\"form-inline\">
                <div class=\"col-sm-3\">
                {{ form_widget(tag.produit, {'attr':{'class':'mypro'}}) }}
                </div><div class=\"col-sm-3\">
                    {{ form_widget(tag.qte) }}
                </div><div class=\"col-sm-3\">
                    {{ form_widget(tag.posologie) }}
                </div>

            {{ form_widget(tag.conduite, {'attr':{'class':'col-sm-3'}}) }}
            </div>
        </li>
    {% endfor %}
     </ul>
        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\"/>
    </form>
    {#
    <ul>
        <li>
            <a href=\"{{ path('ordonnance_med_index') }}\">Back to the list</a>
        </li>
    </ul>
#}", "ordonnance/new.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnance/new.html.twig");
    }
}
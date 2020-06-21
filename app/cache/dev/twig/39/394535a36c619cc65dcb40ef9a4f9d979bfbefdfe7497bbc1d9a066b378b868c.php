<?php

/* hostooPharmacieBundle:Pharmacie:index.html.twig */
class __TwigTemplate_8f0be25fe340bd9b31f1a1cbc98fad5a391b54c1405e8b700a04289f62036148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooPharmacieBundle:Pharmacie:index.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'stytesheets' => [$this, 'block_stytesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooPharmacieBundle:Pharmacie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo "::Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuphar.html.twig", "hostooPharmacieBundle:Pharmacie:index.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Liste de médicaments -->
    <!-- Tabs Left -->
    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\">Produits enregistrés</a></li>
        <li role=\"presentation\"><a href=\"#tabr3\" role=\"tab\" data-toggle=\"tab\">ordonnances</a></li>
    </ul>
<div class=\"tab-content\">
    <div id=\"tabr1\"  role=\"tabpanel\" class=\"tab-pane fade in active\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Produits</div>
                <div class=\"panel-body\">
                    <form>
                        <label class=\"col-lg-12\"><u>Liste</u> :</label><br>
                        <table id=\"produit\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                            <tr>

                                <th>Designation</th>
                                <th>Nb Plqt.</th>
                                <th>Nb unités.</th>
                                <th>Prix</th>
                                <th>PU</th>
                                <th>Qte</th>

                                <th>Val. stock CDF </th>
                                <th>Val. stock USD </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
";
        // line 41
        $context["prix"] = 0;
        // line 42
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 43
            echo "                                <tr>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "plaquette", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            if (((($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", [])) > 0) && $this->getAttribute($context["produit"], "unite", []))) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", []) / ($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", []))), "html", null, true);
                echo " ";
            }
            echo "</td>
                                    <td>
                                        ";
            // line 50
            if ( !(null === $this->getAttribute($context["produit"], "stocktot", []))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "stocktot", []), "qte", []), "html", null, true);
                echo " ";
            } else {
                echo "0";
            }
            echo "                                    </td>
                                    <td>
                                        ";
            // line 52
            if (( !(null === $this->getAttribute($context["produit"], "stocktot", [])) && (($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", [])) > 0))) {
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["produit"], "prix", []) / ($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", []))) * $this->getAttribute($this->getAttribute($context["produit"], "stocktot", []), "qte", [])), "html", null, true);
                echo " ";
            } else {
                echo "0";
            }
            echo "                                    </td>
                                    ";
            // line 53
            if (( !(null === $this->getAttribute($context["produit"], "stocktot", [])) && (($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", [])) > 0))) {
                // line 54
                echo "                                        ";
                $context["prix"] = (($context["prix"] ?? $this->getContext($context, "prix")) + (($this->getAttribute($context["produit"], "prix", []) / ($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", []))) * $this->getAttribute($this->getAttribute($context["produit"], "stocktot", []), "qte", [])));
                // line 55
                echo "
                                    ";
            } else {
                // line 57
                echo "                                        ";
                $context["prix"] = (($context["prix"] ?? $this->getContext($context, "prix")) + 0);
                // line 58
                echo "                                    ";
            }
            // line 59
            echo "                                    <td>
                                        ";
            // line 60
            if (( !(null === $this->getAttribute($context["produit"], "stocktot", [])) && (($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", [])) > 0))) {
                // line 61
                echo "                                            ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["produit"], "prix", []) / ($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", []))) * $this->getAttribute($this->getAttribute($context["produit"], "stocktot", []), "qte", [])) / $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:monTaux"))), "html", null, true);
                echo "
                                        ";
            } else {
                // line 62
                echo "0";
            }
            // line 63
            echo "                                    ";
            if (( !(null === $this->getAttribute($context["produit"], "stocktot", [])) && (($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", [])) > 0))) {
                // line 64
                echo "                                        ";
                $context["prix"] = (($context["prix"] ?? $this->getContext($context, "prix")) + ((($this->getAttribute($context["produit"], "prix", []) / ($this->getAttribute($context["produit"], "unite", []) * $this->getAttribute($context["produit"], "plaquette", []))) * $this->getAttribute($this->getAttribute($context["produit"], "stocktot", []), "qte", [])) / $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:monTaux"))));
                // line 65
                echo "
                                    ";
            } else {
                // line 67
                echo "                                        ";
                $context["prix"] = (($context["prix"] ?? $this->getContext($context, "prix")) + 0);
                // line 68
                echo "                                    ";
            }
            // line 69
            echo "                                    </td>
                                        <td>
                                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_produit", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                                        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_modifproduit", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\"><i class=\"fa fa-edit\"></i></a>

                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan=\"6\">Valeur en Stock</th>
                                <th>";
        // line 82
        echo twig_escape_filter($this->env, ($context["prix"] ?? $this->getContext($context, "prix")), "html", null, true);
        echo " CDF</th>
                                <th>";
        // line 83
        echo twig_escape_filter($this->env, (($context["prix"] ?? $this->getContext($context, "prix")) / $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:monTaux"))), "html", null, true);
        echo " USD</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div></div>
    <div id=\"tabr3\"   role=\"tabpanel\" class=\"tab-pane fade\" ><!-- Sixième onglet -->
    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div >
            <table class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Medecin</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordonnances"] ?? $this->getContext($context, "ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 108
            echo "                <tr>
                    <td>";
            // line 109
            if ($this->getAttribute($context["ord"], "episode", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>&nbsp;";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "medecin", []), "html", null, true);
            echo "</td>
                        ";
            // line 112
            if (($this->getAttribute($context["ord"], "livre", []) == 0)) {
                // line 113
                echo "                        <td colspan=\"3\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ordonnance", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                echo "\"><button>Afficher</button></a> </td>
                        ";
            } else {
                // line 115
                echo "                            <td colspan=\"3\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ordonnance", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                echo "\"><button class=\"btn btn-success\"><i class=\"fa fa-check text-white\"></i> </button></a></td>
                        ";
            }
            // line 117
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                </tbody>
            </table>
        </div>
    </div>
    </div></div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_stytesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stytesheets"));

        // line 127
        echo "    ";
        $this->displayParentBlock("stytesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 138
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooPharmacieBundle:Pharmacie:index.html.twig", 138)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Plugins Js -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        // line 156
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooPharmacieBundle:Pharmacie:index.html.twig", 156)->display($context);
        // line 157
        echo "    <script>
        \$(function () {
           \$('.table').dataTable({
               dom: 'Bfrtip',
               buttons: [
                   { extend: 'copyHtml5', footer: true },
                   { extend: 'excel', footer: true },
                   { extend: 'csvHtml5', footer: true },
                   { extend: 'pdfHtml5', footer: true }
               ]
           } );

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooPharmacieBundle:Pharmacie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 157,  455 => 156,  451 => 155,  447 => 154,  443 => 153,  439 => 152,  435 => 151,  431 => 150,  427 => 149,  423 => 148,  419 => 147,  415 => 146,  411 => 145,  407 => 144,  403 => 143,  397 => 141,  391 => 140,  384 => 138,  380 => 137,  376 => 136,  372 => 135,  368 => 134,  364 => 133,  360 => 132,  356 => 131,  352 => 130,  348 => 129,  344 => 128,  339 => 127,  333 => 126,  320 => 119,  313 => 117,  307 => 115,  301 => 113,  299 => 112,  295 => 111,  291 => 110,  283 => 109,  280 => 108,  276 => 107,  249 => 83,  245 => 82,  238 => 77,  227 => 72,  223 => 71,  219 => 69,  216 => 68,  213 => 67,  209 => 65,  206 => 64,  203 => 63,  200 => 62,  194 => 61,  192 => 60,  189 => 59,  186 => 58,  183 => 57,  179 => 55,  176 => 54,  174 => 53,  164 => 52,  153 => 50,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  126 => 43,  121 => 42,  119 => 41,  84 => 8,  78 => 7,  70 => 5,  64 => 4,  52 => 3,  39 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'hostooSanteBundle::blank.html.twig' %}
{% block titre %}{{ parent() }}::Pharmacie{% endblock %}
{% block titrepage %}Pharmacie{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuphar.html.twig' %}
{% endblock %}
{% block body %}

    <!-- Liste de médicaments -->
    <!-- Tabs Left -->
    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\">Produits enregistrés</a></li>
        <li role=\"presentation\"><a href=\"#tabr3\" role=\"tab\" data-toggle=\"tab\">ordonnances</a></li>
    </ul>
<div class=\"tab-content\">
    <div id=\"tabr1\"  role=\"tabpanel\" class=\"tab-pane fade in active\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Produits</div>
                <div class=\"panel-body\">
                    <form>
                        <label class=\"col-lg-12\"><u>Liste</u> :</label><br>
                        <table id=\"produit\" class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                            <tr>

                                <th>Designation</th>
                                <th>Nb Plqt.</th>
                                <th>Nb unités.</th>
                                <th>Prix</th>
                                <th>PU</th>
                                <th>Qte</th>

                                <th>Val. stock CDF </th>
                                <th>Val. stock USD </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
{% set prix=0 %}
                            {% for produit in produits %}
                                <tr>
                                    <td>{{ produit.nom }}</td>
                                    <td>{{ produit.plaquette }}</td>
                                    <td>{{ produit.unite }}</td>
                                    <td>{{ produit.prix }}</td>
                                    <td>{% if produit.unite*produit.plaquette > 0 and produit.unite  %}{{ produit.prix/(produit.unite*produit.plaquette) }} {% endif %}</td>
                                    <td>
                                        {% if produit.stocktot is not null %} {{ produit.stocktot.qte }} {% else %}0{% endif %}                                    </td>
                                    <td>
                                        {% if produit.stocktot is not null and produit.unite*produit.plaquette > 0 %} {{ produit.prix/(produit.unite*produit.plaquette)*produit.stocktot.qte }} {% else %}0{% endif %}                                    </td>
                                    {% if produit.stocktot is not null and produit.unite*produit.plaquette > 0 %}
                                        {% set prix = prix + (produit.prix/(produit.unite*produit.plaquette)*produit.stocktot.qte) %}

                                    {% else %}
                                        {% set prix = prix + 0 %}
                                    {% endif %}
                                    <td>
                                        {% if produit.stocktot is not null and produit.unite*produit.plaquette > 0 %}
                                            {{ produit.prix/(produit.unite*produit.plaquette)*produit.stocktot.qte/render(controller('hostooSanteBundle:Caisse:monTaux')) }}
                                        {% else %}0{% endif %}
                                    {% if produit.stocktot is not null and produit.unite*produit.plaquette > 0 %}
                                        {% set prix = prix + (produit.prix/(produit.unite*produit.plaquette)*produit.stocktot.qte/render(controller('hostooSanteBundle:Caisse:monTaux'))) %}

                                    {% else %}
                                        {% set prix = prix + 0 %}
                                    {% endif %}
                                    </td>
                                        <td>
                                        <a href=\"{{ path('hp_produit',{'id': produit.id}) }}\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i></a>
                                        <a href=\"{{ path('hp_modifproduit',{'id': produit.id}) }}\" class=\"btn btn-sm btn-warning\"><i class=\"fa fa-edit\"></i></a>

                                    </td>
                                </tr>
                            {% endfor %}

                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan=\"6\">Valeur en Stock</th>
                                <th>{{ prix }} CDF</th>
                                <th>{{ prix/render(controller('hostooSanteBundle:Caisse:monTaux')) }} USD</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div></div>
    <div id=\"tabr3\"   role=\"tabpanel\" class=\"tab-pane fade\" ><!-- Sixième onglet -->
    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div >
            <table class=\"table table-striped table-bordered\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Medecin</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for ord in ordonnances %}
                <tr>
                    <td>{% if ord.episode %}{{ ord.episode.patient.nom }}{% else %}{{ ord.hospitalisation.patient.nom }}{% endif %}</td>
                    <td>{{ ord.dateordo|date('d-m-Y') }}</td>
                    <td>&nbsp;{{ ord.medecin }}</td>
                        {% if ord.livre==0 %}
                        <td colspan=\"3\"><a href=\"{{ path('hp_ordonnance',{'id':ord.id}) }}\"><button>Afficher</button></a> </td>
                        {% else %}
                            <td colspan=\"3\"><a href=\"{{ path('hp_ordonnance',{'id':ord.id}) }}\"><button class=\"btn btn-success\"><i class=\"fa fa-check text-white\"></i> </button></a></td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    </div></div>
</div>
{% endblock %}
{% block stytesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/switchery/switchery.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <!-- Plugins Js -->
    <script src=\"{{ asset('assets/plugins/switchery/switchery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/plugins/moment/moment.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}\" type=\"text/javascript\"></script>
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
           \$('.table').dataTable({
               dom: 'Bfrtip',
               buttons: [
                   { extend: 'copyHtml5', footer: true },
                   { extend: 'excel', footer: true },
                   { extend: 'csvHtml5', footer: true },
                   { extend: 'pdfHtml5', footer: true }
               ]
           } );

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
{% endblock %}", "hostooPharmacieBundle:Pharmacie:index.html.twig", "/var/www/html/hostoo/src/hostoo/PharmacieBundle/Resources/views/Pharmacie/index.html.twig");
    }
}

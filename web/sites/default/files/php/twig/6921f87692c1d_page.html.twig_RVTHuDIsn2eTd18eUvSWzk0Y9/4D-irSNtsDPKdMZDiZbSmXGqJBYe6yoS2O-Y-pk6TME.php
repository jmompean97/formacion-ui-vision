<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/terra/templates/layout/page.html.twig */
class __TwigTemplate_7f2c485ac06388a55443d0454e7eea4c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 73
        yield "    ";
        if (($context["is_admin"] ?? null)) {
            // line 74
            yield "      ";
            $context["adminCss"] = "role-admin-margin";
            // line 75
            yield "    ";
        }
        // line 76
        yield "
    <header id=\"header\" class=\"header \" role=\"banner\" aria-label=\"";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toggle" => ["affix"]]), "html", null, true);
        yield ">
      ";
        // line 78
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 132
        yield "    </header>
    ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133)) {
            // line 134
            yield "      <div class=\"highlighted\">
        <aside class=\"";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield " section clearfix\" role=\"complementary\">
          ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 140
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 140)) {
            // line 141
            yield "      ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 148
            yield "    ";
        }
        // line 149
        yield "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix container\">
      ";
        // line 150
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 177
        yield "    </div>
    ";
        // line 178
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 178) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 178)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 178))) {
            // line 179
            yield "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield " clearfix\" role=\"complementary\">
          ";
            // line 181
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 181), "html", null, true);
            yield "
          ";
            // line 182
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 182), "html", null, true);
            yield "
          ";
            // line 183
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 183), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 187
        yield "    <footer class=\"site-footer\">
      ";
        // line 188
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 207
        yield "    </footer>
  </div>
</div>


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_admin", "page", "container", "navbar_top_attributes", "container_navbar", "navbar_attributes", "sidebar_collapse", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 79)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 79))) {
            // line 80
            yield "          <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_top_attributes"] ?? null), "removeAttribute", ["data-toggle"], "method", false, false, true, 80), "html", null, true);
            yield ">
          ";
            // line 81
            if (($context["container_navbar"] ?? null)) {
                // line 82
                yield "          <div class=\"container top-nav-bar\">
          ";
            }
            // line 84
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 84), "html", null, true);
            yield "
              ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 85), "html", null, true);
            yield "
              ";
            // line 86
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 86)) {
                // line 87
                yield "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 88
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 88), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 91
            yield "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 92
                yield "          </div>
          ";
            }
            // line 94
            yield "          </nav>
        ";
        }
        // line 96
        yield "
        <nav";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", ["py-lg-0"], "method", false, false, true, 97), "removeAttribute", ["data-toggle"], "method", false, false, true, 97), "html", null, true);
        yield ">
          ";
        // line 98
        if (($context["container_navbar"] ?? null)) {
            // line 99
            yield "          <div class=\"container top-nav-bar\">
          ";
        }
        // line 101
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 101), "html", null, true);
        yield "
            ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 102) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102))) {
            // line 103
            yield "              <div class=\"container-button-responsive\">
                <a href=\"/buscar.html\" class=\"visibility-link-search\" title=\"Buscar\">
                  <div class=\"menu-icon-content\">
                    <i class=\"fas fa-search\"></i> ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Buscar"));
            yield "
                  </div>
                </a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <i class=\"fas fa-times\"></i>
                  <i class=\"fas fa-bars\"></i>
                  <span class=\"navbar-toggler-text\">";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menú"));
            yield "</span>
                </button>
              </div>
              <div class=\"collapse navbar-collapse row\" id=\"CollapsingNavbar\">
                ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 116), "html", null, true);
            yield "
                ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 117)) {
                // line 118
                yield "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 119
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 119), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 122
            yield "\t          </div>
            ";
        }
        // line 124
        yield "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 125
            yield "              <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 127
        yield "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 128
            yield "          </div>
          ";
        }
        // line 130
        yield "        </nav>
      ";
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_featured(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        yield "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 143
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield " clearfix\" role=\"complementary\">
            ";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 144), "html", null, true);
        yield "
          </aside>
        </div>
      ";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "        <div id=\"main\" class=\"container-fluid px-0 pb-100\">
          ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 152), "html", null, true);
        yield "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix mx-0\">
              <main";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["px-0"], "method", false, false, true, 154), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 157
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 163
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 167
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 167)) {
            // line 168
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 170
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 174
        yield "          </div>
        </div>
      ";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 189) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 189)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 189)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 189))) {
            // line 190
            yield "          <div class=\"site-footer__top clearfix row\">
            <div class=\"container\">
              <div class=\"footer-column col-12 col-sm-6 col-lg-3\">";
            // line 192
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 192), "html", null, true);
            yield "</div>
              <div class=\"footer-column col-12 col-sm-6 col-lg-3\">";
            // line 193
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 193), "html", null, true);
            yield "</div>
              <div class=\"footer-column col-12 col-sm-6 col-lg-3\">";
            // line 194
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 194), "html", null, true);
            yield "</div>
              <div class=\"footer-column col-12 col-sm-6 col-lg-3\">";
            // line 195
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 195), "html", null, true);
            yield "</div>
            </div>
          </div>
        ";
        }
        // line 199
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 199)) {
            // line 200
            yield "          <div class=\"site-footer__bottom\">
            <div class=\"container\">
              ";
            // line 202
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 202), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 206
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/terra/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  415 => 206,  408 => 202,  404 => 200,  401 => 199,  394 => 195,  390 => 194,  386 => 193,  382 => 192,  378 => 190,  375 => 189,  368 => 188,  361 => 174,  354 => 170,  348 => 168,  345 => 167,  338 => 163,  332 => 161,  330 => 160,  324 => 157,  318 => 154,  313 => 152,  310 => 151,  303 => 150,  294 => 144,  290 => 143,  287 => 142,  280 => 141,  274 => 130,  270 => 128,  267 => 127,  263 => 125,  260 => 124,  256 => 122,  250 => 119,  247 => 118,  245 => 117,  241 => 116,  234 => 112,  225 => 106,  220 => 103,  218 => 102,  213 => 101,  209 => 99,  207 => 98,  203 => 97,  200 => 96,  196 => 94,  192 => 92,  189 => 91,  183 => 88,  180 => 87,  178 => 86,  174 => 85,  169 => 84,  165 => 82,  163 => 81,  158 => 80,  155 => 79,  148 => 78,  137 => 207,  135 => 188,  132 => 187,  125 => 183,  121 => 182,  117 => 181,  113 => 180,  110 => 179,  108 => 178,  105 => 177,  103 => 150,  100 => 149,  97 => 148,  94 => 141,  91 => 140,  84 => 136,  80 => 135,  77 => 134,  75 => 133,  72 => 132,  70 => 78,  64 => 77,  61 => 76,  58 => 75,  55 => 74,  52 => 73,  48 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/terra/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/terra/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 73, "set" => 74, "block" => 78];
        static $filters = ["t" => 77, "escape" => 77];
        static $functions = ["create_attribute" => 77];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['t', 'escape'],
                ['create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

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

/* themes/custom/terra/templates/navigation/pager.html.twig */
class __TwigTemplate_55047500cc398e553409ae7b00eadacf extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            yield "  <nav aria-label=\"Page navigation\">
    <p id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</p>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 38
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 38)) {
                // line 39
                yield "        <li class=\"page-item btn-el\">
          <a href=\"";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "href", [], "any", false, false, true, 40), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "attributes", [], "any", false, false, true, 40), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">‹</span>
            <span class=\"sr-only\">";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 42), "text", [], "any", true, true, true, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 42), "text", [], "any", false, false, true, 42), t("Previous"))) : (t("Previous"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            } else {
                // line 46
                yield "        <li class=\"page-item btn-disabled\">
          <button class=\"disabled btn-prev\" disabled>";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 47), "text", [], "any", true, true, true, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 47), "text", [], "any", false, false, true, 47), t("Previous"))) : (t("Previous"))), "html", null, true);
                yield "</button>
        </li>
      ";
            }
            // line 50
            yield "      ";
            // line 51
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 51)) {
                // line 52
                yield "        <li class=\"page-item ellipsis-el\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 54
            yield "      ";
            // line 55
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 55)) {
                // line 56
                yield "        <li class=\"page-item simp-el\">
          <a href=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 57), "href", [], "any", false, false, true, 57), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            ";
                // line 58
                if (CoreExtension::inFilter("&page=", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 58), "href", [], "any", false, false, true, 58))) {
                    // line 59
                    yield "              ";
                    $context["primeraPagina"] = ((($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 59), "href", [], "any", false, false, true, 59), "&page=")) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 59), "href", [], "any", false, false, true, 59), "&page="), 1, [], "array", false, false, true, 59)) + 1);
                    // line 60
                    yield "            ";
                } else {
                    // line 61
                    yield "              ";
                    $context["primeraPagina"] = ((($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 61), "href", [], "any", false, false, true, 61), "?page=")) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 61), "href", [], "any", false, false, true, 61), "?page="), 1, [], "array", false, false, true, 61)) + 1);
                    // line 62
                    yield "            ";
                }
                // line 63
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("primeraPagina", $context)) ? (Twig\Extension\CoreExtension::default(($context["primeraPagina"] ?? null), t("First"))) : (t("First"))), "html", null, true);
                yield "
          </a>
        </li>
        ";
                // line 66
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 66)) > 4)) {
                    // line 67
                    yield "          <li class=\"page-item simp-el\">
            <span>...</span>
          </li>
        ";
                }
                // line 71
                yield "      ";
            }
            // line 72
            yield "      ";
            // line 73
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 73));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 74
                yield "          ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    yield "            <li class=\"page-item simp-el ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                    yield "\">
              <span class=\"page-link\">";
                    // line 77
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    // line 78
                    yield "</span>
            </li>
          ";
                } else {
                    // line 81
                    yield "            ";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 81) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 81))) {
                        // line 82
                        yield "              <li class=\"page-item simp-el ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                        yield "\">
                <a href=\"";
                        // line 83
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 83), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 83), "href", "title"), "html", null, true);
                        yield " class=\"page-link\">";
                        // line 84
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                        // line 85
                        yield "</a>
              </li>
            ";
                    }
                    // line 88
                    yield "          ";
                }
                // line 89
                yield "        </li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "      ";
            // line 92
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 92)) {
                // line 93
                yield "        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 93)) > 4)) {
                    // line 94
                    yield "          <li class=\"page-item simp-el\">
            <span>...</span>
          </li>
        ";
                }
                // line 98
                yield "        <li class=\"page-item simp-el\">
          <a href=\"";
                // line 99
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 99), "href", [], "any", false, false, true, 99), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 99), "attributes", [], "any", false, false, true, 99), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            ";
                // line 100
                if (CoreExtension::inFilter("&page=", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 100), "href", [], "any", false, false, true, 100))) {
                    // line 101
                    yield "              ";
                    $context["ultimaPagina"] = ((($_v2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 101), "href", [], "any", false, false, true, 101), "&page=")) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 101), "href", [], "any", false, false, true, 101), "&page="), 1, [], "array", false, false, true, 101)) + 1);
                    // line 102
                    yield "            ";
                } else {
                    // line 103
                    yield "              ";
                    $context["ultimaPagina"] = ((($_v3 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 103), "href", [], "any", false, false, true, 103), "?page=")) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 103), "href", [], "any", false, false, true, 103), "?page="), 1, [], "array", false, false, true, 103)) + 1);
                    // line 104
                    yield "            ";
                }
                // line 105
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("ultimaPagina", $context)) ? (Twig\Extension\CoreExtension::default(($context["ultimaPagina"] ?? null), t("Last"))) : (t("Last"))), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            // line 109
            yield "      ";
            // line 110
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 110)) {
                // line 111
                yield "        <li class=\"page-item ellipsis-el\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 113
            yield "      ";
            // line 114
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 114)) {
                // line 115
                yield "        <li class=\"pager__item--next btn-el\">
          <a href=\"";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 116), "href", [], "any", false, false, true, 116), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 116), "attributes", [], "any", false, false, true, 116), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">›</span>
            <span class=\"sr-only\">";
                // line 118
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 118), "text", [], "any", true, true, true, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 118), "text", [], "any", false, false, true, 118), t("Next"))) : (t("Next"))), "html", null, true);
                yield "</span>
          </a>
        </li>
        ";
            } else {
                // line 122
                yield "          <li class=\"page-item btn-disabled\">
              <button class=\"disabled btn-next\" disabled>";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 123), "text", [], "any", true, true, true, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 123), "text", [], "any", false, false, true, 123), t("Next"))) : (t("Next"))), "html", null, true);
                yield "</button>
          </li>
      ";
            }
            // line 126
            yield "
    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "ellipses", "current", "loop", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/terra/templates/navigation/pager.html.twig";
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
        return array (  307 => 126,  301 => 123,  298 => 122,  291 => 118,  282 => 116,  279 => 115,  276 => 114,  274 => 113,  270 => 111,  267 => 110,  265 => 109,  257 => 105,  254 => 104,  251 => 103,  248 => 102,  245 => 101,  243 => 100,  235 => 99,  232 => 98,  226 => 94,  223 => 93,  220 => 92,  218 => 91,  203 => 89,  200 => 88,  195 => 85,  193 => 84,  186 => 83,  181 => 82,  178 => 81,  173 => 78,  171 => 77,  166 => 75,  163 => 74,  145 => 73,  143 => 72,  140 => 71,  134 => 67,  132 => 66,  125 => 63,  122 => 62,  119 => 61,  116 => 60,  113 => 59,  111 => 58,  103 => 57,  100 => 56,  97 => 55,  95 => 54,  91 => 52,  88 => 51,  86 => 50,  80 => 47,  77 => 46,  70 => 42,  61 => 40,  58 => 39,  55 => 38,  49 => 34,  46 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/terra/templates/navigation/pager.html.twig", "/var/www/html/web/themes/custom/terra/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 32, "set" => 59, "for" => 73];
        static $filters = ["t" => 34, "escape" => 40, "without" => 40, "default" => 42, "split" => 59, "length" => 66];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['t', 'escape', 'without', 'default', 'split', 'length'],
                [],
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

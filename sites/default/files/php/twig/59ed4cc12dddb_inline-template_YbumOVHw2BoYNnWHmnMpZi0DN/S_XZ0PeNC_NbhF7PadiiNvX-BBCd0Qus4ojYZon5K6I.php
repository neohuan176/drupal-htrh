<?php

/* {# inline_template_start #}<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3>{{ title }}</h3></div>
  <div class="panel-body">
    <p>更新时间：{{ created }}</p>
  </div>

  <!-- Table -->
  <table class="table">
	<thead>
		<tr>
			<th>机台号</th>
			<th>BM1</th>
			<th>BM2</th>
			<th>BM3</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<th>现在生产产品</th>
		<td>{{ field_bm1_producting_status1 }}</td>
		<td>{{ field_bm2_producting_status1 }}</td>
		<td>{{ field_bm3_producting_status1 }}</td>
	</tr>
	<tr>
		<th>将要改产产品</th>
		<td>{{ field_bm1_producting_status2 }}</td>
		<td>{{ field_bm2_producting_statu }}</td>
		<td>{{ field_bm3_producting_status2 }}</td>
	</tr>
	<tr>
		<th>预计改产时间</th>
		<td>{{ field_bm1_producting_status3 }}</td>
		<td>{{ field_bm2_producting_status3 }}</td>
		<td>{{ field_bm3_producting_status3 }}</td>
	</tr>
	<tr>
		<th>预计停机时间</th>
		<td>{{ field_bm1_producting_status4 }}</td>
		<td>{{ field_bm2_producting_status4 }}</td>
		<td>{{ field_bm3_producting_status4 }}</td>
	</tr>
	</tbody>
  </table>
</div> */
class __TwigTemplate_8df73fc5148af6c6b89ba1b710f4fcf276949b755f1024b7adc059be6aaeface extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><h3>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3></div>
  <div class=\"panel-body\">
    <p>更新时间：";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</p>
  </div>

  <!-- Table -->
  <table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>机台号</th>
\t\t\t<th>BM1</th>
\t\t\t<th>BM2</th>
\t\t\t<th>BM3</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<th>现在生产产品</th>
\t\t<td>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm1_producting_status1"]) ? $context["field_bm1_producting_status1"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm2_producting_status1"]) ? $context["field_bm2_producting_status1"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm3_producting_status1"]) ? $context["field_bm3_producting_status1"] : null), "html", null, true));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>将要改产产品</th>
\t\t<td>";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm1_producting_status2"]) ? $context["field_bm1_producting_status2"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm2_producting_statu"]) ? $context["field_bm2_producting_statu"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm3_producting_status2"]) ? $context["field_bm3_producting_status2"] : null), "html", null, true));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>预计改产时间</th>
\t\t<td>";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm1_producting_status3"]) ? $context["field_bm1_producting_status3"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm2_producting_status3"]) ? $context["field_bm2_producting_status3"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm3_producting_status3"]) ? $context["field_bm3_producting_status3"] : null), "html", null, true));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>预计停机时间</th>
\t\t<td>";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm1_producting_status4"]) ? $context["field_bm1_producting_status4"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm2_producting_status4"]) ? $context["field_bm2_producting_status4"] : null), "html", null, true));
        echo "</td>
\t\t<td>";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bm3_producting_status4"]) ? $context["field_bm3_producting_status4"] : null), "html", null, true));
        echo "</td>
\t</tr>
\t</tbody>
  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><h3>{{ title }}</h3></div>
  <div class=\"panel-body\">
    <p>更新时间：{{ created }}</p>
  </div>

  <!-- Table -->
  <table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>机台号</th>
\t\t\t<th>BM1</th>
\t\t\t<th>BM2</th>
\t\t\t<th>BM3</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<th>现在生产产品</th>
\t\t<td>{{ field_bm1_producting_status1 }}</td>
\t\t<td>{{ field_bm2_producting_status1 }}</td>
\t\t<td>{{ field_bm3_producting_status1 }}</td>
\t</tr>
\t<tr>
\t\t<th>将要改产产品</th>
\t\t<td>{{ field_bm1_producting_status2 }}</td>
\t\t<td>{{ field_bm2_producting_statu }}</td>
\t\t<td>{{ field_bm3_producting_status2 }}</td>
\t</tr>
\t<tr>
\t\t<th>预计改产时间</th>
\t\t<td>{{ field_bm1_producting_status3 }}</td>
\t\t<td>{{ field_bm2_producting_status3 }}</td>
\t\t<td>{{ field_bm3_producting_status3 }}</td>
\t</tr>
\t<tr>
\t\t<th>预计停机时间</th>
\t\t<td>{{ field_bm1_producting_status4 }}</td>
\t\t<td>{{ field_bm2_producting_status4 }}</td>
\t\t<td>{{ field_bm3_producting_status4 }}</td>
\t</tr>
\t</tbody>
  </table>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 41,  164 => 40,  160 => 39,  153 => 35,  149 => 34,  145 => 33,  138 => 29,  134 => 28,  130 => 27,  123 => 23,  119 => 22,  115 => 21,  96 => 5,  91 => 3,  87 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><h3>{{ title }}</h3></div>
  <div class=\"panel-body\">
    <p>更新时间：{{ created }}</p>
  </div>

  <!-- Table -->
  <table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>机台号</th>
\t\t\t<th>BM1</th>
\t\t\t<th>BM2</th>
\t\t\t<th>BM3</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<th>现在生产产品</th>
\t\t<td>{{ field_bm1_producting_status1 }}</td>
\t\t<td>{{ field_bm2_producting_status1 }}</td>
\t\t<td>{{ field_bm3_producting_status1 }}</td>
\t</tr>
\t<tr>
\t\t<th>将要改产产品</th>
\t\t<td>{{ field_bm1_producting_status2 }}</td>
\t\t<td>{{ field_bm2_producting_statu }}</td>
\t\t<td>{{ field_bm3_producting_status2 }}</td>
\t</tr>
\t<tr>
\t\t<th>预计改产时间</th>
\t\t<td>{{ field_bm1_producting_status3 }}</td>
\t\t<td>{{ field_bm2_producting_status3 }}</td>
\t\t<td>{{ field_bm3_producting_status3 }}</td>
\t</tr>
\t<tr>
\t\t<th>预计停机时间</th>
\t\t<td>{{ field_bm1_producting_status4 }}</td>
\t\t<td>{{ field_bm2_producting_status4 }}</td>
\t\t<td>{{ field_bm3_producting_status4 }}</td>
\t</tr>
\t</tbody>
  </table>
</div>";
    }
}

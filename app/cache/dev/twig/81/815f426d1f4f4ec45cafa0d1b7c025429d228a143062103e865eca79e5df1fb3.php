<?php

/* EntrepriseBundle:Default:index.html.twig */
class __TwigTemplate_666136ed3621da4a7daac1ab2b9b8d4d4dd737125c3655fca96cb92c3f5ae6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "EntrepriseBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80eeb551ece8ce0fa0a36d4de285ed0eec1a2cb085a8ffdec3ba7f35bd53f9e3 = $this->env->getExtension("native_profiler");
        $__internal_80eeb551ece8ce0fa0a36d4de285ed0eec1a2cb085a8ffdec3ba7f35bd53f9e3->enter($__internal_80eeb551ece8ce0fa0a36d4de285ed0eec1a2cb085a8ffdec3ba7f35bd53f9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EntrepriseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80eeb551ece8ce0fa0a36d4de285ed0eec1a2cb085a8ffdec3ba7f35bd53f9e3->leave($__internal_80eeb551ece8ce0fa0a36d4de285ed0eec1a2cb085a8ffdec3ba7f35bd53f9e3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_49541bb1aa89a8e47a238a4205879670d0ff9a07e0ce114ecefb95de73fe579e = $this->env->getExtension("native_profiler");
        $__internal_49541bb1aa89a8e47a238a4205879670d0ff9a07e0ce114ecefb95de73fe579e->enter($__internal_49541bb1aa89a8e47a238a4205879670d0ff9a07e0ce114ecefb95de73fe579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-success pull-right\">Monthly</span>
                        <h5>Income</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">40 886,200</h1>
                        <div class=\"stat-percent font-bold text-success\">98% <i class=\"fa fa-bolt\"></i></div>
                        <small>Total income</small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-info pull-right\">Annual</span>
                        <h5>Orders</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">275,800</h1>
                        <div class=\"stat-percent font-bold text-info\">20% <i class=\"fa fa-level-up\"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-primary pull-right\">Today</span>
                        <h5>Vistits</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">106,120</h1>
                        <div class=\"stat-percent font-bold text-navy\">44% <i class=\"fa fa-level-up\"></i></div>
                        <small>New visits</small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-danger pull-right\">Low value</span>
                        <h5>User activity</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">80,600</h1>
                        <div class=\"stat-percent font-bold text-danger\">38% <i class=\"fa fa-level-down\"></i></div>
                        <small>In first month</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>User project list</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <table class=\"table table-hover no-margins\">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><small>Pending...</small></td>
                                <td><i class=\"fa fa-clock-o\"></i> 11:20pm</td>
                                <td>Samantha</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 24% </td>
                            </tr>
                            <tr>
                                <td><span class=\"label label-warning\">Canceled</span> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 10:40am</td>
                                <td>Monica</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 66% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 01:30pm</td>
                                <td>John</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 54% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 02:20pm</td>
                                <td>Agnes</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 12% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 09:40pm</td>
                                <td>Janet</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 22% </td>
                            </tr>
                            <tr>
                                <td><span class=\"label label-primary\">Completed</span> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 04:10am</td>
                                <td>Amelia</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 66% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class=\"fa fa-clock-o\"></i> 12:08am</td>
                                <td>Damian</td>
                                <td class=\"text-navy\"> <i class=\"fa fa-level-up\"></i> 23% </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Your daily feed</h5>
                        <div class=\"ibox-tools\">
                            <span class=\"label label-warning-light pull-right\">10 Messages</span>
                        </div>
                    </div>
                    <div class=\"ibox-content\">

                        <div>
                            <div class=\"feed-activity-list\">

                                <div class=\"feed-element\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"img/profile.jpg\">
                                    </a>
                                    <div class=\"media-body \">
                                        <small class=\"pull-right\">5m ago</small>
                                        <strong>Monica Smith</strong> posted a new blog. <br>
                                        <small class=\"text-muted\">Today 5:60 pm - 12.06.2014</small>

                                    </div>
                                </div>

                                <div class=\"feed-element\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"img/a2.jpg\">
                                    </a>
                                    <div class=\"media-body \">
                                        <small class=\"pull-right\">2h ago</small>
                                        <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                        <small class=\"text-muted\">Today 2:10 pm - 12.06.2014</small>
                                    </div>
                                </div>
                                <div class=\"feed-element\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"img/a3.jpg\">
                                    </a>
                                    <div class=\"media-body \">
                                        <small class=\"pull-right\">2h ago</small>
                                        <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                        <small class=\"text-muted\">2 days ago at 8:30am</small>
                                    </div>
                                </div>
                                <div class=\"feed-element\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"img/a4.jpg\">
                                    </a>
                                    <div class=\"media-body \">
                                        <small class=\"pull-right text-navy\">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class=\"text-muted\">Yesterday 1:21 pm - 11.06.2014</small>
                                        <div class=\"actions\">
                                            <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-thumbs-up\"></i> Like </a>
                                            <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-heart\"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class=\"btn btn-primary btn-block m-t\"><i class=\"fa fa-arrow-down\"></i> Show More</button>

                        </div>

                    </div>
                </div>

            </div>
            <div class=\"col-lg-4\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Timeline</h5>
                        <span class=\"label label-primary\">Meeting today</span>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"fa fa-wrench\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-user\">
                                <li><a href=\"#\">Config option 1</a>
                                </li>
                                <li><a href=\"#\">Config option 2</a>
                                </li>
                            </ul>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>

                    <div class=\"ibox-content inspinia-timeline\">

                        <div class=\"timeline-item\">
                            <div class=\"row\">
                                <div class=\"col-xs-3 date\">
                                    <i class=\"fa fa-briefcase\"></i>
                                    6:00 am
                                    <br/>
                                    <small class=\"text-navy\">2 hour ago</small>
                                </div>
                                <div class=\"col-xs-7 content no-top-border\">
                                    <p class=\"m-b-xs\"><strong>Meeting</strong></p>

                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                                </div>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"row\">
                                <div class=\"col-xs-3 date\">
                                    <i class=\"fa fa-file-text\"></i>
                                    7:00 am
                                    <br/>
                                    <small class=\"text-navy\">3 hour ago</small>
                                </div>
                                <div class=\"col-xs-7 content\">
                                    <p class=\"m-b-xs\"><strong>Send documents to Mike</strong></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"row\">

            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Issue list</h5>
                        <div class=\"ibox-tools\">
                            <a href=\"#\" class=\"btn btn-primary btn-xs\">Add new issue</a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">

                        <div class=\"m-b-lg\">

                            <div class=\"input-group\">
                                <input type=\"text\" placeholder=\"Search issue by name...\" class=\" form-control\">
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-white\"> Search</button>
                                    </span>
                            </div>
                            <div class=\"m-t-md\">

                                <div class=\"pull-right\">
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-comments\"></i> </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-user\"></i> </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-list\"></i> </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-pencil\"></i> </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-print\"></i> </button>
                                    <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-cogs\"></i> </button>
                                </div>

                                <strong>Found 61 issues.</strong>



                            </div>

                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class=\"label label-primary\">Added</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-23
                                        </a>

                                        <small>
                                            This is issue with the coresponding note
                                        </small>
                                    </td>
                                    <td>
                                        Adrian Novak
                                    </td>
                                    <td>
                                        12.02.2015 10:00 am
                                    </td>
                                    <td>
                                        <span class=\"pie\">0.52,1.041</span>
                                        2d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                        <button class=\"btn btn-white btn-xs\"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-primary\">Added</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-17
                                        </a>

                                        <small>
                                            Desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                        </small>
                                    </td>
                                    <td>
                                        Anna Smith
                                    </td>
                                    <td>
                                        10.02.2015 05:32 am
                                    </td>
                                    <td>
                                        <span class=\"pie\">3,2</span>
                                        2d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-primary\">Added</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-12
                                        </a>

                                        <small>
                                            It is a long established fact that a reader will be
                                        </small>
                                    </td>
                                    <td>
                                        Anthony Jackson
                                    </td>
                                    <td>
                                        02.03.2015 06:02 am
                                    </td>
                                    <td>
                                        <span class=\"pie\">1,2</span>
                                        1d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-primary\">Added</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-11
                                        </a>

                                        <small>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                        </small>
                                    </td>
                                    <td>
                                        Monica Proven
                                    </td>
                                    <td>
                                        01.10.2015 11:02 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">4,2</span>
                                        3d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Rag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-warning\">Fixed</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-07
                                        </a>

                                        <small>
                                            Always free from repetition, injected humour, or non-characteristic words etc.
                                        </small>
                                    </td>
                                    <td>
                                        Alex Ferguson
                                    </td>
                                    <td>
                                        28.11.2015 05:10 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">1,2</span>
                                        2d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-warning\">Fixed</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-07
                                        </a>

                                        <small>
                                            Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit am
                                        </small>
                                    </td>
                                    <td>
                                        Mark Conor
                                    </td>
                                    <td>
                                        18.09.2015 06:20 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">3,2</span>
                                        3d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Tag</button>
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-warning\">Fixed</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-06
                                        </a>

                                        <small>
                                            Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit am
                                        </small>
                                    </td>
                                    <td>
                                        Carol Jackson
                                    </td>
                                    <td>
                                        11.03.2015 07:30 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">3,2</span>
                                        2d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-warning\">Fixed</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-05
                                        </a>

                                        <small>
                                            Content here, content here', making it look like readable English. Many desktop
                                        </small>
                                    </td>
                                    <td>
                                        Carol Jackson
                                    </td>
                                    <td>
                                        05.04.2015 08:40 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">3,2</span>
                                        2d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"label label-warning\">Fixed</span>
                                    </td>
                                    <td class=\"issue-info\">
                                        <a href=\"#\">
                                            ISSUE-04
                                        </a>

                                        <small>
                                            Virginia, looked up one of the more obscure Latin words, consectetur
                                        </small>
                                    </td>
                                    <td>
                                        Monica Smith
                                    </td>
                                    <td>
                                        10.06.2014 08:10 pm
                                    </td>
                                    <td>
                                        <span class=\"pie\">5,7</span>
                                        4d
                                    </td>
                                    <td class=\"text-right\">
                                        <button class=\"btn btn-white btn-xs\"> Mag</button>
                                        <button class=\"btn btn-white btn-xs\"> Cag</button>
                                        <button class=\"btn btn-white btn-xs\"> Dag</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
";
        
        $__internal_49541bb1aa89a8e47a238a4205879670d0ff9a07e0ce114ecefb95de73fe579e->leave($__internal_49541bb1aa89a8e47a238a4205879670d0ff9a07e0ce114ecefb95de73fe579e_prof);

    }

    public function getTemplateName()
    {
        return "EntrepriseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="wrapper wrapper-content">*/
/*         <div class="row">*/
/*             <div class="col-lg-3">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <span class="label label-success pull-right">Monthly</span>*/
/*                         <h5>Income</h5>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/*                         <h1 class="no-margins">40 886,200</h1>*/
/*                         <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>*/
/*                         <small>Total income</small>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <span class="label label-info pull-right">Annual</span>*/
/*                         <h5>Orders</h5>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/*                         <h1 class="no-margins">275,800</h1>*/
/*                         <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>*/
/*                         <small>New orders</small>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <span class="label label-primary pull-right">Today</span>*/
/*                         <h5>Vistits</h5>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/*                         <h1 class="no-margins">106,120</h1>*/
/*                         <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>*/
/*                         <small>New visits</small>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <span class="label label-danger pull-right">Low value</span>*/
/*                         <h5>User activity</h5>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/*                         <h1 class="no-margins">80,600</h1>*/
/*                         <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>*/
/*                         <small>In first month</small>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-4">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <h5>User project list</h5>*/
/*                         <div class="ibox-tools">*/
/*                             <a class="collapse-link">*/
/*                                 <i class="fa fa-chevron-up"></i>*/
/*                             </a>*/
/*                             <a class="close-link">*/
/*                                 <i class="fa fa-times"></i>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/*                         <table class="table table-hover no-margins">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Status</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>User</th>*/
/*                                 <th>Value</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <td><small>Pending...</small></td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 11:20pm</td>*/
/*                                 <td>Samantha</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><span class="label label-warning">Canceled</span> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 10:40am</td>*/
/*                                 <td>Monica</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><small>Pending...</small> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 01:30pm</td>*/
/*                                 <td>John</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><small>Pending...</small> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 02:20pm</td>*/
/*                                 <td>Agnes</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><small>Pending...</small> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 09:40pm</td>*/
/*                                 <td>Janet</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><span class="label label-primary">Completed</span> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 04:10am</td>*/
/*                                 <td>Amelia</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td><small>Pending...</small> </td>*/
/*                                 <td><i class="fa fa-clock-o"></i> 12:08am</td>*/
/*                                 <td>Damian</td>*/
/*                                 <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <h5>Your daily feed</h5>*/
/*                         <div class="ibox-tools">*/
/*                             <span class="label label-warning-light pull-right">10 Messages</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/* */
/*                         <div>*/
/*                             <div class="feed-activity-list">*/
/* */
/*                                 <div class="feed-element">*/
/*                                     <a href="profile.html" class="pull-left">*/
/*                                         <img alt="image" class="img-circle" src="img/profile.jpg">*/
/*                                     </a>*/
/*                                     <div class="media-body ">*/
/*                                         <small class="pull-right">5m ago</small>*/
/*                                         <strong>Monica Smith</strong> posted a new blog. <br>*/
/*                                         <small class="text-muted">Today 5:60 pm - 12.06.2014</small>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="feed-element">*/
/*                                     <a href="profile.html" class="pull-left">*/
/*                                         <img alt="image" class="img-circle" src="img/a2.jpg">*/
/*                                     </a>*/
/*                                     <div class="media-body ">*/
/*                                         <small class="pull-right">2h ago</small>*/
/*                                         <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>*/
/*                                         <small class="text-muted">Today 2:10 pm - 12.06.2014</small>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="feed-element">*/
/*                                     <a href="profile.html" class="pull-left">*/
/*                                         <img alt="image" class="img-circle" src="img/a3.jpg">*/
/*                                     </a>*/
/*                                     <div class="media-body ">*/
/*                                         <small class="pull-right">2h ago</small>*/
/*                                         <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>*/
/*                                         <small class="text-muted">2 days ago at 8:30am</small>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="feed-element">*/
/*                                     <a href="profile.html" class="pull-left">*/
/*                                         <img alt="image" class="img-circle" src="img/a4.jpg">*/
/*                                     </a>*/
/*                                     <div class="media-body ">*/
/*                                         <small class="pull-right text-navy">5h ago</small>*/
/*                                         <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>*/
/*                                         <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>*/
/*                                         <div class="actions">*/
/*                                             <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>*/
/*                                             <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <div class="ibox float-e-margins">*/
/*                     <div class="ibox-title">*/
/*                         <h5>Timeline</h5>*/
/*                         <span class="label label-primary">Meeting today</span>*/
/*                         <div class="ibox-tools">*/
/*                             <a class="collapse-link">*/
/*                                 <i class="fa fa-chevron-up"></i>*/
/*                             </a>*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                 <i class="fa fa-wrench"></i>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-user">*/
/*                                 <li><a href="#">Config option 1</a>*/
/*                                 </li>*/
/*                                 <li><a href="#">Config option 2</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <a class="close-link">*/
/*                                 <i class="fa fa-times"></i>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="ibox-content inspinia-timeline">*/
/* */
/*                         <div class="timeline-item">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-3 date">*/
/*                                     <i class="fa fa-briefcase"></i>*/
/*                                     6:00 am*/
/*                                     <br/>*/
/*                                     <small class="text-navy">2 hour ago</small>*/
/*                                 </div>*/
/*                                 <div class="col-xs-7 content no-top-border">*/
/*                                     <p class="m-b-xs"><strong>Meeting</strong></p>*/
/* */
/*                                     <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="timeline-item">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-3 date">*/
/*                                     <i class="fa fa-file-text"></i>*/
/*                                     7:00 am*/
/*                                     <br/>*/
/*                                     <small class="text-navy">3 hour ago</small>*/
/*                                 </div>*/
/*                                 <div class="col-xs-7 content">*/
/*                                     <p class="m-b-xs"><strong>Send documents to Mike</strong></p>*/
/*                                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <div class="ibox">*/
/*                     <div class="ibox-title">*/
/*                         <h5>Issue list</h5>*/
/*                         <div class="ibox-tools">*/
/*                             <a href="#" class="btn btn-primary btn-xs">Add new issue</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ibox-content">*/
/* */
/*                         <div class="m-b-lg">*/
/* */
/*                             <div class="input-group">*/
/*                                 <input type="text" placeholder="Search issue by name..." class=" form-control">*/
/*                                     <span class="input-group-btn">*/
/*                                         <button type="button" class="btn btn-white"> Search</button>*/
/*                                     </span>*/
/*                             </div>*/
/*                             <div class="m-t-md">*/
/* */
/*                                 <div class="pull-right">*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-comments"></i> </button>*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-user"></i> </button>*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-list"></i> </button>*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-pencil"></i> </button>*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-print"></i> </button>*/
/*                                     <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-cogs"></i> </button>*/
/*                                 </div>*/
/* */
/*                                 <strong>Found 61 issues.</strong>*/
/* */
/* */
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="table-responsive">*/
/*                             <table class="table table-hover issue-tracker">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-primary">Added</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-23*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             This is issue with the coresponding note*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Adrian Novak*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         12.02.2015 10:00 am*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">0.52,1.041</span>*/
/*                                         2d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Rag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-primary">Added</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-17*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Desktop publishing packages and web page editors now use Lorem Ipsum as their default model text*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Anna Smith*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         10.02.2015 05:32 am*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">3,2</span>*/
/*                                         2d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Rag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-primary">Added</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-12*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             It is a long established fact that a reader will be*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Anthony Jackson*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         02.03.2015 06:02 am*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">1,2</span>*/
/*                                         1d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-primary">Added</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-11*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             There are many variations of passages of Lorem Ipsum available, but the majority have suffered*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Monica Proven*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         01.10.2015 11:02 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">4,2</span>*/
/*                                         3d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Rag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-warning">Fixed</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-07*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Always free from repetition, injected humour, or non-characteristic words etc.*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Alex Ferguson*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         28.11.2015 05:10 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">1,2</span>*/
/*                                         2d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-warning">Fixed</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-07*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit am*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Mark Conor*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         18.09.2015 06:20 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">3,2</span>*/
/*                                         3d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Tag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-warning">Fixed</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-06*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit am*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Carol Jackson*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         11.03.2015 07:30 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">3,2</span>*/
/*                                         2d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-warning">Fixed</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-05*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Content here, content here', making it look like readable English. Many desktop*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Carol Jackson*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         05.04.2015 08:40 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">3,2</span>*/
/*                                         2d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <span class="label label-warning">Fixed</span>*/
/*                                     </td>*/
/*                                     <td class="issue-info">*/
/*                                         <a href="#">*/
/*                                             ISSUE-04*/
/*                                         </a>*/
/* */
/*                                         <small>*/
/*                                             Virginia, looked up one of the more obscure Latin words, consectetur*/
/*                                         </small>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         Monica Smith*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         10.06.2014 08:10 pm*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <span class="pie">5,7</span>*/
/*                                         4d*/
/*                                     </td>*/
/*                                     <td class="text-right">*/
/*                                         <button class="btn btn-white btn-xs"> Mag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Cag</button>*/
/*                                         <button class="btn btn-white btn-xs"> Dag</button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

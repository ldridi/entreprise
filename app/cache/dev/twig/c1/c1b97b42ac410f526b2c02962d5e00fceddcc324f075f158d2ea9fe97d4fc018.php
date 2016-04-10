<?php

/* layout/layout.html.twig */
class __TwigTemplate_fd136d08adf4f944529af4c7f5e99a0552bdce72f88af895141bca1f120f6d3e extends Twig_Template
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
        $__internal_7b0f7849d503f000c0b5530a2c86f03f0ffc4e3133bc336da88a307fadb12238 = $this->env->getExtension("native_profiler");
        $__internal_7b0f7849d503f000c0b5530a2c86f03f0ffc4e3133bc336da88a307fadb12238->enter($__internal_7b0f7849d503f000c0b5530a2c86f03f0ffc4e3133bc336da88a307fadb12238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
    <div id=\"wrapper\">
        <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav metismenu\" id=\"side-menu\">
                    <li class=\"nav-header\">
                        <div class=\"dropdown profile-element\"> <span>
                            <img alt=\"image\" class=\"img-circle\" src=\"img/profile_small.jpg\" />
                             </span>
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">David Williams</strong>
                             </span> <span class=\"text-muted text-xs block\">Art Director <b class=\"caret\"></b></span> </span> </a>
                            <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                                <li><a href=\"profile.html\">Profile</a></li>
                                <li><a href=\"contacts.html\">Contacts</a></li>
                                <li><a href=\"mailbox.html\">Mailbox</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"login.html\">Logout</a></li>
                            </ul>
                        </div>
                        <div class=\"logo-element\">
                            IN+
                        </div>
                    </li>
                    <li class=\"active\">
                        <a href=\"dashboard_2.html\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Dashboards</span> <span class=\"fa arrow\"></span></a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Entreprise</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("gestionEntreprise");
        echo "\">Gestion</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("contacts");
        echo "\">Mes contacts</a></li>
                            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("soutraitance");
        echo "\">Soutraitance</a></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("statistique");
        echo "\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Documents</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"graph_flot.html\">Gestion ds utilisateurs</a></li>
                            <li><a href=\"graph_morris.html\">Mes contacts</a></li>
                            <li><a href=\"contacts_2.html\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Projets</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"projects.html\">Gerer</a></li>
                            <li><a href=\"teams_board.html\">Equipe</a></li>
                            <li><a href=\"issue_tracker.html\">Les problemes</a></li>
                            <li><a href=\"contacts_2.html\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Département </span><span class=\"label label-danger pull-right\">10</span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"mailbox.html\">Gerer</a></li>
                            <li><a href=\"contacts_2.html\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Reunions </span><span class=\"label label-danger pull-right\">10</span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"mailbox.html\">Inbox</a></li>
                            <li><a href=\"mail_detail.html\">Email view</a></li>
                            <li><a href=\"mail_compose.html\">Compose email</a></li>
                            <li><a href=\"email_template.html\">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"mailbox.html\"><i class=\"fa fa-envelope\"></i> <span class=\"nav-label\">Messagerie </span><span class=\"label label-warning pull-right\">16/24</span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"mailbox.html\">Inbox</a></li>
                            <li><a href=\"mail_detail.html\">Email view</a></li>
                            <li><a href=\"mail_compose.html\">Compose email</a></li>
                            <li><a href=\"email_template.html\">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i> <span class=\"nav-label\">Statistiques</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li><a href=\"graph_flot.html\">Gestion ds utilisateurs</a></li>
                            <li><a href=\"graph_morris.html\">Mes contacts</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
        <div id=\"page-wrapper\" class=\"gray-bg\">
            <div class=\"row border-bottom\">
                <nav class=\"navbar navbar-static-top white-bg\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>
                        <form role=\"search\" class=\"navbar-form-custom\" action=\"http://webapplayers.com/inspinia_admin-v2.5/search_results.html\">
                            <div class=\"form-group\">
                                <input type=\"text\" placeholder=\"Search for something...\" class=\"form-control\" name=\"top-search\" id=\"top-search\">
                            </div>
                        </form>
                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li>
                            <span class=\"m-r-sm text-muted welcome-message\">Welcome to Carthage Solutions</span>
                        </li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"fa fa-envelope\"></i>  <span class=\"label label-warning\">16</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-messages\">
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"img/a7.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right\">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class=\"text-muted\">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"img/a4.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right text-navy\">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class=\"text-muted\">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"dropdown-messages-box\">
                                        <a href=\"profile.html\" class=\"pull-left\">
                                            <img alt=\"image\" class=\"img-circle\" src=\"img/profile.jpg\">
                                        </a>
                                        <div>
                                            <small class=\"pull-right\">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class=\"text-muted\">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"text-center link-block\">
                                        <a href=\"mailbox.html\">
                                            <i class=\"fa fa-envelope\"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"fa fa-bell\"></i>  <span class=\"label label-primary\">8</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-alerts\">
                                <li>
                                    <a href=\"mailbox.html\">
                                        <div>
                                            <i class=\"fa fa-envelope fa-fw\"></i> You have 16 messages
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"profile.html\">
                                        <div>
                                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                            <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"grid_options.html\">
                                        <div>
                                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <div class=\"text-center link-block\">
                                        <a href=\"notifications.html\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href=\"login.html\">
                                <i class=\"fa fa-sign-out\"></i> Log out
                            </a>
                        </li>
                        <li>
                            <a class=\"right-sidebar-toggle\">
                                <i class=\"fa fa-tasks\"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>



        ";
        // line 233
        $this->displayBlock('body', $context, $blocks);
        // line 234
        echo "





            <div class=\"footer\">
                <div class=\"pull-right\">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>
        <div id=\"right-sidebar\">
            <div class=\"sidebar-container\">

                <ul class=\"nav nav-tabs navs-3\">

                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-1\">
                            Notes
                        </a></li>
                    <li><a data-toggle=\"tab\" href=\"#tab-2\">
                            Projects
                        </a></li>
                    <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-3\">
                            <i class=\"fa fa-gear\"></i>
                        </a></li>
                </ul>

                <div class=\"tab-content\">


                    <div id=\"tab-1\" class=\"tab-pane active\">

                        <div class=\"sidebar-title\">
                            <h3> <i class=\"fa fa-comments-o\"></i> Latest Notes</h3>
                            <small><i class=\"fa fa-tim\"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a1.jpg\">

                                        <div class=\"m-t-xs\">
                                            <i class=\"fa fa-star text-warning\"></i>
                                            <i class=\"fa fa-star text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class=\"text-muted\">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a2.jpg\">
                                    </div>
                                    <div class=\"media-body\">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class=\"text-muted\">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a3.jpg\">

                                        <div class=\"m-t-xs\">
                                            <i class=\"fa fa-star text-warning\"></i>
                                            <i class=\"fa fa-star text-warning\"></i>
                                            <i class=\"fa fa-star text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class=\"text-muted\">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a4.jpg\">
                                    </div>

                                    <div class=\"media-body\">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class=\"text-muted\">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a8.jpg\">
                                    </div>
                                    <div class=\"media-body\">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class=\"text-muted\">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a7.jpg\">
                                    </div>
                                    <div class=\"media-body\">
                                        Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.
                                        <br>
                                        <small class=\"text-muted\">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a3.jpg\">

                                        <div class=\"m-t-xs\">
                                            <i class=\"fa fa-star text-warning\"></i>
                                            <i class=\"fa fa-star text-warning\"></i>
                                            <i class=\"fa fa-star text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class=\"text-muted\">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class=\"sidebar-message\">
                                <a href=\"#\">
                                    <div class=\"pull-left text-center\">
                                        <img alt=\"image\" class=\"img-circle message-avatar\" src=\"img/a4.jpg\">
                                    </div>
                                    <div class=\"media-body\">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class=\"text-muted\">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id=\"tab-2\" class=\"tab-pane\">

                        <div class=\"sidebar-title\">
                            <h3> <i class=\"fa fa-cube\"></i> Latest projects</h3>
                            <small><i class=\"fa fa-tim\"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class=\"sidebar-list\">
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class=\"small\">Completion with: 22%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 22%;\" class=\"progress-bar progress-bar-warning\"></div>
                                    </div>
                                    <div class=\"small text-muted m-t-xs\">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class=\"small\">Completion with: 48%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 48%;\" class=\"progress-bar\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class=\"small\">Completion with: 14%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 14%;\" class=\"progress-bar progress-bar-info\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-primary pull-right\">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class=\"small pull-right m-t-xs\">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class=\"small\">Completion with: 22%</div>
                                    <div class=\"small text-muted m-t-xs\">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class=\"small\">Completion with: 22%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 22%;\" class=\"progress-bar progress-bar-warning\"></div>
                                    </div>
                                    <div class=\"small text-muted m-t-xs\">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class=\"small\">Completion with: 48%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 48%;\" class=\"progress-bar\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"small pull-right m-t-xs\">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class=\"small\">Completion with: 14%</div>
                                    <div class=\"progress progress-mini\">
                                        <div style=\"width: 14%;\" class=\"progress-bar progress-bar-info\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-primary pull-right\">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class=\"small pull-right m-t-xs\">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class=\"small\">Completion with: 22%</div>
                                    <div class=\"small text-muted m-t-xs\">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id=\"tab-3\" class=\"tab-pane\">

                        <div class=\"sidebar-title\">
                            <h3><i class=\"fa fa-gears\"></i> Settings</h3>
                            <small><i class=\"fa fa-tim\"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class=\"setings-item\">
                    <span>
                        Show notifications
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example\">
                                    <label class=\"onoffswitch-label\" for=\"example\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Disable Chat
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" name=\"collapsemenu\" checked class=\"onoffswitch-checkbox\" id=\"example2\">
                                    <label class=\"onoffswitch-label\" for=\"example2\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Enable history
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example3\">
                                    <label class=\"onoffswitch-label\" for=\"example3\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Show charts
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example4\">
                                    <label class=\"onoffswitch-label\" for=\"example4\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Offline users
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" checked name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example5\">
                                    <label class=\"onoffswitch-label\" for=\"example5\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Global search
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" checked name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example6\">
                                    <label class=\"onoffswitch-label\" for=\"example6\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"setings-item\">
                    <span>
                        Update everyday
                    </span>
                            <div class=\"switch\">
                                <div class=\"onoffswitch\">
                                    <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example7\">
                                    <label class=\"onoffswitch-label\" for=\"example7\">
                                        <span class=\"onoffswitch-inner\"></span>
                                        <span class=\"onoffswitch-switch\"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"sidebar-content\">
                            <h4>Settings</h4>
                            <div class=\"small\">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- Mainly scripts -->
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Flot -->
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.symbol.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>

    <!-- Peity -->
    <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/peity-demo.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom and plugin javascript -->
    <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery UI -->
    <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Jvectormap -->
    <script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

    <!-- EayPIE -->
    <script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>

    <!-- Sparkline -->
    <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Sparkline demo data  -->
    <script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/sparkline-demo.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function() {
            \$('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            \$('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: \"Number of orders\",
                    data: data3,
                    color: \"#1ab394\",
                    bars: {
                        show: true,
                        align: \"center\",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: \"Payments\",
                    data: data2,
                    yaxis: 2,
                    color: \"#1C84C6\",
                    lines: {
                        lineWidth:1,
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: \"time\",
                    tickSize: [3, \"day\"],
                    tickLength: 0,
                    axisLabel: \"Date\",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: \"#d5d5d5\"
                },
                yaxes: [{
                    position: \"left\",
                    max: 1070,
                    color: \"#d5d5d5\",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: \"right\",
                    clolor: \"#d5d5d5\",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: \"#000000\",
                    position: \"nw\"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            \$.plot(\$(\"#flot-dashboard-chart\"), dataset, options);

            var mapData = {
                \"US\": 298,
                \"SA\": 200,
                \"DE\": 220,
                \"FR\": 540,
                \"CN\": 120,
                \"AU\": 760,
                \"BR\": 550,
                \"IN\": 200,
                \"GB\": 120,
            };

            \$('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: \"transparent\",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        \"fill-opacity\": 0.9,
                        stroke: 'none',
                        \"stroke-width\": 0,
                        \"stroke-opacity\": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: [\"#1ab394\", \"#22d6b1\"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
        ";
        // line 831
        $this->displayBlock('javascripts', $context, $blocks);
        // line 832
        echo "    </body>
</html>
";
        
        $__internal_7b0f7849d503f000c0b5530a2c86f03f0ffc4e3133bc336da88a307fadb12238->leave($__internal_7b0f7849d503f000c0b5530a2c86f03f0ffc4e3133bc336da88a307fadb12238_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcef32c63950ee47157d958e5f2aa1386205b0776277a505c7f6642bdab593d1 = $this->env->getExtension("native_profiler");
        $__internal_fcef32c63950ee47157d958e5f2aa1386205b0776277a505c7f6642bdab593d1->enter($__internal_fcef32c63950ee47157d958e5f2aa1386205b0776277a505c7f6642bdab593d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fcef32c63950ee47157d958e5f2aa1386205b0776277a505c7f6642bdab593d1->leave($__internal_fcef32c63950ee47157d958e5f2aa1386205b0776277a505c7f6642bdab593d1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb5ec8a2fbd6f89f2005636ee071db04bf3e90f7c97006c96a4487a3530152b7 = $this->env->getExtension("native_profiler");
        $__internal_fb5ec8a2fbd6f89f2005636ee071db04bf3e90f7c97006c96a4487a3530152b7->enter($__internal_fb5ec8a2fbd6f89f2005636ee071db04bf3e90f7c97006c96a4487a3530152b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fb5ec8a2fbd6f89f2005636ee071db04bf3e90f7c97006c96a4487a3530152b7->leave($__internal_fb5ec8a2fbd6f89f2005636ee071db04bf3e90f7c97006c96a4487a3530152b7_prof);

    }

    // line 233
    public function block_body($context, array $blocks = array())
    {
        $__internal_625a100da2ebdb630e9f9d8748aed4b0a993c7f7819cd13d984b289186e35b99 = $this->env->getExtension("native_profiler");
        $__internal_625a100da2ebdb630e9f9d8748aed4b0a993c7f7819cd13d984b289186e35b99->enter($__internal_625a100da2ebdb630e9f9d8748aed4b0a993c7f7819cd13d984b289186e35b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_625a100da2ebdb630e9f9d8748aed4b0a993c7f7819cd13d984b289186e35b99->leave($__internal_625a100da2ebdb630e9f9d8748aed4b0a993c7f7819cd13d984b289186e35b99_prof);

    }

    // line 831
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8d6308dc4e8adf4577151cb5732b47f87f1f46e005a83308f3ec220ea97bed6 = $this->env->getExtension("native_profiler");
        $__internal_a8d6308dc4e8adf4577151cb5732b47f87f1f46e005a83308f3ec220ea97bed6->enter($__internal_a8d6308dc4e8adf4577151cb5732b47f87f1f46e005a83308f3ec220ea97bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8d6308dc4e8adf4577151cb5732b47f87f1f46e005a83308f3ec220ea97bed6->leave($__internal_a8d6308dc4e8adf4577151cb5732b47f87f1f46e005a83308f3ec220ea97bed6_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1001 => 831,  990 => 233,  979 => 7,  967 => 6,  958 => 832,  956 => 831,  788 => 666,  782 => 663,  776 => 660,  770 => 657,  766 => 656,  760 => 653,  754 => 650,  750 => 649,  744 => 646,  740 => 645,  734 => 642,  730 => 641,  726 => 640,  722 => 639,  718 => 638,  714 => 637,  710 => 636,  704 => 633,  700 => 632,  696 => 631,  692 => 630,  294 => 234,  292 => 233,  104 => 48,  100 => 47,  96 => 46,  92 => 45,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">*/
/* */
/*         <link href="{{ asset('css/animate.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*     <div id="wrapper">*/
/*         <nav class="navbar-default navbar-static-side" role="navigation">*/
/*             <div class="sidebar-collapse">*/
/*                 <ul class="nav metismenu" id="side-menu">*/
/*                     <li class="nav-header">*/
/*                         <div class="dropdown profile-element"> <span>*/
/*                             <img alt="image" class="img-circle" src="img/profile_small.jpg" />*/
/*                              </span>*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>*/
/*                              </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>*/
/*                             <ul class="dropdown-menu animated fadeInRight m-t-xs">*/
/*                                 <li><a href="profile.html">Profile</a></li>*/
/*                                 <li><a href="contacts.html">Contacts</a></li>*/
/*                                 <li><a href="mailbox.html">Mailbox</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="login.html">Logout</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="logo-element">*/
/*                             IN+*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="dashboard_2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Entreprise</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="{{ path('gestionEntreprise') }}">Gestion</a></li>*/
/*                             <li><a href="{{ path('contacts') }}">Mes contacts</a></li>*/
/*                             <li><a href="{{ path('soutraitance') }}">Soutraitance</a></li>*/
/*                             <li><a href="{{ path('statistique') }}">Statistiques</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Documents</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="graph_flot.html">Gestion ds utilisateurs</a></li>*/
/*                             <li><a href="graph_morris.html">Mes contacts</a></li>*/
/*                             <li><a href="contacts_2.html">Statistiques</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Projets</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="projects.html">Gerer</a></li>*/
/*                             <li><a href="teams_board.html">Equipe</a></li>*/
/*                             <li><a href="issue_tracker.html">Les problemes</a></li>*/
/*                             <li><a href="contacts_2.html">Statistiques</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Département </span><span class="label label-danger pull-right">10</span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="mailbox.html">Gerer</a></li>*/
/*                             <li><a href="contacts_2.html">Statistiques</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Reunions </span><span class="label label-danger pull-right">10</span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="mailbox.html">Inbox</a></li>*/
/*                             <li><a href="mail_detail.html">Email view</a></li>*/
/*                             <li><a href="mail_compose.html">Compose email</a></li>*/
/*                             <li><a href="email_template.html">Email templates</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Messagerie </span><span class="label label-warning pull-right">16/24</span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="mailbox.html">Inbox</a></li>*/
/*                             <li><a href="mail_detail.html">Email view</a></li>*/
/*                             <li><a href="mail_compose.html">Compose email</a></li>*/
/*                             <li><a href="email_template.html">Email templates</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistiques</span><span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-second-level collapse">*/
/*                             <li><a href="graph_flot.html">Gestion ds utilisateurs</a></li>*/
/*                             <li><a href="graph_morris.html">Mes contacts</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/*         </nav>*/
/*         <div id="page-wrapper" class="gray-bg">*/
/*             <div class="row border-bottom">*/
/*                 <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">*/
/*                     <div class="navbar-header">*/
/*                         <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>*/
/*                         <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.5/search_results.html">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                     <ul class="nav navbar-top-links navbar-right">*/
/*                         <li>*/
/*                             <span class="m-r-sm text-muted welcome-message">Welcome to Carthage Solutions</span>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">*/
/*                                 <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-messages">*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="img/a7.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right">46h ago</small>*/
/*                                             <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>*/
/*                                             <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="img/a4.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right text-navy">5h ago</small>*/
/*                                             <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>*/
/*                                             <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="dropdown-messages-box">*/
/*                                         <a href="profile.html" class="pull-left">*/
/*                                             <img alt="image" class="img-circle" src="img/profile.jpg">*/
/*                                         </a>*/
/*                                         <div>*/
/*                                             <small class="pull-right">23h ago</small>*/
/*                                             <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>*/
/*                                             <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="text-center link-block">*/
/*                                         <a href="mailbox.html">*/
/*                                             <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">*/
/*                                 <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-alerts">*/
/*                                 <li>*/
/*                                     <a href="mailbox.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-envelope fa-fw"></i> You have 16 messages*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="profile.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                                             <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="grid_options.html">*/
/*                                         <div>*/
/*                                             <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <div class="text-center link-block">*/
/*                                         <a href="notifications.html">*/
/*                                             <strong>See All Alerts</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/* */
/*                         <li>*/
/*                             <a href="login.html">*/
/*                                 <i class="fa fa-sign-out"></i> Log out*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="right-sidebar-toggle">*/
/*                                 <i class="fa fa-tasks"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </nav>*/
/*             </div>*/
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             <div class="footer">*/
/*                 <div class="pull-right">*/
/*                     10GB of <strong>250GB</strong> Free.*/
/*                 </div>*/
/*                 <div>*/
/*                     <strong>Copyright</strong> Example Company &copy; 2014-2015*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="right-sidebar">*/
/*             <div class="sidebar-container">*/
/* */
/*                 <ul class="nav nav-tabs navs-3">*/
/* */
/*                     <li class="active"><a data-toggle="tab" href="#tab-1">*/
/*                             Notes*/
/*                         </a></li>*/
/*                     <li><a data-toggle="tab" href="#tab-2">*/
/*                             Projects*/
/*                         </a></li>*/
/*                     <li class=""><a data-toggle="tab" href="#tab-3">*/
/*                             <i class="fa fa-gear"></i>*/
/*                         </a></li>*/
/*                 </ul>*/
/* */
/*                 <div class="tab-content">*/
/* */
/* */
/*                     <div id="tab-1" class="tab-pane active">*/
/* */
/*                         <div class="sidebar-title">*/
/*                             <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>*/
/*                             <small><i class="fa fa-tim"></i> You have 10 new message.</small>*/
/*                         </div>*/
/* */
/*                         <div>*/
/* */
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">*/
/* */
/*                                         <div class="m-t-xs">*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/* */
/*                                         There are many variations of passages of Lorem Ipsum available.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Today 4:21 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         The point of using Lorem Ipsum is that it has a more-or-less normal.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Yesterday 2:45 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">*/
/* */
/*                                         <div class="m-t-xs">*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).*/
/*                                         <br>*/
/*                                         <small class="text-muted">Yesterday 1:10 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">*/
/*                                     </div>*/
/* */
/*                                     <div class="media-body">*/
/*                                         Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the*/
/*                                         <br>*/
/*                                         <small class="text-muted">Monday 8:37 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/* */
/*                                         All the Lorem Ipsum generators on the Internet tend to repeat.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Today 4:21 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Yesterday 2:45 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">*/
/* */
/*                                         <div class="m-t-xs">*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                             <i class="fa fa-star text-warning"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Yesterday 1:10 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sidebar-message">*/
/*                                 <a href="#">*/
/*                                     <div class="pull-left text-center">*/
/*                                         <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         Uncover many web sites still in their infancy. Various versions have.*/
/*                                         <br>*/
/*                                         <small class="text-muted">Monday 8:37 pm</small>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div id="tab-2" class="tab-pane">*/
/* */
/*                         <div class="sidebar-title">*/
/*                             <h3> <i class="fa fa-cube"></i> Latest projects</h3>*/
/*                             <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>*/
/*                         </div>*/
/* */
/*                         <ul class="sidebar-list">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Business valuation</h4>*/
/*                                     It is a long established fact that a reader will be distracted.*/
/* */
/*                                     <div class="small">Completion with: 22%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>*/
/*                                     </div>*/
/*                                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Contract with Company </h4>*/
/*                                     Many desktop publishing packages and web page editors.*/
/* */
/*                                     <div class="small">Completion with: 48%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 48%;" class="progress-bar"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Meeting</h4>*/
/*                                     By the readable content of a page when looking at its layout.*/
/* */
/*                                     <div class="small">Completion with: 14%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 14%;" class="progress-bar progress-bar-info"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-primary pull-right">NEW</span>*/
/*                                     <h4>The generated</h4>*/
/*                                     <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->*/
/*                                     There are many variations of passages of Lorem Ipsum available.*/
/*                                     <div class="small">Completion with: 22%</div>*/
/*                                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Business valuation</h4>*/
/*                                     It is a long established fact that a reader will be distracted.*/
/* */
/*                                     <div class="small">Completion with: 22%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>*/
/*                                     </div>*/
/*                                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Contract with Company </h4>*/
/*                                     Many desktop publishing packages and web page editors.*/
/* */
/*                                     <div class="small">Completion with: 48%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 48%;" class="progress-bar"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div class="small pull-right m-t-xs">9 hours ago</div>*/
/*                                     <h4>Meeting</h4>*/
/*                                     By the readable content of a page when looking at its layout.*/
/* */
/*                                     <div class="small">Completion with: 14%</div>*/
/*                                     <div class="progress progress-mini">*/
/*                                         <div style="width: 14%;" class="progress-bar progress-bar-info"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-primary pull-right">NEW</span>*/
/*                                     <h4>The generated</h4>*/
/*                                     <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->*/
/*                                     There are many variations of passages of Lorem Ipsum available.*/
/*                                     <div class="small">Completion with: 22%</div>*/
/*                                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/* */
/*                     </div>*/
/* */
/*                     <div id="tab-3" class="tab-pane">*/
/* */
/*                         <div class="sidebar-title">*/
/*                             <h3><i class="fa fa-gears"></i> Settings</h3>*/
/*                             <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>*/
/*                         </div>*/
/* */
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Show notifications*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">*/
/*                                     <label class="onoffswitch-label" for="example">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Disable Chat*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">*/
/*                                     <label class="onoffswitch-label" for="example2">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Enable history*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">*/
/*                                     <label class="onoffswitch-label" for="example3">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Show charts*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">*/
/*                                     <label class="onoffswitch-label" for="example4">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Offline users*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">*/
/*                                     <label class="onoffswitch-label" for="example5">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Global search*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">*/
/*                                     <label class="onoffswitch-label" for="example6">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="setings-item">*/
/*                     <span>*/
/*                         Update everyday*/
/*                     </span>*/
/*                             <div class="switch">*/
/*                                 <div class="onoffswitch">*/
/*                                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">*/
/*                                     <label class="onoffswitch-label" for="example7">*/
/*                                         <span class="onoffswitch-inner"></span>*/
/*                                         <span class="onoffswitch-switch"></span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="sidebar-content">*/
/*                             <h4>Settings</h4>*/
/*                             <div class="small">*/
/*                                 I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.*/
/*                                 And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.*/
/*                                 Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Mainly scripts -->*/
/*     <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>*/
/* */
/*     <!-- Flot -->*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.symbol.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/flot/jquery.flot.time.js') }}"></script>*/
/* */
/*     <!-- Peity -->*/
/*     <script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>*/
/*     <script src="{{ asset('js/demo/peity-demo.js') }}"></script>*/
/* */
/*     <!-- Custom and plugin javascript -->*/
/*     <script src="{{ asset('js/inspinia.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>*/
/* */
/*     <!-- jQuery UI -->*/
/*     <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>*/
/* */
/*     <!-- Jvectormap -->*/
/*     <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/* */
/*     <!-- EayPIE -->*/
/*     <script src="{{ asset('js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>*/
/* */
/*     <!-- Sparkline -->*/
/*     <script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/* */
/*     <!-- Sparkline demo data  -->*/
/*     <script src="{{ asset('js/demo/sparkline-demo.js') }}"></script>*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('.chart').easyPieChart({*/
/*                 barColor: '#f8ac59',*/
/* //                scaleColor: false,*/
/*                 scaleLength: 5,*/
/*                 lineWidth: 4,*/
/*                 size: 80*/
/*             });*/
/* */
/*             $('.chart2').easyPieChart({*/
/*                 barColor: '#1c84c6',*/
/* //                scaleColor: false,*/
/*                 scaleLength: 5,*/
/*                 lineWidth: 4,*/
/*                 size: 80*/
/*             });*/
/* */
/*             var data2 = [*/
/*                 [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],*/
/*                 [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],*/
/*                 [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],*/
/*                 [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],*/
/*                 [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],*/
/*                 [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],*/
/*                 [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],*/
/*                 [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]*/
/*             ];*/
/* */
/*             var data3 = [*/
/*                 [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],*/
/*                 [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],*/
/*                 [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],*/
/*                 [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],*/
/*                 [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],*/
/*                 [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],*/
/*                 [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],*/
/*                 [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]*/
/*             ];*/
/* */
/* */
/*             var dataset = [*/
/*                 {*/
/*                     label: "Number of orders",*/
/*                     data: data3,*/
/*                     color: "#1ab394",*/
/*                     bars: {*/
/*                         show: true,*/
/*                         align: "center",*/
/*                         barWidth: 24 * 60 * 60 * 600,*/
/*                         lineWidth:0*/
/*                     }*/
/* */
/*                 }, {*/
/*                     label: "Payments",*/
/*                     data: data2,*/
/*                     yaxis: 2,*/
/*                     color: "#1C84C6",*/
/*                     lines: {*/
/*                         lineWidth:1,*/
/*                         show: true,*/
/*                         fill: true,*/
/*                         fillColor: {*/
/*                             colors: [{*/
/*                                 opacity: 0.2*/
/*                             }, {*/
/*                                 opacity: 0.4*/
/*                             }]*/
/*                         }*/
/*                     },*/
/*                     splines: {*/
/*                         show: false,*/
/*                         tension: 0.6,*/
/*                         lineWidth: 1,*/
/*                         fill: 0.1*/
/*                     },*/
/*                 }*/
/*             ];*/
/* */
/* */
/*             var options = {*/
/*                 xaxis: {*/
/*                     mode: "time",*/
/*                     tickSize: [3, "day"],*/
/*                     tickLength: 0,*/
/*                     axisLabel: "Date",*/
/*                     axisLabelUseCanvas: true,*/
/*                     axisLabelFontSizePixels: 12,*/
/*                     axisLabelFontFamily: 'Arial',*/
/*                     axisLabelPadding: 10,*/
/*                     color: "#d5d5d5"*/
/*                 },*/
/*                 yaxes: [{*/
/*                     position: "left",*/
/*                     max: 1070,*/
/*                     color: "#d5d5d5",*/
/*                     axisLabelUseCanvas: true,*/
/*                     axisLabelFontSizePixels: 12,*/
/*                     axisLabelFontFamily: 'Arial',*/
/*                     axisLabelPadding: 3*/
/*                 }, {*/
/*                     position: "right",*/
/*                     clolor: "#d5d5d5",*/
/*                     axisLabelUseCanvas: true,*/
/*                     axisLabelFontSizePixels: 12,*/
/*                     axisLabelFontFamily: ' Arial',*/
/*                     axisLabelPadding: 67*/
/*                 }*/
/*                 ],*/
/*                 legend: {*/
/*                     noColumns: 1,*/
/*                     labelBoxBorderColor: "#000000",*/
/*                     position: "nw"*/
/*                 },*/
/*                 grid: {*/
/*                     hoverable: false,*/
/*                     borderWidth: 0*/
/*                 }*/
/*             };*/
/* */
/*             function gd(year, month, day) {*/
/*                 return new Date(year, month - 1, day).getTime();*/
/*             }*/
/* */
/*             var previousPoint = null, previousLabel = null;*/
/* */
/*             $.plot($("#flot-dashboard-chart"), dataset, options);*/
/* */
/*             var mapData = {*/
/*                 "US": 298,*/
/*                 "SA": 200,*/
/*                 "DE": 220,*/
/*                 "FR": 540,*/
/*                 "CN": 120,*/
/*                 "AU": 760,*/
/*                 "BR": 550,*/
/*                 "IN": 200,*/
/*                 "GB": 120,*/
/*             };*/
/* */
/*             $('#world-map').vectorMap({*/
/*                 map: 'world_mill_en',*/
/*                 backgroundColor: "transparent",*/
/*                 regionStyle: {*/
/*                     initial: {*/
/*                         fill: '#e4e4e4',*/
/*                         "fill-opacity": 0.9,*/
/*                         stroke: 'none',*/
/*                         "stroke-width": 0,*/
/*                         "stroke-opacity": 0*/
/*                     }*/
/*                 },*/
/* */
/*                 series: {*/
/*                     regions: [{*/
/*                         values: mapData,*/
/*                         scale: ["#1ab394", "#22d6b1"],*/
/*                         normalizeFunction: 'polynomial'*/
/*                     }]*/
/*                 },*/
/*             });*/
/*         });*/
/*     </script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

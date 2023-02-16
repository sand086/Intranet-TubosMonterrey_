<?php

$dbName = array("Database" => "tubos_monterrey", "Encrypt" => false, "TrustServerCertificate" => true);
$serverName = "HONOR\HONOR";

// $conn = sqlsrv_connect($serverName, $dbName);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Tubos Monterrey - </title>
  <!-- Font Icons -->
  <link media="all" rel="stylesheet" href="css/fonts//icomoon.css">
  <!--     <link media="all" rel="stylesheet" href="css/fonts/roxine-font-icon/roxine-font.css"> -->
  <link media="all" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css">
  <!-- Vendors -->
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/dist/assets/owl.carousel.min.css">
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/dist/assets/owl.theme.default.min.css">
  <link media="all" rel="stylesheet" href="vendors/animate/animate.css">
  <link media="all" rel="stylesheet" href="vendors/rateyo/jquery.rateyo.css">
  <link media="all" rel="stylesheet" href="vendors/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <link media="all" rel="stylesheet" href="vendors/fancyBox/source/jquery.fancybox.css">
  <link media="all" rel="stylesheet" href="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css">
  <!-- Bootstrap 4 -->
  <link media="all" rel="stylesheet" href="css/bootstrap.css">
  <!-- Rev Slider -->
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/navigation.css">
  <!-- Theme CSS -->
  <link media="all" rel="stylesheet" href="css/main.css">
  <!-- Custom CSS -->
  <link media="all" rel="stylesheet" href="css/custom.css">
</head>

<body class="white-overlay">
  <div class="preloader" id="pageLoad">
    <div class="holder">
      <div class="coffee_cup"></div>
    </div>
  </div>
  <!--Side panel-->
  <nav class="nav-wrap bg-white">
    <!-- opener inside of collapsible menu -->
    <div class="nav-trigger nav-trigger-close">
      <a href="#">Cerrar Panel <i class="icon-long-arrow-right"></i> </a>

    </div>
    <ul class="side-nav">
      <li><a href="#rev_slider_279_1_wrapper">Inicio</a></li>
      <li><a href="#about">Acerca de</a></li>
      <li><a href="#container">Políticas y Reglamentos</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>

    <div class="divider-border"><span class="sr-only"></span></div>
    <div class="p-3">
      <ul class="social-network square-icon shadowed-icon">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-google-plus"></span></a></li>
        <li><a href="#"><span class="icon-pinterest"></span></a></li>
        <li><a href="#"><span class="icon-dribbble"></span></a></li>
      </ul>
    </div>
  </nav>
  <!-- main wrapper -->
  <div id="wrapper" class="no-overflow-x">
    <div class="page-wrapper">
      <header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
        <div id="nav-section">
          <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
              <!-- <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                                <div class="form-group no-margin">
                                    <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type & Press Enter" type="text">
                                </div>
                            </form>
                            <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>-->
              <a class="navbar-brand mr-auto m-sm-auto" style="width: 10%;" href="#"> <img src="img/Copia de TubosMonterrey-Logo Blanco.svg"> <img src="img/TubosMonterreyLogo.svg" alt="Tubos Monterrey"> </a>
              <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                <ul class="nav navbar-nav margin-0-sm">
                  <li>
                    <a href="#rev_slider_279_1_wrapper">Inicio</a>
                  </li>
                  <li>
                    <a href="#celebrate"> Celebraciones </a>
                  </li>
                  <li class="dropdown right-dropdown" data-animation="fadeIn">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#about" data-title="Nosotros"> Nosotros </a>
                    <ul class="dropdown-menu no-border-radius">
                      <li><a href="#about"> Cobertura </a></li>
                      <li><a href="#history">Nuestra Historia </a></li>
                      <li class="dropdown dropdown-right dropdown-parent">
                        <a class="sub-marker" href="#">Organigrama<i class="icon-ios-more icn-right"></i></a>
                        <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                          <?php

                          $query = "SELECT * FROM area WHERE estatus = 1";
                          /*   $stmt = sqlsrv_query($conn, $query);

                                                if ($stmt === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }

                                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                                    echo  "<li><a href=#".str_replace(' ', '', $row["nombre"]).">".$row["nombre"]."</a></li>";
                                                }
*/
                          ?>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#container"> Políticas y Reglamentos </a>
                  </li>
                  <li>
                    <a href="#"> Noticias </a>
                  </li>
                  <li>
                    <a href="#">Directorio</a>
                  </li>
                  <li>
                    <a href="#">Interacción</a>
                  </li>
                  <li>
                    <a href="#"> Comunicación Interna </a>
                  </li>
                  <li class="cart-list margin-0-sm">

                  </li>
                </ul>
              </div>

              <div class="nav-trigger navbar-pos-search overlay-trigger">
                <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <!--/header of the page -->
      <main>
      <div class="page_content_wrap">
        <div class="menu_main_wrap">
          <nav class="menu_main_nav_area">
            <ul id="menu_main" class="menu_main_nav">
              <li class="icon-folder menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                <a><span>Dashboard</span></a>
                <ul class="sub-menu">
                  <li class="menu-item menu-item-home"><a href="index.html"><span>Home 1</span></a></li>
                  <li class="menu-item current-menu-item page_item current_page_item"><a href="home-2.html"><span>Home 2</span></a></li>
                  <li class="menu-item"><a href="home-3.html"><span>Home 3</span></a></li>
                </ul>
              </li>
              <li class="icon-users-group menu-item menu-item-has-children">
                <a><span>Members</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="ceo.html"><span>CEO</span></a></li>
                  <li class="menu-item"><a href="leaders.html"><span>Team Leaders</span></a></li>
                  <li class="menu-item"><a href="team.html"><span>Department Page</span></a></li>
                </ul>
              </li>
              <li class="icon-school menu-item menu-item-has-children">
                <a><span>Blog</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="blog-standard.html"><span>Standard</span></a></li>
                  <li class="menu-item"><a href="blog-masonry.html"><span>Masonry</span></a></li>
                </ul>
              </li>
              <li class="icon-book menu-item menu-item-has-children">
                <a><span>Education</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="trainings.html"><span>Trainings</span></a></li>
                  <li class="menu-item"><a href="tests.html"><span>Tests and Quizzes</span></a></li>
                  <li class="menu-item"><a href="tutorials.html"><span>Tutorials</span></a></li>
                </ul>
              </li>
              <li class="icon-rocket menu-item menu-item-has-children">
                <a><span>Carrer</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="vacancies.html"><span>Vacancies</span></a></li>
                  <li class="menu-item"><a href="resumes.html"><span>Resumes</span></a></li>
                </ul>
              </li>
              <li class="icon-communication menu-item menu-item-has-children">
                <a><span>Community</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="forums.html"><span>Forums</span></a></li>
                  <li class="menu-item"><a href="single-topic.html"><span>Single Topic</span></a></li>
                </ul>
              </li>
              <li class="icon-nature menu-item menu-item-has-children">
                <a><span>BuddyPress</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="activity.html"><span>Activity</span></a></li>
                  <li class="menu-item"><a href="members.html"><span>Members</span></a></li>
                </ul>
              </li>
              <li class="icon-technology-2 menu-item"><a href="storage.html"><span>File Storage</span></a></li>
              <li class="icon-cog menu-item menu-item-has-children">
                <a><span>Features</span></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="typography.html"><span>Typography</span></a></li>
                  <li class="menu-item"><a href="shortcodes.html"><span>Shortcodes</span></a></li>
                  <li class="menu-item"><a href="infographic.html"><span>Infographic</span></a></li>
                  <li class="menu-item menu-item-has-children">
                    <a><span>Pages</span></a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="single-post.html"><span>Blog Post</span></a></li>
                      <li class="menu-item"><a href="single-event.html"><span>Event Page</span></a></li>
                      <li class="menu-item"><a href="single-training.html"><span>Training page</span></a></li>
                      <li class="menu-item"><a href="single-team.html"><span>Team Member</span></a></li>
                      <li class="menu-item"><a href="about.html"><span>About Company</span></a></li>
                      <li class="menu-item"><a href="contacts.html"><span>Contacts</span></a></li>
                      <li class="menu-item"><a href="support.html"><span>Support</span></a></li>
                      <li class="menu-item"><a href="faq.html"><span>FAQ</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="content_wrap with_title">
          <div class="top_panel_title">
            <div class="top_panel_title_inner">
              <h1 class="page_title">Dashboard</h1>
            </div>
          </div>
          <article class="post_item post_item_single post_format_standard page hentry">
            <section class="post_content">
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <figure id="sc_image_567" class="sc_image sc_image_shape_square">
                        <img src="images/1841x417.png" alt="" />
                      </figure>
                      <div class="vc_empty_space hpx_30">
                        <span class="vc_empty_space_inner"></span>
                      </div>
                      <div id="sc_skills_diagram_089" class="sc_skills sc_skills_counter" data-type="counter" data-caption="Skills">
                        <div class="columns_wrap sc_skills_columns sc_skills_columns_4">
                          <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1">
                              <div class="sc_skills_icon icon-nature"></div>
                              <div class="sc_skills_info">
                                <div class="sc_skills_label">new users</div>
                              </div>
                              <div class="sc_skills_count">
                                <div class="sc_skills_total" data-start="0" data-stop="22" data-step="1" data-max="100" data-speed="35" data-duration="770" data-ed="%">0%</div>
                              </div>
                            </div>
                          </div>
                          <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1">
                              <div class="sc_skills_icon icon-communication1"></div>
                              <div class="sc_skills_info">
                                <div class="sc_skills_label">Growth</div>
                              </div>
                              <div class="sc_skills_count">
                                <div class="sc_skills_total" data-start="0" data-stop="36" data-step="1" data-max="100" data-speed="29" data-duration="1044" data-ed="%">0%</div>
                              </div>
                            </div>
                          </div>
                          <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1">
                              <div class="sc_skills_icon icon-money"></div>
                              <div class="sc_skills_info">
                                <div class="sc_skills_label">Profit</div>
                              </div>
                              <div class="sc_skills_count">
                                <div class="sc_skills_total" data-start="0" data-stop="37" data-step="1" data-max="100" data-speed="35" data-duration="1295" data-ed="%">0%</div>
                              </div>
                            </div>
                          </div>
                          <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1">
                              <div class="sc_skills_icon icon-shopping-bag"></div>
                              <div class="sc_skills_info">
                                <div class="sc_skills_label">Sales</div>
                              </div>
                              <div class="sc_skills_count">
                                <div class="sc_skills_total" data-start="0" data-stop="21" data-step="1" data-max="100" data-speed="29" data-duration="609" data-ed="%">0%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="vc_empty_space hem_4-1">
                        <span class="vc_empty_space_inner"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <h2 class="sc_title sc_title_underline">Welcome back, Douglas!</h2>
                      <div class="vc_empty_space hpx_17">
                        <span class="vc_empty_space_inner"></span>
                      </div>
                      <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                          <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                              <div id='evcal_calendar_836' class='ajde_evcal_calendar  evoFC'>
                                <div class='evo-data' data-cyear="2017" data-cmonth="2" data-runajax="1" data-evc_open="0" data-cal_ver="2.4.10" data-mapscroll="true" data-mapformat="roadmap" data-mapzoom="12" data-mapiconurl="" data-ev_cnt="0" data-show_limit="no" data-tiles="no" data-sort_by="sort_date" data-filters_on="false" data-range_start="0" data-range_end="0" data-send_unix="0" data-ux_val="0" data-accord="0" data-rtl="no" data-grid_ux="0"></div>
                                <div id='evcal_head' class='calendar_header '>
                                  <div class='evo_cal_above_content'></div>
                                  <p id='evcal_cur' class='evo_month_title'>february, 2017</p>
                                  <p class='evo_arrows'>
                                    <span id='evcal_prev' class='evcal_arrows evcal_btn_prev'>
                                      <i class='fa fa-angle-left'></i>
                                    </span>
                                    <span id='evcal_next' class='evcal_arrows evcal_btn_next'>
                                      <i class='fa fa-angle-right'></i>
                                    </span>
                                  </p>
                                  <input type='hidden' class='eventon_other_vals evoFC_val' name='fc_focus_day' value='11' />
                                  <div class='clear'></div>
                                </div>
                                <div id='eventon_loadbar_section'>
                                  <div id='eventon_loadbar'></div>
                                </div>
                                <div class='eventon_fullcal' data-hover='number'>
                                  <div class='evofc_months_strip' data-multiplier='0' data-color='206177' data-heat='no'>
                                    <div class='evofc_month focus'>
                                      <div class='eventon_fc_daynames'>
                                        <p class='evo_fc_day' data-dow='1'>mon</p>
                                        <p class='evo_fc_day' data-dow='2'>tue</p>
                                        <p class='evo_fc_day' data-dow='3'>wed</p>
                                        <p class='evo_fc_day' data-dow='4'>thu</p>
                                        <p class='evo_fc_day' data-dow='5'>fri</p>
                                        <p class='evo_fc_day' data-dow='6'>sat</p>
                                        <p class='evo_fc_day' data-dow='7'>sun</p>
                                        <div class='clear'></div>
                                      </div>
                                      <div class='eventon_fc_days'>
                                        <p class='evo_fc_day evo_fc_empty' data-cnt='1'>-</p>
                                        <p class='evo_fc_day evo_fc_empty' data-cnt='2'>-</p>
                                        <p class='evo_fc_day' data-dow='3' data-day='1' data-cnt='3' data-ed='' data-color=''>1</p>
                                        <p class='evo_fc_day' data-dow='4' data-day='2' data-cnt='4' data-ed='' data-color=''>2</p>
                                        <p class='evo_fc_day' data-dow='5' data-day='3' data-cnt='5' data-ed='' data-color=''>3</p>
                                        <p class='evo_fc_day' data-dow='6' data-day='4' data-cnt='6' data-ed='' data-color=''>4</p>
                                        <p class='evo_fc_day' data-dow='7' data-day='5' data-cnt='7' data-ed='' data-color=''>5</p>
                                        <p class='evo_fc_day' data-dow='1' data-day='6' data-cnt='8' data-ed='' data-color=''>6</p>
                                        <p class='evo_fc_day' data-dow='2' data-day='7' data-cnt='9' data-ed='' data-color=''>7</p>
                                        <p class='evo_fc_day' data-dow='3' data-day='8' data-cnt='10' data-ed='' data-color=''>8</p>
                                        <p class='evo_fc_day' data-dow='4' data-day='9' data-cnt='11' data-ed='' data-color=''>9</p>
                                        <p class='evo_fc_day' data-dow='5' data-day='10' data-cnt='12' data-ed='' data-color=''>10</p>
                                        <p class='evo_fc_day' data-dow='6' data-day='11' data-cnt='13' data-ed='' data-color=''>11</p>
                                        <p class='evo_fc_day' data-dow='7' data-day='12' data-cnt='14' data-ed='' data-color=''>12</p>
                                        <p class='evo_fc_day on_focus' data-dow='1' data-day='13' data-cnt='15' data-ed='' data-color=''>13</p>
                                        <p class='evo_fc_day' data-dow='2' data-day='14' data-cnt='16' data-ed='' data-color=''>14</p>
                                        <p class='evo_fc_day' data-dow='3' data-day='15' data-cnt='17' data-ed='' data-color=''>15</p>
                                        <p class='evo_fc_day' data-dow='4' data-day='16' data-cnt='18' data-ed='' data-color=''>16</p>
                                        <p class='evo_fc_day' data-dow='5' data-day='17' data-cnt='19' data-ed='' data-color=''>17</p>
                                        <p class='evo_fc_day' data-dow='6' data-day='18' data-cnt='20' data-ed='' data-color=''>18</p>
                                        <p class='evo_fc_day' data-dow='7' data-day='19' data-cnt='21' data-ed='' data-color=''>19</p>
                                        <p class='evo_fc_day' data-dow='1' data-day='20' data-cnt='22' data-ed='' data-color=''>20</p>
                                        <p class='evo_fc_day' data-dow='2' data-day='21' data-cnt='23' data-ed='' data-color=''>21</p>
                                        <p class='evo_fc_day bb' data-dow='3' data-day='22' data-cnt='24' data-ed='' data-color=''>22</p>
                                        <p class='evo_fc_day bb' data-dow='4' data-day='23' data-cnt='25' data-ed='' data-color=''>23</p>
                                        <p class='evo_fc_day bb' data-dow='5' data-day='24' data-cnt='26' data-ed='' data-color=''>24</p>
                                        <p class='evo_fc_day bb' data-dow='6' data-day='25' data-cnt='27' data-ed='' data-color=''>25</p>
                                        <p class='evo_fc_day bb' data-dow='7' data-day='26' data-cnt='28' data-ed='' data-color=''>26</p>
                                        <a href="single-event.html" class='evo_fc_day has_events bb' data-dow='1' data-events="1" data-day='27' data-cnt='29' data-ed='{"et":["Testing Rock Group"],"ec":[["206177"]]}' data-color=''>27</a>
                                        <a href="single-event.html" class='evo_fc_day has_events br bb' data-dow='2' data-events="1" data-day='28' data-cnt='30' data-ed='{"et":["Deploy Rock Group Project"],"ec":[["206177"]]}' data-color=''>28</a>
                                        <div class='clear'></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class='clear'></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="vc_empty_space hpx_30">
                            <span class="vc_empty_space_inner"></span>
                          </div>
                          <div class="ajde_evcal_calendar ">
                            <div id="evcal_list" class="eventon_events_list ">
                              <div class="eventon_list_event event">
                                <p class="desc_trig_outter">
                                  <a class="desc_trig sin_val evcal_list_a">
                                    <span class="evcal_cblock">
                                      <em class="evo_date"><span class="start">27<em>feb</em></span></em>
                                      <span class="evo_time"><span class="start">10:00 am</span><span class="end">- 4:00 pm</span></span>
                                      <em class="clear"></em>
                                    </span>
                                    <span class="evcal_desc evo_info hide_eventtopdata">
                                      <span class="evo_above_title"></span>
                                      <span class="evcal_desc2 evcal_event_title">Testing Rock Group</span>
                                      <span class="evo_below_title"></span><span class="evcal_desc_info"></span><span class="evcal_desc3"></span>
                                    </span>
                                    <em class="clear"></em>
                                  </a>
                                </p>
                                <div class="event_description evcal_eventcard">
                                  <div class="evo_metarow_fimg evorow evcal_evdata_img event_img_1"></div>
                                  <div class="evo_metarow_details evorow evcal_evdata_row bordb evcal_event_details">
                                    <span class="evcal_evdata_icons"><i class="fa fa-align-justify"></i></span>
                                    <div class="evcal_evdata_cell ">
                                      <div class="eventon_full_description">
                                        <h3 class="padb5 evo_h3">Event Details</h3>
                                        <div class="eventon_desc_in">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        </div>
                                        <div class="clear"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="evo_metarow_time evorow evcal_evdata_row bordb evcal_evrow_sm ">
                                    <span class="evcal_evdata_icons"><i class="fa fa-clock-o"></i></span>
                                    <div class="evcal_evdata_cell">
                                      <h3 class="evo_h3">Time</h3>
                                      <p>(Monday) 10:00 am - 4:00 pm</p>
                                    </div>
                                  </div>
                                  <div class="evo_metarow_ICS evorow bordb evcal_evdata_row">
                                    <span class="evcal_evdata_icons"><i class="fa fa-calendar"></i></span>
                                    <div class="evcal_evdata_cell">
                                      <p>
                                        <a href="#" class="evo_ics_nCal" title="Add to your calendar">Calendar</a>
                                        <a href="#" target="_blank" class="evo_ics_gCal" title="Add to google calendar">GoogleCal</a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="clear end"></div>
                              </div>
                              <div class="eventon_list_event event">
                                <p class="desc_trig_outter">
                                  <a class="desc_trig sin_val evcal_list_a">
                                    <span class="evcal_cblock">
                                      <em class="evo_date"><span class="start">28<em>feb</em></span></em>
                                      <span class="evo_time"><span class="start">10:00 am</span><span class="end">- 4:00 pm</span></span>
                                      <em class="clear"></em>
                                    </span>
                                    <span class="evcal_desc evo_info hide_eventtopdata">
                                      <span class="evo_above_title"></span>
                                      <span class="evcal_desc2 evcal_event_title">SeoRocket Project</span>
                                      <span class="evo_below_title"></span><span class="evcal_desc_info"></span><span class="evcal_desc3"></span>
                                    </span>
                                    <em class="clear"></em>
                                  </a>
                                </p>
                                <div class="event_description evcal_eventcard">
                                  <div class="evo_metarow_fimg evorow evcal_evdata_img event_img_2"></div>
                                  <div class="evo_metarow_details evorow evcal_evdata_row bordb evcal_event_details">
                                    <span class="evcal_evdata_icons"><i class="fa fa-align-justify"></i></span>
                                    <div class="evcal_evdata_cell ">
                                      <div class="eventon_full_description">
                                        <h3 class="padb5 evo_h3">Event Details</h3>
                                        <div class="eventon_desc_in">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        </div>
                                        <div class="clear"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="evo_metarow_time evorow evcal_evdata_row bordb evcal_evrow_sm ">
                                    <span class="evcal_evdata_icons"><i class="fa fa-clock-o"></i></span>
                                    <div class="evcal_evdata_cell">
                                      <h3 class="evo_h3">Time</h3>
                                      <p>(Monday) 10:00 am - 4:00 pm</p>
                                    </div>
                                  </div>
                                  <div class="evo_metarow_ICS evorow bordb evcal_evdata_row">
                                    <span class="evcal_evdata_icons"><i class="fa fa-calendar"></i></span>
                                    <div class="evcal_evdata_cell">
                                      <p>
                                        <a href="#" class="evo_ics_nCal" title="Add to your calendar">Calendar</a>
                                        <a href="#" target="_blank" class="evo_ics_gCal" title="Add to google calendar">GoogleCal</a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="clear end"></div>
                              </div>
                              <div class="clear"></div>
                            </div>
                            <!-- #evcal_list-->
                            <div class="clear"></div>
                          </div>
                          <div class="vc_empty_space hpx_30">
                            <span class="vc_empty_space_inner"></span>
                          </div>
                          <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                              <div id='wcbd7693e95ac56596b2a9b7d64247cc54' class='wcContainer wcControlsButtonsIncluded'>
                                <div class='wcMessages'>
                                  <div class="wcMessage" data-id="481" data-chat-user-id="25305">
                                    <span class="wcMessageTime" data-utc="2017-02-08T04:52:20+00:00"></span>
                                    <span class="wcMessageUser">Anonymous25305:</span>
                                    <span class="wcMessageContent">test</span>
                                  </div>
                                  <div class="wcMessage" data-id="482" data-chat-user-id="25310">
                                    <span class="wcMessageTime" data-utc="2017-02-08T05:52:40+00:00"></span>
                                    <span class="wcMessageUser">Anonymous25310:</span>
                                    <span class="wcMessageContent">hello</span>
                                  </div>
                                  <div class="wcMessage" data-id="483" data-chat-user-id="26957">
                                    <span class="wcMessageTime" data-utc="2017-02-08T10:42:01+00:00"></span>
                                    <span class="wcMessageUser">Anonymous26957:</span>
                                    <span class="wcMessageContent">what's up?</span>
                                  </div>
                                  <div class="wcMessage" data-id="484" data-chat-user-id="27935">
                                    <span class="wcMessageTime" data-utc="2017-02-08T12:09:36+00:00"></span>
                                    <span class="wcMessageUser">Anonymous27935:</span>
                                    <span class="wcMessageContent"><img src='images/icons/silly.png' alt='silly' class='wcEmoticon' /></span>
                                  </div>
                                </div>
                                <div class="wcControls">
                                  <a href="#" class="wcToolButton wcInsertEmoticonButton" title="Insert an emoticon"></a>
                                  <div class='wcInputContainer'>
                                    <input class='wcInput' type='text' maxlength='400' placeholder='Enter message here' title="Use Shift+ENTER in order to move to the next line " />
                                  </div>
                                  <div class="wcPoweredBy">Created by
                                    <a href="http://kaine.pl/" title="WordPress development">Kainex</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column-1_2 sc_column_item sc_column_item_2 even">
                          <div class="sc_section sc_section_block">
                            <div class="sc_section_inner">
                              <div class="sc_section_content_wrap">
                                <h2 class="sc_title sc_title_regular">Poll</h2>
                                <div class="weblator-poll-container" data-poll-id="1">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Donec augue massa, pharetra sit amet feugiat at?</h3>
                                    </div>
                                    <div class="panel-body weblator-poll-vote">
                                      <div class="alert alert-success">Thank you for voting</div>
                                      <div class="alert alert-warning">You have already voted on this poll!</div>
                                      <div class="alert alert-danger">Please select an option!</div>
                                      <ul>
                                        <li>
                                          <input type="radio" data-index="0" name="weblator-chart-options" id="option-7" data-poll-id="1" value="7" />
                                          <label for="option-7">Option 1: Semper magna mauris ac dolor</label>
                                        </li>
                                        <li>
                                          <input type="radio" data-index="1" name="weblator-chart-options" id="option-8" data-poll-id="1" value="8" />
                                          <label for="option-8">Option 2: Curabitur ex massa</label>
                                        </li>
                                        <li>
                                          <input type="radio" data-index="2" name="weblator-chart-options" id="option-9" data-poll-id="1" value="9" />
                                          <label for="option-9">Option 3: Quisque aliquam consecte</label>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="panel-footer">
                                      <div class="button-vote">
                                        <button class="btn btn-default vote-button weblator-poll-submit">
                                          <i class="fa fa-spinner fa-spin vote-spin"></i> Vote
                                        </button>
                                      </div>
                                      <div class="weblator-view-results">
                                        <a href="#" class="weblator-view-poll btn btn-default">View Results</a>
                                        <a href="#" class="weblator-hide-poll btn btn-default">Hide Results</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="width-control">
                                    <div class="bs-chart-container">
                                      <strong>Option 1: Semper magna mauris ac dolor</strong>
                                      <div class="progress">
                                        <div class="progress-bar bar_1" role="progressbar" aria-valuenow="40.4040404040404" aria-valuemin="0">
                                          <span class="">40%</span>
                                        </div>
                                      </div>
                                      <strong>Option 2: Curabitur ex massa</strong>
                                      <div class="progress">
                                        <div class="progress-bar bar_2" role="progressbar" aria-valuenow="36.36363636363637" aria-valuemin="0">
                                          <span class="">36%</span>
                                        </div>
                                      </div>
                                      <strong>Option 3: Quisque aliquam consecte</strong>
                                      <div class="progress">
                                        <div class="progress-bar bar_3" role="progressbar" aria-valuenow="23.232323232323232" aria-valuemin="0">
                                          <span class="">23%</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="vc_empty_space hpx_30">
                            <span class="vc_empty_space_inner"></span>
                          </div>
                          <div class="sc_section sc_section_block">
                            <div class="sc_section_inner">
                              <div class="sc_section_content_wrap">
                                <h2 class="sc_title sc_title_regular">Projects</h2>
                                <div id="sc_projects_297_wrap" class="sc_projects_wrap">
                                  <div id="sc_projects_297" class="sc_projects">
                                    <div id="sc_projects_297_1" class="sc_projects_item sc_projects_item_1 odd first">
                                      <div class="sc_projects_item_featured post_featured">
                                        <div class="post_thumb" data-image="images/project1.jpg" data-title="Rock Group Project">
                                          <a class="hover_icon hover_icon_link" href="single-post.html">
                                            <img alt="" src="images/project1-231x171.jpg">
                                          </a>
                                        </div>
                                      </div>
                                      <div class="sc_projects_item_content">
                                        <h4 class="sc_projects_item_title">
                                          <a href="single-post.html">Rock Group Project</a>
                                        </h4>
                                        <div class="sc_projects_item_description">
                                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                          <div id="sc_skills_diagram_629" class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-caption="Skills" data-dir="horizontal">
                                            <div class="sc_skills_info">
                                              <div class="sc_skills_label"></div>
                                            </div>
                                            <div class="sc_skills_item sc_skills_style_1">
                                              <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="76" data-step="1" data-max="100" data-speed="14" data-duration="1064" data-ed="%">0%</div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="total">76%</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sc_projects_297_2" class="sc_projects_item sc_projects_item_2">
                                      <div class="sc_projects_item_featured post_featured">
                                        <div class="post_thumb" data-image="images/project2.jpg" data-title="SeoRocket Project">
                                          <a class="hover_icon hover_icon_link" href="single-post.html">
                                            <img alt="" src="images/570x447.png">
                                          </a>
                                        </div>
                                      </div>
                                      <div class="sc_projects_item_content">
                                        <h4 class="sc_projects_item_title">
                                          <a href="single-post.html">SeoRocket Project</a>
                                        </h4>
                                        <div class="sc_projects_item_description">
                                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                          <div id="sc_skills_diagram_577" class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-caption="Skills" data-dir="horizontal">
                                            <div class="sc_skills_info">
                                              <div class="sc_skills_label"></div>
                                            </div>
                                            <div class="sc_skills_item sc_skills_style_1">
                                              <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="100" data-step="1" data-max="100" data-speed="37" data-duration="3700" data-ed="%">0%</div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="total">100%</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="related_wrap related_wrap_empty"></section>
          </article>
          <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
        </div>
        <div class="sidebar_wrap sidebar widget_area scheme_original" role="complementary">
          <div class="sidebar_inner widget_area_inner">
            <aside class="widget_number_1 widget widget_birthdays">
              <h5 class="widget_title">Upcoming Birthday</h5>
              <div class="widget_birthdays_inner">
                <ul>
                  <li>
                    <div class="post_thumb">
                      <img src="images/1000.png" class="avatar photo" width="96" height="96" alt="" />
                    </div>
                    <div class="post_title">
                      <strong>Bob Davis</strong>
                      <span>(30)</span> on
                      <span class="date">Feb 20</span>
                    </div>
                  </li>
                  <li>
                    <div class="post_thumb">
                      <img src="images/1000.png" class="avatar photo" width="96" height="96" alt="" />
                    </div>
                    <div class="post_title">
                      <strong>admin</strong>
                      <span>(27)</span> on
                      <span class="date">Apr 07</span>
                    </div>
                  </li>
                </ul>
              </div>
            </aside>
            <aside class="widget widget_nav_menu">
              <h5 class="widget_title">Navigation</h5>
              <div class="menu-sidebar-menu-container">
                <ul id="menu-sidebar-menu" class="menu">
                  <li><a href="#">Open a Ticket</a></li>
                  <li><a href="#">Corporate Landing Demo</a></li>
                  <li><a href="#">Education Demo</a></li>
                  <li><a href="#">Online Documentation</a></li>
                  <li><a href="#">Featured Pages</a></li>
                </ul>
              </div>
            </aside>
            <aside class="widget widget_bp_core_whos_online_widget buddypress widget">
              <h5 class="widget_title">Who&#8217;s Online</h5>
              <div class="widget-error">There are no users currently online </div>
            </aside>
            <aside class="widget_number_4 widget widget_text">
              <div class="textwidget">
                <div class="sc_infobox sc_infobox_style_regular">
                  <span class="sc_icon icon-rocket aligncenter"></span>
                  <h5 class="sc_title sc_title_regular sc_align_center">Projects Launched</h5>
                  <h2 class="sc_title sc_title_regular sc_align_center">167</h2>
                </div>
              </div>
            </aside>
            <aside class="widget widget_recent_posts">
              <h5 class="widget_title">Recent Posts</h5>
              <article class="post_item with_thumb first">
                <div class="post_thumb">
                  <img alt="" src="images/1000.png">
                </div>
                <div class="post_content">
                  <h6 class="post_title">
                    <a href="single-post.html">Analytics: Etiam in finibus felis amet.</a>
                  </h6>
                  <div class="post_info">
                    <span class="post_info_item post_info_posted">
                      <a href="single-post.html" class="post_info_date">August 24, 2016</a>
                    </span>
                    <span class="post_info_item post_info_posted_by">by
                      <a href="single-team.html" class="post_info_author">Kate Dillian</a>
                    </span>
                    <span class="post_info_item post_info_counters">
                      <a href="single-post.html" class="post_counters_item">
                        <span class="post_counters_number"></span>
                      </a>
                    </span>
                  </div>
                </div>
              </article>
              <article class="post_item with_thumb">
                <div class="post_thumb">
                  <img alt="" src="images/1000.png">
                </div>
                <div class="post_content">
                  <h6 class="post_title">
                    <a href="single-post.html">Presentation: Curabitur lacinia velit nec dui consequat.</a>
                  </h6>
                  <div class="post_info">
                    <span class="post_info_item post_info_posted">
                      <a href="single-post.html" class="post_info_date">August 24, 2016</a>
                    </span>
                    <span class="post_info_item post_info_posted_by">by
                      <a href="single-team.html" class="post_info_author">Kate Dillian</a>
                    </span>
                    <span class="post_info_item post_info_counters">
                      <a href="single-post.html" class="post_counters_item">
                        <span class="post_counters_number"></span>
                      </a>
                    </span>
                  </div>
                </div>
              </article>
              <article class="post_item with_thumb">
                <div class="post_thumb">
                  <img alt="" src="images/1000.png">
                </div>
                <div class="post_content">
                  <h6 class="post_title">
                    <a href="single-post.html">Business Travel: Donec mattis quis lorem sed.</a>
                  </h6>
                  <div class="post_info">
                    <span class="post_info_item post_info_posted">
                      <a href="single-post.html" class="post_info_date">August 23, 2016</a>
                    </span>
                    <span class="post_info_item post_info_posted_by">by
                      <a href="single-team.html" class="post_info_author">Kate Dillian</a>
                    </span>
                    <span class="post_info_item post_info_counters">
                      <a href="single-post.html" class="post_counters_item">
                        <span class="post_counters_number"></span>
                      </a>
                    </span>
                  </div>
                </div>
              </article>
              <article class="post_item with_thumb">
                <div class="post_thumb">
                  <img alt="" src="images/1000.png">
                </div>
                <div class="post_content">
                  <h6 class="post_title">
                    <a href="single-post.html">A Simple Plan to Fix Our Economy.</a>
                  </h6>
                  <div class="post_info">
                    <span class="post_info_item post_info_posted">
                      <a href="single-post.html" class="post_info_date">May 30, 2015</a>
                    </span>
                    <span class="post_info_item post_info_posted_by">by
                      <a href="single-team.html" class="post_info_author">Kate Dillian</a>
                    </span>
                    <span class="post_info_item post_info_counters">
                      <a href="single-post.html" class="post_counters_item">
                        <span class="post_counters_number"></span>
                      </a>
                    </span>
                  </div>
                </div>
              </article>
              <article class="post_item with_thumb">
                <div class="post_thumb">
                  <img alt="" src="images/1000.png">
                </div>
                <div class="post_content">
                  <h6 class="post_title">
                    <a href="single-post.html">The beautiful Prologue is a new visionary design for Audi</a>
                  </h6>
                  <div class="post_info">
                    <span class="post_info_item post_info_posted">
                      <a href="single-post.html" class="post_info_date">March 19, 2015</a>
                    </span>
                    <span class="post_info_item post_info_posted_by">by
                      <a href="single-team.html" class="post_info_author">Kate Dillian</a>
                    </span>
                    <span class="post_info_item post_info_counters">
                      <a href="single-post.html" class="post_counters_item">
                        <span class="post_counters_number"></span>
                      </a>
                    </span>
                  </div>
                </div>
              </article>
            </aside>
            <aside class="widget_number_6 widget widget_text">
              <div class="textwidget">
                <div class="sc_infobox sc_infobox_style_regular style_2">
                  <span class="sc_icon icon-communication1 aligncenter color_blue"></span>
                  <h5 class="sc_title sc_title_regular sc_align_center">Tickets Answered</h5>
                  <h2 class="sc_title sc_title_regular sc_align_center">1 358</h2>
                </div>
                <div class="sc_infobox sc_infobox_style_error sc_infobox_closeable">
                  <span class="sc_icon icon-sound aligncenter"></span>
                  <h5 class="sc_title sc_title_regular sc_align_center">Notification</h5>
                  <p>The office will be closed
                    <br> 01.05.2016
                  </p>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
      <footer class="footer_wrap widget_area scheme_original">
        <div class="footer_wrap_inner widget_area_inner">
          <div class="content_wrap">
            <div class="columns_wrap">
              <aside class="widget_number_1 column-1_3 widget widget_text">
                <h5 class="widget_title">Micro office group</h5>
                <div class="textwidget">
                  <p>Nam finibus sapien et sem venenatis vulputate. Nunc bibendum tincidunt egestas. Integer sollicitudin aliquet justo vel posuere. </p>
                  <p>Praesent fermentum lorem nisi, at posuere mi bibendum eget.</p>
                  <img src="images/John-Anderson-.png" alt="">
                </div>
              </aside>
              <aside class="column-1_3 widget widget_text">
                <h5 class="widget_title">Contact us</h5>
                <div class="textwidget">
                  <ul class="sc_list sc_list_style_iconed">
                    <li class="sc_list_item odd first">
                      <span class="sc_list_icon icon-location-1"></span>
                      <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                          <h6>Address:</h6>
                          <div>8500 Lorem Street, Chicagi, IL, 55030</div>
                        </div>
                      </div>
                    </li>
                    <li class="sc_list_item even">
                      <span class="sc_list_icon icon-phone-circled"></span>
                      <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                          <h6>Call Us:</h6>
                          <p>+1 800 456 78 90</p>
                        </div>
                      </div>
                    </li>
                    <li class="sc_list_item odd">
                      <span class="sc_list_icon icon-pencil-neg"></span>
                      <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                          <h6>Email:</h6>
                          <p>info@yoursite.com</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </aside>
              <aside class="column-1_3 widget widget_nav_menu">
                <h5 class="widget_title">Navigation</h5>
                <div class="menu-sidebar-menu-container">
                  <ul id="menu-sidebar-menu-1" class="menu">
                    <li><a href="#">Open a Ticket</a></li>
                    <li><a href="#">Corporate Landing Demo</a></li>
                    <li><a href="#">Education Demo</a></li>
                    <li><a href="#">Online Documentation</a></li>
                    <li><a href="#">Featured Pages</a></li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </footer>
      <div class="copyright_wrap copyright_style_text  scheme_original">
        <div class="copyright_wrap_inner">
          <div class="content_wrap">
            <div class="copyright_text">
              Micro Office © 2017 All Rights Reserved.
              <a href="#">Terms of use</a> and
              <a href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      </main>
    </div>
    <!-- footer of the pagse -->
    <footer class="footer footer-v1">
      <div class="content-block footer-main">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="footer-logo">
                <img src="img/logo_tubos.png" alt="image-description">
              </div>
            </div>

            <div class="col-md-8">
              <div class="footer-nav inline-nav text-center">
                <br>
                <ul>
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Acerca de</a></li>
                  <li><a href="#">Políticas y Reglamentos</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center">
        <div class="container">
          <p>Copyright 2023 - Tubos Monterrey - Todos los derechos reservados. Diseñado por <a href="https://www.asicomgraphics.mx" target="_blank">Asicom Graphics</a> </p>
        </div>
      </div>
    </footer>
    <!--/footer of the page -->
  </div>
  <!-- open/close -->
  <div class="search-form-wrapper overlay overlay-hugeinc">
    <button type="button" class="overlay-close"><span class="custom-icon-plus"></span></button>
    <div class="search-form">
      <form action="#" method="post">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Enter Your Search">
          <button type="submit"><span class="icon-search"></span></button>
        </div>
      </form>
    </div>
  </div>
  <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
  <!-- jQuery Library -->
  <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
  <!-- Vendor Scripts -->
  <script src="vendors/tether/dist/js/tether.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendors/stellar/jquery.stellar.min.js"></script>
  <script src="vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
  <script src="vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
  <script src="vendors/owl-carousel/dist/owl.carousel.min.js"></script>
  <script src="vendors/waypoint/waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.min.js"></script>
  <script src="vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
  <script src="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
  <script src="vendors/image-stretcher-master/image-stretcher.js"></script>
  <script src="vendors/wow/wow.min.js"></script>
  <script src="vendors/rateyo/jquery.rateyo.min.js"></script>
  <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
  <script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="js/mega-menu.js"></script>
  <script src="vendors/retina/retina.min.js"></script>
  <!-- Custom Script -->
  <script src="js/jquery.main.js"></script>
  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!-- SNOW ADD ON -->
  <script type="text/javascript" src="vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
  <!-- Revolution Slider Script -->
  <script src="js/revolution.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script>
    $(document).ready(function() {
      $('#txtbusca').keyup(function() {
        let value = $(this).val();
        if (value.length == 0) { //si el campo no esta vacio
          console.log('Hola mundo ');
          $.ajax({
            data: parametros,
            url: 'php/busqueda.php',
            type: 'get',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").append(response);

              console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        } else {

          $(".item").remove();
          var parametros = 'txtbusca=' + value;
          $.ajax({
            data: parametros,
            url: 'php/busqueda.php',
            type: 'post',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").append(response);

              // console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        }
      })
    });
  </script>
</body>

</html>
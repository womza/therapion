<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39453218-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<meta name="google-site-verification" content="9aaRsnmmluWQMQ-8POV-11X6k3gfMA4_j3qZgx934k4" />


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" /> 
    <link href="<?php echo base_url() ?>css/styles.cp.css" rel="stylesheet" type="text/css">

    
    <title><?php echo (isset($is_admin)?'Admin System':'Online Therapy | Online Counseling | E-Mental Health Services') ?></title> 
    <meta name="keywords" content="online therapy, online counseling, e-therapy, free, services, email, chat, skype, vsee"> 
    <meta name="description" content="Get help from our fully licensed and registered counselors through email, chat, phone, or webcam / video conferencing. Free first evaluation."> 
    
</head>
<body>
<div id="container" class="home">




<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</div>
<div id="header" class="widget">
        <div class="container wrap">
            <div class="inner">
                <div class="info">
                
                <div id="icon-menu"></div>  
                    <div id="logo">
                        <a href="./" title="Welcome to Therapion.com! We provide online therapy and other mental health services over the Internet.">
                                Therapion
                                <span></span>
                            </a>
                    </div>
                </div>                  
            </div>          
            <div class="clr"></div>
        </div>  
    </div>
<div id="main-menu" class="widget">
    <div class="container wrap">
        <div class="inner">         
            <div id="main-nav" >
                <ul>
                <?php if(isset($is_admin)): ?>
                    <li><a href="<?php echo base_url() ?>index.php/admin">Teams</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/admin/psicologo">Counselors</a></li>
                    <li><a target="_new" href="/">Go to site</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/user/logout">Logout</a></li>                    
                                    
                <?php else: ?>
                <?php $this->load->view($this->session->userdata('lang').'/header_menu.php') ?>
                           
                     <div>
                        <ul>
                            <li  class="first">
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=en"> 
                                    <img src="<?php echo base_url()?>images/flag_en.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="English"> 
                                    English
                                </a>  
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=es"> 
                                    <img src="<?php echo base_url()?>images/flag_es.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Español"> 
                                    Español
                                </a>  
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=pt"> 
                                    <img src="<?php echo base_url()?>images/flag_pt.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Português"> 
                                    Português
                                </a>  
                            </li>

                                                        <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=fi"> 
                                    <img src="<?php echo base_url()?>images/flag_fi.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Suomi"> 
                                    Suomi
                                </a>  
                            </li>   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=se"> 
                                    <img src="<?php echo base_url()?>images/flag_se.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Svenska"> 
                                    Svenska
                                </a>  
                            </li>   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=no"> 
                                    <img src="<?php echo base_url()?>images/flag_no.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Norsk"> 
                                    Norsk
                                </a>  
                            </li>   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=dk"> 
                                    <img src="<?php echo base_url()?>images/flag_dk.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Dansk"> 
                                    Dansk
                                </a>  
                            </li>
                                                        <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=de"> 
                                    <img src="<?php echo base_url()?>images/flag_de.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title=Deutsch> 
                                    Deutsch
                                </a>  
                            </li>
                                                        <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=nl"> 
                                    <img src="<?php echo base_url()?>images/flag_nl.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Nederlands"> 
                                    Nederlands
                                </a>  
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=fr"> 
                                    <img src="<?php echo base_url()?>images/flag_fr.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Français"> 
                                    Français
                                </a>  
                            </li>                                                   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=it"> 
                                    <img src="<?php echo base_url()?>images/flag_it.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Italiano"> 
                                    Italiano
                                </a>  
                            </li>                           
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=ru"> 
                                    <img src="<?php echo base_url()?>images/flag_ru.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="&#1055;&#1086;-&#1088;&#1091;&#1089;&#1089;&#1082;&#1080;"> 
                                    &#1055;&#1086;-&#1088;&#1091;&#1089;&#1089;&#1082;&#1080;
                                </a>  
                            </li>   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=tr"> 
                                    <img src="<?php echo base_url()?>images/flag_tr.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="Türkçe"> 
                                    Türkçe
                                </a>  
                            </li>   
                            <li>
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=jp"> 
                                    <img src="<?php echo base_url()?>images/flag_jp.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="&#26085;&#26412;&#35486;"> 
                                    &#26085;&#26412;&#35486;
                                </a>                            
                            </li>                                       
                            <li  class="last">
                                <a href="<?php echo base_url()?>index.php/home/set_language?lang=cn"> 
                                    <img src="<?php echo base_url()?>images/flag_hk.gif" width="15" height="10" align="bottom" vspace="6" hspace="1" border="0" title="&#20013;&#25991;"> 
                                     &#20013;&#25991;
                                </a>  
                            </li>                       
                        </ul>
                        </div>      


                    </li>
                <?php endif; ?>
                    
                </ul>
            </div>      
        </div>  
    </div>
</div>


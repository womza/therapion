
<!-- end header -->
<!-- start page -->
<div style="margin-top:2%" class="container wrap">

<div class="inner" id="page">
	<!-- start content -->
	<div id="content">
     <?php echo $output; ?>
     <br><br>
		<!--<div class="post">
			<p class="date">September <b>30th</b></p>
			<h1 class="title">Welcome to Our Website!</h1>
			<p class="meta"><small>Filed under <a href="#">Uncategorized</a> &nbsp;|&nbsp; <a href="#">Comments (12)</a></small></p>
			<div class="entry">
				<p>This is <strong>Ambiance</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attributions 2.5</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
				<p>This template is also available as a <a href="http://www.freewpthemes.net/preview/ambiance/">WordPress theme</a> at <a href="http://www.freewpthemes.net/">Free WordPress Themes</a>.</p>
				<h2>Sample Tags</h2>
				<blockquote>
					<p>&#8220;A blockquoted paragraph. In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula.&#8221;</p>
				</blockquote>
				<p>An example of an ordered list:</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
					<li>Phasellus nec erat sit amet nibh pellentesque congue.</li>
					<li>Cras vitae metus aliquam risus pellentesque pharetra.</li>
				</ol>
				<h3>Heading Level 3: Followed by an Unordered List</h3>
				<ul>
					<li>Cras vitae metus aliquam risus pellentesque pharetra.</li>
					<li>Maecenas vitae orci vitae tellus feugiat eleifend.</li>
					<li>Etiam ac tortor eu metus euismod lobortis</li>
				</ul>
			</div>
		</div>                -->
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<!--<div id="sidebar">
		<ul>
			<li id="search">
				<h2>Search</h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Lorem Ipsum</h2>
				<ul>
					<li><a href="#">Fusce dui neque fringilla</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
				</ul>
			</li>
			<li>
				<h2>Volutpat Dolore</h2>
				<ul>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Fusce dui neque fringilla</a></li>
				</ul>
			</li>
		</ul>
	</div>    -->
	<!-- end sidebar -->
</div>
</div>
<!-- end page -->


<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.alerts.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.alerts.css" />
 
<script type="text/javascript">
$(document).ready(function () {
$('.generar').live('click', function(){
        var send_url = $(this).attr('href');
        var this_container = $(this).closest('.flexigrid');
        
        if( confirm( "¿Seguro que desea generar el identificador para este proyecto?" ) )
        {
            $.ajax({
                url: send_url,
                dataType: 'json',
                success: function(data)
                {                    
                    if(data.success)
                    {
                        this_container.find('.ajax_refresh_and_loading').trigger('click');

                        success_message(data.success_message);
                    }
                    else
                    {
                        $error_message(data.error_message);
               
                        
                    }
                }
            });
        }
        
        return false;
    });

$('.notificar_expertos').live('click', function(){
        var send_url = $(this).attr('href');
        var this_container = $(this).closest('.flexigrid');
        
        if( confirm( "¿Seguro que desea notificar a los expertos para la revisión de este proyecto?" ) )
        {
            $.ajax({
                url: send_url,
                dataType: 'json',
                success: function(data)
                {                    
                    if(data.success)
                    {
                        this_container.find('.ajax_refresh_and_loading').trigger('click');

                        success_message(data.success_message);
                    }
                    else
                    {
                        $error_message(data.error_message);
               
                        
                    }
                }
            });
        }
        
        return false;
    });
    
    
    
$('.notificar').live('click', function(){
        var send_url = $(this).attr('href');
        var this_container = $(this).closest('.flexigrid');
        jPrompt('Teclee una sinopsis de los errores encontrados:', '', '¿Seguro que desea notificar al jefe de este proyecto?', function(r)
        {
            var errores=r.replace(/\n/g,'<br>')
            if(errores )
            {                   
                $.ajax({
                    url: send_url,
                    dataType: 'json',
                    type:'post',
                    data:{errores:errores},
                    success: function(data)
                    {                    
                        if(data.success)
                        {
                            this_container.find('.ajax_refresh_and_loading').trigger('click');

                            success_message(data.success_message);
                        }
                        else
                        {
                            $error_message(data.error_message);
                   
                            
                        }
                    }
                });
            }            
        });
       
        
        return false;
    });
    

    
    })
</script>


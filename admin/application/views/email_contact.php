<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						 
					 	<div class="photo rgt">
							<img src="<?php echo base_url() ?>images/profiles/<?php echo $psicologo->foto ?>" height="150" width="100">
						</div>
						
						<h1>
                                               <?php echo $psicologo->nombres_apellidos ?> - <?php echo $psicologo->titulo ?>
						</h1>
						
					<?php $this->load->view('en/'.$form,array('psicologo'=>$psicologo,'sender'=>$sender)) ?>
					</div>
				</div>
							
		</div>			
	</div>	
</div>
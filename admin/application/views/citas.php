<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<?php $this->load->view($this->session->userdata('lang').'/citas_header') ?>
			
						
				<div class="half-column">
					<div class="info">

						<?php $i=0; foreach($citas_first as $cita): ?>
						
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="<?php echo base_url() ?>images/profiles/<?php echo $cita->foto ?>" height="150" width="100">							 
								<a class="standardsButton " href="<?php echo base_url() ?>index.php/appointments/bookwith?id=<?php echo $cita->id_psicologo ?>">Book with me</a>
							</div>
							
							<h4><a href="<?php echo base_url() ?>index.php/appointments/bookwith?id=<?php echo $cita->id_psicologo ?>"><?php echo $cita->nombres_apellidos ?></a></h4>
							
							<h5>  
							<?php echo $cita->titulo ?>
							</h5>  
							  
							<p>  
							Counseling themes: <?php echo $cita->temas_consulta ?>
							<?php if ($cita->therapy_programs==1): ?>
							, and <a class="link small" href="<?php echo base_url() ?>index.php/home/therapy_programs">Therapy Programs <img src="<?php echo base_url() ?>images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $cita->about ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                              
					</div>					 
				</div><!-- FIN COLUMNA1 -->
				<div class="half-column">
					<div class="info">
						
						<?php $i=0; foreach($citas_second as $cita): ?>
						
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="<?php echo base_url() ?>images/profiles/<?php echo $cita->foto ?>" height="150" width="100">							 
								<a class="standardsButton " href="<?php echo base_url() ?>index.php/appointments/bookwith?id=<?php echo $cita->id_psicologo ?>">Book with me</a>
							</div>
							
							<h4><a href="<?php echo base_url() ?>index.php/appointments/bookwith?id=<?php echo $cita->id_psicologo ?>"><?php echo $cita->nombres_apellidos ?></a></h4>
							
							<h5>  
							<?php echo $cita->titulo ?>
							</h5>  
							  
							<p>  
							Counseling themes: <?php echo $cita->temas_consulta ?>, and <a class="link small" href="<?php echo base_url() ?>index.php/home/therapy_programs">Therapy Programs <img src="<?php echo base_url() ?>images/internal-link.png" /></a>  
							</p>  
							  
							<p>  
							"<?php echo $cita->about ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>
                                        

							
                          <?php
                          if($team->customer_service)
                          {
                          	$this->load->view($this->session->userdata('lang').'/customer_services');
                          }                    

                          ?>
					</div>					
				</div>
								
				<div class="clr"></div>
			</div>			
		</div>			
	</div>

<?php get_header()?>

<!-- HEADER BARRA DE MENU FINAL -->

    <!-- CONTEUDO INICIO -->
	
    <div id="wrapper-content">
		<?php wp_head(); ?>
    	
		<!-- CONTEUDO PRINCIPAL INICIO -->
    	<div id="main">
    
      		
      		<div id="slider">
			
       	    	<div id="main-slide">
				
                      <figure id="slide">
						
						<?php 
							static $max = 4;
							static $cs = 0;
						
							query_posts('cat=22');
					
							if ( have_posts() ) : while ( have_posts ()) : the_post();  
								
								$link = get_permalink($post->ID);
								
								if($cs == ($max-1)){
								
									break;
									
								}else{ $descricao = "<font  size='5' ><a style='text-decoration:none;color: white;' href='$link'>".get_the_title()."</a></font> - ".get_the_excerpt();?>	
									
									<?php  the_post_thumbnail(array(500,500),array( 'alt' => $descricao));?> 
									
								<?php $cs++;  ?>
								
							<?php }endwhile ?> 
							
							<?php else: ?>
				
							<?php endif; ?>
								  
	                  </figure>
	
	               <figure id="thumb">
				        
		              <?php static $css = 0;
						    static $t=1;
							query_posts('cat=22');
						
							if ( have_posts() ) : while ( have_posts ()) : the_post();  
							
								if($css == ($max-1)){
								
									break;
									
								}else{ ?>	
									
									<a id = "img<?php echo $t; $t++;?>"><?php the_post_thumbnail(array(115,300));?> </a> 
						
								<?php $css++;  ?>
								
							<?php }endwhile ?> 
							
							<?php else: ?>
				
							<?php endif; ?>
					  
	               </figure>
				   
				</div>
				
            </div>
			
			
            <!--ULTIMAS NOTÍCIAS INÍCIO-->
       	
            <!--NOTICIA 1 INICIO-->
            <div id="newsmain">
               
			   <h1>Últimas Notícias</h1>
			
				<div id="div-content-w">
				
					<div id="div-imagem">
					
						<?php static $ctr = 0;  
						
								query_posts('cat=2');
						
					
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($ctr == $max){ 
									
										break;
										
									}else if ($ctr < ($max-1)) {?>
									
											<div id="post-excerpt-content">
											
										<?php } else { ?>
											<div id="post-excerpt-content2">
											<?php } ?>
												
												<div id="img-espaco">
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(167,300));?></a> 
												</div>

											</div>
												
										<?php $ctr++;?>
											
								<?php endwhile?> 
								
								<?php else: ?>
					
								<?php endif; ?>
					</div>	
					
					<div id="div-titulo">
						
							<?php static $m = 0;  
								query_posts('cat=2');
								
							
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($m == $max){ 
										break;
									}else if ($m < ($max-1)){ ?>
										
											<div id="post-excerpt-content">
								
										<?php }else { ?>
											<div id="post-excerpt-content2">
											<?php } ?>
											
												<h2 id="h2-titulo">	<?php the_title()?></h2>

											</div>
									<?php $m++;?>
									
							<?php endwhile?>
								
							<?php else: ?>
				
							<?php endif; ?>
							
					</div>	
					
					<div id="div-texto">
						
						<?php static $a = 0;  
					
							query_posts('cat=2');
							
							if ( have_posts() ) : while ( have_posts() ) : the_post(); 
							
								if ($a ==  $max){ 
									break;
								}else if ($a < ($max-1)){ ?>
			
										<div id="post-excerpt-content">
										
									<?php }else { ?>
									
										<div id="post-excerpt-content2">
										
										<?php } ?>
											
											<p id="p-texto"><?php echo substr(get_the_excerpt(),0,50)."..."; ?></p>

										</div>
										
										<?php $a++; ?>
										
									<?php endwhile?>
									
									<?php else: ?>
						
									<?php endif; ?>

					</div>
					
					<div id="div-leiamais">
								<?php static $r = 0;  
						
								query_posts('cat=2');
								
							
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($r == $max){ 
										break;
									}else if ($r < ($max-1)){ ?>
									
											<div id="post-excerpt-content">
											
										<?php } else { ?>
										
												<div id="post-excerpt-content2">
												
											<?php }?>
											
												<h2 id="h2-leiamais"><a id="a-leiamais" href="<?php the_permalink(); ?>">LEIA MAIS</a></h2>	

											</div>
											
											<?php $r++ ?>
										
									<?php endwhile?>
										
									<?php else: ?>
						
									<?php endif; ?>
							
					</div>	
					
				</div>
					
			</div>
				
            <div class="clear"></div>   
			<br/>
			<br/>
			<!--ULTIMOS EVENTOS INICIO--> 
			
			 <div id="eventsmain">
               
			   <h1>Últimos Eventos</h1>
			
				<div id="div-content-w">
				
					<div id="div-imagem">
					
						<?php static $w = 0;  
						
								query_posts('cat=5');
						
					
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($w == ($max)){ 
									
										break;
										
									}else if ($w < ($max-1)) {?>
									
											<div id="post-excerpt-content">
											
										<?php } else { ?>
											<div id="post-excerpt-content2">
											<?php } ?>
												
												<div id="img-espaco">
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(167,160));?></a>
												</div>

											</div>
												
										<?php $w++;?>
											
								<?php endwhile?> 
								
								<?php else: ?>
					
								<?php endif; ?>
					</div>	
					
					<div id="div-titulo">
						
							<?php static $x = 0;  
								query_posts('cat=5');
								
							
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($x == $max){ 
										break;
									}else if ($x < ($max-1)){ ?>
										
											<div id="post-excerpt-content">
								
										<?php }else { ?>
											<div id="post-excerpt-content2">
											<?php } ?>
											
												<h2 id="h2-titulo">	<?php the_title()?></h2>

											</div>
									<?php $x++;?>
									
							<?php endwhile?>
								
							<?php else: ?>
				
							<?php endif; ?>
							
					</div>	
					
					<div id="div-texto">
						
						<?php static $y = 0;  
					
							query_posts('cat=5');
							
							if ( have_posts() ) : while ( have_posts() ) : the_post(); 
							
								if ($y == $max){ 
									break;
								}else if ($y < ($max-1)){ ?>
			
										<div id="post-excerpt-content">
										
									<?php }else { ?>
									
										<div id="post-excerpt-content2">
										
										<?php } ?>
											
											<p id="p-texto"><?php echo substr(get_the_excerpt(),0,50)."..."; ?></p>

										</div>
										
										<?php $y++; ?>
										
									<?php endwhile?>
									
									<?php else: ?>
						
									<?php endif; ?>

					</div>
					
					<div id="div-leiamais">
								<?php static $z = 0;  
						
								query_posts('cat=5');
								
							
								if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								
									if ($z == $max){ 
										break;
									}else if ($z < $max-1){ ?>
									
											<div id="post-excerpt-content">
											
										<?php } else { ?>
										
												<div id="post-excerpt-content2">
												
											<?php }?>
											
												<h2 id="h2-leiamais"><a id="a-leiamais" href="<?php the_permalink(); ?>">LEIA MAIS</a></h2>	

											</div>
											
											<?php $z++ ?>
										
									<?php endwhile?>
										
									<?php else: ?>
						
									<?php endif; ?>
							
					</div>	
					
				</div>
					
			</div>
		
			
			<div class="clear"> </div>
			
			
           

          <!--ULTIMOS VIDEOS INICIO-->
          <div id="videosmain">
               <h1>Últimos Vídeos</h1>

					<?php echo apply_filters('the_content', '[tubepress]'); ?>	
				
           	</div>
             <!--ULTIMOS VIDEOS FINAL-->
             <div class="clear"></div>
      </div>   
           
        <!-- CONTEUDO PRINCIPAL FINAL -->
        
        <!-- CONTEUDO LATERAL INICIO -->
		<?php get_sidebar();?>
        <!-- CONTEUDO LATERAL FINAL -->
        
        <div class="clear"></div>
    </div>
	
     <!-- CONTEUDO FINAL -->   

	 
</div>

<!-- INICIO RODAPE -->
<?php get_footer(); ?>
<!-- FINAL RODAPE -->       


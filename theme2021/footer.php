
        <p style="padding: 2px;color:black;">
             
            <?php 
                $result=comicpress_copyright(); 
                                
                
                foreach ( $result as $key => $value )
                {
                    echo "$key = $value <br />";
                }

            ?>
        </p>
        
        <!-- footer -->
			<footer class="w3-container w3-blue w3-padding-64 w3-center w3-opacity">
				
					
                    
						<h2>For Reservations: <span>1-800 123 45 67</span></h2>
						Designed by <a rel="nofollow" href="http://tech999.epizy.com/" target="_blank">Classico</a> 
					    
                        
                    
					              
		        
			</footer>
<!-- / footer -->
		
        <?php wp_footer();?>

</body>
</html>

	
	









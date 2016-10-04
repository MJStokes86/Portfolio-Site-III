


        <div class="form-group">
     	
     	
     
    <?php endif; ?> 

    <?php /* You might want to display this:  
        <p>XHTML: You can use these tags: <?php echo allowed_tags(); ?></p> */ ?> 
		
		
         
        <?php /* Buttons are easier to style than input[type=submit],  
                but you can replace:  
                <button type="submit" name="submit" id="sub">Submit</button> 
                with:  
                <input type="submit" name="submit" id="sub" value="Submit" /> 
                if you like */  
        ?> 

    	
     
    <?php do_action('comment_form', $post->ID); ?> 


	</div>
    </form> 
    </div> 

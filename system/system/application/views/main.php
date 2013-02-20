
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<title>Nice Print Services</title>
	<script type="text/javascript" src="<?=base_url()?>external/js/prototype.js"></script>
	<script type="text/javascript" src="<?=base_url()?>external/js/effects.js"></script>
	<script type="text/javascript" src="<?=base_url()?>external/js/accordion.js"></script>



    
	<script type="text/javascript">
			
		//
		//  In my case I want to load them onload, this is how you do it!
		// 
		Event.observe(window, 'load', loadAccordions, false);
	
		//
		//	Set up all accordions
		//
		function loadAccordions() {
			var topAccordion = new accordion('horizontal_container', {
				classNames : {
					toggle : 'horizontal_accordion_toggle',
					toggleActive : 'horizontal_accordion_toggle_active',
					content : 'horizontal_accordion_content'
				},
				defaultSize : {
					width : 525
				},
				direction : 'horizontal'
			});
			
			var bottomAccordion = new accordion('vertical_container');
			
			var nestedVerticalAccordion = new accordion('vertical_nested_container', {
			  classNames : {
					toggle : 'vertical_accordion_toggle',
					toggleActive : 'vertical_accordion_toggle_active',
					content : 'vertical_accordion_content'
				}
			});
			
			// Open first one
			bottomAccordion.activate($$('#vertical_container .accordion_toggle')[0]);
			
			// Open second one
			topAccordion.activate($$('#horizontal_container .horizontal_accordion_toggle')[2]);
		}
		
	</script>
	
	<!-- CSS -->
	<style type="text/css" >
		
		/*
			Vertical Accordions
		*/
		
		.accordion_toggle {
			display: block;
			height: 30px;
			width: 680px;
			background: url(images/accordion_toggle.jpg) no-repeat top right #a9d06a;
			padding: 0 10px 0 10px;
			line-height: 30px;
			color: #ffffff;
			font-weight: normal;
			text-decoration: none;
			outline: none;
			font-size: 12px;
			color: #000000;
			border-bottom: 1px solid #cde99f;
			cursor: pointer;
			margin: 0 0 0 0;
		}
		
		.accordion_toggle_active {
			background: url(images/accordion_toggle_active.jpg) no-repeat top right #e0542f;
			color: #ffffff;
			border-bottom: 1px solid #f68263;
		}
		
		.accordion_content {
			background-color: #ffffff;
			color: #444444;
			overflow: hidden;
		}
			
			.accordion_content h2 {
				margin: 15px 0 5px 10px;
				color: #0099FF;
			}
			
			.accordion_content p {
				line-height: 150%;
				padding: 5px 10px 15px 10px;
			}
			
		.vertical_accordion_toggle {
			display: block;
			height: 30px;
			width: 600px;
			background: url(images/accordion_toggle.jpg) no-repeat top right #a9d06a;
			padding: 0 10px 0 10px;
			line-height: 30px;
			color: #ffffff;
			font-weight: normal;
			text-decoration: none;
			outline: none;
			font-size: 12px;
			color: #000000;
			border-bottom: 1px solid #cde99f;
			cursor: pointer;
			margin: 0 0 0 0;
		}

		.vertical_accordion_toggle_active {
			background: url(images/accordion_toggle_active.jpg) no-repeat top right #e0542f;
			color: #ffffff;
			border-bottom: 1px solid #f68263;
		}

		.vertical_accordion_content {
			background-color: #ffffff;
			color: #444444;
			overflow: hidden;
		}

			.vertical_accordion_content h2 {
				margin: 15px 0 5px 10px;
				color: #0099FF;
			}

			.vertical_accordion_content p {
				line-height: 150%;
				padding: 5px 10px 15px 10px;
			}
  			
		/*
			Horizontal Accordion
		*/
		
		.horizontal_accordion_toggle {
			/* REQUIRED */
			float: left;	/* This make sure it stays horizontal */
			/* REQUIRED */

			display: block;
			height: 100px;
			width: 30px;
			background: url(images/h_accordion_toggle.jpg) no-repeat top left #a9d06a;
			color: #ffffff;
			text-decoration: none;
			outline: none;
			border-right: 1px solid #cde99f;
			cursor: pointer;
			margin: 0 0 0 0;
		}
		
		.horizontal_accordion_toggle_active {
			background: url(images/h_accordion_toggle_active.jpg) no-repeat top left #e0542f;
			border-right: 1px solid #f68263;
		}
		
		.horizontal_accordion_content {
			/* REQUIRED */
			height: 100px;	/* We need to define a height for the accordion as it stretches the width */
			float: left;	/* This make sure it stays horizontal */
			/* REQUIRED */
			
			overflow: hidden;
			background-color: #ffffff;
			color: #444444;
		}
			
			.horizontal_accordion_content p {
				width: 450px;
				line-height: 150%;
				padding: 5px 10px 15px 10px;
			}
					
					
    /* Container styling*/
    #horizontal_container {
      margin: 20px auto 20px auto;
      width: 680px;   
      height: 100px;    
    }
    
    #vertical_nested_container {
      margin: 20px auto 20px auto;
      width: 620px;
    }

	</style>


</head>

<body>
<center>


<div id="container">
		
    <h1><span><a href="http://localhost/niceprint/">Nice Print Services</a></span> v0.1a</h1>
    
    <p>&nbsp;</p>
        
	<div id="vertical_container" >
	  
	  <h1 class="accordion_toggle"><strong>SAMPLE SCAFFOLDING</strong></h1>
		<div class="accordion_content">   
          <p align="center">Made By:<br>
            Manarang, Paolo Marco<br>
          </p>
	  </div>
    
		<h1 class="accordion_toggle"><strong>Users</strong></h1>
  <div class="accordion_content">
            <div id="horizontal_container" >
              <br>
              <table width="200" border="0">
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/users/scaffolding/add">Insert New Record</a></td>
                </tr>
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/users/scaffolding/view">View Record</a></td>
                </tr>
              </table>
        </div>
	    
      </div>
        
        <h1 class="accordion_toggle"><strong>Materials</strong></h1>
  <div class="accordion_content">
            <div id="horizontal_container" >
              <br>
              <table width="200" border="0">
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/material/scaffolding/add">Insert New Record</a></td>
                </tr>
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/material/scaffolding/view">View Record</a></td>
                </tr>
              </table>
          </div>
      </div>
   	

   	    <h1 class="accordion_toggle"><strong>Services</strong></h1>
	  <div class="accordion_content">
	    <div id="horizontal_container" >
	      <br>
	      <table width="200" border="0">
	        <tr>
	          <td align="center"><a href="<?=base_url()?>index.php/services/scaffolding/add">Insert New Record</a></td>
            </tr>
	        <tr>
	          <td align="center"><a href="<?=base_url()?>index.php/services/scaffolding/view">View Record</a></td>
            </tr>
          </table>
        </div>
	    
      </div>
        
        
        <h1 class="accordion_toggle"><strong>Suppliers</strong></h1>
	  <div class="accordion_content">
	    <div id="horizontal_container" >
	      <br>
  <table width="200" border="0">
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/suppliers/scaffolding/add">Insert New Record</a></td>
                </tr>
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/suppliers/scaffolding/view">View Record</a></td>
                </tr>
              </table>
        </div>
	    
      </div>
		
		
        <h1 class="accordion_toggle"><strong>Quotation</strong></h1>
  <div class="accordion_content">
            <div id="horizontal_container" >
              <br>
              <table width="200" border="0">
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/suppliers/scaffolding/add">Add Quotation</a></td>
                </tr>
                <tr>
                  <td align="center"><a href="<?=base_url()?>index.php/suppliers/scaffolding/view">View Qutation</a></td>
                </tr>
              </table>
            </div>
	    
      </div>       
	  
	  
	  
    </div>

	<div class="page-footer">
		<p>&copy; Copyright 2010 <a href="http://www.stickmanlabs.com"><small>Nice Print Services </small></a></p>
		<p>&nbsp;</p>

	</div>
	
</div>

<script type="text/javascript" >
  
	//
	// You can hide the accordions on page load like this, it maintains accessibility
	//
	// Special thanks go out to Will Shaver @ http://primedigit.com/
	//
	var verticalAccordions = $$('.accordion_toggle');
	verticalAccordions.each(function(accordion) {
		$(accordion.next(0)).setStyle({
		  height: '0px'
		});
	});

	
</script>
	</center>
</body>
</html>

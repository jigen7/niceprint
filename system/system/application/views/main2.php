<link rel="stylesheet" href="<?=base_url()?>external/css/accordion.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>external/css/home.css" type="text/css" />
<script type="text/javascript" src="<?=base_url()?>external/js/accordion.js"/></script>
<script type="text/javascript" src="<?=base_url()?>external/js/effects.js"/></script>
<script type="text/javascript" src="<?=base_url()?>external/js/prototype.js"/></script>
<body>
<center>
<div id="container">		
    <h1 class="accordion_toggle_title"><center><strong>PRODUCT</strong></center></h1>       
	<div id="vertical_container" >
   		<h1 class="accordion_toggle"><center><strong>AUTO</strong></center></h1>
		<div class="accordion_content">   
			<table width="210" border="0">
              <tr><td colspan="2"><b></>MODEL</td></tr>
              <tr><td width="35">&nbsp;</td><td width="165"><b><a href="">Add</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="<>">Update</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Pending</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Approve</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View</a></td></tr>
              <tr><td colspan="2"><b>MULTIPLE SCORING</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Perform Multiple Scoring</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Result</a></td></tr>
              <tr><td colspan="2"><b>SCORECARD</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Scorecard</a></td></tr>
            </table>      
    	</div>
   		<h1 class="accordion_toggle"><center><strong>HOUSING</strong></center></h1>
		<div class="accordion_content">   
			<table width="210" border="0">
              <tr><td colspan="2"><b></>MODEL</td></tr>
              <tr><td width="35">&nbsp;</td><td width="165"><b><a href="">Add</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Update</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Pending</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Approve</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View</a></td></tr>
              <tr><td colspan="2"><b>MULTIPLE SCORING</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Perform Multiple Scoring</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Result</a></td></tr>
              <tr><td colspan="2"><b>SCORECARD</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Scorecard</a></td></tr>
            </table>      
		</div>
   		<h1 class="accordion_toggle"><center><strong>SME</strong></center></h1>
		<div class="accordion_content">   
			<table width="210" border="0">
              <tr><td colspan="2"><b></>MODEL</td></tr>
              <tr><td width="35">&nbsp;</td><td width="165"><b><a href="">Add</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Update</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Pending</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Approve</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View</a></td></tr>
              <tr><td colspan="2"><b>MULTIPLE SCORING</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">Perform Multiple Scoring</a></td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Result</a></td></tr>
              <tr><td colspan="2"><b>SCORECARD</td></tr>
              <tr><td>&nbsp;</td><td><b><a href="">View Scorecard</a></td></tr>
            </table>      
		</div>
	</div>
</div>
</body>
</center>
<div id="horizontal_container" >
    <div id="vertical_nested_container"></div>
    <div id="horizontal_nested_container"></div>  
</div>    
<script type="text/javascript">
		Event.observe(window, 'load', loadAccordions, false);
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
			
			bottomAccordion.activate($$('#vertical_container .accordion_toggle')[0]);
			
			topAccordion.activate($$('#horizontal_container .horizontal_accordion_toggle')[2]);
		}
		var verticalAccordions = $$('.accordion_toggle');
        verticalAccordions.each(function(accordion) {
            $(accordion.next(0)).setStyle({
              height: '0px'
            });
        });		
</script>





	<link rel="stylesheet" type="text/css" href="{$baseurl}css/tooltipster.css" />
    <script type="text/javascript" src="{$baseurl}js/jquery.tooltipster.min.js"></script>
    {literal}
    <script>
        sQuery(document).ready(function() {
            sQuery('.name_job p a').tooltipster();
        });
		sQuery.fn.tooltipster('setDefaults', {
		  position: 'bottom',
		  animation: 'fade',
		   delay: 200,
		   theme: 'tooltipster-scriptolution',
		   touchDevices: true,
		   trigger: 'hover'
		});		

    </script>
    {/literal}
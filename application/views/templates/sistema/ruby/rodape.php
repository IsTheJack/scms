	</div>
	<script src="//oss.maxcdn.com/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<script src="<?php echo base_url('vendor/jquery/jquery-2.1.3.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/MultiLevelPushMenu/jquery.multilevelpushmenu.min.js');?>"></script>
	<script src="<?php echo base_url('vendor/jquery-ui/jquery-ui.min.js'); ?>"></script>

	<script>
		$(document).ready(function(){
			$( '#menu' ).multilevelpushmenu({
				backText: 'Voltar',
				onItemClick: function() {
			        var event = arguments[0],
			            $menuLevelHolder = arguments[1],
			            $item = arguments[2],
			            options = arguments[3];


			        var itemHref = $item.find( 'a:first' ).attr( 'href' );
			        location.href = itemHref;
			    }
			});
		});
	</script>
</body>
</html>
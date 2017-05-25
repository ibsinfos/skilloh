sQuery.ajaxSetup({ 
    'beforeSend': function(xhr) {
        xhr.setRequestHeader("Accept", "text/javascript")
    }
})

$(document).ready( function() {

	if ($('#gig_title').length != 0) {
		updateGigTitleCharsCount();
		$('#gig_title').keyup(function(){
			updateGigTitleCharsCount();
		});
	};
	
	if ($('.extratitle').length != 0) {
		updateExtraTitleCharsCount();
		$('.extratitle').keyup(function(){
			updateExtraTitleCharsCount();
		});
	};
	
	$('input[maxlength],textarea[maxlength]').keyup(function(){
		var max = parseInt($(this).attr('maxlength'));
		if($(this).val().length > max){
			$(this).val($(this).val().substr(0, $(this).attr('maxlength')));
		};
	});	
	function updateGigTitleCharsCount() {
		var used = $('#gig_title').val().length;
		$('.gigtitleused').html(used);
	};
	
	function updateExtraTitleCharsCount() {
		var used = $('#extra1').val().length;
		$('.extra1used').html(used);
		
		used = $('#extra2').val().length;
		$('.extra2used').html(used);
		
		used = $('#extra3').val().length;
		$('.extra3used').html(used);
		
		used = $('#extra4').val().length;
		$('.extra4used').html(used);
		
		used = $('#extra5').val().length;
		$('.extra5used').html(used);
	};
	
	function updateGigDescCharsCount() {
		var used = $('#gig_description').val().length;
		$('.gigdescused').html(used);
	};
	$('a.select-all').click(function() {
		$('a.select-all').addClass('selectedFilter');
		$('a.select-active').removeClass('selectedFilter');
		$('a.select-suspended').removeClass('selectedFilter');
		$('.serviceRecs').each(function(){
			$(this).show();
		});
		return false;
	});
	$('a.select-none').click(function() {
		unselectCheckboxes();
		return false;
	});
	$('a.select-active').click(function() {
		hideAllServices();
		$('a.select-all').removeClass('selectedFilter');
		$('a.select-active').addClass('selectedFilter');
		$('a.select-suspended').removeClass('selectedFilter');
		$('.serviceRecs.approvedRec').each(function(){
			$(this).show();
		});
		return false;
	});
	$('a.select-suspended').click(function() {
		$('a.select-all').removeClass('selectedFilter');
		$('a.select-active').removeClass('selectedFilter');
		$('a.select-suspended').addClass('selectedFilter');
		hideAllServices();
		$('.serviceRecs.suspendedRec').each(function(){
			$(this).show();
		});
		return false;
	});
	$('a.select-read').click(function() {
		unselectCheckboxes();
		$('.myjobcheckbox.read').each(function(){
			$(this).prop('checked', true);
		});
		return false;
	});
	$('a.select-unread').click(function() {
		unselectCheckboxes();
		$('.myjobcheckbox.unread').each(function(){
			$(this).prop('checked', true);
		});
		return false;
	});
	$('.btn-suspend').click(function() {
		if ($('.checkbox:checked').size() > 0) {
			$('#gigs_form').attr('action',base_url+'/manage_gigs?suspend=1');
			$('#gigs_form').submit();
		} else {
			return false;
		}
	});
	$('.btn-activate').click(function() {
		if ($('.checkbox:checked').size() > 0) {
			$('#gigs_form').attr('action',base_url+'/manage_gigs?activate=1');
			$('#gigs_form').submit();
		} else {
			return false;
		}
	});
	$('.btn-delete').click(function() {
		if ($('.checkbox:checked').size() > 0) {
			$('#gigs_form').attr('action',base_url+'/manage_gigs?delete=1');
			$('#gigs_form').submit();
		} else {
			return false;
		}
	});
	function unselectCheckboxes() {
		$('.checkbox').each(function(){
			$(this).prop('checked', false);
		});
	};
	function hideAllServices() {
		$('.serviceRecs').each(function(){
			$(this).hide();
		});
	};
	$('#conversations_quick_navigation').change(function(){
      if ($(this).val() != "Quick navigation") {
        window.location = base_url + '/inbox?' + $(this).val();
      }
    });
})
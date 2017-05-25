{insert name=youtube_key value=a assign=ykey yt=$p.youtube}
<li class="carouselItem">
    <div class="carouselImage">
    	<iframe id="slide_video" class="slide_video" src="//www.youtube.com/embed/{$ykey}" frameborder="0" allowfullscreen></iframe>                                                            
    </div>
</li>
<script>
$(function(){
    $('.bx-prev').click(function(){      
        $('iframe').attr('src', $('iframe').attr('src'));
    });
    $('.bx-next').click(function(){      
        $('iframe').attr('src', $('iframe').attr('src'));
    });
});

</script>
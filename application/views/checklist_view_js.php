<script type="text/javascript">
    $(document).ready(function(){
        $("div.answer > button").click(function(){
            
            $(this).addClass('teal lighten-2');
            $(this).siblings().removeClass('teal lighten-2');
        });
    });
</script>
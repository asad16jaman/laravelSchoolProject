
$(document).ready(function(){
    $( ".create_new_post" ).on( "click", function() {
        var posttype = $(this).data('posttype');
        if(posttype == 'group'){
            $('#create_new_post').find('group_post_tab').trigger('click');
        }
    });
});
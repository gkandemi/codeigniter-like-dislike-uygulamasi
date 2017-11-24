/**
 * Created by gkandemir
 * User: gkandemir
 */

$(document).ready(function(){

    $(".likeBtn").click(function(){
        var data_id = $(this).attr("data-id");

        $.post("http://localhost/like_dislike/oyla", {post_id : data_id, vote_status : 1}, function(resp){
            alert(resp);
        })


    })

    $(".dislikeBtn").click(function(){
        var data_id = $(this).attr("data-id");

        $.post("http://localhost/like_dislike/oyla", {post_id : data_id, vote_status : -1}, function(resp){
            alert(resp);
        })
    })

})

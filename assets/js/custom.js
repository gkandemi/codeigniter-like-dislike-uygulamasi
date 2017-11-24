/**
 * Created by gkandemir
 * User: gkandemir
 */

$(document).ready(function(){

    $(".post_list").on("click", ".likeBtn", function(){

        var data_id = $(this).attr("data-id");

        $.post("http://localhost/like_dislike/oyla", {post_id : data_id, vote_status : 1}, function(resp){
            $(".post_list").html(resp);
        })
    })

    $(".post_list").on("click", ".dislikeBtn", function(){

        var data_id = $(this).attr("data-id");

        $.post("http://localhost/like_dislike/oyla", {post_id : data_id, vote_status : -1}, function(resp){
            $(".post_list").html(resp);
        })
    })

})

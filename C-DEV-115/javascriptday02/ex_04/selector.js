// $('document').ready(function() {
//     $("a[target!='_blank']").css('opacity', '50%');
// })

$.get("https://api.github.com/users/blacky-yg", function(data, status){
    console.log(data);
});

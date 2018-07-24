 //Load data o page load
    function loadData() {
        $.ajax({
            type: "GET",
            url: "post_base.php?command=load",
            success: function(data) {
                //console.log(data);
                $('tbody').html(data);
            }
        });
    } 
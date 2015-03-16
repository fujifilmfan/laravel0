var main = function() {
    var type = "";
    var brewery = "";
    var state = "";
    var province = "";
    var country = "";

    // Change dropdown menu labels to selected items              
    $(".dropdown-menu li a").click(function() {
        $(this).parents(".btn-group").find(".selection").text($(this).text());

        var selectedValue = $(this).text();

        // Use .attr() or .prop() ?
        // selectedCategory is based on the class assignments of the dropdown items
        var selectedCategory = $(this).attr("class");
        console.log("selectedValue: " + selectedValue);
        console.log("selectedCategory: " + selectedCategory);

        switch (selectedCategory) {
            case 'beertype':
            type = selectedValue;
            break;
            case 'brewery':
            brewery = selectedValue;
            break;
            case 'state':
            state = selectedValue;
            break;
            case 'province':
            province = selectedValue;
            break;
            case 'country':
            country = selectedValue;
            break;
        }

        console.log("type: " + type);
        console.log("brewery: " + brewery);
        console.log("state: " + state);
        console.log("province: " + province);
        console.log("country: " + country);

        $.get( "includes/bottles-query-selections.php", {
            category : selectedCategory,
            type : type,
            brewery : brewery,
            state : state,
            province : province,
            country : country
        },

            function(response)  {
                console.log ("response: \n" + response);
                $(".beerwall").html(response); // server response
            }
        );
    });
};

$(document).ready(main); 
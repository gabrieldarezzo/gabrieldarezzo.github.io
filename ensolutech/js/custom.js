jQuery(document).ready(function() {
    
    // define our variables
    var fullHeightsidebar = 0;
    
    // create function to calculate ideal height values
    function calcHeights() {
        
        // set height of main columns
        fullHeightsidebar = jQuery(window).height() - jQuery("#header").outerHeight();
        jQuery("#sidebar").height(fullHeightsidebar);
                                   
    } // end calcHeights function
    
    // run on page load
    calcHeights();
    
    // run on window resize event
    jQuery(window).resize(function() {
        calcHeights();
    });
    
});

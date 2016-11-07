// GLOBAL VARIABLES //
var week7Project = {};

// FUNCTIONS //
/* Check to see whether or not a given blog post has the class the user 
has selected, if it does, fade it in, otherwise, fade it out.
*/
function fadeArticles(selectedClass) {
    $('.main-post.' + selectedClass).fadeIn();
    $('.main-post').not('.main-post.' + selectedClass).fadeOut();
}

// EVENTS //
week7Project.events = function() {
    $('.category').on('click', function(e) {
        $('.category').removeClass('active');
        e.preventDefault();
        /* When the user selects an item from our menu, change the 
        selectedClass variables to the text within that link. Make it 
        all lowercase and remove all spaces. This way when we compare it 
        to our the classes on our blog posts, they will correspond. */
        $(this).addClass('active');
        var selectedClass = $(this).text().toLowerCase().replace(/\s/g,'');
        fadeArticles(selectedClass);
    });
};

week7Project.init = function() {
	// Call Functions
    week7Project.events();
};

// DOCUMENT READY //
$(function() {
	week7Project.init();
});